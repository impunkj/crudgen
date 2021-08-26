<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepatientInformationAPIRequest;
use App\Http\Requests\API\UpdatepatientInformationAPIRequest;
use App\Models\patientInformation;
use App\Repositories\patientInformationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class patientInformationController
 * @package App\Http\Controllers\API
 */

class patientInformationAPIController extends AppBaseController
{
    /** @var  patientInformationRepository */
    private $patientInformationRepository;

    public function __construct(patientInformationRepository $patientInformationRepo)
    {
        $this->patientInformationRepository = $patientInformationRepo;
    }

    /**
     * Display a listing of the patientInformation.
     * GET|HEAD /patientInformations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $patientInformations = $this->patientInformationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($patientInformations->toArray(), 'Patient Informations retrieved successfully');
    }

    /**
     * Store a newly created patientInformation in storage.
     * POST /patientInformations
     *
     * @param CreatepatientInformationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepatientInformationAPIRequest $request)
    {
        $input = $request->all();

        $patientInformation = $this->patientInformationRepository->create($input);

        return $this->sendResponse($patientInformation->toArray(), 'Patient Information saved successfully');
    }

    /**
     * Display the specified patientInformation.
     * GET|HEAD /patientInformations/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var patientInformation $patientInformation */
        $patientInformation = $this->patientInformationRepository->find($id);

        if (empty($patientInformation)) {
            return $this->sendError('Patient Information not found');
        }

        return $this->sendResponse($patientInformation->toArray(), 'Patient Information retrieved successfully');
    }

    /**
     * Update the specified patientInformation in storage.
     * PUT/PATCH /patientInformations/{id}
     *
     * @param int $id
     * @param UpdatepatientInformationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepatientInformationAPIRequest $request)
    {
        $input = $request->all();

        /** @var patientInformation $patientInformation */
        $patientInformation = $this->patientInformationRepository->find($id);

        if (empty($patientInformation)) {
            return $this->sendError('Patient Information not found');
        }

        $patientInformation = $this->patientInformationRepository->update($input, $id);

        return $this->sendResponse($patientInformation->toArray(), 'patientInformation updated successfully');
    }

    /**
     * Remove the specified patientInformation from storage.
     * DELETE /patientInformations/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var patientInformation $patientInformation */
        $patientInformation = $this->patientInformationRepository->find($id);

        if (empty($patientInformation)) {
            return $this->sendError('Patient Information not found');
        }

        $patientInformation->delete();

        return $this->sendSuccess('Patient Information deleted successfully');
    }
}
