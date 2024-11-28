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
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dispositivo');
            $table->date('fecha');
            $table->string('zona');
            $table->string('departamento');
            $table->string('uso')->nullable();
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('responsable_mantenimiento');
            $table->string('responsable_equipo');
            $table->string('puesto');
            $table->string('rpe');
            $table->string('servicio');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('active_directory')->nullable();
            $table->string('num_activo_fijo')->nullable();
            $table->text('observaciones');
            $table->string('folio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
