<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterenalUtiAPIRequest;
use App\Http\Requests\API\UpdaterenalUtiAPIRequest;
use App\Models\renalUti;
use App\Repositories\renalUtiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class renalUtiController
 * @package App\Http\Controllers\API
 */

class renalUtiAPIController extends AppBaseController
{
    /** @var  renalUtiRepository */
    private $renalUtiRepository;

    public function __construct(renalUtiRepository $renalUtiRepo)
    {
        $this->renalUtiRepository = $renalUtiRepo;
    }

    /**
     * Display a listing of the renalUti.
     * GET|HEAD /renalUtis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $renalUtis = $this->renalUtiRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($renalUtis->toArray(), 'Renal Utis retrieved successfully');
    }

    /**
     * Store a newly created renalUti in storage.
     * POST /renalUtis
     *
     * @param CreaterenalUtiAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterenalUtiAPIRequest $request)
    {
        $input = $request->all();

        $renalUti = $this->renalUtiRepository->create($input);

        return $this->sendResponse($renalUti->toArray(), 'Renal Uti saved successfully');
    }

    /**
     * Display the specified renalUti.
     * GET|HEAD /renalUtis/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var renalUti $renalUti */
        $renalUti = $this->renalUtiRepository->find($id);

        if (empty($renalUti)) {
            return $this->sendError('Renal Uti not found');
        }

        return $this->sendResponse($renalUti->toArray(), 'Renal Uti retrieved successfully');
    }

    /**
     * Update the specified renalUti in storage.
     * PUT/PATCH /renalUtis/{id}
     *
     * @param int $id
     * @param UpdaterenalUtiAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterenalUtiAPIRequest $request)
    {
        $input = $request->all();

        /** @var renalUti $renalUti */
        $renalUti = $this->renalUtiRepository->find($id);

        if (empty($renalUti)) {
            return $this->sendError('Renal Uti not found');
        }

        $renalUti = $this->renalUtiRepository->update($input, $id);

        return $this->sendResponse($renalUti->toArray(), 'renalUti updated successfully');
    }

    /**
     * Remove the specified renalUti from storage.
     * DELETE /renalUtis/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var renalUti $renalUti */
        $renalUti = $this->renalUtiRepository->find($id);

        if (empty($renalUti)) {
            return $this->sendError('Renal Uti not found');
        }

        $renalUti->delete();

        return $this->sendSuccess('Renal Uti deleted successfully');
    }
}
