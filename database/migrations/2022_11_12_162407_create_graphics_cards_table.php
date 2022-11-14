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
        Schema::create('graphics_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->integer('rating')->nullable(true);
            $table->integer('price')->nullable(true);
            $table->string('chipset')->nullable(true);
            $table->string('memory')->nullable(true);
            $table->string("core_clock")->nullable(true);
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
        Schema::dropIfExists('graphics_cards');
    }
};