<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecvsNyhaAPIRequest;
use App\Http\Requests\API\UpdatecvsNyhaAPIRequest;
use App\Models\cvsNyha;
use App\Repositories\cvsNyhaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cvsNyhaController
 * @package App\Http\Controllers\API
 */

class cvsNyhaAPIController extends AppBaseController
{
    /** @var  cvsNyhaRepository */
    private $cvsNyhaRepository;

    public function __construct(cvsNyhaRepository $cvsNyhaRepo)
    {
        $this->cvsNyhaRepository = $cvsNyhaRepo;
    }

    /**
     * Display a listing of the cvsNyha.
     * GET|HEAD /cvsNyhas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cvsNyhas = $this->cvsNyhaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cvsNyhas->toArray(), 'Cvs Nyhas retrieved successfully');
    }

    /**
     * Store a newly created cvsNyha in storage.
     * POST /cvsNyhas
     *
     * @param CreatecvsNyhaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecvsNyhaAPIRequest $request)
    {
        $input = $request->all();

        $cvsNyha = $this->cvsNyhaRepository->create($input);

        return $this->sendResponse($cvsNyha->toArray(), 'Cvs Nyha saved successfully');
    }

    /**
     * Display the specified cvsNyha.
     * GET|HEAD /cvsNyhas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cvsNyha $cvsNyha */
        $cvsNyha = $this->cvsNyhaRepository->find($id);

        if (empty($cvsNyha)) {
            return $this->sendError('Cvs Nyha not found');
        }

        return $this->sendResponse($cvsNyha->toArray(), 'Cvs Nyha retrieved successfully');
    }

    /**
     * Update the specified cvsNyha in storage.
     * PUT/PATCH /cvsNyhas/{id}
     *
     * @param int $id
     * @param UpdatecvsNyhaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecvsNyhaAPIRequest $request)
    {
        $input = $request->all();

        /** @var cvsNyha $cvsNyha */
        $cvsNyha = $this->cvsNyhaRepository->find($id);

        if (empty($cvsNyha)) {
            return $this->sendError('Cvs Nyha not found');
        }

        $cvsNyha = $this->cvsNyhaRepository->update($input, $id);

        return $this->sendResponse($cvsNyha->toArray(), 'cvsNyha updated successfully');
    }

    /**
     * Remove the specified cvsNyha from storage.
     * DELETE /cvsNyhas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cvsNyha $cvsNyha */
        $cvsNyha = $this->cvsNyhaRepository->find($id);

        if (empty($cvsNyha)) {
            return $this->sendError('Cvs Nyha not found');
        }

        $cvsNyha->delete();

        return $this->sendSuccess('Cvs Nyha deleted successfully');
    }
}
