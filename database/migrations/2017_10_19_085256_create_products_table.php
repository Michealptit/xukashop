<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProducer');
            $table->integer('idCatalog');
            $table->integer('idQuality');
            $table->integer('idSex');
            $table->float('price');
            $table->integer('slCon');
            $table->integer('slBan');
            $table->string('status');
            $table->text('detail');
            $table->string('imgProduct');
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
        Schema::dropIfExists('products');
    }
}
