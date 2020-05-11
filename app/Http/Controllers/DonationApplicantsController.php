<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDonationApplicantsRequest;
use App\Http\Requests\UpdateDonationApplicantsRequest;
use App\Repositories\DonationApplicantsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class DonationApplicantsController extends AppBaseController
{
    /** @var  DonationApplicantsRepository */
    private $donationApplicantsRepository;

    public function __construct(DonationApplicantsRepository $donationApplicantsRepo)
    {
        $this->donationApplicantsRepository = $donationApplicantsRepo;
    }

    /**
     * Display a listing of the DonationApplicants.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $donationApplicants = $this->donationApplicantsRepository->paginate(10);

        return view('donation_applicants.index')
            ->with('donationApplicants', $donationApplicants);
    }

    /**
     * Show the form for creating a new DonationApplicants.
     *
     * @return Response
     */
    public function create()
    {
        return view('donation_applicants.create');
    }

    /**
     * Store a newly created DonationApplicants in storage.
     *
     * @param CreateDonationApplicantsRequest $request
     *
     * @return Response
     */
    public function store(CreateDonationApplicantsRequest $request)
    {
        $input = $request->all();

        $request->validate([
            'upload_your_profile_picture' => 'required|image|mimes:jpeg,png,jpg',
            'attach_business_plan' => 'required|mimes:pdf',
        ]);

        if ($request->file('upload_your_profile_picture')) {
            $path = $request->file('upload_your_profile_picture')->storePublicly('public');
            $image = env('APP_URL') . Storage::url($path);
            $input['upload_your_profile_picture']=$image;
          }else{
            Flash::error('Upload Your Profile');
            }

            if ($request->file('attach_business_plan')) {
                $path = $request->file('attach_business_plan')->storePublicly('public');
                $pdf = env('APP_URL') . Storage::url($path);
                $input['attach_business_plan']=$pdf;
              }else{
                Flash::error('Attach Business Plan');
                }


        $donationApplicants = $this->donationApplicantsRepository->create($input);

        Flash::success('Application submitted successfully.');
        return back()
        ->with('success','Application submitted successfully.');
    }

    /**
     * Display the specified DonationApplicants.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $donationApplicants = $this->donationApplicantsRepository->find($id);

        if (empty($donationApplicants)) {
            Flash::error('Donation Applicants not found');

            return redirect(route('donationApplicants.index'));
        }

        return view('donation_applicants.show')->with('donationApplicants', $donationApplicants);
    }

    /**
     * Show the form for editing the specified DonationApplicants.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $donationApplicants = $this->donationApplicantsRepository->find($id);

        if (empty($donationApplicants)) {
            Flash::error('Donation Applicants not found');

            return redirect(route('donationApplicants.index'));
        }

        return view('donation_applicants.edit')->with('donationApplicants', $donationApplicants);
    }

    /**
     * Update the specified DonationApplicants in storage.
     *
     * @param int $id
     * @param UpdateDonationApplicantsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDonationApplicantsRequest $request)
    {
        $donationApplicants = $this->donationApplicantsRepository->find($id);

        if (empty($donationApplicants)) {
            Flash::error('Donation Applicants not found');

            return redirect(route('donationApplicants.index'));
        }

        
        $input = $request->all();

        if ($request->file('upload_your_profile_picture')) {
            $path = $request->file('upload_your_profile_picture')->storePublicly('public');
            $image = env('APP_URL') . Storage::url($path);
            $input['upload_your_profile_picture']=$image?$image:$donationApplicants->upload_your_profile_picture;
          }else{
            $input['upload_your_profile_picture']=$donationApplicants->upload_your_profile_picture;
            }

            if ($request->file('attach_business_plan')) {
                $path = $request->file('attach_business_plan')->storePublicly('public');
                $pdf = env('APP_URL') . Storage::url($path);
                $input['attach_business_plan']=$pdf?$pdf:$donationApplicants->attach_business_plan;
              }else{
                $input['attach_business_plan']=$donationApplicants->attach_business_plan;
                }

        $donationApplicants = $this->donationApplicantsRepository->update($input, $id);

        Flash::success('Updated successfully.');

        return redirect('/donateSessions/'.$donationApplicants->donation_session_id);
    }

    /**
     * Remove the specified DonationApplicants from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $donationApplicants = $this->donationApplicantsRepository->find($id);

        if (empty($donationApplicants)) {
            Flash::error('Donation Applicants not found');

            return redirect(route('donationApplicants.index'));
        }

        $this->donationApplicantsRepository->delete($id);

        Flash::success('Donation Applicants deleted successfully.');

        return redirect(route('donationApplicants.index'));
    }
}
