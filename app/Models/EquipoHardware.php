<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoHardware extends Model
{
    use HasFactory;
    protected $table = 'equipos_hardware';
    protected $fillable = [
        'id_hardware',
        'id_equipos',
    ];
}
