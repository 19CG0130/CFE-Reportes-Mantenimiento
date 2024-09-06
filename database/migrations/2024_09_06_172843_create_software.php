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
            $table->boolean('visual_appeal');
            $table->boolean('mysap_r3');
            $table->boolean('facthor');
            $table->boolean('siad');
            $table->boolean('autocad');
            $table->boolean('sinergy');
            $table->boolean('lotus');
            $table->boolean('vpn');
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
