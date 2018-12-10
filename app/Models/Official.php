<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Official
 * @package App\Models
 * @version December 3, 2018, 8:09 pm UTC
 *
 * @property \App\Models\ClinicDatum clinicDatum
 * @property \App\Models\Address address
 * @property \App\Models\MaritalStatus maritalStatus
 * @property \App\Models\UserType userType
 * @property \Illuminate\Database\Eloquent\Collection dentist
 * @property \Illuminate\Database\Eloquent\Collection patients
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer codigo_clinica
 * @property integer codigo_tipo_usuario
 * @property integer codigo_endereco
 * @property integer codigo_estado_civil
 * @property string nome
 * @property string cpf
 * @property string usuario
 * @property string senha
 * @property integer bloqueio
 * @property string rg
 * @property date nascimento
 * @property string telefone_1
 * @property string telefone_2
 * @property string celular
 * @property integer sexo
 * @property string email_pessoal
 * @property string email_corporativo
 * @property string nome_mae
 * @property date dt_nascimento_mae
 * @property string nome_pai
 * @property date dt_nascimento_pai
 * @property string endereco_familiar
 * @property string funcao_1
 * @property string funcao_2
 * @property date dt_admissao
 * @property date dt_demissao
 * @property string observacoes
 * @property integer ativo
 * @property string foto
 * @property string cnpj
 * @property integer autorizador
 * @property string chave_ativacao
 */
class Official extends Model
{
    use SoftDeletes;

    public $table = 'officials';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'codigo_clinica',
        'codigo_tipo_usuario',
        'codigo_endereco',
        'codigo_estado_civil',
        'nome',
        'cpf',
        'usuario',
        'senha',
        'bloqueio',
        'rg',
        'nascimento',
        'telefone_1',
        'telefone_2',
        'celular',
        'sexo',
        'email_pessoal',
        'email_corporativo',
        'nome_mae',
        'dt_nascimento_mae',
        'nome_pai',
        'dt_nascimento_pai',
        'endereco_familiar',
        'funcao_1',
        'funcao_2',
        'dt_admissao',
        'dt_demissao',
        'observacoes',
        'ativo',
        'foto',
        'cnpj',
        'autorizador',
        'chave_ativacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_clinica' => 'integer',
        'codigo_tipo_usuario' => 'integer',
        'codigo_endereco' => 'integer',
        'codigo_estado_civil' => 'integer',
        'nome' => 'string',
        'cpf' => 'string',
        'usuario' => 'string',
        'senha' => 'string',
        'bloqueio' => 'integer',
        'rg' => 'string',
        'nascimento' => 'date',
        'telefone_1' => 'string',
        'telefone_2' => 'string',
        'celular' => 'string',
        'sexo' => 'integer',
        'email_pessoal' => 'string',
        'email_corporativo' => 'string',
        'nome_mae' => 'string',
        'dt_nascimento_mae' => 'date',
        'nome_pai' => 'string',
        'dt_nascimento_pai' => 'date',
        'endereco_familiar' => 'string',
        'funcao_1' => 'string',
        'funcao_2' => 'string',
        'dt_admissao' => 'date',
        'dt_demissao' => 'date',
        'observacoes' => 'string',
        'ativo' => 'integer',
        'foto' => 'string',
        'cnpj' => 'string',
        'autorizador' => 'integer',
        'chave_ativacao' => 'string'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function maritalStatus()
    {
        return $this->belongsTo(\App\Models\MaritalStatus::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function userType()
    {
        return $this->belongsTo(\App\Models\UserType::class);
    }
}
