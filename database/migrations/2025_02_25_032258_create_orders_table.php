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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("shop_id")->constrained();
            $table->foreignId("delivery_id")->constrained();
            $table->string("location");
            $table->boolean("is_received");
            $table->boolean("is_active");
            $table->boolean("is_now");
            $table->integer("phone_num");
            $table->integer("weight");
            $table->integer("distance");
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
};
