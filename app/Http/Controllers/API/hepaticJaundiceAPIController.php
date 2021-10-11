<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatehepaticJaundiceAPIRequest;
use App\Http\Requests\API\UpdatehepaticJaundiceAPIRequest;
use App\Models\hepaticJaundice;
use App\Repositories\hepaticJaundiceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class hepaticJaundiceController
 * @package App\Http\Controllers\API
 */

class hepaticJaundiceAPIController extends AppBaseController
{
    /** @var  hepaticJaundiceRepository */
    private $hepaticJaundiceRepository;

    public function __construct(hepaticJaundiceRepository $hepaticJaundiceRepo)
    {
        $this->hepaticJaundiceRepository = $hepaticJaundiceRepo;
    }

    /**
     * Display a listing of the hepaticJaundice.
     * GET|HEAD /hepaticJaundices
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $hepaticJaundices = $this->hepaticJaundiceRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($hepaticJaundices->toArray(), 'Hepatic Jaundices retrieved successfully');
    }

    /**
     * Store a newly created hepaticJaundice in storage.
     * POST /hepaticJaundices
     *
     * @param CreatehepaticJaundiceAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatehepaticJaundiceAPIRequest $request)
    {
        $input = $request->all();

        $hepaticJaundice = $this->hepaticJaundiceRepository->create($input);

        return $this->sendResponse($hepaticJaundice->toArray(), 'Hepatic Jaundice saved successfully');
    }

    /**
     * Display the specified hepaticJaundice.
     * GET|HEAD /hepaticJaundices/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var hepaticJaundice $hepaticJaundice */
        // $hepaticJaundice = $this->hepaticJaundiceRepository->find($id);
        $hepaticJaundice = hepaticJaundice::where('patientNo', $id)->first();

        if (empty($hepaticJaundice)) {
            return $this->sendError('Hepatic Jaundice not found');
        }

        return $this->sendResponse($hepaticJaundice->toArray(), 'Hepatic Jaundice retrieved successfully');
    }

    /**
     * Update the specified hepaticJaundice in storage.
     * PUT/PATCH /hepaticJaundices/{id}
     *
     * @param int $id
     * @param UpdatehepaticJaundiceAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehepaticJaundiceAPIRequest $request)
    {
        $input = $request->all();

        /** @var hepaticJaundice $hepaticJaundice */
        $hepaticJaundice = $this->hepaticJaundiceRepository->find($id);

        if (empty($hepaticJaundice)) {
            return $this->sendError('Hepatic Jaundice not found');
        }

        $hepaticJaundice = $this->hepaticJaundiceRepository->update($input, $id);

        return $this->sendResponse($hepaticJaundice->toArray(), 'hepaticJaundice updated successfully');
    }

    /**
     * Remove the specified hepaticJaundice from storage.
     * DELETE /hepaticJaundices/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var hepaticJaundice $hepaticJaundice */
        $hepaticJaundice = $this->hepaticJaundiceRepository->find($id);

        if (empty($hepaticJaundice)) {
            return $this->sendError('Hepatic Jaundice not found');
        }

        $hepaticJaundice->delete();

        return $this->sendSuccess('Hepatic Jaundice deleted successfully');
    }
}
