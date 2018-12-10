<?php

use Faker\Factory as Faker;
use App\Models\Schedule;
use App\Repositories\ScheduleRepository;

trait MakeScheduleTrait
{
    /**
     * Create fake instance of Schedule and save it in database
     *
     * @param array $scheduleFields
     * @return Schedule
     */
    public function makeSchedule($scheduleFields = [])
    {
        /** @var ScheduleRepository $scheduleRepo */
        $scheduleRepo = App::make(ScheduleRepository::class);
        $theme = $this->fakeScheduleData($scheduleFields);
        return $scheduleRepo->create($theme);
    }

    /**
     * Get fake instance of Schedule
     *
     * @param array $scheduleFields
     * @return Schedule
     */
    public function fakeSchedule($scheduleFields = [])
    {
        return new Schedule($this->fakeScheduleData($scheduleFields));
    }

    /**
     * Get fake data of Schedule
     *
     * @param array $postFields
     * @return array
     */
    public function fakeScheduleData($scheduleFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'codigo_anterior' => $fake->word,
            'codigo_clinica' => $fake->randomDigitNotNull,
            'codigo_status' => $fake->randomDigitNotNull,
            'codigo_paciente' => $fake->randomDigitNotNull,
            'codigo_plano_tratamento' => $fake->randomDigitNotNull,
            'agenda_tipo' => $fake->randomDigitNotNull,
            'codigo_dentista' => $fake->randomDigitNotNull,
            'codigo_especialidade' => $fake->randomDigitNotNull,
            'restricao' => $fake->randomDigitNotNull,
            'nome_paciente' => $fake->word,
            'preferencial' => $fake->word,
            'telefone1' => $fake->word,
            'telefone2' => $fake->word,
            'celular' => $fake->word,
            'operadora' => $fake->randomDigitNotNull,
            'encaixe' => $fake->randomDigitNotNull,
            'start_time' => $fake->date('Y-m-d H:i:s'),
            'end_time' => $fake->date('Y-m-d H:i:s'),
            'alldayevent' => $fake->word,
            'timezone' => $fake->word,
            'color' => $fake->word,
            'observacao' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $scheduleFields);
    }
}
