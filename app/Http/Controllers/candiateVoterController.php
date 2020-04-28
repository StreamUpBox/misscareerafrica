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
    public function store(CreatecandiateVoterRequest $request)
    {
       
        $input = $request->all();
        
       $candidate= candiateVoter::where('phone_number',$input['phone_number'])
        ->where('candidate_id',$input['candidate_id'])->first();
        
        if($candidate){
            Flash::error('You have voted this candidate');
            return redirect()->back();
        }
        $candiateVoter = $this->candiateVoterRepository->create($input);

        Flash::success('Thank you for voting this candidate.');

        return redirect()->back();
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
