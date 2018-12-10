<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOfficialRequest;
use App\Http\Requests\UpdateOfficialRequest;
use App\Repositories\OfficialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OfficialController extends AppBaseController
{
    /** @var  OfficialRepository */
    private $officialRepository;

    public function __construct(OfficialRepository $officialRepo)
    {
        $this->officialRepository = $officialRepo;
    }

    /**
     * Display a listing of the Official.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->officialRepository->pushCriteria(new RequestCriteria($request));
        $officials = $this->officialRepository->paginate(20);

        return view('officials.index')
            ->with('officials', $officials);
    }

    /**
     * Show the form for creating a new Official.
     *
     * @return Response
     */
    public function create()
    {
        return view('officials.create');
    }

    /**
     * Store a newly created Official in storage.
     *
     * @param CreateOfficialRequest $request
     *
     * @return Response
     */
    public function store(CreateOfficialRequest $request)
    {
        $input = $request->all();

        $official = $this->officialRepository->create($input);

        Flash::success('Official saved successfully.');

        return redirect(route('officials.index'));
    }

    /**
     * Display the specified Official.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $official = $this->officialRepository->findWithoutFail($id);

        if (empty($official)) {
            Flash::error('Official not found');

            return redirect(route('officials.index'));
        }

        return view('officials.show')->with('official', $official);
    }

    /**
     * Show the form for editing the specified Official.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $official = $this->officialRepository->findWithoutFail($id);

        if (empty($official)) {
            Flash::error('Official not found');

            return redirect(route('officials.index'));
        }

        return view('officials.edit')->with('official', $official);
    }

    /**
     * Update the specified Official in storage.
     *
     * @param  int              $id
     * @param UpdateOfficialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOfficialRequest $request)
    {
        $official = $this->officialRepository->findWithoutFail($id);

        if (empty($official)) {
            Flash::error('Official not found');

            return redirect(route('officials.index'));
        }

        $official = $this->officialRepository->update($request->all(), $id);

        Flash::success('Official updated successfully.');

        return redirect(route('officials.index'));
    }

    /**
     * Remove the specified Official from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $official = $this->officialRepository->findWithoutFail($id);

        if (empty($official)) {
            Flash::error('Official not found');

            return redirect(route('officials.index'));
        }

        $this->officialRepository->delete($id);

        Flash::success('Official deleted successfully.');

        return redirect(route('officials.index'));
    }
}
