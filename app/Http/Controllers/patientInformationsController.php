<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepatientInformationsRequest;
use App\Http\Requests\UpdatepatientInformationsRequest;
use App\Repositories\patientInformationsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class patientInformationsController extends AppBaseController
{
    /** @var  patientInformationsRepository */
    private $patientInformationsRepository;

    public function __construct(patientInformationsRepository $patientInformationsRepo)
    {
        $this->patientInformationsRepository = $patientInformationsRepo;
    }

    /**
     * Display a listing of the patientInformations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientInformations = $this->patientInformationsRepository->all();

        return view('patient_informations.index')
            ->with('patientInformations', $patientInformations);
    }

    /**
     * Show the form for creating a new patientInformations.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_informations.create');
    }

    /**
     * Store a newly created patientInformations in storage.
     *
     * @param CreatepatientInformationsRequest $request
     *
     * @return Response
     */
    public function store(CreatepatientInformationsRequest $request)
    {
        $input = $request->all();

        $patientInformations = $this->patientInformationsRepository->create($input);

        Flash::success('Patient Informations saved successfully.');

        return redirect(route('patientInformations.index'));
    }

    /**
     * Display the specified patientInformations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientInformations = $this->patientInformationsRepository->find($id);

        if (empty($patientInformations)) {
            Flash::error('Patient Informations not found');

            return redirect(route('patientInformations.index'));
        }

        return view('patient_informations.show')->with('patientInformations', $patientInformations);
    }

    /**
     * Show the form for editing the specified patientInformations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientInformations = $this->patientInformationsRepository->find($id);

        if (empty($patientInformations)) {
            Flash::error('Patient Informations not found');

            return redirect(route('patientInformations.index'));
        }

        return view('patient_informations.edit')->with('patientInformations', $patientInformations);
    }

    /**
     * Update the specified patientInformations in storage.
     *
     * @param int $id
     * @param UpdatepatientInformationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepatientInformationsRequest $request)
    {
        $patientInformations = $this->patientInformationsRepository->find($id);

        if (empty($patientInformations)) {
            Flash::error('Patient Informations not found');

            return redirect(route('patientInformations.index'));
        }

        $patientInformations = $this->patientInformationsRepository->update($request->all(), $id);

        Flash::success('Patient Informations updated successfully.');

        return redirect(route('patientInformations.index'));
    }

    /**
     * Remove the specified patientInformations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientInformations = $this->patientInformationsRepository->find($id);

        if (empty($patientInformations)) {
            Flash::error('Patient Informations not found');

            return redirect(route('patientInformations.index'));
        }

        $this->patientInformationsRepository->delete($id);

        Flash::success('Patient Informations deleted successfully.');

        return redirect(route('patientInformations.index'));
    }
}
