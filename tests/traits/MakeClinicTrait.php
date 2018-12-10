<?php

use Faker\Factory as Faker;
use App\Models\Clinic;
use App\Repositories\ClinicRepository;

trait MakeClinicTrait
{
    /**
     * Create fake instance of Clinic and save it in database
     *
     * @param array $clinicFields
     * @return Clinic
     */
    public function makeClinic($clinicFields = [])
    {
        /** @var ClinicRepository $clinicRepo */
        $clinicRepo = App::make(ClinicRepository::class);
        $theme = $this->fakeClinicData($clinicFields);
        return $clinicRepo->create($theme);
    }

    /**
     * Get fake instance of Clinic
     *
     * @param array $clinicFields
     * @return Clinic
     */
    public function fakeClinic($clinicFields = [])
    {
        return new Clinic($this->fakeClinicData($clinicFields));
    }

    /**
     * Get fake data of Clinic
     *
     * @param array $postFields
     * @return array
     */
    public function fakeClinicData($clinicFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo_unidade_uranet' => $fake->word,
            'codigo_endereco' => $fake->word,
            'login_unidade_uranet' => $fake->word,
            'cnpj' => $fake->word,
            'razaosocial' => $fake->word,
            'fantasia' => $fake->word,
            'proprietario' => $fake->word,
            'fundacao' => $fake->word,
            'tel1_cod' => $fake->word,
            'tel1_ddd' => $fake->word,
            'telefone1' => $fake->word,
            'tel2_cod' => $fake->word,
            'tel2_ddd' => $fake->word,
            'telefone2' => $fake->word,
            'fax_cod' => $fake->word,
            'fax_ddd' => $fake->word,
            'fax' => $fake->word,
            'email' => $fake->word,
            'web' => $fake->word,
            'token' => $fake->word,
            'senha_prefeitura' => $fake->word,
            'senha_certificado' => $fake->word,
            'inscricaomunicipal' => $fake->word,
            'idioma' => $fake->word,
            'logomarca' => $fake->word,
            'status' => $fake->randomDigitNotNull,
            'datastatus' => $fake->word,
            'dataimplantacao' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $clinicFields);
    }
}
