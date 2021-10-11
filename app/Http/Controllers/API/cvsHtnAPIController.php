<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecvsHtnAPIRequest;
use App\Http\Requests\API\UpdatecvsHtnAPIRequest;
use App\Models\cvsHtn;
use App\Repositories\cvsHtnRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cvsHtnController
 * @package App\Http\Controllers\API
 */

class cvsHtnAPIController extends AppBaseController
{
    /** @var  cvsHtnRepository */
    private $cvsHtnRepository;

    public function __construct(cvsHtnRepository $cvsHtnRepo)
    {
        $this->cvsHtnRepository = $cvsHtnRepo;
    }

    /**
     * Display a listing of the cvsHtn.
     * GET|HEAD /cvsHtns
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cvsHtns = $this->cvsHtnRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cvsHtns->toArray(), 'Cvs Htns retrieved successfully');
    }

    /**
     * Store a newly created cvsHtn in storage.
     * POST /cvsHtns
     *
     * @param CreatecvsHtnAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecvsHtnAPIRequest $request)
    {
        $input = $request->all();

        $cvsHtn = $this->cvsHtnRepository->create($input);

        return $this->sendResponse($cvsHtn->toArray(), 'Cvs Htn saved successfully');
    }

    /**
     * Display the specified cvsHtn.
     * GET|HEAD /cvsHtns/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cvsHtn $cvsHtn */
        $cvsHtn = $this->cvsHtnRepository->find($id);
        $cvsHtn = cvsHtn::where('patientNo', $id)->first();

        if (empty($cvsHtn)) {
            return $this->sendError('Cvs Htn not found');
        }

        return $this->sendResponse($cvsHtn->toArray(), 'Cvs Htn retrieved successfully');
    }

    /**
     * Update the specified cvsHtn in storage.
     * PUT/PATCH /cvsHtns/{id}
     *
     * @param int $id
     * @param UpdatecvsHtnAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecvsHtnAPIRequest $request)
    {
        $input = $request->all();

        /** @var cvsHtn $cvsHtn */
        $cvsHtn = $this->cvsHtnRepository->find($id);

        if (empty($cvsHtn)) {
            return $this->sendError('Cvs Htn not found');
        }

        $cvsHtn = $this->cvsHtnRepository->update($input, $id);

        return $this->sendResponse($cvsHtn->toArray(), 'cvsHtn updated successfully');
    }

    /**
     * Remove the specified cvsHtn from storage.
     * DELETE /cvsHtns/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cvsHtn $cvsHtn */
        $cvsHtn = $this->cvsHtnRepository->find($id);

        if (empty($cvsHtn)) {
            return $this->sendError('Cvs Htn not found');
        }

        $cvsHtn->delete();

        return $this->sendSuccess('Cvs Htn deleted successfully');
    }
}
