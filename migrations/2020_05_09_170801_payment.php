<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('payments', function (Blueprint $table) {
           // $table->id();
            $table->text('CardName');
            $table->integer('CardNumber');
            $table->integer('ExpireMonth');
            $table->integer('ExpireYear');
            $table->integer('SecurityCode');
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
    }
}
