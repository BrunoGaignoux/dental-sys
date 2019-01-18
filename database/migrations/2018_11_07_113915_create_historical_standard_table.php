<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricalStandardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical_standard', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_padrao')->nullable();
            $table->string('descricao')->nullable();
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
        Schema::dropIfExists('historical_standard');
    }
}
