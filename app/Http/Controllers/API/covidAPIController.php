<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecovidAPIRequest;
use App\Http\Requests\API\UpdatecovidAPIRequest;
use App\Models\covid;
use App\Repositories\covidRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class covidController
 * @package App\Http\Controllers\API
 */

class covidAPIController extends AppBaseController
{
    /** @var  covidRepository */
    private $covidRepository;

    public function __construct(covidRepository $covidRepo)
    {
        $this->covidRepository = $covidRepo;
    }

    /**
     * Display a listing of the covid.
     * GET|HEAD /covids
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $covids = $this->covidRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($covids->toArray(), 'Covids retrieved successfully');
    }

    /**
     * Store a newly created covid in storage.
     * POST /covids
     *
     * @param CreatecovidAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecovidAPIRequest $request)
    {
        $input = $request->all();

        $covid = $this->covidRepository->create($input);

        return $this->sendResponse($covid->toArray(), 'Covid saved successfully');
    }

    /**
     * Display the specified covid.
     * GET|HEAD /covids/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var covid $covid */
        // $covid = $this->covidRepository->find($id);
		$covid = covid::where('patientNo', $id)->first();///cnsePilesy
        if (empty($covid)) {
            return $this->sendError('Covid not found');
        }

        return $this->sendResponse($covid->toArray(), 'Covid retrieved successfully');
    }

    /**
     * Update the specified covid in storage.
     * PUT/PATCH /covids/{id}
     *
     * @param int $id
     * @param UpdatecovidAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecovidAPIRequest $request)
    {
        $input = $request->all();

        /** @var covid $covid */
        $covid = $this->covidRepository->find($id);

        if (empty($covid)) {
            return $this->sendError('Covid not found');
        }

        $covid = $this->covidRepository->update($input, $id);

        return $this->sendResponse($covid->toArray(), 'covid updated successfully');
    }

    /**
     * Remove the specified covid from storage.
     * DELETE /covids/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var covid $covid */
        $covid = $this->covidRepository->find($id);

        if (empty($covid)) {
            return $this->sendError('Covid not found');
        }

        $covid->delete();

        return $this->sendSuccess('Covid deleted successfully');
    }
}
