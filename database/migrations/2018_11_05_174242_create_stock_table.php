<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_produtos')->nullable();
            $table->integer('codigo_pedido')->nullable();
            $table->integer('codigo_plano_contas')->nullable();
            $table->integer('codigo_usuario')->nullable();
            $table->integer('codigo_nivel')->nullable();
            $table->integer('status')->comment('0=ATIVO;1=INATIVO')->nullable();
            $table->integer('quantidade')->nullable();
            $table->mediumText('motivo')->nullable();
            $table->dateTime('tipo_acao')->comment('0=ENTRADA;1=SAIDA')->nullable();
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
        Schema::dropIfExists('stock');
    }
}
