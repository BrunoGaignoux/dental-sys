<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_endereco')->unsigned();
            $table->integer('codigo_banco')->unsigned();
            $table->string('nome_fantasia')->nullable();
            $table->string('cpf');
            $table->string('razao_social')->nullable();
            $table->string('atuacao')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('inscricao_estadual')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('nome_representante')->nullable();
            $table->string('apelido_representante')->nullable();
            $table->string('email_representante')->nullable();
            $table->string('celular_representante')->nullable();
            $table->string('telefone1_representante')->nullable();
            $table->string('telefone2_representante')->nullable();
            $table->longText('observacoes');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('providers');
    }
}
