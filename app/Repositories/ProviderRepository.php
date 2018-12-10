<?php

namespace App\Repositories;

use App\Models\Provider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProviderRepository
 * @package App\Repositories
 * @version December 3, 2018, 8:16 pm UTC
 *
 * @method Provider findWithoutFail($id, $columns = ['*'])
 * @method Provider find($id, $columns = ['*'])
 * @method Provider first($columns = ['*'])
*/
class ProviderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Provider::class;
    }
}
