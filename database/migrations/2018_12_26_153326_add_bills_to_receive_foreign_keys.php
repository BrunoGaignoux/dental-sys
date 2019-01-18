<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBillsToReceiveForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bills_to_receive', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
            $table->foreign('codigo_paciente')->references('id')->on('patients');
            $table->foreign('codigo_ficha_financeira')->references('id')->on('financial_statement');
            $table->foreign('codigo_ficha_financeira_distrato')->references('id')->on('distract_financial_statement');
            $table->foreign('codigo_plano_contas')->references('id')->on('plan_accounts');
            $table->foreign('codigo_banco')->references('id')->on('banks');
            $table->foreign('codigo_tabela_servico')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bills_to_receive', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica','codigo_paciente','codigo_ficha_financeira','codigo_ficha_financeira_distrato','codigo_plano_contas','codigo_banco','codigo_tabela_servico']);
        });
    }
}
