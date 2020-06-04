<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use App\Repositories\SessionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class SessionController extends AppBaseController
{
    /** @var  SessionRepository */
    private $sessionRepository;

    public function __construct(SessionRepository $sessionRepo)
    {
        $this->sessionRepository = $sessionRepo;
    }

    /**
     * Display a listing of the Session.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sessions = $this->sessionRepository->paginate(10);

        return view('sessions.index')
            ->with('sessions', $sessions);
    }

    /**
     * Show the form for creating a new Session.
     *
     * @return Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created Session in storage.
     *
     * @param CreateSessionRequest $request
     *
     * @return Response
     */
    public function store(CreateSessionRequest $request)
    {
        $input = $request->all();

        if ($request->file('image')) {
            $path = $request->file('image')->storePublicly('public');
            $image = env('APP_URL') . Storage::url($path);
            $input['image']=$image?$image:'-';
          }else{
            $input['image']='-';
        }
        if ($request->file('top_selected_image')) {
            $path = $request->file('top_selected_image')->storePublicly('public');
            $top_selected_image = env('APP_URL') . Storage::url($path);
            $input['top_selected_image']=$top_selected_image?$top_selected_image:'-';
          }else{
            $input['top_selected_image']='-';
        }

        if ($request->file('voting_candidate_image')) {
            $path = $request->file('voting_candidate_image')->storePublicly('public');
            $voting_candidate_image = env('APP_URL') . Storage::url($path);
            $input['voting_candidate_image']=$voting_candidate_image?$voting_candidate_image:'-';
          }else{
            $input['voting_candidate_image']='-';
        }
        

        $session = $this->sessionRepository->create($input);

        Flash::success('Session saved successfully.');

        if(Auth::check){
            return redirect(route('sessions.index'));
        }else {
            return redirect()->to('/');
        }
       
    }

    /**
     * Display the specified Session.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error('Session not found');

            return redirect(route('sessions.index'));
        }

        return view('sessions.show')->with('session', $session);
    }

    public function currentSession(){
        $session = Session::where('is_current_applying',1)->where('is_voting_open',0)->first();
        return $this->sendResponse($session?$session->toArray():[], 'Session saved successfully');
    }

    public function listSessions(){
        $session = Session::where('is_current_applying',0)->orderBy('numbering', 'ASC')->get();

        return $this->sendResponse(count($session) > 0?$session->toArray():[], 'Session saved successfully');
    }

    /**
     * Show the form for editing the specified Session.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error('Session not found');

             return redirect(route('sessions.index'));
        }

        return view('sessions.edit')->with('session', $session);
    }

    /**
     * Update the specified Session in storage.
     *
     * @param int $id
     * @param UpdateSessionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSessionRequest $request)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error('Session not found');

            return redirect(route('sessions.index'));
        }

        $input = $request->all();
        //\Log::info($input);

        if ($request->file('image')) {
            $path = $request->file('image')->storePublicly('public');
            $image = env('APP_URL') . Storage::url($path);
            $input['image']=$image?$image:'-';
          }else{
            $input['image']=$session->image;
        }
        if ($request->file('top_selected_image')) {
            $path = $request->file('top_selected_image')->storePublicly('public');
            $top_selected_image = env('APP_URL') . Storage::url($path);
            $input['top_selected_image']=$top_selected_image?$top_selected_image:'-';
          }else{
            $input['top_selected_image']=$session->top_selected_image;
        }

        if ($request->file('voting_candidate_image')) {
            $path = $request->file('voting_candidate_image')->storePublicly('public');
            $voting_candidate_image = env('APP_URL') . Storage::url($path);
            $input['voting_candidate_image']=$voting_candidate_image?$voting_candidate_image:'-';
          }else{
            $input['voting_candidate_image']=$session->voting_candidate_image;;
        }
        

        $session = $this->sessionRepository->update($input, $id);

        Flash::success('Session updated successfully.');

        return redirect(route('sessions.index'));
    }

    /**
     * Remove the specified Session from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error('Session not found');

            return redirect(route('sessions.index'));
        }

        $this->sessionRepository->delete($id);

        Flash::success('Session deleted successfully.');

        return redirect(route('sessions.index'));
    }

    
   
}
