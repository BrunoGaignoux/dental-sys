<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laraerp\Ordination\OrdinationTrait;

/**
 * Class Dentist
 * @package App\Models
 * @version November 8, 2018, 3:26 pm UTC
 *
 * @property \App\Models\ClinicDatum clinicDatum
 * @property \App\Models\Address address
 * @property \Illuminate\Database\Eloquent\Collection patients
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer codigo_clinica
 * @property integer codigo_endereco
 * @property string cpf
 * @property string bloqueio
 * @property date nascimento
 * @property string telefone1
 * @property string telefone2
 * @property string celular
 * @property integer sexo
 * @property string nomemae
 * @property string rg
 * @property string email_pessoal
 * @property string email_corporativo
 * @property float comissao
 * @property integer avaliador
 * @property string graduacao
 * @property integer ano_graduacao
 * @property integer codigo_areaatuacao1
 * @property integer codigo_areaatuacao2
 * @property integer codigo_areaatuacao3
 * @property string conselho_tipo
 * @property string conselho_estado
 * @property string conselho_numero
 * @property integer ativo
 * @property date data_inicio
 * @property date data_fim
 * @property string foto
 * @property string restricao
 * @property string chave_ativacao
 */
class Dentist extends Model
{
    use SoftDeletes;
    use OrdinationTrait;

    public $table = 'dentist';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'codigo_clinica',
        'codigo_endereco',
        'cpf',
        'bloqueio',
        'nascimento',
        'telefone1',
        'telefone2',
        'celular',
        'sexo',
        'nomemae',
        'rg',
        'email_pessoal',
        'email_corporativo',
        'comissao',
        'avaliador',
        'graduacao',
        'ano_graduacao',
        'codigo_areaatuacao1',
        'codigo_areaatuacao2',
        'codigo_areaatuacao3',
        'conselho_tipo',
        'conselho_estado',
        'conselho_numero',
        'ativo',
        'data_inicio',
        'data_fim',
        'foto',
        'restricao',
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
        'codigo_endereco' => 'integer',
        'cpf' => 'string',
        'bloqueio' => 'string',
        'nascimento' => 'date',
        'telefone1' => 'string',
        'telefone2' => 'string',
        'celular' => 'string',
        'sexo' => 'integer',
        'nomemae' => 'string',
        'rg' => 'string',
        'email_pessoal' => 'string',
        'email_corporativo' => 'string',
        'comissao' => 'float',
        'avaliador' => 'integer',
        'graduacao' => 'string',
        'ano_graduacao' => 'integer',
        'codigo_areaatuacao1' => 'integer',
        'codigo_areaatuacao2' => 'integer',
        'codigo_areaatuacao3' => 'integer',
        'conselho_tipo' => 'string',
        'conselho_estado' => 'string',
        'conselho_numero' => 'string',
        'ativo' => 'integer',
        'data_inicio' => 'date',
        'data_fim' => 'date',
        'foto' => 'string',
        'restricao' => 'string',
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
}
