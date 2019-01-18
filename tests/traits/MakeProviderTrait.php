<?php

use Faker\Factory as Faker;
use App\Models\Provider;
use App\Repositories\ProviderRepository;

trait MakeProviderTrait
{
    /**
     * Create fake instance of Provider and save it in database
     *
     * @param array $providerFields
     * @return Provider
     */
    public function makeProvider($providerFields = [])
    {
        /** @var ProviderRepository $providerRepo */
        $providerRepo = App::make(ProviderRepository::class);
        $theme = $this->fakeProviderData($providerFields);
        return $providerRepo->create($theme);
    }

    /**
     * Get fake instance of Provider
     *
     * @param array $providerFields
     * @return Provider
     */
    public function fakeProvider($providerFields = [])
    {
        return new Provider($this->fakeProviderData($providerFields));
    }

    /**
     * Get fake data of Provider
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProviderData($providerFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo_clinica' => $fake->randomDigitNotNull,
            'codigo_endereco' => $fake->randomDigitNotNull,
            'codigo_banco' => $fake->randomDigitNotNull,
            'nome_fantasia' => $fake->word,
            'cpf' => $fake->word,
            'razao_social' => $fake->word,
            'atuacao' => $fake->word,
            'celular' => $fake->word,
            'telefone1' => $fake->word,
            'telefone2' => $fake->word,
            'inscricao_estadual' => $fake->word,
            'website' => $fake->word,
            'email' => $fake->word,
            'nome_representante' => $fake->word,
            'apelido_representante' => $fake->word,
            'email_representante' => $fake->word,
            'celular_representante' => $fake->word,
            'telefone1_representante' => $fake->word,
            'telefone2_representante' => $fake->word,
            'observacoes' => $fake->text,
            'status' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $providerFields);
    }
}
