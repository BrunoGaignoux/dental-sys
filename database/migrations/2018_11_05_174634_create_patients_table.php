<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_endereco')->unsigned();
            $table->integer('codigo_agenda_uranet')->unsigned();
            $table->string('numero_prontuario')->nullable();
            $table->string('nome')->nullable();
            $table->string('nome_social')->nullable();
            $table->string('numero_documento')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->integer('dependente')->comment('1=SIM;0=NÃO')->nullable();
            $table->integer('estadocivil')->nullable();
            $table->integer('sexo')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('codigo_operadora')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('celular')->nullable();
            $table->string('preferencial')->nullable();
            $table->integer('nome_referencia')->nullable();
            $table->string('telefone_referencia')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->date('datastatus')->nullable();
            $table->string('observacoes')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
