<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCrownedAPIRequest;
use App\Http\Requests\API\UpdateCrownedAPIRequest;
use App\Models\Crowned;
use App\Repositories\CrownedRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CrownedController
 * @package App\Http\Controllers\API
 */

class CrownedAPIController extends AppBaseController
{
    /** @var  CrownedRepository */
    private $crownedRepository;

    public function __construct(CrownedRepository $crownedRepo)
    {
        $this->crownedRepository = $crownedRepo;
    }

    /**
     * Display a listing of the Crowned.
     * GET|HEAD /crowneds
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $crowneds = $this->crownedRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($crowneds->toArray(), 'Crowneds retrieved successfully');
    }

    /**
     * Store a newly created Crowned in storage.
     * POST /crowneds
     *
     * @param CreateCrownedAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCrownedAPIRequest $request)
    {
        $input = $request->all();

        $crowned = $this->crownedRepository->create($input);

        return $this->sendResponse($crowned->toArray(), 'Crowned saved successfully');
    }

    /**
     * Display the specified Crowned.
     * GET|HEAD /crowneds/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Crowned $crowned */
        $crowned = $this->crownedRepository->find($id);

        if (empty($crowned)) {
            return $this->sendError('Crowned not found');
        }

        return $this->sendResponse($crowned->toArray(), 'Crowned retrieved successfully');
    }

    /**
     * Update the specified Crowned in storage.
     * PUT/PATCH /crowneds/{id}
     *
     * @param int $id
     * @param UpdateCrownedAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCrownedAPIRequest $request)
    {
        $input = $request->all();

        /** @var Crowned $crowned */
        $crowned = $this->crownedRepository->find($id);

        if (empty($crowned)) {
            return $this->sendError('Crowned not found');
        }

        $crowned = $this->crownedRepository->update($input, $id);

        return $this->sendResponse($crowned->toArray(), 'Crowned updated successfully');
    }

    /**
     * Remove the specified Crowned from storage.
     * DELETE /crowneds/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Crowned $crowned */
        $crowned = $this->crownedRepository->find($id);

        if (empty($crowned)) {
            return $this->sendError('Crowned not found');
        }

        $crowned->delete();

        return $this->sendResponse($id, 'Crowned deleted successfully');
    }
}
