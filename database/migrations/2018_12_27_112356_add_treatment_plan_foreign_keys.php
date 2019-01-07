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
            $table->foreign('codigo_tipo_conta')->references('id')->on('accounts_type');
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
            $table->dropForeign(['codigo_clinica','codigo_tipo_conta']);
        });
    }
}
