<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Selectedfood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectedfoods', function (Blueprint $table) {
            $table->increments('id');
           // $table->integer('OrderID');
           // $table->foreign('OrderID')->references('id')->on('orders');
       $table->unsignedBigInteger('OrderID');
            $table->foreign('OrderID')->references('id')->on('orders');
            $table->string('Name');
            $table->float('Price');
            $table->integer('Quantity');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selectedfoods');
        //
    }
}
