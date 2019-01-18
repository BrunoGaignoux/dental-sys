<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRestrictionForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restriction', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
            $table->foreign('codigo_pacientes')->references('id')->on('patients');
            $table->foreign('codigo_contas_receber')->references('id')->on('bills_to_receive');
            //$table->foreign('codigo_pacientes_status')->references('id')->on('clinic_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restriction', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica','codigo_pacientes','codigo_contas_receber']);
        });
    }
}
