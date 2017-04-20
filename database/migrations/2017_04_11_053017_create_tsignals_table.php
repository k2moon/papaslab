<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTsignalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tsignals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('scode', 10);
            $table->char('tsignal_flag', 1);
            $table->string('tsignal_color', 10);
            $table->integer('tsignal_price');
            $table->integer('low_price');
            $table->string('tsignal_date', 20);
            $table->string('low_date', 20);
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
        //
         Schema::dropIfExists('tsignals');
    }
}
