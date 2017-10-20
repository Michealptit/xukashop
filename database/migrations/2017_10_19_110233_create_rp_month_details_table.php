<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRpMonthDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rp_month_details', function (Blueprint $table) {
            $table->increments('id');
            $table->date('thang');
            $table->string('location');
            $table->string('idCategory');
            $table->string('idProduct');
            $table->integer('sl');
            $table->float('von');
            $table->float('doanhthu');
            $table->float('loinhuan');
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
        Schema::dropIfExists('rp_month_details');
    }
}
