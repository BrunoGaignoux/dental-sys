<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistractFinancialStatementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distract_financial_statement', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_paciente')->unsigned();
            $table->integer('codigo_ficha_financeira')->unsigned();
            $table->integer('codigo_paciente_credito')->nullable();
            $table->date('data_distrato')->nullable();
            $table->integer('parcelas')->nullable();
            $table->double('taxa_administrativa')->nullable();
            $table->double('valor_procedimentos')->nullable();
            $table->double('multa')->nullable();
            $table->double('desconto')->nullable();
            $table->double('valor_restituir')->nullable();
            $table->double('valor_receber')->nullable();
            $table->mediumText('motivo_distrato')->nullable();
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
        Schema::dropIfExists('distract_financial_statement');
    }
}
