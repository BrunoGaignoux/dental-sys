<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_unidade_uranet')->nullable();
            $table->integer('codigo_endereco')->unsigned();
            $table->string('login_unidade_uranet')->nullable();
            $table->string('cnpj');
            $table->string('razaosocial')->nullable();
            $table->string('fantasia')->nullable();
            $table->string('proprietario')->nullable();
            $table->string('fundacao')->nullable();
            $table->string('tel1_cod')->nullable();
            $table->string('tel1_ddd')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('tel2_cod')->nullable();
            $table->string('tel2_ddd')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('fax_cod')->nullable();
            $table->string('fax_ddd')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('token')->comment('TOKEN WS - PREFEITURA')->nullable();
            $table->string('senha_prefeitura')->nullable();
            $table->string('senha_certificado')->nullable();
            $table->string('inscricaomunicipal')->nullable();
            $table->string('idioma')->nullable();
            $table->string('logomarca')->nullable();
            $table->integer('status')->comment('1=ATIVO, 0=INATIVO')->nullable();
            $table->date('datastatus')->nullable();
            $table->date('dataimplantacao')->nullable();
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
        Schema::dropIfExists('clinic_data');
    }
}
