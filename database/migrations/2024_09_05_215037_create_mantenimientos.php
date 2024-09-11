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
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('antivirus_actualizado')->nullable();
            $table->boolean('asignacion_ip_dhcp')->nullable();
            $table->boolean('desarmar_limpieza_interna')->nullable();
            $table->boolean('ejecucion_defrag')->nullable();
            $table->boolean('equipo_en_red')->nullable();
            $table->boolean('equipo_operando_post_servicio')->nullable();
            $table->boolean('estado_escritorio_remoto')->nullable();
            $table->boolean('limpieza_alimentacion_papel')->nullable();
            $table->boolean('limpieza_bandejas')->nullable();
            $table->boolean('limpieza_fuente_poder')->nullable();
            $table->boolean('limpieza_pantalla')->nullable();
            $table->boolean('limpieza_teclado')->nullable();
            $table->boolean('limpieza_sopleteado_ext')->nullable();
            $table->boolean('limpieza_sopleteado_int_ext')->nullable();
            $table->boolean('limpieza_tarjeta_principal')->nullable();
            $table->boolean('limpieza_unidad_fusion')->nullable();
            $table->boolean('limpieza_unidad_laser')->nullable();
            $table->boolean('limpieza_ventiladores')->nullable();
            $table->boolean('realizar_auto_prueba')->nullable();
            $table->boolean('revision_bateria')->nullable();
            $table->boolean('validar_consumibles')->nullable();
            $table->boolean('validar_teclado')->nullable();
            $table->boolean('validar_touch')->nullable();
            $table->boolean('verificacion_bateria')->nullable();
            $table->boolean('verificar_conector_datos')->nullable();
            $table->boolean('verificar_conexiones')->nullable();
            $table->boolean('verificar_post_servicio')->nullable();
            $table->boolean('verificar_sw_actualizado')->nullable();
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimientos');
    }
};
