<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        
  Schema::create('addresses', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('CustomerID');
    $table->string('City');
    $table->string('Area');
    $table->string('StreetName');
    $table->integer('BuildingNo');
    $table->integer('Floor');
    $table->integer('Appartment');
    $table->text('Landmark');
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('addresses');
    }
}
