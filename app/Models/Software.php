<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $table = 'software';
    protected $fillable = [
        'sistema_operativo',
        'version_sistema_operativo',
        'office',
        'arquitectura',
        'antivirus',
        'antivirus_version',
        'visual_appeal',
        'mysap_r3',
        'kavi',
        'facthor',
        'tpa',
        'siad',
        'autocad',
        'sinergy',
        'lotus',
        'vpn'
    ];
}
