<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_anterior')->nullable();
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_status')->nullable();
            $table->integer('codigo_paciente')->nullable();
            $table->integer('codigo_plano_tratamento')->nullable();
            $table->integer('agenda_tipo')->nullable();
            $table->integer('codigo_dentista')->nullable();
            $table->integer('codigo_especialidade')->nullable();
            $table->integer('restricao')->comment('1=SIM;0=NÃO')->nullable();
            $table->string('nome_paciente')->nullable();
            $table->string('preferencial')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('celular')->nullable();
            $table->integer('operadora')->nullable();
            $table->integer('encaixe')->comment('1=ENCAIXE;0=NORMAL;2=RESERVA HORARIO')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->smallInteger('alldayevent');
            $table->string('timezone');
            $table->string('color')->nullable();
            $table->string('observacao')->nullable();
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
        Schema::dropIfExists('schedule');
    }
}
