<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecandiateVoterRequest;
use App\Http\Requests\UpdatecandiateVoterRequest;
use App\Repositories\candiateVoterRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\candiateVoter;
use Illuminate\Http\Request;
use Flash;
use Response;
use Validator;


class candiateVoterController extends AppBaseController
{
    /** @var  candiateVoterRepository */
    private $candiateVoterRepository;

    public function __construct(candiateVoterRepository $candiateVoterRepo)
    {
        $this->candiateVoterRepository = $candiateVoterRepo;
    }

    /**
     * Display a listing of the candiateVoter.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $candiateVoters = $this->candiateVoterRepository->paginate(10);

        return view('candiate_voters.index')
            ->with('candiateVoters', $candiateVoters);
    }

    /**
     * Show the form for creating a new candiateVoter.
     *
     * @return Response
     */
    public function create()
    {
        return view('candiate_voters.create');
    }

    /**
     * Store a newly created candiateVoter in storage.
     *
     * @param CreatecandiateVoterRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
       
        $input = $request->all();
        
        $this->validate($request,[
            'email' => ['required'],
        ]);

        $info=explode('@',$input['email'])[0];
        if(isset($info) && $info=='info'){
            Flash::error('Info email ['.$input['email'].'] does not allowed, Please try another email!');
            return redirect()->back();
        }
        $response=$this->emailValidation($input['email']);

        if(isset($response{'message'}) && $response{'message'}=="This feature is unavailable please contact support."){
            Flash::error('This feature is unavailable please contact support.');
            return redirect()->back();
        }

         if(isset($response{'result'}) && $response{'result'}=='undeliverable'){
            Flash::error('Invalid Email Address, Please try another email!');
            return redirect()->back();

         }

       $candidate= candiateVoter::where('phone_number',$input['email'])
        ->where('candidate_id',$input['candidate_id'])->first();
        
        if($candidate){
            Flash::error('You have voted this candidate');
            return redirect()->back();
        }
        $input['phone_number']=$input['email'];
        $candiateVoter = $this->candiateVoterRepository->create($input);

        Flash::success('Thank you for voting this candidate.');

        return redirect()->back();
    }
    

    function emailValidation($email) {
        $params = array(
            "address" => $email
        );
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, 'api:b251faeb94e70061b3ad5dc2be993e4f-65b08458-84bd192b');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v4/address/validate');
        $result = curl_exec($ch);
        curl_close($ch);
      
        return  json_decode($result, true);
      }
      

  

    /**
     * Display the specified candiateVoter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return view('candiate_voters.create')->with('id',$id);
        // $candiateVoter = $this->candiateVoterRepository->find($id);

        // if (empty($candiateVoter)) {
        //     Flash::error('Candiate Voter not found');

        //     return redirect(route('candiateVoters.index'));
        // }

        // return view('candiate_voters.show')->with('candiateVoter', $candiateVoter);
    }

    /**
     * Show the form for editing the specified candiateVoter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $candiateVoter = $this->candiateVoterRepository->find($id);

        if (empty($candiateVoter)) {
            Flash::error('Candiate Voter not found');

            return redirect(route('candiateVoters.index'));
        }

        return view('candiate_voters.edit')->with('candiateVoter', $candiateVoter);
    }

    /**
     * Update the specified candiateVoter in storage.
     *
     * @param int $id
     * @param UpdatecandiateVoterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecandiateVoterRequest $request)
    {
        $candiateVoter = $this->candiateVoterRepository->find($id);

        if (empty($candiateVoter)) {
            Flash::error('Candiate Voter not found');

            return redirect(route('candiateVoters.index'));
        }

        $candiateVoter = $this->candiateVoterRepository->update($request->all(), $id);

        Flash::success('Candiate Voter updated successfully.');

        return redirect(route('candiateVoters.index'));
    }

    /**
     * Remove the specified candiateVoter from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $candiateVoter = $this->candiateVoterRepository->find($id);

        if (empty($candiateVoter)) {
            Flash::error('Candiate Voter not found');

            return redirect(route('candiateVoters.index'));
        }

        $this->candiateVoterRepository->delete($id);

        Flash::success('Candiate Voter deleted successfully.');

        return redirect(route('candiateVoters.index'));
    }
}
