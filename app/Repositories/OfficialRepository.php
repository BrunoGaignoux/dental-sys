<?php

namespace App\Repositories;

use App\Models\Official;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OfficialRepository
 * @package App\Repositories
 * @version December 3, 2018, 8:09 pm UTC
 *
 * @method Official findWithoutFail($id, $columns = ['*'])
 * @method Official find($id, $columns = ['*'])
 * @method Official first($columns = ['*'])
*/
class OfficialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Official::class;
    }
}
