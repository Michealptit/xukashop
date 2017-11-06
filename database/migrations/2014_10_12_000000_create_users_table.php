<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
HOÀNG ĐẾ lv5
THÁI TỬ lv4
HOÀNG TỬ lv3
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('role')->default('customer'); // customer-ctv-admin- 
            $table->string('phone')->unique();
            $table->date('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->text('address')->nullable();
            $table->integer('coin')->default(0);
            $table->integer('money')->default(0);  // điểm để phân cấp level , = so tien lai cua shop
            $table->text('img_avatar')->nullable();
            $table->string('level')->default(1);
            $table->string('actived')->default('true'); // true- false
            $table->string('code')->nullable(); // ma xac nhan
            // 
            $table->text('hobby')->nullable();
            $table->string('married')->default('alone');
            $table->text('office')->nullable();
            $table->string('url_facebook')->nullable();  // dia chi facebook
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
