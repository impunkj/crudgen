<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecnsStrokeAPIRequest;
use App\Http\Requests\API\UpdatecnsStrokeAPIRequest;
use App\Models\cnsStroke;
use App\Repositories\cnsStrokeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cnsStrokeController
 * @package App\Http\Controllers\API
 */

class cnsStrokeAPIController extends AppBaseController
{
    /** @var  cnsStrokeRepository */
    private $cnsStrokeRepository;

    public function __construct(cnsStrokeRepository $cnsStrokeRepo)
    {
        $this->cnsStrokeRepository = $cnsStrokeRepo;
    }

    /**
     * Display a listing of the cnsStroke.
     * GET|HEAD /cnsStrokes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cnsStrokes = $this->cnsStrokeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cnsStrokes->toArray(), 'Cns Strokes retrieved successfully');
    }

    /**
     * Store a newly created cnsStroke in storage.
     * POST /cnsStrokes
     *
     * @param CreatecnsStrokeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecnsStrokeAPIRequest $request)
    {
        $input = $request->all();

        $cnsStroke = $this->cnsStrokeRepository->create($input);

        return $this->sendResponse($cnsStroke->toArray(), 'Cns Stroke saved successfully');
    }

    /**
     * Display the specified cnsStroke.
     * GET|HEAD /cnsStrokes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cnsStroke $cnsStroke */
        $cnsStroke = $this->cnsStrokeRepository->find($id);

        if (empty($cnsStroke)) {
            return $this->sendError('Cns Stroke not found');
        }

        return $this->sendResponse($cnsStroke->toArray(), 'Cns Stroke retrieved successfully');
    }

    /**
     * Update the specified cnsStroke in storage.
     * PUT/PATCH /cnsStrokes/{id}
     *
     * @param int $id
     * @param UpdatecnsStrokeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecnsStrokeAPIRequest $request)
    {
        $input = $request->all();

        /** @var cnsStroke $cnsStroke */
        $cnsStroke = $this->cnsStrokeRepository->find($id);

        if (empty($cnsStroke)) {
            return $this->sendError('Cns Stroke not found');
        }

        $cnsStroke = $this->cnsStrokeRepository->update($input, $id);

        return $this->sendResponse($cnsStroke->toArray(), 'cnsStroke updated successfully');
    }

    /**
     * Remove the specified cnsStroke from storage.
     * DELETE /cnsStrokes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cnsStroke $cnsStroke */
        $cnsStroke = $this->cnsStrokeRepository->find($id);

        if (empty($cnsStroke)) {
            return $this->sendError('Cns Stroke not found');
        }

        $cnsStroke->delete();

        return $this->sendSuccess('Cns Stroke deleted successfully');
    }
}
