<?php

namespace App\Repositories;

use App\Models\Clinic;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClinicRepository
 * @package App\Repositories
 * @version November 8, 2018, 3:24 pm UTC
 *
 * @method Clinic findWithoutFail($id, $columns = ['*'])
 * @method Clinic find($id, $columns = ['*'])
 * @method Clinic first($columns = ['*'])
*/
class ClinicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Clinic::class;
    }
}
