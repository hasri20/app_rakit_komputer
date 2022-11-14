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
        Schema::create('power_supplies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->integer('rating')->nullable(true);
            $table->integer('price')->nullable(true);
            $table->string('form_factor')->nullable(true);
            $table->string('efficiency_rating')->nullable(true);
            $table->string("wattage")->nullable(true);
            $table->string("modular")->nullable(true);
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
        Schema::dropIfExists('power_supplies');
    }
};