<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->integer('idProduct');
            $table->string('type'); // ctv / member
            $table->string('status');
            $table->string('codeQuality');
            $table->string('location'); // choose --> 
            $table->string('codeSex');
            $table->string('size');
            $table->string('color');
            $table->float('priceRoot');  //
            $table->float('priceSale');
            $table->float('ship');
            $table->float('percent'); // phan tramg giam gia
            $table->float('profit'); // loi nhuan
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
        Schema::dropIfExists('orders');
    }
}
