<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateScheduleAPIRequest;
use App\Http\Requests\API\UpdateScheduleAPIRequest;
use App\Models\Address;
use App\Models\Patient;
use App\Models\Schedule;
use App\Repositories\ScheduleRepository;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ScheduleController
 * @package App\Http\Controllers\API
 */

class ScheduleAPIController extends AppBaseController
{
    /** @var  ScheduleRepository */
    private $scheduleRepository;

    public function __construct(ScheduleRepository $scheduleRepo)
    {
        $this->scheduleRepository = $scheduleRepo;
    }

    /**
     * Display a listing of the Schedule.
     * GET|HEAD /schedules
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->scheduleRepository->pushCriteria(new RequestCriteria($request));
        $this->scheduleRepository->pushCriteria(new LimitOffsetCriteria($request));
        $schedules = $this->scheduleRepository->all();

        return $this->sendResponse($schedules->toArray(), 'Schedules retrieved successfully');
    }

    /**
     * Store a newly created Schedule in storage.
     * POST /schedules
     *
     * @param CreateScheduleAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateScheduleAPIRequest $request)
    {
        $input = $request->all();

        $schedules = $this->scheduleRepository->create($input);

        return $this->sendResponse($schedules->toArray(), 'Schedule saved successfully');
    }

    /**
     * Display the specified Schedule.
     * GET|HEAD /schedules/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Schedule $schedule */
        $schedule = $this->scheduleRepository->findWithoutFail($id);

        if (empty($schedule)) {
            return $this->sendError('Schedule not found');
        }

        return $this->sendResponse($schedule->toArray(), 'Schedule retrieved successfully');
    }

    /**
     * Update the specified Schedule in storage.
     * PUT/PATCH /schedules/{id}
     *
     * @param  int $id
     * @param UpdateScheduleAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateScheduleAPIRequest $request)
    {
        $input = $request->all();

        /** @var Schedule $schedule */
        $schedule = $this->scheduleRepository->findWithoutFail($id);

        if (empty($schedule)) {
            return $this->sendError('Schedule not found');
        }

        $schedule = $this->scheduleRepository->update($input, $id);

        return $this->sendResponse($schedule->toArray(), 'Schedule updated successfully');
    }

    /**
     * Remove the specified Schedule from storage.
     * DELETE /schedules/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Schedule $schedule */
        $schedule = $this->scheduleRepository->findWithoutFail($id);

        if (empty($schedule)) {
            return $this->sendError('Schedule not found');
        }

        $schedule->delete();

        return $this->sendResponse($id, 'Schedule deleted successfully');
    }

    /**
     * @param Request $request
     * '---------------------------------------------------------------------------------------------------------------'
     * ' General Objective:    Agendamento Presencial                                                                  '
     * ' Specific Objective:   Cadastro de clientes do agendamento presencial                                          '
     * ' Entries:              p_st_planta_agv                                                                         '
     * ' Return:               Json                                                                                    '
     * '---------------------------------------------------------------------------------------------------------------'
     * @return Response
     */
    public function createFaceToFaceScheduling(Request $request)
    {
    /** Recovers parameters of patient */
        $p_st_nome = $request->get('nome');
        $p_st_rg = $request->get('rg');
        $p_st_sexo = $request->get('sexo');
        $p_st_telefone1 = $request->get('telefone1');
        $p_st_telefone2 = $request->get('telefone2');
        $p_st_celular = $request->get('celular');
        $p_st_email = $request->get('email');
    /** Recovers parameters of address */
        $p_st_logradouro = $request->get('logradouro');
        $p_st_complemento = $request->get('complemento');
        $p_st_numero = $request->get('numero');
        $p_st_cep = $request->get('cep');
        $p_st_bairro = $request->get('bairro');
        $p_st_cidade = $request->get('cidade');
        $p_st_estado = $request->get('estado');
        $p_st_pais = $request->get('pais');

        /** Initialize validator */
        $v_ar_validator = Validator::make($request->all(),[
            'nome' => 'required',
            'rg' => 'required',
            'sexo' => 'required',
            'telefone1' => 'required',
            'telefone2' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'logradouro' => 'required',
            'complemento' => 'required',
            'numero' => 'required',
            'cep' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'pais' => 'required',
        ]);
    /** If validator fails */
        if ($v_ar_validator->fails())
        {
            return response()->json(array('success' => false, 'return' => '', 'return_code' => 400, 'error_messages' => $v_ar_validator->errors()), 401);
        }
        try {
        /** Save data in uranet schedule */

        /** Save patient data */
            $v_patient = new Patient();
            $v_patient->nome = $p_st_nome;
            $v_patient->rg = $p_st_rg;
            $v_patient->sexo = $p_st_sexo;
            $v_patient->telefone1 = $p_st_telefone1;
            $v_patient->telefone2 = $p_st_telefone2;
            $v_patient->celular = $p_st_celular;
            $v_patient->email = $p_st_email;
            if($v_patient->save()) {
            /** Save user data */
                $v_user = new User();
                $v_user->codigo_clinica = \Auth::user()->codigo_clinica;
                $v_user->codigo_tipo_usuario = 4;
                $v_user->codigo_pessoa_fisica = 1;
                $v_user->name = $p_st_nome;
                $v_user->email = $p_st_email;
                $v_user->password = '';
                if($v_user->save()) {
                /** Save user data */
                    $v_address = new Address();
                    $v_address->logradouro = $p_st_logradouro;
                    $v_address->complemento = $p_st_complemento;
                    $v_address->numero = $p_st_numero;
                    $v_address->cep = $p_st_cep;
                    $v_address->bairro = $p_st_bairro;
                    $v_address->cidade = $p_st_cidade;
                    $v_address->estado = $p_st_estado;
                    $v_address->pais = $p_st_pais;
                    if($v_address->save()) {

                    }
                }
            }
        /** Return response from api */
            return response()->json(array('success' => true, 'return' => '', 'return_code' => 200, 'error_messages' => $this->linha, 'return_message' => $this->pkgResponse));
        }
        catch (\Exception $exception)
        {
        /** Return internal server error if exception exist  */
            return response()->json(array('success' => false, 'return' =>  $exception->getFile(), 'return_code' => $exception->getLine(), 'error_messages' => $exception->getMessage()), $exception->getCode());
        }
    }
}
