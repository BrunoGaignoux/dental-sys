<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOfficialsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('officials', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
            $table->foreign('codigo_tipo_usuario')->references('id')->on('user_type');
            $table->foreign('codigo_estado_civil')->references('id')->on('marital_status');
            $table->foreign('codigo_endereco')->references('id')->on('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('officials', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica','codigo_tipo_usuario','codigo_estado_civil','codigo_endereco']);
        });
    }
}
