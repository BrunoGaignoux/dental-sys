<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_endereco')->unsigned();
            $table->integer('codigo_banco')->unsigned();
            $table->string('nomefantasia')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('razaosocial')->nullable();
            $table->string('atuacao')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('inscricaoestadual')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('nomerepresentante')->nullable();
            $table->string('apelidorepresentante')->nullable();
            $table->string('emailrepresentante')->nullable();
            $table->string('celularrepresentante')->nullable();
            $table->string('telefone1representante')->nullable();
            $table->string('telefone2representante')->nullable();
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
        Schema::dropIfExists('laboratories');
    }
}
