<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterespcoughAPIRequest;
use App\Http\Requests\API\UpdaterespcoughAPIRequest;
use App\Models\respcough;
use App\Repositories\respcoughRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class respcoughController
 * @package App\Http\Controllers\API
 */

class respcoughAPIController extends AppBaseController
{
    /** @var  respcoughRepository */
    private $respcoughRepository;

    public function __construct(respcoughRepository $respcoughRepo)
    {
        $this->respcoughRepository = $respcoughRepo;
    }

    /**
     * Display a listing of the respcough.
     * GET|HEAD /respcoughs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $respcoughs = $this->respcoughRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($respcoughs->toArray(), 'Respcoughs retrieved successfully');
    }

    /**
     * Store a newly created respcough in storage.
     * POST /respcoughs
     *
     * @param CreaterespcoughAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterespcoughAPIRequest $request)
    {
        $input = $request->all();

        $respcough = $this->respcoughRepository->create($input);

        return $this->sendResponse($respcough->toArray(), 'Respcough saved successfully');
    }

    /**
     * Display the specified respcough.
     * GET|HEAD /respcoughs/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var respcough $respcough */
        $respcough = $this->respcoughRepository->find($id);
        $respcough = respcough::where('patientNo', $id)->first();

        if (empty($respcough)) {
            return $this->sendError('Respcough not found');
        }

        return $this->sendResponse($respcough->toArray(), 'Respcough retrieved successfully');
    }

    /**
     * Update the specified respcough in storage.
     * PUT/PATCH /respcoughs/{id}
     *
     * @param int $id
     * @param UpdaterespcoughAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterespcoughAPIRequest $request)
    {
        $input = $request->all();

        /** @var respcough $respcough */
        $respcough = $this->respcoughRepository->find($id);

        if (empty($respcough)) {
            return $this->sendError('Respcough not found');
        }

        $respcough = $this->respcoughRepository->update($input, $id);

        return $this->sendResponse($respcough->toArray(), 'respcough updated successfully');
    }

    /**
     * Remove the specified respcough from storage.
     * DELETE /respcoughs/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var respcough $respcough */
        $respcough = $this->respcoughRepository->find($id);

        if (empty($respcough)) {
            return $this->sendError('Respcough not found');
        }

        $respcough->delete();

        return $this->sendSuccess('Respcough deleted successfully');
    }
}
