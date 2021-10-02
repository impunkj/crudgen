<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatehepaticRefluxAPIRequest;
use App\Http\Requests\API\UpdatehepaticRefluxAPIRequest;
use App\Models\hepaticReflux;
use App\Repositories\hepaticRefluxRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class hepaticRefluxController
 * @package App\Http\Controllers\API
 */

class hepaticRefluxAPIController extends AppBaseController
{
    /** @var  hepaticRefluxRepository */
    private $hepaticRefluxRepository;

    public function __construct(hepaticRefluxRepository $hepaticRefluxRepo)
    {
        $this->hepaticRefluxRepository = $hepaticRefluxRepo;
    }

    /**
     * Display a listing of the hepaticReflux.
     * GET|HEAD /hepaticRefluxes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $hepaticRefluxes = $this->hepaticRefluxRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($hepaticRefluxes->toArray(), 'Hepatic Refluxes retrieved successfully');
    }

    /**
     * Store a newly created hepaticReflux in storage.
     * POST /hepaticRefluxes
     *
     * @param CreatehepaticRefluxAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatehepaticRefluxAPIRequest $request)
    {
        $input = $request->all();

        $hepaticReflux = $this->hepaticRefluxRepository->create($input);

        return $this->sendResponse($hepaticReflux->toArray(), 'Hepatic Reflux saved successfully');
    }

    /**
     * Display the specified hepaticReflux.
     * GET|HEAD /hepaticRefluxes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var hepaticReflux $hepaticReflux */
        $hepaticReflux = $this->hepaticRefluxRepository->find($id);

        if (empty($hepaticReflux)) {
            return $this->sendError('Hepatic Reflux not found');
        }

        return $this->sendResponse($hepaticReflux->toArray(), 'Hepatic Reflux retrieved successfully');
    }

    /**
     * Update the specified hepaticReflux in storage.
     * PUT/PATCH /hepaticRefluxes/{id}
     *
     * @param int $id
     * @param UpdatehepaticRefluxAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehepaticRefluxAPIRequest $request)
    {
        $input = $request->all();

        /** @var hepaticReflux $hepaticReflux */
        $hepaticReflux = $this->hepaticRefluxRepository->find($id);

        if (empty($hepaticReflux)) {
            return $this->sendError('Hepatic Reflux not found');
        }

        $hepaticReflux = $this->hepaticRefluxRepository->update($input, $id);

        return $this->sendResponse($hepaticReflux->toArray(), 'hepaticReflux updated successfully');
    }

    /**
     * Remove the specified hepaticReflux from storage.
     * DELETE /hepaticRefluxes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var hepaticReflux $hepaticReflux */
        $hepaticReflux = $this->hepaticRefluxRepository->find($id);

        if (empty($hepaticReflux)) {
            return $this->sendError('Hepatic Reflux not found');
        }

        $hepaticReflux->delete();

        return $this->sendSuccess('Hepatic Reflux deleted successfully');
    }
}
