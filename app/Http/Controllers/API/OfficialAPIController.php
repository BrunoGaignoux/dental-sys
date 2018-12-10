<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateOfficialAPIRequest;
use App\Http\Requests\API\UpdateOfficialAPIRequest;
use App\Models\Official;
use App\Repositories\OfficialRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class OfficialController
 * @package App\Http\Controllers\API
 */

class OfficialAPIController extends AppBaseController
{
    /** @var  OfficialRepository */
    private $officialRepository;

    public function __construct(OfficialRepository $officialRepo)
    {
        $this->officialRepository = $officialRepo;
    }

    /**
     * Display a listing of the Official.
     * GET|HEAD /officials
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->officialRepository->pushCriteria(new RequestCriteria($request));
        $this->officialRepository->pushCriteria(new LimitOffsetCriteria($request));
        $officials = $this->officialRepository->all();

        return $this->sendResponse($officials->toArray(), 'Officials retrieved successfully');
    }

    /**
     * Store a newly created Official in storage.
     * POST /officials
     *
     * @param CreateOfficialAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateOfficialAPIRequest $request)
    {
        $input = $request->all();

        $officials = $this->officialRepository->create($input);

        return $this->sendResponse($officials->toArray(), 'Official saved successfully');
    }

    /**
     * Display the specified Official.
     * GET|HEAD /officials/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Official $official */
        $official = $this->officialRepository->findWithoutFail($id);

        if (empty($official)) {
            return $this->sendError('Official not found');
        }

        return $this->sendResponse($official->toArray(), 'Official retrieved successfully');
    }

    /**
     * Update the specified Official in storage.
     * PUT/PATCH /officials/{id}
     *
     * @param  int $id
     * @param UpdateOfficialAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOfficialAPIRequest $request)
    {
        $input = $request->all();

        /** @var Official $official */
        $official = $this->officialRepository->findWithoutFail($id);

        if (empty($official)) {
            return $this->sendError('Official not found');
        }

        $official = $this->officialRepository->update($input, $id);

        return $this->sendResponse($official->toArray(), 'Official updated successfully');
    }

    /**
     * Remove the specified Official from storage.
     * DELETE /officials/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Official $official */
        $official = $this->officialRepository->findWithoutFail($id);

        if (empty($official)) {
            return $this->sendError('Official not found');
        }

        $official->delete();

        return $this->sendResponse($id, 'Official deleted successfully');
    }
}
