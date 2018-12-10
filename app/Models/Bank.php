<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bank
 * @package App\Models
 * @version December 3, 2018, 8:18 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection dentist
 * @property \Illuminate\Database\Eloquent\Collection patients
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection Provider
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer codigo_clinica
 * @property integer gerar_boleto
 * @property string tipo_boleto
 * @property string agencia
 * @property string conta
 * @property string banco
 * @property string descricao
 * @property string carteira
 * @property float juros
 * @property float multa
 * @property float tarifa
 * @property string mensagem
 * @property integer status
 */
class Bank extends Model
{
    use SoftDeletes;

    public $table = 'banks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'codigo_clinica',
        'gerar_boleto',
        'tipo_boleto',
        'agencia',
        'conta',
        'banco',
        'descricao',
        'carteira',
        'juros',
        'multa',
        'tarifa',
        'mensagem',
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
        'gerar_boleto' => 'integer',
        'tipo_boleto' => 'string',
        'agencia' => 'string',
        'conta' => 'string',
        'banco' => 'string',
        'descricao' => 'string',
        'carteira' => 'string',
        'juros' => 'float',
        'multa' => 'float',
        'tarifa' => 'float',
        'mensagem' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function providers()
    {
        return $this->hasMany(\App\Models\Provider::class);
    }
}
