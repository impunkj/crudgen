<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterenalStonesAPIRequest;
use App\Http\Requests\API\UpdaterenalStonesAPIRequest;
use App\Models\renalStones;
use App\Repositories\renalStonesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class renalStonesController
 * @package App\Http\Controllers\API
 */

class renalStonesAPIController extends AppBaseController
{
    /** @var  renalStonesRepository */
    private $renalStonesRepository;

    public function __construct(renalStonesRepository $renalStonesRepo)
    {
        $this->renalStonesRepository = $renalStonesRepo;
    }

    /**
     * Display a listing of the renalStones.
     * GET|HEAD /renalStones
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $renalStones = $this->renalStonesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($renalStones->toArray(), 'Renal Stones retrieved successfully');
    }

    /**
     * Store a newly created renalStones in storage.
     * POST /renalStones
     *
     * @param CreaterenalStonesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterenalStonesAPIRequest $request)
    {
        $input = $request->all();

        $renalStones = $this->renalStonesRepository->create($input);

        return $this->sendResponse($renalStones->toArray(), 'Renal Stones saved successfully');
    }

    /**
     * Display the specified renalStones.
     * GET|HEAD /renalStones/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var renalStones $renalStones */
        $renalStones = $this->renalStonesRepository->find($id);

        if (empty($renalStones)) {
            return $this->sendError('Renal Stones not found');
        }

        return $this->sendResponse($renalStones->toArray(), 'Renal Stones retrieved successfully');
    }

    /**
     * Update the specified renalStones in storage.
     * PUT/PATCH /renalStones/{id}
     *
     * @param int $id
     * @param UpdaterenalStonesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterenalStonesAPIRequest $request)
    {
        $input = $request->all();

        /** @var renalStones $renalStones */
        $renalStones = $this->renalStonesRepository->find($id);

        if (empty($renalStones)) {
            return $this->sendError('Renal Stones not found');
        }

        $renalStones = $this->renalStonesRepository->update($input, $id);

        return $this->sendResponse($renalStones->toArray(), 'renalStones updated successfully');
    }

    /**
     * Remove the specified renalStones from storage.
     * DELETE /renalStones/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var renalStones $renalStones */
        $renalStones = $this->renalStonesRepository->find($id);

        if (empty($renalStones)) {
            return $this->sendError('Renal Stones not found');
        }

        $renalStones->delete();

        return $this->sendSuccess('Renal Stones deleted successfully');
    }
}
