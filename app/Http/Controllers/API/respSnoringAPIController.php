<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterespSnoringAPIRequest;
use App\Http\Requests\API\UpdaterespSnoringAPIRequest;
use App\Models\respSnoring;
use App\Repositories\respSnoringRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class respSnoringController
 * @package App\Http\Controllers\API
 */

class respSnoringAPIController extends AppBaseController
{
    /** @var  respSnoringRepository */
    private $respSnoringRepository;

    public function __construct(respSnoringRepository $respSnoringRepo)
    {
        $this->respSnoringRepository = $respSnoringRepo;
    }

    /**
     * Display a listing of the respSnoring.
     * GET|HEAD /respSnorings
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $respSnorings = $this->respSnoringRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($respSnorings->toArray(), 'Resp Snorings retrieved successfully');
    }

    /**
     * Store a newly created respSnoring in storage.
     * POST /respSnorings
     *
     * @param CreaterespSnoringAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterespSnoringAPIRequest $request)
    {
        $input = $request->all();

        $respSnoring = $this->respSnoringRepository->create($input);

        return $this->sendResponse($respSnoring->toArray(), 'Resp Snoring saved successfully');
    }

    /**
     * Display the specified respSnoring.
     * GET|HEAD /respSnorings/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var respSnoring $respSnoring */
        $respSnoring = $this->respSnoringRepository->find($id);

        if (empty($respSnoring)) {
            return $this->sendError('Resp Snoring not found');
        }

        return $this->sendResponse($respSnoring->toArray(), 'Resp Snoring retrieved successfully');
    }

    /**
     * Update the specified respSnoring in storage.
     * PUT/PATCH /respSnorings/{id}
     *
     * @param int $id
     * @param UpdaterespSnoringAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterespSnoringAPIRequest $request)
    {
        $input = $request->all();

        /** @var respSnoring $respSnoring */
        $respSnoring = $this->respSnoringRepository->find($id);

        if (empty($respSnoring)) {
            return $this->sendError('Resp Snoring not found');
        }

        $respSnoring = $this->respSnoringRepository->update($input, $id);

        return $this->sendResponse($respSnoring->toArray(), 'respSnoring updated successfully');
    }

    /**
     * Remove the specified respSnoring from storage.
     * DELETE /respSnorings/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var respSnoring $respSnoring */
        $respSnoring = $this->respSnoringRepository->find($id);

        if (empty($respSnoring)) {
            return $this->sendError('Resp Snoring not found');
        }

        $respSnoring->delete();

        return $this->sendSuccess('Resp Snoring deleted successfully');
    }
}
