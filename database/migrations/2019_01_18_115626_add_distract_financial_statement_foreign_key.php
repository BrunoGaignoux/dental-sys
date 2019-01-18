<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDistractFinancialStatementForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('distract_financial_statement', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
            $table->foreign('codigo_paciente')->references('id')->on('patients');
            $table->foreign('codigo_ficha_financeira')->references('id')->on('financial_statement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('distract_financial_statement', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica','codigo_paciente','financial_statement']);
        });
    }
}
