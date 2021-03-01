<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTravailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('voiture_id');
            $table->integer('mecanicien_id');
            $table->foreign('voiture_id')->references('id')->on('voitures');
            $table->foreign('mecanicien_id')->references('id')->on('mecaniciens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travails');
    }
}
