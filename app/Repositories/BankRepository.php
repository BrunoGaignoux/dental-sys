<?php

namespace App\Repositories;

use App\Models\Bank;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BankRepository
 * @package App\Repositories
 * @version December 3, 2018, 8:18 pm UTC
 *
 * @method Bank findWithoutFail($id, $columns = ['*'])
 * @method Bank find($id, $columns = ['*'])
 * @method Bank first($columns = ['*'])
*/
class BankRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Bank::class;
    }
}
