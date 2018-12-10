<?php

use Faker\Factory as Faker;
use App\Models\Official;
use App\Repositories\OfficialRepository;

trait MakeOfficialTrait
{
    /**
     * Create fake instance of Official and save it in database
     *
     * @param array $officialFields
     * @return Official
     */
    public function makeOfficial($officialFields = [])
    {
        /** @var OfficialRepository $officialRepo */
        $officialRepo = App::make(OfficialRepository::class);
        $theme = $this->fakeOfficialData($officialFields);
        return $officialRepo->create($theme);
    }

    /**
     * Get fake instance of Official
     *
     * @param array $officialFields
     * @return Official
     */
    public function fakeOfficial($officialFields = [])
    {
        return new Official($this->fakeOfficialData($officialFields));
    }

    /**
     * Get fake data of Official
     *
     * @param array $postFields
     * @return array
     */
    public function fakeOfficialData($officialFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo_clinica' => $fake->randomDigitNotNull,
            'codigo_tipo_usuario' => $fake->randomDigitNotNull,
            'codigo_endereco' => $fake->randomDigitNotNull,
            'codigo_estado_civil' => $fake->randomDigitNotNull,
            'nome' => $fake->word,
            'cpf' => $fake->word,
            'usuario' => $fake->word,
            'senha' => $fake->word,
            'bloqueio' => $fake->randomDigitNotNull,
            'rg' => $fake->word,
            'nascimento' => $fake->word,
            'telefone_1' => $fake->word,
            'telefone_2' => $fake->word,
            'celular' => $fake->word,
            'sexo' => $fake->randomDigitNotNull,
            'email_pessoal' => $fake->word,
            'email_corporativo' => $fake->word,
            'nome_mae' => $fake->word,
            'dt_nascimento_mae' => $fake->word,
            'nome_pai' => $fake->word,
            'dt_nascimento_pai' => $fake->word,
            'endereco_familiar' => $fake->word,
            'funcao_1' => $fake->word,
            'funcao_2' => $fake->word,
            'dt_admissao' => $fake->word,
            'dt_demissao' => $fake->word,
            'observacoes' => $fake->text,
            'ativo' => $fake->randomDigitNotNull,
            'foto' => $fake->word,
            'cnpj' => $fake->word,
            'autorizador' => $fake->randomDigitNotNull,
            'chave_ativacao' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $officialFields);
    }
}
