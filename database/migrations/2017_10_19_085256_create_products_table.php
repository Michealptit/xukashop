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
            $table->string('idQuality'); // F1, SuperFake, Replica
            $table->string('idSex');  // Male, Female 
            $table->string('name');
            $table->float('price');
            $table->integer('slCon')->default(0);
            $table->integer('slBan')->default(0);
            $table->string('status')->default('show');  // show -- hide
            $table->text('detail');
            $table->string('imgProduct');
            $table->string('slug')->default('home.html');
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
