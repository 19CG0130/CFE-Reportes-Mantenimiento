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
            $table->integer('antivirus_actualizado')->nullable();
            $table->integer('asignacion_ip_dhcp')->nullable();
            $table->integer('desarmar_limpieza_interna')->nullable();
            $table->integer('ejecucion_defrag')->nullable();
            $table->integer('equipo_en_red')->nullable();
            $table->integer('equipo_operando_post_servicio')->nullable();
            $table->integer('estado_escritorio_remoto')->nullable();
            $table->integer('limpieza_alimentacion_papel')->nullable();
            $table->integer('limpieza_bandejas')->nullable();
            $table->integer('limpieza_fuente_poder')->nullable();
            $table->integer('limpieza_pantalla')->nullable();
            $table->integer('limpieza_teclado')->nullable();
            $table->integer('limpieza_sopleteado_ext')->nullable();
            $table->integer('limpieza_sopleteado_int_ext')->nullable();
            $table->integer('limpieza_tarjeta_principal')->nullable();
            $table->integer('limpieza_unidad_fusion')->nullable();
            $table->integer('limpieza_unidad_laser')->nullable();
            $table->integer('limpieza_ventiladores')->nullable();
            $table->integer('realizar_auto_prueba')->nullable();
            $table->integer('revision_bateria')->nullable();
            $table->integer('validar_consumibles')->nullable();
            $table->integer('validar_teclado')->nullable();
            $table->integer('validar_touch')->nullable();
            $table->integer('verificacion_bateria')->nullable();
            $table->integer('verificar_conector_datos')->nullable();
            $table->integer('verificar_conexiones_electricas')->nullable();
            $table->integer('equipo_dentro_dominio')->nullable();
            $table->integer('verificar_sw_actualizado')->nullable();
            $table->integer('sistema_operativo_actualizado')->nullable();
            $table->integer('complementos_plugins_desabilitar_auto')->nullable();
            $table->integer('eliminar_aplicaciones_innecesarias')->nullable();
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
