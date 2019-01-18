<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDentistRequest;
use App\Http\Requests\UpdateDentistRequest;
use App\Repositories\DentistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DentistController extends AppBaseController
{
    /** @var  DentistRepository */
    private $dentistRepository;

    public function __construct(DentistRepository $dentistRepo)
    {
        $this->dentistRepository = $dentistRepo;
    }

    /**
     * Display a listing of the Dentist.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dentistRepository->pushCriteria(new RequestCriteria($request));
        $dentists = $this->dentistRepository->paginate(20);

        return view('dentists.index')
            ->with('dentists', $dentists);
    }

    /**
     * Show the form for creating a new Dentist.
     *
     * @return Response
     */
    public function create()
    {
        return view('dentists.create');
    }

    /**
     * Store a newly created Dentist in storage.
     *
     * @param CreateDentistRequest $request
     *
     * @return Response
     */
    public function store(CreateDentistRequest $request)
    {
        $input = $request->all();

        $dentist = $this->dentistRepository->create($input);

        Flash::success('Dentist saved successfully.');

        return redirect(route('dentists.index'));
    }

    /**
     * Display the specified Dentist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            Flash::error('Dentist not found');

            return redirect(route('dentists.index'));
        }

        return view('dentists.show')->with('dentist', $dentist);
    }

    /**
     * Show the form for editing the specified Dentist.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            Flash::error('Dentist not found');

            return redirect(route('dentists.index'));
        }

        return view('dentists.edit')->with('dentist', $dentist);
    }

    /**
     * Update the specified Dentist in storage.
     *
     * @param  int              $id
     * @param UpdateDentistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDentistRequest $request)
    {
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            Flash::error('Dentist not found');

            return redirect(route('dentists.index'));
        }

        $dentist = $this->dentistRepository->update($request->all(), $id);

        Flash::success('Dentist updated successfully.');

        return redirect(route('dentists.index'));
    }

    /**
     * Remove the specified Dentist from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dentist = $this->dentistRepository->findWithoutFail($id);

        if (empty($dentist)) {
            Flash::error('Dentist not found');

            return redirect(route('dentists.index'));
        }

        $this->dentistRepository->delete($id);

        Flash::success('Dentist deleted successfully.');

        return redirect(route('dentists.index'));
    }
}
