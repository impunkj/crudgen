<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatesteroidAPIRequest;
use App\Http\Requests\API\UpdatesteroidAPIRequest;
use App\Models\steroid;
use App\Repositories\steroidRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class steroidController
 * @package App\Http\Controllers\API
 */

class steroidAPIController extends AppBaseController
{
    /** @var  steroidRepository */
    private $steroidRepository;

    public function __construct(steroidRepository $steroidRepo)
    {
        $this->steroidRepository = $steroidRepo;
    }

    /**
     * Display a listing of the steroid.
     * GET|HEAD /steroids
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $steroids = $this->steroidRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($steroids->toArray(), 'Steroids retrieved successfully');
    }

    /**
     * Store a newly created steroid in storage.
     * POST /steroids
     *
     * @param CreatesteroidAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatesteroidAPIRequest $request)
    {
        $input = $request->all();

        $steroid = $this->steroidRepository->create($input);

        return $this->sendResponse($steroid->toArray(), 'Steroid saved successfully');
    }

    /**
     * Display the specified steroid.
     * GET|HEAD /steroids/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var steroid $steroid */
        $steroid = $this->steroidRepository->find($id);
        $steroid = steroid::where('patientNo', $id)->first();

        if (empty($steroid)) {
            return $this->sendError('Steroid not found');
        }

        return $this->sendResponse($steroid->toArray(), 'Steroid retrieved successfully');
    }

    /**
     * Update the specified steroid in storage.
     * PUT/PATCH /steroids/{id}
     *
     * @param int $id
     * @param UpdatesteroidAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesteroidAPIRequest $request)
    {
        $input = $request->all();

        /** @var steroid $steroid */
        $steroid = $this->steroidRepository->find($id);

        if (empty($steroid)) {
            return $this->sendError('Steroid not found');
        }

        $steroid = $this->steroidRepository->update($input, $id);

        return $this->sendResponse($steroid->toArray(), 'steroid updated successfully');
    }

    /**
     * Remove the specified steroid from storage.
     * DELETE /steroids/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var steroid $steroid */
        $steroid = $this->steroidRepository->find($id);

        if (empty($steroid)) {
            return $this->sendError('Steroid not found');
        }

        $steroid->delete();

        return $this->sendSuccess('Steroid deleted successfully');
    }
}
