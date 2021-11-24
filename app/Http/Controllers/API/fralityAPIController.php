<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatefralityAPIRequest;
use App\Http\Requests\API\UpdatefralityAPIRequest;
use App\Models\frality;
use App\Repositories\fralityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class fralityController
 * @package App\Http\Controllers\API
 */

class fralityAPIController extends AppBaseController
{
    /** @var  fralityRepository */
    private $fralityRepository;

    public function __construct(fralityRepository $fralityRepo)
    {
        $this->fralityRepository = $fralityRepo;
    }

    /**
     * Display a listing of the frality.
     * GET|HEAD /fralities
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $fralities = $this->fralityRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($fralities->toArray(), 'Fralities retrieved successfully');
    }

    /**
     * Store a newly created frality in storage.
     * POST /fralities
     *
     * @param CreatefralityAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatefralityAPIRequest $request)
    {
        $input = $request->all();

        $frality = $this->fralityRepository->create($input);

        return $this->sendResponse($frality->toArray(), 'Frality saved successfully');
    }

    /**
     * Display the specified frality.
     * GET|HEAD /fralities/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var frality $frality */
        $frality = frality::where('patientNo', $id)->first();///cnsePilesy

        if (empty($frality)) {
            return $this->sendError('Frality not found');
        }

        return $this->sendResponse($frality->toArray(), 'Frality retrieved successfully');
    }

    /**
     * Update the specified frality in storage.
     * PUT/PATCH /fralities/{id}
     *
     * @param int $id
     * @param UpdatefralityAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefralityAPIRequest $request)
    {
        $input = $request->all();

        /** @var frality $frality */
        $frality = $this->fralityRepository->find($id);

        if (empty($frality)) {
            return $this->sendError('Frality not found');
        }

        $frality = $this->fralityRepository->update($input, $id);

        return $this->sendResponse($frality->toArray(), 'frality updated successfully');
    }

    /**
     * Remove the specified frality from storage.
     * DELETE /fralities/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var frality $frality */
        $frality = $this->fralityRepository->find($id);

        if (empty($frality)) {
            return $this->sendError('Frality not found');
        }

        $frality->delete();

        return $this->sendSuccess('Frality deleted successfully');
    }
}
