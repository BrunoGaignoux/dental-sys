<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Provider
 * @package App\Models
 * @version December 3, 2018, 8:16 pm UTC
 *
 * @property \App\Models\Bank bank
 * @property \App\Models\ClinicDatum clinicDatum
 * @property \App\Models\Address address
 * @property \Illuminate\Database\Eloquent\Collection dentist
 * @property \Illuminate\Database\Eloquent\Collection patients
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer codigo_clinica
 * @property integer codigo_endereco
 * @property integer codigo_banco
 * @property string nome_fantasia
 * @property string cpf
 * @property string razao_social
 * @property string atuacao
 * @property string celular
 * @property string telefone1
 * @property string telefone2
 * @property string inscricao_estadual
 * @property string website
 * @property string email
 * @property string nome_representante
 * @property string apelido_representante
 * @property string email_representante
 * @property string celular_representante
 * @property string telefone1_representante
 * @property string telefone2_representante
 * @property string observacoes
 * @property integer status
 */
class Provider extends Model
{
    use SoftDeletes;

    public $table = 'providers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'codigo_clinica',
        'codigo_endereco',
        'codigo_banco',
        'nome_fantasia',
        'cpf',
        'razao_social',
        'atuacao',
        'celular',
        'telefone1',
        'telefone2',
        'inscricao_estadual',
        'website',
        'email',
        'nome_representante',
        'apelido_representante',
        'email_representante',
        'celular_representante',
        'telefone1_representante',
        'telefone2_representante',
        'observacoes',
        'status'
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
        'codigo_banco' => 'integer',
        'nome_fantasia' => 'string',
        'cpf' => 'string',
        'razao_social' => 'string',
        'atuacao' => 'string',
        'celular' => 'string',
        'telefone1' => 'string',
        'telefone2' => 'string',
        'inscricao_estadual' => 'string',
        'website' => 'string',
        'email' => 'string',
        'nome_representante' => 'string',
        'apelido_representante' => 'string',
        'email_representante' => 'string',
        'celular_representante' => 'string',
        'telefone1_representante' => 'string',
        'telefone2_representante' => 'string',
        'observacoes' => 'string',
        'status' => 'integer'
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
    public function bank()
    {
        return $this->belongsTo(\App\Models\Bank::class);
    }

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
