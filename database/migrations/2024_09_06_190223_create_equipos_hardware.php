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
        Schema::create('equipos_hardware', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hardware')->unsigned();
            $table->foreign('id_hardware')->references('id')->on('hardware')->onDelete('cascade');
            $table->integer('id_equipos')->unsigned();
            $table->foreign('id_equipos')->references('id')->on('equipos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos_hardware');
    }
};
