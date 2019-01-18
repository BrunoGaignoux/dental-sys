<?php

use Faker\Factory as Faker;
use App\Models\Bank;
use App\Repositories\BankRepository;

trait MakeBankTrait
{
    /**
     * Create fake instance of Bank and save it in database
     *
     * @param array $bankFields
     * @return Bank
     */
    public function makeBank($bankFields = [])
    {
        /** @var BankRepository $bankRepo */
        $bankRepo = App::make(BankRepository::class);
        $theme = $this->fakeBankData($bankFields);
        return $bankRepo->create($theme);
    }

    /**
     * Get fake instance of Bank
     *
     * @param array $bankFields
     * @return Bank
     */
    public function fakeBank($bankFields = [])
    {
        return new Bank($this->fakeBankData($bankFields));
    }

    /**
     * Get fake data of Bank
     *
     * @param array $postFields
     * @return array
     */
    public function fakeBankData($bankFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo_clinica' => $fake->randomDigitNotNull,
            'gerar_boleto' => $fake->randomDigitNotNull,
            'tipo_boleto' => $fake->word,
            'agencia' => $fake->word,
            'conta' => $fake->word,
            'banco' => $fake->word,
            'descricao' => $fake->word,
            'carteira' => $fake->word,
            'juros' => $fake->randomDigitNotNull,
            'multa' => $fake->randomDigitNotNull,
            'tarifa' => $fake->randomDigitNotNull,
            'mensagem' => $fake->word,
            'status' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $bankFields);
    }
}
