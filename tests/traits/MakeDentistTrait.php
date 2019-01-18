<?php

use Faker\Factory as Faker;
use App\Models\Dentist;
use App\Repositories\DentistRepository;

trait MakeDentistTrait
{
    /**
     * Create fake instance of Dentist and save it in database
     *
     * @param array $dentistFields
     * @return Dentist
     */
    public function makeDentist($dentistFields = [])
    {
        /** @var DentistRepository $dentistRepo */
        $dentistRepo = App::make(DentistRepository::class);
        $theme = $this->fakeDentistData($dentistFields);
        return $dentistRepo->create($theme);
    }

    /**
     * Get fake instance of Dentist
     *
     * @param array $dentistFields
     * @return Dentist
     */
    public function fakeDentist($dentistFields = [])
    {
        return new Dentist($this->fakeDentistData($dentistFields));
    }

    /**
     * Get fake data of Dentist
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDentistData($dentistFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo_clinica' => $fake->randomDigitNotNull,
            'codigo_endereco' => $fake->randomDigitNotNull,
            'cpf' => $fake->word,
            'bloqueio' => $fake->word,
            'nascimento' => $fake->word,
            'telefone1' => $fake->word,
            'telefone2' => $fake->word,
            'celular' => $fake->word,
            'sexo' => $fake->randomDigitNotNull,
            'nomemae' => $fake->word,
            'rg' => $fake->word,
            'email_pessoal' => $fake->word,
            'email_corporativo' => $fake->word,
            'comissao' => $fake->randomDigitNotNull,
            'avaliador' => $fake->randomDigitNotNull,
            'graduacao' => $fake->word,
            'ano_graduacao' => $fake->randomDigitNotNull,
            'codigo_areaatuacao1' => $fake->randomDigitNotNull,
            'codigo_areaatuacao2' => $fake->randomDigitNotNull,
            'codigo_areaatuacao3' => $fake->randomDigitNotNull,
            'conselho_tipo' => $fake->word,
            'conselho_estado' => $fake->word,
            'conselho_numero' => $fake->word,
            'ativo' => $fake->randomDigitNotNull,
            'data_inicio' => $fake->word,
            'data_fim' => $fake->word,
            'foto' => $fake->word,
            'restricao' => $fake->text,
            'chave_ativacao' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $dentistFields);
    }
}
