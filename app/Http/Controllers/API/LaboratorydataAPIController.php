<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLaboratorydataAPIRequest;
use App\Http\Requests\API\UpdateLaboratorydataAPIRequest;
use App\Models\Laboratorydata;
use App\Repositories\LaboratorydataRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class LaboratorydataController
 * @package App\Http\Controllers\API
 */

class LaboratorydataAPIController extends AppBaseController
{
    /** @var  LaboratorydataRepository */
    private $laboratorydataRepository;

    public function __construct(LaboratorydataRepository $laboratorydataRepo)
    {
        $this->laboratorydataRepository = $laboratorydataRepo;
    }

    /**
     * Display a listing of the Laboratorydata.
     * GET|HEAD /laboratorydatas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $laboratorydatas = $this->laboratorydataRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($laboratorydatas->toArray(), 'Laboratorydatas retrieved successfully');
    }

    /**
     * Store a newly created Laboratorydata in storage.
     * POST /laboratorydatas
     *
     * @param CreateLaboratorydataAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLaboratorydataAPIRequest $request)
    {
        $input = $request->all();
        $laboratorydata = $this->laboratorydataRepository->create($input);

        return $this->sendResponse($laboratorydata->toArray(), 'Laboratorydata saved successfully');
    }

    /**
     * Display the specified Laboratorydata.
     * GET|HEAD /laboratorydatas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Laboratorydata $laboratorydata */
        $laboratorydata = $this->laboratorydataRepository->find($id);

        if (empty($laboratorydata)) {
            return $this->sendError('Laboratorydata not found');
        }

        return $this->sendResponse($laboratorydata->toArray(), 'Laboratorydata retrieved successfully');
    }

    /**
     * Update the specified Laboratorydata in storage.
     * PUT/PATCH /laboratorydatas/{id}
     *
     * @param int $id
     * @param UpdateLaboratorydataAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLaboratorydataAPIRequest $request)
    {
        $input = $request->all();

        /** @var Laboratorydata $laboratorydata */
        $laboratorydata = $this->laboratorydataRepository->find($id);

        if (empty($laboratorydata)) {
            return $this->sendError('Laboratorydata not found');
        }

        $laboratorydata = $this->laboratorydataRepository->update($input, $id);

        return $this->sendResponse($laboratorydata->toArray(), 'Laboratorydata updated successfully');
    }

    /**
     * Remove the specified Laboratorydata from storage.
     * DELETE /laboratorydatas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Laboratorydata $laboratorydata */
        $laboratorydata = $this->laboratorydataRepository->find($id);

        if (empty($laboratorydata)) {
            return $this->sendError('Laboratorydata not found');
        }

        $laboratorydata->delete();

        return $this->sendSuccess('Laboratorydata deleted successfully');
    }
}
