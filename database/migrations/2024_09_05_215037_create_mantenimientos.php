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
            $table->id();
            $table->boolean('antivirus_actualizado');
            $table->boolean('asignacion_ip_dhcp');
            $table->boolean('desarmar_limpieza_interna');
            $table->boolean('ejecucion_defrag');
            $table->boolean('equipo_en_red');
            $table->boolean('equipo_operando_post_servicio');
            $table->boolean('estado_escritorio_remoto');
            $table->boolean('limpieza_alimentacion_papel');
            $table->boolean('limpieza_bandejas');
            $table->boolean('limpieza_fuente_poder');
            $table->boolean('limpieza_pantalla');
            $table->boolean('limpieza_sopleteado_ext');
            $table->boolean('limpieza_sopleteado_int_ext');
            $table->boolean('limpieza_tarjeta_principal');
            $table->boolean('limpieza_unidad_fusion');
            $table->boolean('limpieza_unidad_laser');
            $table->boolean('limpieza_ventiladores');
            $table->boolean('realizar_auto_prueba');
            $table->boolean('revision_bateria');
            $table->boolean('validar_consumibles');
            $table->boolean('validar_teclado');
            $table->boolean('validar_touch');
            $table->boolean('verificacion_bateria');
            $table->boolean('verificar_conector_datos');
            $table->boolean('verificar_conexiones');
            $table->boolean('verificar_post_servicio');
            $table->boolean('verificar_sw_actualizado');
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
