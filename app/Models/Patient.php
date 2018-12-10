<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laraerp\Ordination\OrdinationTrait;

/**
 * Class Patient
 * @package App\Models
 * @version November 8, 2018, 3:29 pm UTC
 *
 * @property \App\Models\ClinicDatum clinicDatum
 * @property \App\Models\Address address
 * @property \Illuminate\Database\Eloquent\Collection dentist
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer codigo_clinica
 * @property integer codigo_endereco
 * @property integer codigo_agenda_uranet
 * @property string nome
 * @property string nome_social
 * @property string numero_prontuario
 * @property string numero_documento
 * @property string tipo_documento
 * @property string cpf
 * @property string rg
 * @property integer dependente
 * @property integer estadocivil
 * @property integer sexo
 * @property string naturalidade
 * @property string nacionalidade
 * @property date nascimento
 * @property string codigo_operadora
 * @property string telefone1
 * @property string telefone2
 * @property string celular
 * @property string preferencial
 * @property integer nome_referencia
 * @property string telefone_referencia
 * @property string status
 * @property string email
 * @property date datastatus
 * @property string observacoes
 */
class Patient extends Model
{
    use SoftDeletes;
    use OrdinationTrait;

    public $table = 'patients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'codigo_clinica',
        'codigo_endereco',
        'codigo_agenda_uranet',
        'numero_prontuario',
        'nome',
        'nome_social',
        'numero_documento',
        'tipo_documento',
        'cpf',
        'rg',
        'dependente',
        'estadocivil',
        'sexo',
        'naturalidade',
        'nacionalidade',
        'nascimento',
        'codigo_operadora',
        'telefone1',
        'telefone2',
        'celular',
        'preferencial',
        'nome_referencia',
        'telefone_referencia',
        'status',
        'email',
        'datastatus',
        'observacoes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_clinica' => 'integer',
        'codigo_endereco' => 'integer',
        'codigo_agenda_uranet' => 'integer',
        'numero_prontuario' => 'string',
        'nome' => 'string',
        'nome_social' => 'string',
        'numero_documento' => 'string',
        'tipo_documento' => 'string',
        'cpf' => 'string',
        'rg' => 'string',
        'dependente' => 'integer',
        'estadocivil' => 'integer',
        'sexo' => 'integer',
        'naturalidade' => 'string',
        'nacionalidade' => 'string',
        'nascimento' => 'date',
        'codigo_operadora' => 'string',
        'telefone1' => 'string',
        'telefone2' => 'string',
        'celular' => 'string',
        'preferencial' => 'string',
        'nome_referencia' => 'integer',
        'telefone_referencia' => 'string',
        'status' => 'string',
        'email' => 'string',
        'datastatus' => 'date',
        'observacoes' => 'string'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function address()
    {
        return $this->belongsTo(\App\Models\Address::class);
    }
}
