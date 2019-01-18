<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialStatementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_statement', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_plano_tratamento')->unsigned();
            $table->integer('desconto_mais')->unsigned();
            $table->integer('parcelas_mais')->unsigned();
            $table->integer('faixa_salarial')->unsigned();
            $table->integer('formapagamento')->unsigned();
            $table->integer('formapagamento_cartoes')->unsigned();
            $table->integer('status')->unsigned();
            $table->integer('codigo_banco_referencia')->unsigned();
            $table->integer('codigo_anterior')->nullable();
            $table->integer('confirmado')->nullable();
            $table->date('confirmado_data')->nullable();
            $table->integer('renegociacao')->nullable();
            $table->integer('renegociacao_qtd')->nullable();
            $table->date('renegociacao_data')->nullable();
            $table->integer('formapagamento_vencimento')->nullable();
            $table->double('valortotal')->nullable();
            $table->double('parcelas')->nullable();
            $table->double('desconto')->nullable();
            $table->integer('desconto_tipo')->nullable();
            $table->double('desconto_liberado')->nullable();
            $table->double('entrada')->nullable();
            $table->string('entrada_tipo');
            $table->double('primeira_parcela')->nullable();
            $table->integer('baixa')->nullable();
            $table->integer('responsavel')->nullable();
            $table->integer('ccfacil')->nullable();
            $table->string('ccfacil_nome_arquivo')->nullable();
            $table->string('ccfacil_nome_arquivo_md5')->nullable();
            $table->date('ccfacil_data')->nullable();
            $table->date('data_fechamento')->nullable();
            $table->longText('observacao')->nullable();
            $table->text('observacaocredito')->nullable();
            $table->string('desde_empresa')->nullable();
            $table->date('datastatus')->nullable();
            $table->string('empresa')->nullable();
            $table->string('funcao')->nullable();
            $table->string('telefone_comercial')->nullable();
            $table->string('email_comercial')->nullable();
            $table->integer('aposentado')->nullable();
            $table->string('nometestemunha1');
            $table->string('CPFtestemunha1');
            $table->string('nometestemunha2');
            $table->string('CPFtestemunha2');
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
        Schema::dropIfExists('financial_statement');
    }
}
