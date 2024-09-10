<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;
use App\Models\Conectividad;
use App\Models\EquiposConectividad;
use Illuminate\Support\Facades\DB;

class MantenimientoController extends Controller
{
    public function store(request $request)
    {
        // Iniciar transaccion
        DB::beginTransaction();
        try {
            $equipo = Equipos::create([
                'dispositivo' => $request->dispositivo,
                'fecha' => $request->fecha,
                'zona' => $request->zona,
                'departamento' => $request->departamento,
                'uso' => $request->usoQueSeLeDa,
                'hora_inicio' => $request->horaInicio,
                'hora_fin' => $request->horaFin,
                'responsable' => $request->usuario,
                'puesto' => $request->puesto,
                'rpe' => $request->RPE,
                'servicio' => $request->servicio,
                'marca' => $request->marca,
                'modelo' => $request->modelo,
                'serie' => $request->serie,
                'active_directory' => $request->nombreDA,
                'num_activo_fijo' => $request->numActivoFijo,
                'observaciones' => $request->observaciones ?? '',
            ]);

            $conectividad = Conectividad::create([
                'ip_ethernet' => $request->IpEthernet,
                'mac_ethernet' => $request->macEthernet,
                'ip_inalambrica' => $request->IpInalambrica,
                'mac_inalambrica' => $request->macInalambrica,
                'mac_bluetooth' => $request->macBluetooth,
            ]);

            EquiposConectividad::create([
                'id_equipos' => $equipo->id,
                'id_conectividad' => $conectividad->id,
            ]);

            DB::commit();
            //return redirect()->route('dashboard')->with('success', 'Datos insertados correctamente.');
            return response()->json([
                "success"=> "Datos insertados correctamente"
               ]);
        } catch (\Exception $e) {
            DB::rollBack();
           // return redirect()->back()->withErrors('Error al insertar los datos: ' . $e->getMessage());
           return response()->json([
            "error"=> $e->getMessage()
           ]);
        }
    }
}
