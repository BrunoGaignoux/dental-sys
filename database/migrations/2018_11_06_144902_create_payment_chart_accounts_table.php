<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentChartAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_clinica')->unsigned();
            $table->integer('codigo_tipo_conta')->unsigned();
            $table->string('numero_conta')->nullable();
            $table->string('descricao')->nullable();
            $table->integer('reduzida')->nullable();
            $table->string('apelido')->nullable();
            $table->integer('juros')->nullable();
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
        Schema::dropIfExists('chart_accounts');
    }
}
