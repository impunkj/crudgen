<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatethyroidAPIRequest;
use App\Http\Requests\API\UpdatethyroidAPIRequest;
use App\Models\thyroid;
use App\Repositories\thyroidRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class thyroidController
 * @package App\Http\Controllers\API
 */

class thyroidAPIController extends AppBaseController
{
    /** @var  thyroidRepository */
    private $thyroidRepository;

    public function __construct(thyroidRepository $thyroidRepo)
    {
        $this->thyroidRepository = $thyroidRepo;
    }

    /**
     * Display a listing of the thyroid.
     * GET|HEAD /thyroids
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $thyroids = $this->thyroidRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($thyroids->toArray(), 'Thyroids retrieved successfully');
    }

    /**
     * Store a newly created thyroid in storage.
     * POST /thyroids
     *
     * @param CreatethyroidAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatethyroidAPIRequest $request)
    {
        $input = $request->all();

        $thyroid = $this->thyroidRepository->create($input);

        return $this->sendResponse($thyroid->toArray(), 'Thyroid saved successfully');
    }

    /**
     * Display the specified thyroid.
     * GET|HEAD /thyroids/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var thyroid $thyroid */
        // $thyroid = $this->thyroidRepository->find($id);
        $thyroid = thyroid::where('patientNo', $id)->first();

        if (empty($thyroid)) {
            return $this->sendError('Thyroid not found');
        }

        return $this->sendResponse($thyroid->toArray(), 'Thyroid retrieved successfully');
    }

    /**
     * Update the specified thyroid in storage.
     * PUT/PATCH /thyroids/{id}
     *
     * @param int $id
     * @param UpdatethyroidAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatethyroidAPIRequest $request)
    {
        $input = $request->all();

        /** @var thyroid $thyroid */
        $thyroid = $this->thyroidRepository->find($id);

        if (empty($thyroid)) {
            return $this->sendError('Thyroid not found');
        }

        $thyroid = $this->thyroidRepository->update($input, $id);

        return $this->sendResponse($thyroid->toArray(), 'thyroid updated successfully');
    }

    /**
     * Remove the specified thyroid from storage.
     * DELETE /thyroids/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var thyroid $thyroid */
        $thyroid = $this->thyroidRepository->find($id);

        if (empty($thyroid)) {
            return $this->sendError('Thyroid not found');
        }

        $thyroid->delete();

        return $this->sendSuccess('Thyroid deleted successfully');
    }
}
