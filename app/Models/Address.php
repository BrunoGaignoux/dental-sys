<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laraerp\Ordination\OrdinationTrait;

/**
 * Class Address
 * @package App\Models
 * @version November 8, 2018, 3:42 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Dentist
 * @property \Illuminate\Database\Eloquent\Collection Patient
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string logradouro
 * @property string complemento
 * @property integer numero
 * @property string cep
 * @property string bairro
 * @property string cidade
 * @property string estado
 * @property string pais
 */
class Address extends Model
{
    use SoftDeletes;
    use OrdinationTrait;

    public $table = 'address';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'logradouro',
        'complemento',
        'numero',
        'cep',
        'bairro',
        'cidade',
        'estado',
        'pais'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'logradouro' => 'string',
        'complemento' => 'string',
        'numero' => 'integer',
        'cep' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'pais' => 'string'
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
    public function dentists()
    {
        return $this->hasMany(\App\Models\Dentist::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function patients()
    {
        return $this->hasMany(\App\Models\Patient::class);
    }
}
