<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGallariesAPIRequest;
use App\Http\Requests\API\UpdateGallariesAPIRequest;
use App\Models\Gallaries;
use App\Repositories\GallariesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class GallariesController
 * @package App\Http\Controllers\API
 */

class GallariesAPIController extends AppBaseController
{
    /** @var  GallariesRepository */
    private $gallariesRepository;

    public function __construct(GallariesRepository $gallariesRepo)
    {
        $this->gallariesRepository = $gallariesRepo;
    }

    /**
     * Display a listing of the Gallaries.
     * GET|HEAD /gallaries
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $gallaries = $this->gallariesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($gallaries->toArray(), 'Gallaries retrieved successfully');
    }

    /**
     * Store a newly created Gallaries in storage.
     * POST /gallaries
     *
     * @param CreateGallariesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateGallariesAPIRequest $request)
    {
        $input = $request->all();

        $gallaries = $this->gallariesRepository->create($input);

        return $this->sendResponse($gallaries->toArray(), 'Gallaries saved successfully');
    }

    /**
     * Display the specified Gallaries.
     * GET|HEAD /gallaries/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Gallaries $gallaries */
        $gallaries = $this->gallariesRepository->find($id);

        if (empty($gallaries)) {
            return $this->sendError('Gallaries not found');
        }

        return $this->sendResponse($gallaries->toArray(), 'Gallaries retrieved successfully');
    }

    /**
     * Update the specified Gallaries in storage.
     * PUT/PATCH /gallaries/{id}
     *
     * @param int $id
     * @param UpdateGallariesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGallariesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Gallaries $gallaries */
        $gallaries = $this->gallariesRepository->find($id);

        if (empty($gallaries)) {
            return $this->sendError('Gallaries not found');
        }

        $gallaries = $this->gallariesRepository->update($input, $id);

        return $this->sendResponse($gallaries->toArray(), 'Gallaries updated successfully');
    }

    /**
     * Remove the specified Gallaries from storage.
     * DELETE /gallaries/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Gallaries $gallaries */
        $gallaries = $this->gallariesRepository->find($id);

        if (empty($gallaries)) {
            return $this->sendError('Gallaries not found');
        }

        $gallaries->delete();

        return $this->sendResponse($id, 'Gallaries deleted successfully');
    }
}
