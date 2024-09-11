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
        Schema::create('software', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sistema_operativo');
            $table->string('version_sistema_operativo');
            $table->string('office');
            $table->string('antivirus');
            $table->string('antivirus_version');
            $table->integer('visual_appeal')->nullable();
            $table->integer('mysap_r3')->nullable();
            $table->integer('facthor')->nullable();
            $table->integer('siad')->nullable();
            $table->integer('autocad')->nullable();
            $table->integer('sinergy')->nullable();
            $table->integer('lotus')->nullable();
            $table->integer('vpn')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software');
    }
};
