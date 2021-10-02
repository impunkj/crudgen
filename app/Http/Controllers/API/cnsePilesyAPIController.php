<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecnsePilesyAPIRequest;
use App\Http\Requests\API\UpdatecnsePilesyAPIRequest;
use App\Models\cnsePilesy;
use App\Repositories\cnsePilesyRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cnsePilesyController
 * @package App\Http\Controllers\API
 */

class cnsePilesyAPIController extends AppBaseController
{
    /** @var  cnsePilesyRepository */
    private $cnsePilesyRepository;

    public function __construct(cnsePilesyRepository $cnsePilesyRepo)
    {
        $this->cnsePilesyRepository = $cnsePilesyRepo;
    }

    /**
     * Display a listing of the cnsePilesy.
     * GET|HEAD /cnsePilesies
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cnsePilesies = $this->cnsePilesyRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cnsePilesies->toArray(), 'Cnse Pilesies retrieved successfully');
    }

    /**
     * Store a newly created cnsePilesy in storage.
     * POST /cnsePilesies
     *
     * @param CreatecnsePilesyAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecnsePilesyAPIRequest $request)
    {
        $input = $request->all();

        $cnsePilesy = $this->cnsePilesyRepository->create($input);

        return $this->sendResponse($cnsePilesy->toArray(), 'Cnse Pilesy saved successfully');
    }

    /**
     * Display the specified cnsePilesy.
     * GET|HEAD /cnsePilesies/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cnsePilesy $cnsePilesy */
        $cnsePilesy = $this->cnsePilesyRepository->find($id);

        if (empty($cnsePilesy)) {
            return $this->sendError('Cnse Pilesy not found');
        }

        return $this->sendResponse($cnsePilesy->toArray(), 'Cnse Pilesy retrieved successfully');
    }

    /**
     * Update the specified cnsePilesy in storage.
     * PUT/PATCH /cnsePilesies/{id}
     *
     * @param int $id
     * @param UpdatecnsePilesyAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecnsePilesyAPIRequest $request)
    {
        $input = $request->all();

        /** @var cnsePilesy $cnsePilesy */
        $cnsePilesy = $this->cnsePilesyRepository->find($id);

        if (empty($cnsePilesy)) {
            return $this->sendError('Cnse Pilesy not found');
        }

        $cnsePilesy = $this->cnsePilesyRepository->update($input, $id);

        return $this->sendResponse($cnsePilesy->toArray(), 'cnsePilesy updated successfully');
    }

    /**
     * Remove the specified cnsePilesy from storage.
     * DELETE /cnsePilesies/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cnsePilesy $cnsePilesy */
        $cnsePilesy = $this->cnsePilesyRepository->find($id);

        if (empty($cnsePilesy)) {
            return $this->sendError('Cnse Pilesy not found');
        }

        $cnsePilesy->delete();

        return $this->sendSuccess('Cnse Pilesy deleted successfully');
    }
}
