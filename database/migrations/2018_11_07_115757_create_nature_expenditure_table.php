<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNatureExpenditureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nature_expenditure', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('codigo_clinica')->unsigned();
            $table->increments('tipo')->nullable();
            $table->increments('descricao')->nullable();
            $table->increments('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nature_expenditure');
    }
}
