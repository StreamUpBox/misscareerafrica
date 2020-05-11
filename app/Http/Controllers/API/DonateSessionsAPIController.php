<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDonateSessionsAPIRequest;
use App\Http\Requests\API\UpdateDonateSessionsAPIRequest;
use App\Models\DonateSessions;
use App\Repositories\DonateSessionsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DonateSessionsController
 * @package App\Http\Controllers\API
 */

class DonateSessionsAPIController extends AppBaseController
{
    /** @var  DonateSessionsRepository */
    private $donateSessionsRepository;

    public function __construct(DonateSessionsRepository $donateSessionsRepo)
    {
        $this->donateSessionsRepository = $donateSessionsRepo;
    }

    /**
     * Display a listing of the DonateSessions.
     * GET|HEAD /donateSessions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $donateSessions = $this->donateSessionsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($donateSessions->toArray(), 'Donate Sessions retrieved successfully');
    }

    /**
     * Store a newly created DonateSessions in storage.
     * POST /donateSessions
     *
     * @param CreateDonateSessionsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDonateSessionsAPIRequest $request)
    {
        $input = $request->all();

        $donateSessions = $this->donateSessionsRepository->create($input);

        return $this->sendResponse($donateSessions->toArray(), 'Donate Sessions saved successfully');
    }

    /**
     * Display the specified DonateSessions.
     * GET|HEAD /donateSessions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DonateSessions $donateSessions */
        $donateSessions = $this->donateSessionsRepository->find($id);

        if (empty($donateSessions)) {
            return $this->sendError('Donate Sessions not found');
        }

        return $this->sendResponse($donateSessions->toArray(), 'Donate Sessions retrieved successfully');
    }

    /**
     * Update the specified DonateSessions in storage.
     * PUT/PATCH /donateSessions/{id}
     *
     * @param int $id
     * @param UpdateDonateSessionsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDonateSessionsAPIRequest $request)
    {
        $input = $request->all();

        /** @var DonateSessions $donateSessions */
        $donateSessions = $this->donateSessionsRepository->find($id);

        if (empty($donateSessions)) {
            return $this->sendError('Donate Sessions not found');
        }

        $donateSessions = $this->donateSessionsRepository->update($input, $id);

        return $this->sendResponse($donateSessions->toArray(), 'DonateSessions updated successfully');
    }

    /**
     * Remove the specified DonateSessions from storage.
     * DELETE /donateSessions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DonateSessions $donateSessions */
        $donateSessions = $this->donateSessionsRepository->find($id);

        if (empty($donateSessions)) {
            return $this->sendError('Donate Sessions not found');
        }

        $donateSessions->delete();

        return $this->sendResponse($id, 'Donate Sessions deleted successfully');
    }
}
