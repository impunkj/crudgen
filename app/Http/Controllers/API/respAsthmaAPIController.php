<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterespAsthmaAPIRequest;
use App\Http\Requests\API\UpdaterespAsthmaAPIRequest;
use App\Models\respAsthma;
use App\Repositories\respAsthmaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class respAsthmaController
 * @package App\Http\Controllers\API
 */

class respAsthmaAPIController extends AppBaseController
{
    /** @var  respAsthmaRepository */
    private $respAsthmaRepository;

    public function __construct(respAsthmaRepository $respAsthmaRepo)
    {
        $this->respAsthmaRepository = $respAsthmaRepo;
    }

    /**
     * Display a listing of the respAsthma.
     * GET|HEAD /respAsthmas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $respAsthmas = $this->respAsthmaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($respAsthmas->toArray(), 'Resp Asthmas retrieved successfully');
    }

    /**
     * Store a newly created respAsthma in storage.
     * POST /respAsthmas
     *
     * @param CreaterespAsthmaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterespAsthmaAPIRequest $request)
    {
        $input = $request->all();

        $respAsthma = $this->respAsthmaRepository->create($input);

        return $this->sendResponse($respAsthma->toArray(), 'Resp Asthma saved successfully');
    }

    /**
     * Display the specified respAsthma.
     * GET|HEAD /respAsthmas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var respAsthma $respAsthma */
        $respAsthma = $this->respAsthmaRepository->find($id);

        if (empty($respAsthma)) {
            return $this->sendError('Resp Asthma not found');
        }

        return $this->sendResponse($respAsthma->toArray(), 'Resp Asthma retrieved successfully');
    }

    /**
     * Update the specified respAsthma in storage.
     * PUT/PATCH /respAsthmas/{id}
     *
     * @param int $id
     * @param UpdaterespAsthmaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterespAsthmaAPIRequest $request)
    {
        $input = $request->all();

        /** @var respAsthma $respAsthma */
        $respAsthma = $this->respAsthmaRepository->find($id);

        if (empty($respAsthma)) {
            return $this->sendError('Resp Asthma not found');
        }

        $respAsthma = $this->respAsthmaRepository->update($input, $id);

        return $this->sendResponse($respAsthma->toArray(), 'respAsthma updated successfully');
    }

    /**
     * Remove the specified respAsthma from storage.
     * DELETE /respAsthmas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var respAsthma $respAsthma */
        $respAsthma = $this->respAsthmaRepository->find($id);

        if (empty($respAsthma)) {
            return $this->sendError('Resp Asthma not found');
        }

        $respAsthma->delete();

        return $this->sendSuccess('Resp Asthma deleted successfully');
    }
}
