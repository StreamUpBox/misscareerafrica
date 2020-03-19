<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Repositories\CandidateRepository;
use App\Http\Controllers\AppBaseController;
use App\Mail\NotifyCandidadte;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Mail;
use Response;
use App\Models\Session;
use App\Models\Candidate;
use App\Models\Device;
use Illuminate\Support\Facades\Storage;
use Log;
use Illuminate\Support\Facades\Auth;
use DataTables;
use GeoIP;
use Location;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use App\Models\candiateVoter;

class CandidateController extends AppBaseController
{

    /** @var  CandidateRepository */
    private $candidateRepository;

    public function __construct(CandidateRepository $candidateRepo)
    {
        $this->candidateRepository = $candidateRepo;
    }

    /**
     * Display a listing of the Candidate.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function showCandidate($id){
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
           
            return redirect('selected-candidates');
        }
        $v=candiateVoter::where('candidate_id', $candidate->id)->count();
        $candidate->votes=$candidate->votes+$v;
        return view('candidate-info')->with('candidate', $candidate);
    }

    public function showPastCandidate($id){
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
           
            return redirect('past-candidates');
        }
        // $v=candiateVoter::where('candidate_id', $candidate->id)->count();
        // $candidate->votes=$candidate->votes+$v;
        return view('pastcandidateinfo')->with('candidate', $candidate);
    }
    //
    public function index(Request $request)
    {
        $candidates = $this->candidateRepository->paginate(10);
        

        return view('candidates.index')
            ->with('candidates', $candidates);
    }

    /**
     * Show the form for creating a new Candidate.
     *
     * @return Response
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created Candidate in storage.
     *
     * @param CreateCandidateRequest $request
     *
     * @return Response
     */
    public function store(CreateCandidateRequest $request)
    {
        $input = $request->all();
        $request['session_id']=Session::where('is_current_applying',1)->first();
        $candidate = $this->candidateRepository->create($input);

        Flash::success('Candidate saved successfully.');


        if(Auth::check()){
            return redirect(route('candidates.index'));
        }else {
            return redirect()->to('/');
        }
    }


    
    private function saveNewDevice($candidate_id)
    {
       // Chrome, IE, Safari, Firefox, ...
       $agent = new Agent();
       $browser = $agent->browser();
       // Ubuntu, Windows, OS X, ...
        $platform = $agent->platform();
        $dvs = $agent->device();
       // Log::info(json_encode(GeoIP::getLocation(request()->ip())->toArray()));
       $data=[
        'last_signin' => Carbon::now()->toDateTimeString(),
        'ip_address' => request()->ip(),
        'browser_login' => $agent->browser(),
        'browser_version' => $agent->version($browser),
        'device_login' => $agent->platform(),
        'device_version' => $agent->version($platform),
        'device' => $dvs,
        'current_location' => json_encode(GeoIP::getLocation(request()->ip())->toArray()),
        'language' =>  null,
        'root' => $agent->robot(),
        'https' =>request()->server('HTTP_USER_AGENT'),
        'candidate_id'=>$candidate_id
       ];
       Log::info($data);
       return Device::create($data);
    }

    public function candidateApplying(CreateCandidateRequest $request)
    {
        $input = $request->all();

        $input['session_id']=Session::where('is_current_applying',1)->first()->id;
        $input['is_selected']=0;
        $input['votes']=0;

        if ($request->file('profile')) {
            $path = $request->file('profile')->storePublicly('public');
            $profile = env('APP_URL') . Storage::url($path);
            $input['profile']=$profile?$profile:'-';
          }else{
 $input['profile']='-';
}

        $candidate = $this->candidateRepository->create($input);
        //TODO: send email;
        Mail::to( $request->email)->send(new NotifyCandidadte($request->fname));
        return $this->sendResponse($candidate->toArray(), 'Miss Career Africa is pleased you dared to apply,Thank you!');
    }

    public function votes(Request $request)
    {
        $candidate = $this->candidateRepository->find($request['id']);

        if (empty($candidate)) {
            return $this->sendResponse([],'No candidates found!');
        }
       
        $location = GeoIP::getLocation(request()->ip());
        if(isset($location)){
        $device=Device::where('ip_address',request()->ip())->first();
            // if($device){
            //     return $this->sendResponse($candidate->toArray(), 'Miss Career Africa is pleased you dared to apply,Thank you!');
            // }
        $this->saveNewDevice($request['id']);
        }
        

        $votes=$candidate->votes+1;
        $candidate = $this->candidateRepository->update(['votes'=> $votes], $request['id']);
        return $this->sendResponse($candidate->toArray(), 'Miss Career Africa is pleased you dared to apply,Thank you!');
    }
    //votes
    /**
     * Display the specified Candidate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }

        return view('candidates.show')->with('candidate', $candidate);
    }

    function sortDataDesc($data,$sortedKey){
        $sortedKeyArray = array();
        foreach ($data as $key => $row)
        {
            $sortedKeyArray[$key] = $row[$sortedKey];
        }
        return array_multisort($sortedKeyArray, SORT_DESC, $data);
    }
//

    public function listSelectedCandidates(){
        $candidates =[];
        
        $session =    Session::where('is_voting_open',1)->first();
        if($session){
            
            foreach(Candidate::where('is_selected',1)
            ->where('session_id',$session->id)
            ->orderBy('votes', 'DESC')->get() as $cand){
           $v=candiateVoter::where('candidate_id', $cand->id)->count();
            $cand->votes=$cand->votes+$v;
            $candidates[]=$cand;
            }
        }

        return $this->sendResponse(count($candidates) > 0?$candidates:[], 'List Selected Candidates');
    }

    public function pastCandidates(){
        $candidates =[];
        $session =    Session::where('is_voting_open',1)->first();
            foreach(Candidate::where('is_selected',1)
            ->where('session_id','!=',$session->id)
            ->orderBy('votes', 'DESC')->get() as $cand){
           $v=candiateVoter::where('candidate_id', $cand->id)->count();
            $cand->votes=$cand->votes+$v;
            $candidates[]=$cand;
            }
        
        return view('past-candidates')->with('candidates', $candidates);
    }
    /**
     * Show the form for editing the specified Candidate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }

        return view('candidates.edit')->with('candidate', $candidate);
    }

    /**
     * Update the specified Candidate in storage.
     *
     * @param int $id
     * @param UpdateCandidateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCandidateRequest $request)
    {
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }
        $input = $request->all();

        if ($request->file('profile')) {
            $path = $request->file('profile')->storePublicly('public');
            $profile = env('APP_URL') . Storage::url($path);
            $input['profile']=$profile?$profile:$candidate->profile;
          }else{
            $input['profile']=$candidate->profile;
            }
         

        $candidate = $this->candidateRepository->update($input, $id);

        Flash::success('Candidate updated successfully.');

        return redirect(route('candidates.index'));
    }

    /**
     * Remove the specified Candidate from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }

        $this->candidateRepository->delete($id);

        Flash::success('Candidate deleted successfully.');

        return redirect(route('candidates.index'));
    }
}
