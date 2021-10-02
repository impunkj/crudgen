<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecnsSurgeryAPIRequest;
use App\Http\Requests\API\UpdatecnsSurgeryAPIRequest;
use App\Models\cnsSurgery;
use App\Repositories\cnsSurgeryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cnsSurgeryController
 * @package App\Http\Controllers\API
 */

class cnsSurgeryAPIController extends AppBaseController
{
    /** @var  cnsSurgeryRepository */
    private $cnsSurgeryRepository;

    public function __construct(cnsSurgeryRepository $cnsSurgeryRepo)
    {
        $this->cnsSurgeryRepository = $cnsSurgeryRepo;
    }

    /**
     * Display a listing of the cnsSurgery.
     * GET|HEAD /cnsSurgeries
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cnsSurgeries = $this->cnsSurgeryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cnsSurgeries->toArray(), 'Cns Surgeries retrieved successfully');
    }

    /**
     * Store a newly created cnsSurgery in storage.
     * POST /cnsSurgeries
     *
     * @param CreatecnsSurgeryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecnsSurgeryAPIRequest $request)
    {
        $input = $request->all();

        $cnsSurgery = $this->cnsSurgeryRepository->create($input);

        return $this->sendResponse($cnsSurgery->toArray(), 'Cns Surgery saved successfully');
    }

    /**
     * Display the specified cnsSurgery.
     * GET|HEAD /cnsSurgeries/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cnsSurgery $cnsSurgery */
        $cnsSurgery = $this->cnsSurgeryRepository->find($id);

        if (empty($cnsSurgery)) {
            return $this->sendError('Cns Surgery not found');
        }

        return $this->sendResponse($cnsSurgery->toArray(), 'Cns Surgery retrieved successfully');
    }

    /**
     * Update the specified cnsSurgery in storage.
     * PUT/PATCH /cnsSurgeries/{id}
     *
     * @param int $id
     * @param UpdatecnsSurgeryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecnsSurgeryAPIRequest $request)
    {
        $input = $request->all();

        /** @var cnsSurgery $cnsSurgery */
        $cnsSurgery = $this->cnsSurgeryRepository->find($id);

        if (empty($cnsSurgery)) {
            return $this->sendError('Cns Surgery not found');
        }

        $cnsSurgery = $this->cnsSurgeryRepository->update($input, $id);

        return $this->sendResponse($cnsSurgery->toArray(), 'cnsSurgery updated successfully');
    }

    /**
     * Remove the specified cnsSurgery from storage.
     * DELETE /cnsSurgeries/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cnsSurgery $cnsSurgery */
        $cnsSurgery = $this->cnsSurgeryRepository->find($id);

        if (empty($cnsSurgery)) {
            return $this->sendError('Cns Surgery not found');
        }

        $cnsSurgery->delete();

        return $this->sendSuccess('Cns Surgery deleted successfully');
    }
}
