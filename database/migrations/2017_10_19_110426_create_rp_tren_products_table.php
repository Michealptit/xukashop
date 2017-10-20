<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRpTrenProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rp_tren_products', function (Blueprint $table) {
            $table->increments('id');
            $table->date('thang');
            $table->date('idProduct');
            $table->integer('sl');
            $table->float('von');
            $table->float('doanhthu');
            $table->float('lai');
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
        Schema::dropIfExists('rp_tren_products');
    }
}
