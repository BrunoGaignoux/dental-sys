<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('gerar_boleto')->default('0')->comment('BOLETO');
            $table->string('tipo_boleto')->nullable();
            $table->string('agencia')->nullable();
            $table->string('conta')->nullable();
            $table->string('banco')->nullable();
            $table->string('descricao')->nullable();
            $table->string('carteira')->nullable();
            $table->double('juros')->nullable();
            $table->double('multa')->nullable();
            $table->double('tarifa')->nullable();
            $table->string('mensagem') ->nullable();
            $table->integer('status')->comment('1=ATIVO; 0=INATIVO')->nullable();
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
        Schema::dropIfExists('banks');
    }
}
