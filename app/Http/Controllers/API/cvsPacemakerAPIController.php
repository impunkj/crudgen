<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecvsPacemakerAPIRequest;
use App\Http\Requests\API\UpdatecvsPacemakerAPIRequest;
use App\Models\cvsPacemaker;
use App\Repositories\cvsPacemakerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cvsPacemakerController
 * @package App\Http\Controllers\API
 */

class cvsPacemakerAPIController extends AppBaseController
{
    /** @var  cvsPacemakerRepository */
    private $cvsPacemakerRepository;

    public function __construct(cvsPacemakerRepository $cvsPacemakerRepo)
    {
        $this->cvsPacemakerRepository = $cvsPacemakerRepo;
    }

    /**
     * Display a listing of the cvsPacemaker.
     * GET|HEAD /cvsPacemakers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cvsPacemakers = $this->cvsPacemakerRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cvsPacemakers->toArray(), 'Cvs Pacemakers retrieved successfully');
    }

    /**
     * Store a newly created cvsPacemaker in storage.
     * POST /cvsPacemakers
     *
     * @param CreatecvsPacemakerAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecvsPacemakerAPIRequest $request)
    {
        $input = $request->all();

        $cvsPacemaker = $this->cvsPacemakerRepository->create($input);

        return $this->sendResponse($cvsPacemaker->toArray(), 'Cvs Pacemaker saved successfully');
    }

    /**
     * Display the specified cvsPacemaker.
     * GET|HEAD /cvsPacemakers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cvsPacemaker $cvsPacemaker */
        $cvsPacemaker = $this->cvsPacemakerRepository->find($id);

        if (empty($cvsPacemaker)) {
            return $this->sendError('Cvs Pacemaker not found');
        }

        return $this->sendResponse($cvsPacemaker->toArray(), 'Cvs Pacemaker retrieved successfully');
    }

    /**
     * Update the specified cvsPacemaker in storage.
     * PUT/PATCH /cvsPacemakers/{id}
     *
     * @param int $id
     * @param UpdatecvsPacemakerAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecvsPacemakerAPIRequest $request)
    {
        $input = $request->all();

        /** @var cvsPacemaker $cvsPacemaker */
        $cvsPacemaker = $this->cvsPacemakerRepository->find($id);

        if (empty($cvsPacemaker)) {
            return $this->sendError('Cvs Pacemaker not found');
        }

        $cvsPacemaker = $this->cvsPacemakerRepository->update($input, $id);

        return $this->sendResponse($cvsPacemaker->toArray(), 'cvsPacemaker updated successfully');
    }

    /**
     * Remove the specified cvsPacemaker from storage.
     * DELETE /cvsPacemakers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cvsPacemaker $cvsPacemaker */
        $cvsPacemaker = $this->cvsPacemakerRepository->find($id);

        if (empty($cvsPacemaker)) {
            return $this->sendError('Cvs Pacemaker not found');
        }

        $cvsPacemaker->delete();

        return $this->sendSuccess('Cvs Pacemaker deleted successfully');
    }
}
