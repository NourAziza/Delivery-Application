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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('name');
            $table->integer('const_num')->unique();
            $table->integer('phone_num')->unique();
            $table->string('image');
            $table->string('discraption');
            $table->string('discount');
            $table->boolean('is_active');
            $table->string('open_time');
            $table->string('close_time');
            $table->integer('point_value');
            $table->integer('max_distance');
            $table->integer('distance_price');
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
        Schema::dropIfExists('shops');
    }
};
