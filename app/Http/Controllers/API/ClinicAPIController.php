<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateClinicAPIRequest;
use App\Http\Requests\API\UpdateClinicAPIRequest;
use App\Models\Clinic;
use App\Repositories\ClinicRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ClinicController
 * @package App\Http\Controllers\API
 */

class ClinicAPIController extends AppBaseController
{
    /** @var  ClinicRepository */
    private $clinicRepository;

    public function __construct(ClinicRepository $clinicRepo)
    {
        $this->clinicRepository = $clinicRepo;
    }

    /**
     * Display a listing of the Clinic.
     * GET|HEAD /clinics
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clinicRepository->pushCriteria(new RequestCriteria($request));
        $this->clinicRepository->pushCriteria(new LimitOffsetCriteria($request));
        $clinics = $this->clinicRepository->all();

        return $this->sendResponse($clinics->toArray(), 'Clinics retrieved successfully');
    }

    /**
     * Store a newly created Clinic in storage.
     * POST /clinics
     *
     * @param CreateClinicAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateClinicAPIRequest $request)
    {
        $input = $request->all();

        $clinics = $this->clinicRepository->create($input);

        return $this->sendResponse($clinics->toArray(), 'Clinic saved successfully');
    }

    /**
     * Display the specified Clinic.
     * GET|HEAD /clinics/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Clinic $clinic */
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            return $this->sendError('Clinic not found');
        }

        return $this->sendResponse($clinic->toArray(), 'Clinic retrieved successfully');
    }

    /**
     * Update the specified Clinic in storage.
     * PUT/PATCH /clinics/{id}
     *
     * @param  int $id
     * @param UpdateClinicAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClinicAPIRequest $request)
    {
        $input = $request->all();

        /** @var Clinic $clinic */
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            return $this->sendError('Clinic not found');
        }

        $clinic = $this->clinicRepository->update($input, $id);

        return $this->sendResponse($clinic->toArray(), 'Clinic updated successfully');
    }

    /**
     * Remove the specified Clinic from storage.
     * DELETE /clinics/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Clinic $clinic */
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            return $this->sendError('Clinic not found');
        }

        $clinic->delete();

        return $this->sendResponse($id, 'Clinic deleted successfully');
    }
}
