<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsToReceiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_to_receive', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_paciente')->unsigned();
            $table->integer('codigo_ficha_financeira')->unsigned();
            $table->integer('codigo_ficha_financeira_distrato')->unsigned();
            $table->integer('codigo_plano_contas')->unsigned();
            $table->integer('codigo_banco')->unsigned();
            $table->integer('codigo_tabela_servico')->unsigned();
            $table->integer('formapagamento')->nullable();
            $table->integer('formapagamento_cartoes')->nullable();
            $table->integer('aprovado')->nullable();
            $table->date('data_aprovado')->nullable();
            $table->integer('parcela_sinal')->nullable();
            $table->integer('bloquear')->nullable();
            $table->string('num_documento')->nullable();
            $table->string('descricao')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->double('valor')->nullable();
            $table->double('valor_distrato')->nullable();
            $table->date('data_distrato')->nullable();
            $table->integer('parcelas')->nullable();
            $table->date('data_pagamento')->nullable();
            $table->double('valor_pago')->nullable();
            $table->integer('porcentagem_pago')->nullable();
            $table->string('observacao')->nullable();
            $table->integer('situacao')->nullable();
            $table->dateTime('situacao_baixa')->nullable();
            $table->double('juros')->nullable();
            $table->double('multa')->nullable();
            $table->double('desconto')->nullable();
            $table->double('juros_renegociacao')->nullable();
            $table->double('multa_renegociacao')->nullable();
            $table->double('taxa_baixa_renegociacao')->nullable();
            $table->double('taxa_administracao_cartao')->nullable();
            $table->integer('renegociacao')->nullable();
            $table->date('data_renegociacao')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills_to_receive');
    }
}
