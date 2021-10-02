<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecnsCognitiveAPIRequest;
use App\Http\Requests\API\UpdatecnsCognitiveAPIRequest;
use App\Models\cnsCognitive;
use App\Repositories\cnsCognitiveRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cnsCognitiveController
 * @package App\Http\Controllers\API
 */

class cnsCognitiveAPIController extends AppBaseController
{
    /** @var  cnsCognitiveRepository */
    private $cnsCognitiveRepository;

    public function __construct(cnsCognitiveRepository $cnsCognitiveRepo)
    {
        $this->cnsCognitiveRepository = $cnsCognitiveRepo;
    }

    /**
     * Display a listing of the cnsCognitive.
     * GET|HEAD /cnsCognitives
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cnsCognitives = $this->cnsCognitiveRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cnsCognitives->toArray(), 'Cns Cognitives retrieved successfully');
    }

    /**
     * Store a newly created cnsCognitive in storage.
     * POST /cnsCognitives
     *
     * @param CreatecnsCognitiveAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecnsCognitiveAPIRequest $request)
    {
        $input = $request->all();

        $cnsCognitive = $this->cnsCognitiveRepository->create($input);

        return $this->sendResponse($cnsCognitive->toArray(), 'Cns Cognitive saved successfully');
    }

    /**
     * Display the specified cnsCognitive.
     * GET|HEAD /cnsCognitives/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cnsCognitive $cnsCognitive */
        $cnsCognitive = $this->cnsCognitiveRepository->find($id);

        if (empty($cnsCognitive)) {
            return $this->sendError('Cns Cognitive not found');
        }

        return $this->sendResponse($cnsCognitive->toArray(), 'Cns Cognitive retrieved successfully');
    }

    /**
     * Update the specified cnsCognitive in storage.
     * PUT/PATCH /cnsCognitives/{id}
     *
     * @param int $id
     * @param UpdatecnsCognitiveAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecnsCognitiveAPIRequest $request)
    {
        $input = $request->all();

        /** @var cnsCognitive $cnsCognitive */
        $cnsCognitive = $this->cnsCognitiveRepository->find($id);

        if (empty($cnsCognitive)) {
            return $this->sendError('Cns Cognitive not found');
        }

        $cnsCognitive = $this->cnsCognitiveRepository->update($input, $id);

        return $this->sendResponse($cnsCognitive->toArray(), 'cnsCognitive updated successfully');
    }

    /**
     * Remove the specified cnsCognitive from storage.
     * DELETE /cnsCognitives/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cnsCognitive $cnsCognitive */
        $cnsCognitive = $this->cnsCognitiveRepository->find($id);

        if (empty($cnsCognitive)) {
            return $this->sendError('Cns Cognitive not found');
        }

        $cnsCognitive->delete();

        return $this->sendSuccess('Cns Cognitive deleted successfully');
    }
}
