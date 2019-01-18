<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laraerp\Ordination\OrdinationTrait;

/**
 * Class Stock
 * @package App\Models
 * @version November 8, 2018, 3:37 pm UTC
 *
 * @property \App\Models\ClinicDatum clinicDatum
 * @property \Illuminate\Database\Eloquent\Collection dentist
 * @property \Illuminate\Database\Eloquent\Collection patients
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer codigo_clinica
 * @property integer codigo_produtos
 * @property integer codigo_pedido
 * @property integer codigo_plano_contas
 * @property integer codigo_usuario
 * @property integer codigo_nivel
 * @property integer status
 * @property integer quantidade
 * @property string motivo
 * @property string|\Carbon\Carbon tipo_acao
 */
class Stock extends Model
{
    use SoftDeletes;
    use OrdinationTrait;

    public $table = 'stock';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'codigo_clinica',
        'codigo_produtos',
        'codigo_pedido',
        'codigo_plano_contas',
        'codigo_usuario',
        'codigo_nivel',
        'status',
        'quantidade',
        'motivo',
        'tipo_acao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_clinica' => 'integer',
        'codigo_produtos' => 'integer',
        'codigo_pedido' => 'integer',
        'codigo_plano_contas' => 'integer',
        'codigo_usuario' => 'integer',
        'codigo_nivel' => 'integer',
        'status' => 'integer',
        'quantidade' => 'integer',
        'motivo' => 'string'
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
