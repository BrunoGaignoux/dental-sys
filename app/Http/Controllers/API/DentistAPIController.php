<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDentistAPIRequest;
use App\Http\Requests\API\UpdateDentistAPIRequest;
use App\Models\Dentist;
use App\Repositories\DentistRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DentistController
 * @package App\Http\Controllers\API
 */

class DentistAPIController extends AppBaseController
{
    /** @var  DentistRepository */
    private $dentistRepository;

    public function __construct(DentistRepository $dentistRepo)
    {
        $this->dentistRepository = $dentistRepo;
    }

    /**
     * Display a listing of the Dentist.
     * GET|HEAD /dentists
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dentistRepository->pushCriteria(new RequestCriteria($request));
        $this->dentistRepository->pushCriteria(new LimitOffsetCriteria($request));
        $dentists = $this->dentistRepository->all();

        return $this->sendResponse($dentists->toArray(), 'Dentists retrieved successfully');
    }

    /**
     * Store a newly created Dentist in storage.
     * POST /dentists
     *
     * @param CreateDentistAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDentistAPIRequest $request)
    {
        $input = $request->all();

        $dentists = $this->dentistRepository->create($input);

        return $this->sendResponse($dentists->toArray(), 'Dentist saved successfully');
    }

    /**
     * Display the specified Dentist.
     * GET|HEAD /dentists/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Dentist $dentist */
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            return $this->sendError('Dentist not found');
        }

        return $this->sendResponse($dentist->toArray(), 'Dentist retrieved successfully');
    }

    /**
     * Update the specified Dentist in storage.
     * PUT/PATCH /dentists/{id}
     *
     * @param  int $id
     * @param UpdateDentistAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDentistAPIRequest $request)
    {
        $input = $request->all();

        /** @var Dentist $dentist */
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            return $this->sendError('Dentist not found');
        }

        $dentist = $this->dentistRepository->update($input, $id);

        return $this->sendResponse($dentist->toArray(), 'Dentist updated successfully');
    }

    /**
     * Remove the specified Dentist from storage.
     * DELETE /dentists/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Dentist $dentist */
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            return $this->sendError('Dentist not found');
        }

        $dentist->delete();

        return $this->sendResponse($id, 'Dentist deleted successfully');
    }
}
