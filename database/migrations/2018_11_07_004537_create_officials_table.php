<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_tipo_usuario')->unsigned();
            $table->integer('codigo_endereco')->unsigned();
            $table->integer('codigo_estado_civil')->unsigned();
            $table->string('nome')->nullable();
            $table->string('cpf')->nullable();
            $table->string('usuario')->nullable();
            $table->string('senha')->nullable();
            $table->integer('bloqueio')->default(0);
            $table->string('rg')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('telefone_1')->nullable();
            $table->string('telefone_2')->nullable();
            $table->string('celular')->nullable();
            $table->integer('sexo')->nullable();
            $table->string('email_pessoal')->nullable();
            $table->string('email_corporativo')->nullable();
            $table->string('nome_mae')->nullable();
            $table->date('dt_nascimento_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->date('dt_nascimento_pai')->nullable();
            $table->string('endereco_familiar')->nullable();
            $table->string('funcao_1')->nullable();
            $table->string('funcao_2')->nullable();
            $table->date('dt_admissao')->nullable();
            $table->date('dt_demissao')->nullable();
            $table->text('observacoes')->nullable();
            $table->integer('ativo')->nullable();
            $table->string('foto')->nullable();
            $table->string('cnpj')->nullable();
            $table->integer('autorizador')->nullable();
            $table->string('chave_ativacao')->nullable();
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
        Schema::dropIfExists('officials');
    }
}
