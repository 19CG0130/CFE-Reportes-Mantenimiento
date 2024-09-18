<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;
use App\Models\EquipoSoftware;
use App\Models\EquipoHardware;
use App\Models\EquipoMantenimiento;
use App\Models\Conectividad;
use App\Models\Software;
use App\Models\Hardware;
use App\Models\Mantenimiento;
use App\Models\EquiposConectividad;
use Illuminate\Support\Facades\DB;

class MantenimientoController extends Controller
{

    public function index()
    {
        $registros = Equipos::all();

        return view('dashboard', compact('registros'));
    }



    public function store(request $request)
    {
        //if(!auth()->check()) abort(403);
        //return view('auth.login');

        // Iniciar transaccion
        DB::beginTransaction();
        try {

            $request->validate([
                'zona' => ['required'],
                'fecha' => ['required'],
                'dispositivo' => ['required'],
                'departamento' => ['required'],
                'usoQueSeLeDa' => ['required'],
                'horaInicio' => ['required'],
                'horaFin' => ['required'],
                'responsable' => ['required', 'string', 'max:255'],
                'puesto' => ['required', 'max:30'],
                'RPE' => ['required', 'max:30'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'nombreDA' => ['required', 'max:30'],
                'numActivoFijo' => ['required', 'max:30'],
                'observaciones' => ['required', 'max:30'],
                'IpEthernet' => ['required', 'max:120'],
                'macEthernet' => ['required', 'max:120'],
                'IpInalambrica' => ['required', 'max:120'],
                'macInalambrica' => ['required', 'max:120'],
                'sistemaOperativo' => ['required', 'max:30'],
                'versionSistemaOpertativo' => ['required', 'max:30'],
                'office' => ['required', 'max:25'],
                'Arquitectura' => ['required', 'max:25'],
                'antivirus' => ['required', 'max:25'],
                'antivirusVersion' => ['required', 'max:20']
            ]);

            $equipo = Equipos::create([
                'dispositivo' => $request->dispositivo,
                'fecha' => $request->fecha,
                'zona' => $request->zona,
                'departamento' => $request->departamento,
                'uso' => $request->usoQueSeLeDa,
                'hora_inicio' => $request->horaInicio,
                'hora_fin' => $request->horaFin,
                'responsable' => $request->responsable,
                'puesto' => $request->puesto,
                'rpe' => $request->RPE,
                'servicio' => $request->servicio,
                'marca' => $request->marca,
                'modelo' => $request->modelo,
                'serie' => $request->serie,
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

            $software = Software::create([
                'sistema_operativo' => $request->sistemaOperativo,
                'version_sistema_operativo' => $request->versionSistemaOpertativo,
                'office' => $request->office,
                'Arquitectura' => $request->Arquitectura,
                'antivirus' => $request->antivirus,
                'antivirus_version' => $request->antivirusVersion,
                'visual_appeal' => $request->visualAppeal,
                'mysap_r3' => $request->mysapR3,
                'facthor' => $request->facthor,
                'siad' => $request->siad,
                'autocad' => $request->autocad,
                'sinergy' => $request->sinergy,
                'lotus' => $request->lotus,
                'vpn' => $request->vpn
            ]);

            EquipoSoftware::create([
                'id_equipos' => $equipo->id,
                'id_software' => $software->id
            ]);

            $hardware = Hardware::create([
                'microfono' => $request->microfono,
                'bocina' => $request->bocina,
                'hub_usb' => $request->hubUSB,
                'camara_web' => $request->camaraWeb
            ]);

            EquipoHardware::create([
                'id_equipos' => $equipo->id,
                'id_hardware' => $hardware->id
            ]);

            $mantenimiento = Mantenimiento::create([
                'antivirus_actualizado' => $request->antivirus_actualizado,
                'asignacion_ip_dhcp' => $request->asignacion_ip_dhcp,
                'desarmar_limpieza_interna' => $request->desarmar_limpieza_interna,
                'ejecucion_defrag' => $request->ejecucion_defrag,
                'equipo_en_red' => $request->equipo_en_red,
                'equipo_operando_post_servicio' => $request->verificar_post_servicio,
                'estado_escritorio_remoto' => $request->estado_servicio_escritorio_remoto,
                'limpieza_alimentacion_papel' => $request->limpieza_alimentacion_papel,
                'limpieza_bandejas' => $request->limpieza_bandejas,
                'limpieza_fuente_poder' => $request->limpieza_fuente_poder,
                'limpieza_pantalla' => $request->limpieza_pantalla,
                'limpieza_sopleteado_ext' => $request->limpieza_sopleteado_ext,
                'limpieza_sopleteado_int_ext' => $request->limpieza_sopleteado_interno_externo,
                'limpieza_tarjeta_principal' => $request->limpieza_tarjeta_principal,
                'limpieza_unidad_fusion' => $request->limpieza_unidad_fusion,
                'limpieza_unidad_laser' => $request->limpieza_unidad_laser,
                'limpieza_ventiladores' => $request->limpieza_ventiladores,
                'limpieza_teclado' => $request->limpieza_teclado,
                'realizar_auto_prueba' => $request->realizar_auto_prueba,
                'revision_bateria' => $request->revision_bateria,
                'validar_consumibles' => $request->validar_consumibles,
                'validar_teclado' => $request->validar_teclado,
                'validar_touch' => $request->validar_touch,
                'verificacion_bateria' => $request->verificacion_bateria,
                'verificar_conector_datos' => $request->verificar_conector_datos,
                'verificar_conexiones' => $request->verificar_conexiones_electricas,
                'verificar_post_servicio' => $request->equipo_operando_post_servicio,
                'verificar_sw_actualizado' => $request->verificar_sw_actualizado,
            ]);

            EquipoMantenimiento::create([
                'id_mantenimientos' => $mantenimiento->id,
                'id_equipos' => $equipo->id
            ]);

            DB::commit();
            return redirect()->route('dashboard')->with('success', 'Datos insertados correctamente.');
            return response()->json([
                "success" => "Datos insertados correctamente"
            ]);
            //dd($request->all());
        } catch (\Exception $e) {
            DB::rollBack();
            // return redirect()->back()->withErrors('Error al insertar los datos: ' . $e->getMessage());
            return response()->json([
                "error" => $e->getMessage()
            ]);
        }
    }

    public function destroy($id)
    {
        $registro = Equipos::findOrFail($id);
        $registro->delete();

        return redirect()->route('dashboard')->with('success', 'Registro eliminado correctamente');
    }
}
