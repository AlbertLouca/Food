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
        Schema::create('selectedextras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('FoodID');
           // $table->foreign('FoodID')->references('id')->on('items');
           // $table->unsignedinteger('extraID');
           //$table->foreign('extraID')->references('id')->on('extras');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selectedextras');
        //
    }
}
