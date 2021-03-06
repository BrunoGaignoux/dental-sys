<?php

use Faker\Factory as Faker;
use App\Models\Address;
use App\Repositories\AddressRepository;

trait MakeAddressTrait
{
    /**
     * Create fake instance of Address and save it in database
     *
     * @param array $addressFields
     * @return Address
     */
    public function makeAddress($addressFields = [])
    {
        /** @var AddressRepository $addressRepo */
        $addressRepo = App::make(AddressRepository::class);
        $theme = $this->fakeAddressData($addressFields);
        return $addressRepo->create($theme);
    }

    /**
     * Get fake instance of Address
     *
     * @param array $addressFields
     * @return Address
     */
    public function fakeAddress($addressFields = [])
    {
        return new Address($this->fakeAddressData($addressFields));
    }

    /**
     * Get fake data of Address
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAddressData($addressFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'logradouro' => $fake->word,
            'complemento' => $fake->word,
            'numero' => $fake->randomDigitNotNull,
            'cep' => $fake->word,
            'bairro' => $fake->word,
            'cidade' => $fake->word,
            'estado' => $fake->word,
            'pais' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $addressFields);
    }
}
