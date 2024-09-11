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
        Schema::create('conectividad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_ethernet')->nullable();
            $table->string('mac_ethernet')->nullable();
            $table->string('ip_inalambrica')->nullable();
            $table->string('mac_inalambrica')->nullable();
            $table->string('mac_bluetooth')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conectividad');
    }
};
