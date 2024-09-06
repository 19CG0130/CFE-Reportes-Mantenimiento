<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agregar_hardware', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hardware')->unsigned();
            $table->foreign('id_hardware')->references('id')->on('hardware');
            $table->integer('id_otro_hardware')->unsigned();
            $table->foreign('id_otro_hardware')->references('id')->on('otro_hardware');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agregar_hardware');
    }
};
