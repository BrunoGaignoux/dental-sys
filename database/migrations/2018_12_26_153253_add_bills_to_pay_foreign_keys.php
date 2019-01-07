<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBillsToPayForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bills_to_pay', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
            $table->foreign('codigo_paciente')->references('id')->on('patients');
            $table->foreign('codigo_ficha_financeira_distrato')->references('id')->on('distract_financial_statement');
            $table->foreign('codigo_centro_custo')->references('id')->on('cost_center');
            $table->foreign('codigo_plano_contas_debito')->references('id')->on('plan_accounts');
            $table->foreign('codigo_plano_contas_credito')->references('id')->on('plan_accounts');
            $table->foreign('codigo_fornecedor')->references('id')->on('providers');
            $table->foreign('codigo_favorecido')->references('id')->on('favoreds');
            $table->foreign('codigo_darf')->references('id')->on('darfs');
            $table->foreign('codigo_historico_padrao')->references('id')->on('historical_standard');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bills_to_pay', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica','codigo_paciente','codigo_ficha_financeira_distrato','codigo_centro_custo','codigo_plano_contas_debito','codigo_plano_contas_credito','codigo_fornecedor','codigo_favorecido','codigo_darf','codigo_historico_padrao']);
        });
    }
}
