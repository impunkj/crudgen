<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateanaesthetichistoryAPIRequest;
use App\Http\Requests\API\UpdateanaesthetichistoryAPIRequest;
use App\Models\anaesthetichistory;
use App\Repositories\anaesthetichistoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class anaesthetichistoryController
 * @package App\Http\Controllers\API
 */

class anaesthetichistoryAPIController extends AppBaseController
{
    /** @var  anaesthetichistoryRepository */
    private $anaesthetichistoryRepository;

    public function __construct(anaesthetichistoryRepository $anaesthetichistoryRepo)
    {
        $this->anaesthetichistoryRepository = $anaesthetichistoryRepo;
    }

    /**
     * Display a listing of the anaesthetichistory.
     * GET|HEAD /anaesthetichistories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $anaesthetichistories = $this->anaesthetichistoryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($anaesthetichistories->toArray(), 'Anaesthetichistories retrieved successfully');
    }

    /**
     * Store a newly created anaesthetichistory in storage.
     * POST /anaesthetichistories
     *
     * @param CreateanaesthetichistoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateanaesthetichistoryAPIRequest $request)
    {
        $input = $request->all();

        $anaesthetichistory = $this->anaesthetichistoryRepository->create($input);

        return $this->sendResponse($anaesthetichistory->toArray(), 'Anaesthetichistory saved successfully');
    }

    /**
     * Display the specified anaesthetichistory.
     * GET|HEAD /anaesthetichistories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var anaesthetichistory $anaesthetichistory */
        $anaesthetichistory = $this->anaesthetichistoryRepository->find($id);
        $anaesthetichistory = anaesthetichistory::where('patientNo', $id)->first();

        if (empty($anaesthetichistory)) {
            return $this->sendError('Anaesthetichistory not found');
        }

        return $this->sendResponse($anaesthetichistory->toArray(), 'Anaesthetichistory retrieved successfully');
    }

    /**
     * Update the specified anaesthetichistory in storage.
     * PUT/PATCH /anaesthetichistories/{id}
     *
     * @param int $id
     * @param UpdateanaesthetichistoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateanaesthetichistoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var anaesthetichistory $anaesthetichistory */
        $anaesthetichistory = $this->anaesthetichistoryRepository->find($id);

        if (empty($anaesthetichistory)) {
            return $this->sendError('Anaesthetichistory not found');
        }

        $anaesthetichistory = $this->anaesthetichistoryRepository->update($input, $id);

        return $this->sendResponse($anaesthetichistory->toArray(), 'anaesthetichistory updated successfully');
    }

    /**
     * Remove the specified anaesthetichistory from storage.
     * DELETE /anaesthetichistories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var anaesthetichistory $anaesthetichistory */
        $anaesthetichistory = $this->anaesthetichistoryRepository->find($id);

        if (empty($anaesthetichistory)) {
            return $this->sendError('Anaesthetichistory not found');
        }

        $anaesthetichistory->delete();

        return $this->sendSuccess('Anaesthetichistory deleted successfully');
    }
}
