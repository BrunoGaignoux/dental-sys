<?php

namespace App\Repositories;

use App\Models\Patient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PatientRepository
 * @package App\Repositories
 * @version November 8, 2018, 3:29 pm UTC
 *
 * @method Patient findWithoutFail($id, $columns = ['*'])
 * @method Patient find($id, $columns = ['*'])
 * @method Patient first($columns = ['*'])
*/
class PatientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_clinica',
        'codigo_endereco',
        'codigo_agenda_uranet',
        'numero_prontuario',
        'numero_documento',
        'tipo_documento',
        'cpf',
        'rg',
        'dependente',
        'estadocivil',
        'sexo',
        'naturalidade',
        'nacionalidade',
        'nascimento',
        'codigo_operadora',
        'telefone1',
        'telefone2',
        'celular',
        'preferencial',
        'nome_referencia',
        'telefone_referencia',
        'status',
        'email',
        'datastatus',
        'observacoes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Patient::class;
    }
}
