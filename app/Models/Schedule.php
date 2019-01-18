<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laraerp\Ordination\OrdinationTrait;

/**
 * Class Schedule
 * @package App\Models
 * @version November 8, 2018, 3:35 pm UTC
 *
 * @property \App\Models\ClinicDatum clinicDatum
 * @property \Illuminate\Database\Eloquent\Collection dentist
 * @property \Illuminate\Database\Eloquent\Collection patients
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string codigo_anterior
 * @property integer codigo_clinica
 * @property integer codigo_status
 * @property integer codigo_paciente
 * @property integer codigo_plano_tratamento
 * @property integer agenda_tipo
 * @property integer codigo_dentista
 * @property integer codigo_especialidade
 * @property integer restricao
 * @property string nome_paciente
 * @property string preferencial
 * @property string telefone1
 * @property string telefone2
 * @property string celular
 * @property integer operadora
 * @property integer encaixe
 * @property string|\Carbon\Carbon start_time
 * @property string|\Carbon\Carbon end_time
 * @property smallInteger alldayevent
 * @property string timezone
 * @property string color
 * @property string observacao
 */
class Schedule extends Model
{
    use SoftDeletes;
    use OrdinationTrait;

    public $table = 'schedule';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_anterior' => 'string',
        'codigo_clinica' => 'integer',
        'codigo_status' => 'integer',
        'codigo_paciente' => 'integer',
        'codigo_plano_tratamento' => 'integer',
        'agenda_tipo' => 'integer',
        'codigo_dentista' => 'integer',
        'codigo_especialidade' => 'integer',
        'restricao' => 'integer',
        'nome_paciente' => 'string',
        'preferencial' => 'string',
        'telefone1' => 'string',
        'telefone2' => 'string',
        'celular' => 'string',
        'operadora' => 'integer',
        'encaixe' => 'integer',
        'timezone' => 'string',
        'color' => 'string',
        'observacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clinicDatum()
    {
        return $this->belongsTo(\App\Models\ClinicDatum::class);
    }
}
