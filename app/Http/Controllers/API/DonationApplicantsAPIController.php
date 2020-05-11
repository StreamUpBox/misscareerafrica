<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDonationApplicantsAPIRequest;
use App\Http\Requests\API\UpdateDonationApplicantsAPIRequest;
use App\Models\DonationApplicants;
use App\Repositories\DonationApplicantsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DonationApplicantsController
 * @package App\Http\Controllers\API
 */

class DonationApplicantsAPIController extends AppBaseController
{
    /** @var  DonationApplicantsRepository */
    private $donationApplicantsRepository;

    public function __construct(DonationApplicantsRepository $donationApplicantsRepo)
    {
        $this->donationApplicantsRepository = $donationApplicantsRepo;
    }

    /**
     * Display a listing of the DonationApplicants.
     * GET|HEAD /donationApplicants
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $donationApplicants = $this->donationApplicantsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($donationApplicants->toArray(), 'Donation Applicants retrieved successfully');
    }

    /**
     * Store a newly created DonationApplicants in storage.
     * POST /donationApplicants
     *
     * @param CreateDonationApplicantsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDonationApplicantsAPIRequest $request)
    {
        $input = $request->all();

        $donationApplicants = $this->donationApplicantsRepository->create($input);

        return $this->sendResponse($donationApplicants->toArray(), 'Donation Applicants saved successfully');
    }

    /**
     * Display the specified DonationApplicants.
     * GET|HEAD /donationApplicants/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DonationApplicants $donationApplicants */
        $donationApplicants = $this->donationApplicantsRepository->find($id);

        if (empty($donationApplicants)) {
            return $this->sendError('Donation Applicants not found');
        }

        return $this->sendResponse($donationApplicants->toArray(), 'Donation Applicants retrieved successfully');
    }

    /**
     * Update the specified DonationApplicants in storage.
     * PUT/PATCH /donationApplicants/{id}
     *
     * @param int $id
     * @param UpdateDonationApplicantsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDonationApplicantsAPIRequest $request)
    {
        $input = $request->all();

        /** @var DonationApplicants $donationApplicants */
        $donationApplicants = $this->donationApplicantsRepository->find($id);

        if (empty($donationApplicants)) {
            return $this->sendError('Donation Applicants not found');
        }

        $donationApplicants = $this->donationApplicantsRepository->update($input, $id);

        return $this->sendResponse($donationApplicants->toArray(), 'DonationApplicants updated successfully');
    }

    /**
     * Remove the specified DonationApplicants from storage.
     * DELETE /donationApplicants/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DonationApplicants $donationApplicants */
        $donationApplicants = $this->donationApplicantsRepository->find($id);

        if (empty($donationApplicants)) {
            return $this->sendError('Donation Applicants not found');
        }

        $donationApplicants->delete();

        return $this->sendResponse($id, 'Donation Applicants deleted successfully');
    }
}
