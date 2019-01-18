<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_paciente')->unsigned();
            $table->integer('codigo_ficha_financeira')->unsigned();
            $table->integer('codigo_contas_receber')->unsigned();
            $table->integer('codigo_factoring')->nullable();
            $table->integer('codigo_banco')->unsigned();
            $table->float('valor')->nullable();
            $table->string('nometitular')->nullable();
            $table->string('recebidode')->nullable();
            $table->string('encaminhado_para')->nullable();
            $table->date('bom_para')->nullable();
            $table->integer('situacao')->nullable();
            $table->text('situacao_motivo')->nullable();
            $table->integer('cheque_status')->nullable();
            $table->date('compensacao')->nullable();
            $table->date('cheque_documento_data')->nullable();
            $table->string('cheque_documento_md5')->nullable();
            $table->string('cheque_documento_nome')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('checks');
    }
}
