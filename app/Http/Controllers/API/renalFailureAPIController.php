<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreaterenalFailureAPIRequest;
use App\Http\Requests\API\UpdaterenalFailureAPIRequest;
use App\Models\renalFailure;
use App\Repositories\renalFailureRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class renalFailureController
 * @package App\Http\Controllers\API
 */

class renalFailureAPIController extends AppBaseController
{
    /** @var  renalFailureRepository */
    private $renalFailureRepository;

    public function __construct(renalFailureRepository $renalFailureRepo)
    {
        $this->renalFailureRepository = $renalFailureRepo;
    }

    /**
     * Display a listing of the renalFailure.
     * GET|HEAD /renalFailures
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $renalFailures = $this->renalFailureRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($renalFailures->toArray(), 'Renal Failures retrieved successfully');
    }

    /**
     * Store a newly created renalFailure in storage.
     * POST /renalFailures
     *
     * @param CreaterenalFailureAPIRequest $request
     *
     * @return Response
     */
    public function store(CreaterenalFailureAPIRequest $request)
    {
        $input = $request->all();

        $renalFailure = $this->renalFailureRepository->create($input);

        return $this->sendResponse($renalFailure->toArray(), 'Renal Failure saved successfully');
    }

    /**
     * Display the specified renalFailure.
     * GET|HEAD /renalFailures/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var renalFailure $renalFailure */
        $renalFailure = $this->renalFailureRepository->find($id);

        if (empty($renalFailure)) {
            return $this->sendError('Renal Failure not found');
        }

        return $this->sendResponse($renalFailure->toArray(), 'Renal Failure retrieved successfully');
    }

    /**
     * Update the specified renalFailure in storage.
     * PUT/PATCH /renalFailures/{id}
     *
     * @param int $id
     * @param UpdaterenalFailureAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterenalFailureAPIRequest $request)
    {
        $input = $request->all();

        /** @var renalFailure $renalFailure */
        $renalFailure = $this->renalFailureRepository->find($id);

        if (empty($renalFailure)) {
            return $this->sendError('Renal Failure not found');
        }

        $renalFailure = $this->renalFailureRepository->update($input, $id);

        return $this->sendResponse($renalFailure->toArray(), 'renalFailure updated successfully');
    }

    /**
     * Remove the specified renalFailure from storage.
     * DELETE /renalFailures/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var renalFailure $renalFailure */
        $renalFailure = $this->renalFailureRepository->find($id);

        if (empty($renalFailure)) {
            return $this->sendError('Renal Failure not found');
        }

        $renalFailure->delete();

        return $this->sendSuccess('Renal Failure deleted successfully');
    }
}
