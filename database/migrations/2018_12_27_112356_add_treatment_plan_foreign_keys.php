<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTreatmentPlanForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('treatment_plan', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
            $table->foreign('codigo_paciente')->references('id')->on('patients');
            $table->foreign('codigo_dentista')->references('id')->on('dentist');
            $table->foreign('codigo_nivel')->references('id')->on('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('treatment_plan', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica','codigo_paciente','codigo_dentista','codigo_nivel']);
        });
    }
}
