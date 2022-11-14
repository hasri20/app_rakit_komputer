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
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->integer('rating')->nullable(true);
            $table->integer('price')->nullable(true);
            $table->string('socket')->nullable(true);
            $table->string('form_factor')->nullable(true);
            $table->string('memory_max')->nullable(true);
            $table->string('memory_slots')->nullable(true);
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
        Schema::dropIfExists('motherboards');
    }
};