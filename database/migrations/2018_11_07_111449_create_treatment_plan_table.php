<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_paciente')->unsigned();
            $table->integer('codigo_nivel')->unsigned();
            $table->integer('codigo_dentista')->unsigned();
            $table->integer('codigo_indicacao')->nullable();
            $table->string('codigo_anterior')->nullable();
            $table->integer('confirmado')->nullable();
            $table->date('confirmado_data')->nullable();
            $table->integer('numero_tratamento')->nullable();
            $table->date('data')->nullable();
            $table->double('acrescimo')->nullable();
            $table->double('desconto')->nullable();
            $table->double('valortotal')->nullable();
            $table->longText('comentario')->nullable();
            $table->longText('observacoes_plano_tratamento')->nullable();
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
        Schema::dropIfExists('treatment_plan');
    }
}
