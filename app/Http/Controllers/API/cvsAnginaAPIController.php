<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecvsAnginaAPIRequest;
use App\Http\Requests\API\UpdatecvsAnginaAPIRequest;
use App\Models\cvsAngina;
use App\Repositories\cvsAnginaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cvsAnginaController
 * @package App\Http\Controllers\API
 */

class cvsAnginaAPIController extends AppBaseController
{
    /** @var  cvsAnginaRepository */
    private $cvsAnginaRepository;

    public function __construct(cvsAnginaRepository $cvsAnginaRepo)
    {
        $this->cvsAnginaRepository = $cvsAnginaRepo;
    }

    /**
     * Display a listing of the cvsAngina.
     * GET|HEAD /cvsAnginas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cvsAnginas = $this->cvsAnginaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cvsAnginas->toArray(), 'Cvs Anginas retrieved successfully');
    }

    /**
     * Store a newly created cvsAngina in storage.
     * POST /cvsAnginas
     *
     * @param CreatecvsAnginaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecvsAnginaAPIRequest $request)
    {
        $input = $request->all();

        $cvsAngina = $this->cvsAnginaRepository->create($input);

        return $this->sendResponse($cvsAngina->toArray(), 'Cvs Angina saved successfully');
    }

    /**
     * Display the specified cvsAngina.
     * GET|HEAD /cvsAnginas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cvsAngina $cvsAngina */
        $cvsAngina = $this->cvsAnginaRepository->find($id);

        if (empty($cvsAngina)) {
            return $this->sendError('Cvs Angina not found');
        }

        return $this->sendResponse($cvsAngina->toArray(), 'Cvs Angina retrieved successfully');
    }

    /**
     * Update the specified cvsAngina in storage.
     * PUT/PATCH /cvsAnginas/{id}
     *
     * @param int $id
     * @param UpdatecvsAnginaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecvsAnginaAPIRequest $request)
    {
        $input = $request->all();

        /** @var cvsAngina $cvsAngina */
        $cvsAngina = $this->cvsAnginaRepository->find($id);

        if (empty($cvsAngina)) {
            return $this->sendError('Cvs Angina not found');
        }

        $cvsAngina = $this->cvsAnginaRepository->update($input, $id);

        return $this->sendResponse($cvsAngina->toArray(), 'cvsAngina updated successfully');
    }

    /**
     * Remove the specified cvsAngina from storage.
     * DELETE /cvsAnginas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cvsAngina $cvsAngina */
        $cvsAngina = $this->cvsAnginaRepository->find($id);

        if (empty($cvsAngina)) {
            return $this->sendError('Cvs Angina not found');
        }

        $cvsAngina->delete();

        return $this->sendSuccess('Cvs Angina deleted successfully');
    }
}
