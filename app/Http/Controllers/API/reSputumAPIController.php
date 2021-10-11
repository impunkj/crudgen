<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatereSputumAPIRequest;
use App\Http\Requests\API\UpdatereSputumAPIRequest;
use App\Models\reSputum;
use App\Repositories\reSputumRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class reSputumController
 * @package App\Http\Controllers\API
 */

class reSputumAPIController extends AppBaseController
{
    /** @var  reSputumRepository */
    private $reSputumRepository;

    public function __construct(reSputumRepository $reSputumRepo)
    {
        $this->reSputumRepository = $reSputumRepo;
    }

    /**
     * Display a listing of the reSputum.
     * GET|HEAD /reSputa
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $reSputa = $this->reSputumRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($reSputa->toArray(), 'Re Sputa retrieved successfully');
    }

    /**
     * Store a newly created reSputum in storage.
     * POST /reSputa
     *
     * @param CreatereSputumAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatereSputumAPIRequest $request)
    {
        $input = $request->all();

        $reSputum = $this->reSputumRepository->create($input);

        return $this->sendResponse($reSputum->toArray(), 'Re Sputum saved successfully');
    }

    /**
     * Display the specified reSputum.
     * GET|HEAD /reSputa/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var reSputum $reSputum */
        // $reSputum = $this->reSputumRepository->find($id);
        $reSputum = reSputum::where('patientNo', $id)->first();

        if (empty($reSputum)) {
            return $this->sendError('Re Sputum not found');
        }

        return $this->sendResponse($reSputum->toArray(), 'Re Sputum retrieved successfully');
    }

    /**
     * Update the specified reSputum in storage.
     * PUT/PATCH /reSputa/{id}
     *
     * @param int $id
     * @param UpdatereSputumAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereSputumAPIRequest $request)
    {
        $input = $request->all();

        /** @var reSputum $reSputum */
        $reSputum = $this->reSputumRepository->find($id);

        if (empty($reSputum)) {
            return $this->sendError('Re Sputum not found');
        }

        $reSputum = $this->reSputumRepository->update($input, $id);

        return $this->sendResponse($reSputum->toArray(), 'reSputum updated successfully');
    }

    /**
     * Remove the specified reSputum from storage.
     * DELETE /reSputa/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var reSputum $reSputum */
        $reSputum = $this->reSputumRepository->find($id);

        if (empty($reSputum)) {
            return $this->sendError('Re Sputum not found');
        }

        $reSputum->delete();

        return $this->sendSuccess('Re Sputum deleted successfully');
    }
}
