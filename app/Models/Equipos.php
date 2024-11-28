<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Equipos extends Model
{
    use HasFactory;
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
        'folio',
    ];

    //Folio
    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($equipo) {
            if (empty($equipo->folio)) {
                $year = Carbon::now()->year;
    
                $lastFolio = DB::table('equipos')
                    ->whereYear('fecha', $year)
                    ->max(DB::raw('CAST(SUBSTRING(folio, 1, LENGTH(folio) - 5) AS UNSIGNED)'));
    
                $nextNumber = $lastFolio ? $lastFolio + 1 : 1;
    
                $equipo->folio = sprintf('%d-%d', $nextNumber, $year);
            }
        });
    }

}


