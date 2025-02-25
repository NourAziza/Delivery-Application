<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("shop_id")->constrained();
            $table->string('user_name')->unique();
            $table->string('location');
            $table->integer('const_nu   m')->unique();
            $table->integer('phone_num')->unique();
            $table->string('image');
            $table->boolean('is_worker');
            $table->boolean('is_delivery');
            $table->boolean('is_dealer');
            $table->string('password');
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
};
