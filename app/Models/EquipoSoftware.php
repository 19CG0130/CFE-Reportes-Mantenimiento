<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoSoftware extends Model
{
    use HasFactory;
    protected $table = 'equipos_software';
    protected $fillable = [
        'id_equipos',
        'id_software',
    ];
}
