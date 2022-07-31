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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('model_id');
            $table->integer('model_year');
            $table->unsignedBigInteger('horse_power');
            $table->unsignedBigInteger('torque');
            $table->unsignedBigInteger('odometer');
            $table->double('engine_capacity');
            $table->double('price');
            $table->integer('status');
            
            $table->unsignedBigInteger('creator_user_id');
            $table->unsignedBigInteger('last_updater_user_id');
            
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('model_id')->references('id')->on('models');
            $table->foreign('creator_user_id')->references('id')->on('users');
            $table->foreign('last_updater_user_id')->references('id')->on('users');

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
        Schema::dropIfExists('cars');
    }
};
