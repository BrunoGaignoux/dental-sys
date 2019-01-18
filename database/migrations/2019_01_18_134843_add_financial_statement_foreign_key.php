<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFinancialStatementForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('financial_statement', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
            $table->foreign('codigo_plano_tratamento')->references('id')->on('treatment_plan');
            $table->foreign('desconto_mais')->references('id')->on('officials');
            $table->foreign('parcelas_mais')->references('id')->on('officials');
            $table->foreign('faixa_salarial')->references('id')->on('salary_range');
            $table->foreign('formapagamento')->references('id')->on('payment_methods');
            $table->foreign('formapagamento_cartoes')->references('id')->on('payment_methods_card');
            $table->foreign('status')->references('id')->on('patient_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('financial_statement', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica','codigo_plano_tratamento','desconto_mais','parcelas_mais','faixa_salarial','formapagamento','formapagamento_cartoes','status']);
        });
    }
}
