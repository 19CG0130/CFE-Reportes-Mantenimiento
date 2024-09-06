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
        Schema::create('agregar_software', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_otro_software')->unsigned();
            $table->foreign('id_otro_software')->references('id')->on('otro_software');
            $table->integer('id_software')->unsigned();
            $table->foreign('id_software')->references('id')->on('software');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agregar_software');
    }
};
