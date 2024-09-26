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
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\Options;

class MantenimientoController extends Controller
{

    public function index()
    {
        $registros = Equipos::all();

        return view('dashboard', compact('registros'));
    }

    public function show($id)
    {
        $datos = Equipos::findOrFail($id);

        return view('registroMantenimientos.formularios.impresora', ['datos' => $datos]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        if (empty($search)) {
            $registros = Equipos::all();
        } else {
            $registros = Equipos::where(function ($query) use ($search) {
                $query->where('dispositivo', 'LIKE', "%$search%")
                    ->orWhere('serie', 'LIKE', "%$search%")
                    ->orWhere('rpe', 'LIKE', "%$search%");
            })

                //Buscar por nombre del reponsablde del mantenimiento
                //->orWhereHas('user', function ($query) use ($search) {
                //    $query->where('name', 'LIKE', "%$search%");
                //})

                ->get();
        }

        return view('dashboard', compact('registros', 'search'));
    }



    public function store(Request $request): RedirectResponse
    {

        $tipoFormulario = $request->input('dispositivo');

        if ($tipoFormulario === 'PC Escritorio' || $tipoFormulario === 'Laptop') {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'usoQueSeLeDa' => ['required'],
                'horaInicio' => ['required'],
                'horaFin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'RPE' => ['required', 'max:30'],
                'dispositivo' => ['required'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'nombreDA' => ['required', 'max:30'],
                'numActivoFijo' => ['required', 'max:30'],
                'sistemaOperativo' => ['required'],
                'Arquitectura' => ['required'],
                'versionSistemaOpertativo' => ['required'],
                'office' => ['required'],
                'antivirus' => ['required'],
                'antivirusVersion' => ['required'],
            ]);
        } elseif ($tipoFormulario === 'Terminal Portatil') {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'usoQueSeLeDa' => ['required'],
                'horaInicio' => ['required'],
                'horaFin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'RPE' => ['required', 'max:30'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'numActivoFijo' => ['required', 'max:30'],
                'sistemaOperativo' => ['required'],
                'versionSistemaOpertativo' => ['required'],
            ]);
        } elseif ($tipoFormulario === 'Tablet') {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'usoQueSeLeDa' => ['required'],
                'horaInicio' => ['required'],
                'horaFin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'RPE' => ['required', 'max:30'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'numActivoFijo' => ['required', 'max:30'],
                'sistemaOperativo' => ['required'],
                'versionSistemaOpertativo' => ['required'],
            ]);
        } elseif ($tipoFormulario === 'Impresora') {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'horaInicio' => ['required'],
                'horaFin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'RPE' => ['required', 'max:30'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'numActivoFijo' => ['required', 'max:30'],
            ]);
        } else {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'usoQueSeLeDa' => ['required'],
                'horaInicio' => ['required'],
                'horaFin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'RPE' => ['required', 'max:30'],
                'dispositivo' => ['required'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'nombreDA' => ['required', 'max:30'],
                'numActivoFijo' => ['required', 'max:30'],
            ]);
        }

        $equipo = Equipos::create([
            'dispositivo' => $request->dispositivo,
            'fecha' => $request->fecha,
            'zona' => $request->zona,
            'departamento' => $request->departamento,
            'uso' => $request->usoQueSeLeDa,
            'hora_inicio' => $request->horaInicio,
            'hora_fin' => $request->horaFin,
            'responsable_mantenimiento' => $request->responsable_mantenimiento,
            'responsable_equipo' => $request->responsable_equipo,
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

        $software = Software::create([
            'sistema_operativo' => $request->sistemaOperativo,
            'version_sistema_operativo' => $request->versionSistemaOpertativo,
            'office' => $request->office,
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

        return redirect(route('dashboard', absolute: false));
    }

    public function destroy($id)
    {
        $registro = Equipos::findOrFail($id);

        $registro->delete();

        return redirect()->route('dashboard')->with('success', 'Registro eliminado correctamente');
    }

    public function pdf_generator_get($dispositivo, $id)
    {
        $registro = Equipos::where('dispositivo', $dispositivo)->where('id', $id)->firstOrFail();
        $mantenimiento = Mantenimiento::where('id', $registro->id)->first();

        $data = [
            'date' => date('d/m/Y'),
            'registro' => $registro,
            'mantenimiento' => $mantenimiento,
        ];

        $pdf = Pdf::loadview('registroMantenimientos.PDF.PDF-equipoComputo', $data);

        return $pdf->download('Reporte_equipo_' . $registro->id . '.pdf');
    }
}
