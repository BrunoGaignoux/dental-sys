<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalInfoTreatmentForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('additional_info_treatment', function (Blueprint $table) {
            $table->foreign('codigo_clinica')->references('id')->on('clinic_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('additional_info_treatment', function (Blueprint $table) {
            $table->dropForeign(['codigo_clinica']);
        });
    }
}
