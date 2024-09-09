<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquiposConectividad extends Model
{
    use HasFactory;
    protected $table = 'equipos_conectividad';

    protected $fillable = [
        'id_equipos',
        'id_conectividad',
    ];
}
