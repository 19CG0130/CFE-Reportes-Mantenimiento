<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoMantenimiento extends Model
{
    use HasFactory;
    protected $table = 'equipos_mantenimiento';
    protected $fillable = [
        'id_mantenimientos',
        'id_equipos',
    ];
}
