<?php

namespace App\Repositories;

use App\Models\Schedule;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ScheduleRepository
 * @package App\Repositories
 * @version November 8, 2018, 3:35 pm UTC
 *
 * @method Schedule findWithoutFail($id, $columns = ['*'])
 * @method Schedule find($id, $columns = ['*'])
 * @method Schedule first($columns = ['*'])
*/
class ScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_anterior',
        'codigo_clinica',
        'codigo_status',
        'codigo_paciente',
        'codigo_plano_tratamento',
        'agenda_tipo',
        'codigo_dentista',
        'codigo_especialidade',
        'restricao',
        'nome_paciente',
        'preferencial',
        'telefone1',
        'telefone2',
        'celular',
        'operadora',
        'encaixe',
        'start_time',
        'end_time',
        'alldayevent',
        'timezone',
        'color',
        'observacao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Schedule::class;
    }
}
