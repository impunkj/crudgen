<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecvsMiAPIRequest;
use App\Http\Requests\API\UpdatecvsMiAPIRequest;
use App\Models\cvsMi;
use App\Repositories\cvsMiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class cvsMiController
 * @package App\Http\Controllers\API
 */

class cvsMiAPIController extends AppBaseController
{
    /** @var  cvsMiRepository */
    private $cvsMiRepository;

    public function __construct(cvsMiRepository $cvsMiRepo)
    {
        $this->cvsMiRepository = $cvsMiRepo;
    }

    /**
     * Display a listing of the cvsMi.
     * GET|HEAD /cvsMis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cvsMis = $this->cvsMiRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cvsMis->toArray(), 'Cvs Mis retrieved successfully');
    }

    /**
     * Store a newly created cvsMi in storage.
     * POST /cvsMis
     *
     * @param CreatecvsMiAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecvsMiAPIRequest $request)
    {
        $input = $request->all();

        $cvsMi = $this->cvsMiRepository->create($input);

        return $this->sendResponse($cvsMi->toArray(), 'Cvs Mi saved successfully');
    }

    /**
     * Display the specified cvsMi.
     * GET|HEAD /cvsMis/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var cvsMi $cvsMi */
        // $cvsMi = $this->cvsMiRepository->find($id);
		$cvsMi = cvsMi::where('patientNo', $id)->first();

        if (empty($cvsMi)) {
            return $this->sendError('Cvs Mi not found');
        }

        return $this->sendResponse($cvsMi->toArray(), 'Cvs Mi retrieved successfully');
    }

    /**
     * Update the specified cvsMi in storage.
     * PUT/PATCH /cvsMis/{id}
     *
     * @param int $id
     * @param UpdatecvsMiAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecvsMiAPIRequest $request)
    {
        $input = $request->all();

        /** @var cvsMi $cvsMi */
        $cvsMi = $this->cvsMiRepository->find($id);

        if (empty($cvsMi)) {
            return $this->sendError('Cvs Mi not found');
        }

        $cvsMi = $this->cvsMiRepository->update($input, $id);

        return $this->sendResponse($cvsMi->toArray(), 'cvsMi updated successfully');
    }

    /**
     * Remove the specified cvsMi from storage.
     * DELETE /cvsMis/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var cvsMi $cvsMi */
        $cvsMi = $this->cvsMiRepository->find($id);

        if (empty($cvsMi)) {
            return $this->sendError('Cvs Mi not found');
        }

        $cvsMi->delete();

        return $this->sendSuccess('Cvs Mi deleted successfully');
    }
}
