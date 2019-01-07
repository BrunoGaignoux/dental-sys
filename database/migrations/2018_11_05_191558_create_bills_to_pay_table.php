<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsToPayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_to_pay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_paciente')->unsigned();
            $table->integer('codigo_ficha_financeira_distrato')->unsigned();
            $table->integer('codigo_centro_custo')->unsigned();
            $table->integer('codigo_plano_contas_debito')->unsigned();
            $table->integer('codigo_plano_contas_credito')->unsigned();
            $table->integer('codigo_fornecedor')->unsigned();
            $table->integer('codigo_favorecido')->unsigned();
            $table->integer('codigo_darf')->unsigned();
            $table->integer('codigo_historico_padrao')->unsigned();
            $table->integer('codigo_status')->nullable();
            $table->integer('codigo_cp_original')->nullable();
            $table->integer('codigo_funcionario')->nullable();
            $table->integer('codigo_nivel')->nullable();
            $table->integer('codigo_compras')->nullable();
            $table->string('favorecido')->nullable();
            $table->integer('gerar_automatico')->nullable();
            $table->string('numero_nota_fiscal')->nullable();
            $table->date('data_emissao')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->text('complemento')->nullable();
            $table->integer('quantidade_parcelas')->nullable();
            $table->double('valor')->nullable();
            $table->double('bc_icms')->nullable();
            $table->double('valor_icms')->nullable();
            $table->double('bc_icms_st')->nullable();
            $table->double('valor_icms_st')->nullable();
            $table->double('valor_ipi')->nullable();
            $table->integer('despesa_operacional')->nullable();
            $table->integer('retencao')->nullable();
            $table->date('datavencimento_darf')->nullable();
            $table->text('observacoes')->nullable();
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
        Schema::dropIfExists('bills_to_pay');
    }
}
