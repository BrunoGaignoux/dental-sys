<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrimonyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimony', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->string('setor')->nullable();
            $table->string('descricao')->nullable();
            $table->float('valor')->nullable();
            $table->dateTime('data_aquisicao')->nullable();
            $table->string('tempogarantia')->nullable();
            $table->string('cor')->nullable();
            $table->string('quantidade')->nullable();
            $table->string('fornecedor')->nullable();
            $table->string('numero_nota_fiscal')->nullable();
            $table->string('dimensoes')->nullable();
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
        Schema::dropIfExists('patrimony');
    }
}
