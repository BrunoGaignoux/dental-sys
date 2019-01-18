<?php

use Faker\Factory as Faker;
use App\Models\Patient;
use App\Repositories\PatientRepository;

trait MakePatientTrait
{
    /**
     * Create fake instance of Patient and save it in database
     *
     * @param array $patientFields
     * @return Patient
     */
    public function makePatient($patientFields = [])
    {
        /** @var PatientRepository $patientRepo */
        $patientRepo = App::make(PatientRepository::class);
        $theme = $this->fakePatientData($patientFields);
        return $patientRepo->create($theme);
    }

    /**
     * Get fake instance of Patient
     *
     * @param array $patientFields
     * @return Patient
     */
    public function fakePatient($patientFields = [])
    {
        return new Patient($this->fakePatientData($patientFields));
    }

    /**
     * Get fake data of Patient
     *
     * @param array $postFields
     * @return array
     */
    public function fakePatientData($patientFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo_clinica' => $fake->randomDigitNotNull,
            'codigo_endereco' => $fake->randomDigitNotNull,
            'codigo_agenda_uranet' => $fake->randomDigitNotNull,
            'numero_prontuario' => $fake->word,
            'numero_documento' => $fake->word,
            'tipo_documento' => $fake->word,
            'cpf' => $fake->word,
            'rg' => $fake->word,
            'dependente' => $fake->randomDigitNotNull,
            'estadocivil' => $fake->randomDigitNotNull,
            'sexo' => $fake->randomDigitNotNull,
            'naturalidade' => $fake->word,
            'nacionalidade' => $fake->word,
            'nascimento' => $fake->word,
            'codigo_operadora' => $fake->word,
            'telefone1' => $fake->word,
            'telefone2' => $fake->word,
            'celular' => $fake->word,
            'preferencial' => $fake->word,
            'nome_referencia' => $fake->randomDigitNotNull,
            'telefone_referencia' => $fake->word,
            'status' => $fake->word,
            'email' => $fake->word,
            'datastatus' => $fake->word,
            'observacoes' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $patientFields);
    }
}
