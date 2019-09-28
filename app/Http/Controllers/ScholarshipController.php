<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateScholarshipRequest;
use App\Http\Requests\UpdateScholarshipRequest;
use App\Repositories\ScholarshipRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Mail\NotifyCandidadte;
use Illuminate\Support\Facades\Mail;
use Log;
class ScholarshipController extends AppBaseController
{
    /** @var  ScholarshipRepository */
    private $scholarshipRepository;

    public function __construct(ScholarshipRepository $scholarshipRepo)
    {
        $this->scholarshipRepository = $scholarshipRepo;
    }

    /**
     * Display a listing of the Scholarship.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $scholarships = $this->scholarshipRepository->paginate(10);

        return view('scholarships.index')
            ->with('scholarships', $scholarships);
    }

    /**
     * Show the form for creating a new Scholarship.
     *
     * @return Response
     */
    public function create()
    {
        return view('scholarships.create');
    }

    /**
     * Store a newly created Scholarship in storage.
     *
     * @param CreateScholarshipRequest $request
     *
     * @return Response
     */
    public function store(CreateScholarshipRequest $request)
    {
        $input = $request->all();

        $scholarship = $this->scholarshipRepository->create($input);

        Flash::success('Scholarship saved successfully.');

        return redirect(route('scholarships.index'));
    }

    //

    public function scholarshipApplying(CreateScholarshipRequest $request)
    {
        $input = $request->all();
        $input['i_agree']=$input['i_agree']=='on'?1:0;


        $scholarship = $this->scholarshipRepository->create($input);
        Mail::to($request->email)->send(new NotifyCandidadte($request->fname));
        return $this->sendResponse($scholarship->toArray(), 'Miss Career Africa is pleased you dared to apply,Thank you!');
    }

    /**
     * Display the specified Scholarship.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $scholarship = $this->scholarshipRepository->find($id);

        if (empty($scholarship)) {
            Flash::error('Scholarship not found');

            return redirect(route('scholarships.index'));
        }

        return view('scholarships.show')->with('scholarship', $scholarship);
    }

    /**
     * Show the form for editing the specified Scholarship.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $scholarship = $this->scholarshipRepository->find($id);

        if (empty($scholarship)) {
            Flash::error('Scholarship not found');

            return redirect(route('scholarships.index'));
        }

        return view('scholarships.edit')->with('scholarship', $scholarship);
    }

    /**
     * Update the specified Scholarship in storage.
     *
     * @param int $id
     * @param UpdateScholarshipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateScholarshipRequest $request)
    {
        $scholarship = $this->scholarshipRepository->find($id);

        if (empty($scholarship)) {
            Flash::error('Scholarship not found');

            return redirect(route('scholarships.index'));
        }

        $scholarship = $this->scholarshipRepository->update($request->all(), $id);

        Flash::success('Scholarship updated successfully.');

        return redirect(route('scholarships.index'));
    }

    /**
     * Remove the specified Scholarship from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $scholarship = $this->scholarshipRepository->find($id);

        if (empty($scholarship)) {
            Flash::error('Scholarship not found');

            return redirect(route('scholarships.index'));
        }

        $this->scholarshipRepository->delete($id);

        Flash::success('Scholarship deleted successfully.');

        return redirect(route('scholarships.index'));
    }
}
