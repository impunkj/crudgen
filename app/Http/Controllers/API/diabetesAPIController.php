<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatediabetesAPIRequest;
use App\Http\Requests\API\UpdatediabetesAPIRequest;
use App\Models\diabetes;
use App\Repositories\diabetesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class diabetesController
 * @package App\Http\Controllers\API
 */

class diabetesAPIController extends AppBaseController
{
    /** @var  diabetesRepository */
    private $diabetesRepository;

    public function __construct(diabetesRepository $diabetesRepo)
    {
        $this->diabetesRepository = $diabetesRepo;
    }

    /**
     * Display a listing of the diabetes.
     * GET|HEAD /diabetes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $diabetes = $this->diabetesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($diabetes->toArray(), 'Diabetes retrieved successfully');
    }

    /**
     * Store a newly created diabetes in storage.
     * POST /diabetes
     *
     * @param CreatediabetesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatediabetesAPIRequest $request)
    {
        $input = $request->all();

        $diabetes = $this->diabetesRepository->create($input);

        return $this->sendResponse($diabetes->toArray(), 'Diabetes saved successfully');
    }

    /**
     * Display the specified diabetes.
     * GET|HEAD /diabetes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var diabetes $diabetes */
        $diabetes = $this->diabetesRepository->find($id);

        if (empty($diabetes)) {
            return $this->sendError('Diabetes not found');
        }

        return $this->sendResponse($diabetes->toArray(), 'Diabetes retrieved successfully');
    }

    /**
     * Update the specified diabetes in storage.
     * PUT/PATCH /diabetes/{id}
     *
     * @param int $id
     * @param UpdatediabetesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatediabetesAPIRequest $request)
    {
        $input = $request->all();

        /** @var diabetes $diabetes */
        $diabetes = $this->diabetesRepository->find($id);

        if (empty($diabetes)) {
            return $this->sendError('Diabetes not found');
        }

        $diabetes = $this->diabetesRepository->update($input, $id);

        return $this->sendResponse($diabetes->toArray(), 'diabetes updated successfully');
    }

    /**
     * Remove the specified diabetes from storage.
     * DELETE /diabetes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var diabetes $diabetes */
        $diabetes = $this->diabetesRepository->find($id);

        if (empty($diabetes)) {
            return $this->sendError('Diabetes not found');
        }

        $diabetes->delete();

        return $this->sendSuccess('Diabetes deleted successfully');
    }
}
