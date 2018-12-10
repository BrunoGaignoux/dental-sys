<?php

namespace App\Repositories;

use App\Models\Dentist;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DentistRepository
 * @package App\Repositories
 * @version November 8, 2018, 3:26 pm UTC
 *
 * @method Dentist findWithoutFail($id, $columns = ['*'])
 * @method Dentist find($id, $columns = ['*'])
 * @method Dentist first($columns = ['*'])
*/
class DentistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Dentist::class;
    }
}
