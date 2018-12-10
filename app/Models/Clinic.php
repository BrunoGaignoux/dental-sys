<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laraerp\Ordination\OrdinationTrait;

/**
 * Class Clinic
 * @package App\Models
 * @version November 8, 2018, 3:24 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Dentist
 * @property \Illuminate\Database\Eloquent\Collection Patient
 * @property \Illuminate\Database\Eloquent\Collection Schedule
 * @property \Illuminate\Database\Eloquent\Collection Stock
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property string codigo_unidade_uranet
 * @property string codigo_endereco
 * @property string login_unidade_uranet
 * @property string cnpj
 * @property string razaosocial
 * @property string fantasia
 * @property string proprietario
 * @property string fundacao
 * @property string tel1_cod
 * @property string tel1_ddd
 * @property string telefone1
 * @property string tel2_cod
 * @property string tel2_ddd
 * @property string telefone2
 * @property string fax_cod
 * @property string fax_ddd
 * @property string fax
 * @property string email
 * @property string web
 * @property string token
 * @property string senha_prefeitura
 * @property string senha_certificado
 * @property string inscricaomunicipal
 * @property string idioma
 * @property string logomarca
 * @property integer status
 * @property date datastatus
 * @property date dataimplantacao
 */
class Clinic extends Model
{
    use SoftDeletes;
    use OrdinationTrait;

    public $table = 'clinic_data';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'codigo_unidade_uranet',
        'codigo_endereco',
        'login_unidade_uranet',
        'cnpj',
        'razaosocial',
        'fantasia',
        'proprietario',
        'fundacao',
        'tel1_cod',
        'tel1_ddd',
        'telefone1',
        'tel2_cod',
        'tel2_ddd',
        'telefone2',
        'fax_cod',
        'fax_ddd',
        'fax',
        'email',
        'web',
        'token',
        'senha_prefeitura',
        'senha_certificado',
        'inscricaomunicipal',
        'idioma',
        'logomarca',
        'status',
        'datastatus',
        'dataimplantacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_unidade_uranet' => 'string',
        'codigo_endereco' => 'string',
        'login_unidade_uranet' => 'string',
        'cnpj' => 'string',
        'razaosocial' => 'string',
        'fantasia' => 'string',
        'proprietario' => 'string',
        'fundacao' => 'string',
        'tel1_cod' => 'string',
        'tel1_ddd' => 'string',
        'telefone1' => 'string',
        'tel2_cod' => 'string',
        'tel2_ddd' => 'string',
        'telefone2' => 'string',
        'fax_cod' => 'string',
        'fax_ddd' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'web' => 'string',
        'token' => 'string',
        'senha_prefeitura' => 'string',
        'senha_certificado' => 'string',
        'inscricaomunicipal' => 'string',
        'idioma' => 'string',
        'logomarca' => 'string',
        'status' => 'integer',
        'datastatus' => 'date',
        'dataimplantacao' => 'date'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function schedules()
    {
        return $this->hasMany(\App\Models\Schedule::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stocks()
    {
        return $this->hasMany(\App\Models\Stock::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
