<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatephysicalExamAPIRequest;
use App\Http\Requests\API\UpdatephysicalExamAPIRequest;
use App\Models\physicalExam;
use App\Repositories\physicalExamRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class physicalExamController
 * @package App\Http\Controllers\API
 */

class physicalExamAPIController extends AppBaseController
{
    /** @var  physicalExamRepository */
    private $physicalExamRepository;

    public function __construct(physicalExamRepository $physicalExamRepo)
    {
        $this->physicalExamRepository = $physicalExamRepo;
    }

    /**
     * Display a listing of the physicalExam.
     * GET|HEAD /physicalExams
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $physicalExams = $this->physicalExamRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($physicalExams->toArray(), 'Physical Exams retrieved successfully');
    }

    /**
     * Store a newly created physicalExam in storage.
     * POST /physicalExams
     *
     * @param CreatephysicalExamAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatephysicalExamAPIRequest $request)
    {
        $input = $request->all();

        $physicalExam = $this->physicalExamRepository->create($input);

        return $this->sendResponse($physicalExam->toArray(), 'Physical Exam saved successfully');
    }

    /**
     * Display the specified physicalExam.
     * GET|HEAD /physicalExams/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var physicalExam $physicalExam */

		$physicalExam = physicalExam::where('patientNo', $id)->first();
        if (empty($physicalExam)) {
            return $this->sendError('Physical Exam not found');
        }

        return $this->sendResponse($physicalExam->toArray(), 'Physical Exam retrieved successfully');
    }

    /**
     * Update the specified physicalExam in storage.
     * PUT/PATCH /physicalExams/{id}
     *
     * @param int $id
     * @param UpdatephysicalExamAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatephysicalExamAPIRequest $request)
    {
        $input = $request->all();

        /** @var physicalExam $physicalExam */
        $physicalExam = $this->physicalExamRepository->find($id);

        if (empty($physicalExam)) {
            return $this->sendError('Physical Exam not found');
        }

        $physicalExam = $this->physicalExamRepository->update($input, $id);

        return $this->sendResponse($physicalExam->toArray(), 'physicalExam updated successfully');
    }

    /**
     * Remove the specified physicalExam from storage.
     * DELETE /physicalExams/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var physicalExam $physicalExam */
        $physicalExam = $this->physicalExamRepository->find($id);

        if (empty($physicalExam)) {
            return $this->sendError('Physical Exam not found');
        }

        $physicalExam->delete();

        return $this->sendSuccess('Physical Exam deleted successfully');
    }
}
