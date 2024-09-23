<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table = 'equipos';
    protected $fillable = [
        'dispositivo',
        'fecha',
        'zona',
        'departamento',
        'uso',
        'hora_inicio',
        'hora_fin',
        'responsable_mantenimiento',
        'responsable_equipo',
        'puesto',
        'rpe',
        'servicio',
        'marca',
        'modelo',
        'serie',
        'active_directory',
        'num_activo_fijo',
        'observaciones',
    ];
    use HasFactory;
}
