<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterespSmokingAPIRequest;
use App\Http\Requests\API\UpdaterespSmokingAPIRequest;
use App\Models\respSmoking;
use App\Repositories\respSmokingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class respSmokingController
 * @package App\Http\Controllers\API
 */

class respSmokingAPIController extends AppBaseController
{
    /** @var  respSmokingRepository */
    private $respSmokingRepository;

    public function __construct(respSmokingRepository $respSmokingRepo)
    {
        $this->respSmokingRepository = $respSmokingRepo;
    }

    /**
     * Display a listing of the respSmoking.
     * GET|HEAD /respSmokings
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $respSmokings = $this->respSmokingRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($respSmokings->toArray(), 'Resp Smokings retrieved successfully');
    }

    /**
     * Store a newly created respSmoking in storage.
     * POST /respSmokings
     *
     * @param CreaterespSmokingAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterespSmokingAPIRequest $request)
    {
        $input = $request->all();

        $respSmoking = $this->respSmokingRepository->create($input);

        return $this->sendResponse($respSmoking->toArray(), 'Resp Smoking saved successfully');
    }

    /**
     * Display the specified respSmoking.
     * GET|HEAD /respSmokings/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var respSmoking $respSmoking */
        $respSmoking = $this->respSmokingRepository->find($id);

        if (empty($respSmoking)) {
            return $this->sendError('Resp Smoking not found');
        }

        return $this->sendResponse($respSmoking->toArray(), 'Resp Smoking retrieved successfully');
    }

    /**
     * Update the specified respSmoking in storage.
     * PUT/PATCH /respSmokings/{id}
     *
     * @param int $id
     * @param UpdaterespSmokingAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterespSmokingAPIRequest $request)
    {
        $input = $request->all();

        /** @var respSmoking $respSmoking */
        $respSmoking = $this->respSmokingRepository->find($id);

        if (empty($respSmoking)) {
            return $this->sendError('Resp Smoking not found');
        }

        $respSmoking = $this->respSmokingRepository->update($input, $id);

        return $this->sendResponse($respSmoking->toArray(), 'respSmoking updated successfully');
    }

    /**
     * Remove the specified respSmoking from storage.
     * DELETE /respSmokings/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var respSmoking $respSmoking */
        $respSmoking = $this->respSmokingRepository->find($id);

        if (empty($respSmoking)) {
            return $this->sendError('Resp Smoking not found');
        }

        $respSmoking->delete();

        return $this->sendSuccess('Resp Smoking deleted successfully');
    }
}
