<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Selectedextra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectedextra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('FoodID');
            $table->foreign('FoodID')->references('id')->on('items');
            $table->integer('extraID');
            $table->foreign('extraID')->references('id')->on('extra');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selectedextra');
        //
    }
}
