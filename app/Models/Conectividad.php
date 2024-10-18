<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conectividad extends Model
{
    public function equipos_conectividad()
    {
        return $this->hasMany(EquiposConectividad::class, 'id_conectividad', 'id');
    }

    use HasFactory;
    protected $table = 'conectividad';

    protected $fillable = [
        'ip_ethernet',
        'mac_ethernet',
        'ip_inalambrica',
        'mac_inalambrica',
        'mac_bluetooth',
    ];
}
