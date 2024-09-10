<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;
    protected $table = 'mantenimientos';
    protected $fillable = [
        'antivirus_actualizado',
        'asignacion_ip_dhcp',
        'desarmar_limpieza_interna',
        'ejecucion_defrag',
        'equipo_en_red',
        'equipo_operando_post_servicio',
        'estado_escritorio_remoto',
        'limpieza_alimentacion_papel',
        'limpieza_bandejas',
        'limpieza_fuente_poder',
        'limpieza_pantalla',
        'limpieza_teclado',
        'limpieza_sopleteado_ext',
        'limpieza_sopleteado_int_ext',
        'limpieza_tarjeta_principal',
        'limpieza_unidad_fusion',
        'limpieza_unidad_laser',
        'limpieza_ventiladores',
        'realizar_auto_prueba',
        'revision_bateria',
        'validar_consumibles',
        'validar_teclado',
        'validar_touch',
        'verificacion_bateria',
        'verificar_conector_datos',
        'verificar_conexiones',
        'verificar_post_servicio',
        'verificar_sw_actualizado',
    ];
}
