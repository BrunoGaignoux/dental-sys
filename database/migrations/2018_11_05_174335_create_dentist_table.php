<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_endereco')->unsigned();
            $table->string('cpf')->nullable();
            $table->string('bloqueio')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('celular')->nullable();
            $table->integer('sexo')->nullable();
            $table->string('nomemae')->nullable();
            $table->string('rg')->nullable();
            $table->string('email_pessoal')->nullable();
            $table->string('email_corporativo')->nullable();
            $table->double('comissao')->nullable();
            $table->integer('avaliador')->nullable();
            $table->string('graduacao')->nullable();
            $table->integer('ano_graduacao')->nullable();
            $table->integer('codigo_areaatuacao1')->nullable();
            $table->integer('codigo_areaatuacao2')->nullable();
            $table->integer('codigo_areaatuacao3')->nullable();
            $table->string('conselho_tipo')->nullable();
            $table->string('conselho_estado')->nullable();
            $table->string('conselho_numero')->nullable();
            $table->integer('ativo')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->string('foto')->nullable();
            $table->mediumText('restricao')->nullable();
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
        Schema::dropIfExists('dentist');
    }
}
