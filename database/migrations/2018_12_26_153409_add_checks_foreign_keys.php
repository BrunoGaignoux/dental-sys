<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChecksForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checks', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
            $table->foreign('codigo_paciente')->references('id')->on('patients');
            $table->foreign('codigo_ficha_financeira')->references('id')->on('financial_statement');
            $table->foreign('codigo_contas_receber')->references('id')->on('bills_to_receive');
            $table->foreign('codigo_banco')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checks', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica','codigo_paciente','codigo_ficha_financeira','codigo_contas_receber','codigo_banco']);
        });
    }
}
