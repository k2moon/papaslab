<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuynsellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('buynsells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tsignal_id');
            $table->integer('buy_price');
            $table->integer('sell_price');
            $table->string('buy_date', 20);
            $table->string('sell_date', 20);
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
        Schema::dropIfExists('buynsells');
    }
}
