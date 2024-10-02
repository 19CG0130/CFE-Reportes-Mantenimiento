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
use Illuminate\View\View;

class MantenimientoController extends Controller
{

    public function index()
    {
        $registros = Equipos::all();

        return view('dashboard', compact('registros'));
    }

    public function edit(Request $request): View
    {
        return view('registroMantenimientos.acciones.editar-ver-equipoComputo', [
            'user' => $request->user(),
        ]);
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
                'uso' => ['required'],
                'hora_inicio' => ['required'],
                'hora_fin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'rpe' => ['required', 'max:30'],
                'dispositivo' => ['required'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'active_directory' => ['required', 'max:30'],
                'num_activo_fijo' => ['required', 'max:30'],
                'sistema_operativo' => ['required'],
                'Arquitectura' => ['required'],
                'version_sistema_operativo' => ['required'],
                'office' => ['required'],
                'antivirus' => ['required'],
                'antivirus_version' => ['required'],
            ]);
        } elseif ($tipoFormulario === 'Terminal Portatil') {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'uso' => ['required'],
                'hora_inicio' => ['required'],
                'hora_fin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'rpe' => ['required', 'max:30'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'num_activo_fijo' => ['required', 'max:30'],
                'sistema_operativo' => ['required'],
                'version_sistema_operativo' => ['required'],
            ]);
        } elseif ($tipoFormulario === 'Tablet') {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'uso' => ['required'],
                'hora_inicio' => ['required'],
                'hora_fin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'rpe' => ['required', 'max:30'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'num_activo_fijo' => ['required', 'max:30'],
                'sistema_operativo' => ['required'],
                'version_sistema_operativo' => ['required'],
            ]);
        } elseif ($tipoFormulario === 'Impresora') {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'hora_inicio' => ['required'],
                'hora_fin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'rpe' => ['required', 'max:30'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'num_activo_fijo' => ['required', 'max:30'],
            ]);
        } else {
            $request->validate([
                'fecha' => ['required'],
                'zona' => ['required'],
                'departamento' => ['required'],
                'uso' => ['required'],
                'hora_inicio' => ['required'],
                'hora_fin' => ['required'],
                'responsable_mantenimiento' => ['required'],
                'responsable_equipo' => ['required'],
                'puesto' => ['required', 'max:30'],
                'rpe' => ['required', 'max:30'],
                'dispositivo' => ['required'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'active_directory' => ['required', 'max:30'],
                'num_activo_fijo' => ['required', 'max:30'],
            ]);
        }

        $equipo = Equipos::create([
            'dispositivo' => $request->dispositivo,
            'fecha' => $request->fecha,
            'zona' => $request->zona,
            'departamento' => $request->departamento,
            'uso' => $request->uso,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
            'responsable_mantenimiento' => $request->responsable_mantenimiento,
            'responsable_equipo' => $request->responsable_equipo,
            'puesto' => $request->puesto,
            'rpe' => $request->rpe,
            'servicio' => $request->servicio,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'serie' => $request->serie,
            'active_directory' => $request->active_directory,
            'num_activo_fijo' => $request->num_activo_fijo,
            'observaciones' => $request->observaciones ?? '',
        ]);

        $conectividad = Conectividad::create([
            'ip_ethernet' => $request->ip_ethernet,
            'mac_ethernet' => $request->mac_ethernet,
            'ip_inalambrica' => $request->ip_inalambrica,
            'mac_inalambrica' => $request->mac_inalambrica,
            'mac_bluetooth' => $request->mac_bluetooth,
        ]);

        EquiposConectividad::create([
            'id_equipos' => $equipo->id,
            'id_conectividad' => $conectividad->id,
        ]);

        $software = Software::create([
            'sistema_operativo' => $request->sistema_operativo,
            'version_sistema_operativo' => $request->version_sistema_operativo,
            'office' => $request->office,
            'antivirus' => $request->antivirus,
            'antivirus_version' => $request->antivirus_version,
            'visual_appeal' => $request->visual_appeal,
            'mysap_r3' => $request->mysap_r3,
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
            'hub_usb' => $request->hub_usb,
            'camara_web' => $request->camara_web
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
            'equipo_operando_post_servicio' => $request->equipo_operando_post_servicio,
            'estado_escritorio_remoto' => $request->estado_escritorio_remoto,
            'limpieza_alimentacion_papel' => $request->limpieza_alimentacion_papel,
            'limpieza_bandejas' => $request->limpieza_bandejas,
            'limpieza_fuente_poder' => $request->limpieza_fuente_poder,
            'limpieza_pantalla' => $request->limpieza_pantalla,
            'limpieza_sopleteado_ext' => $request->limpieza_sopleteado_ext,
            'limpieza_sopleteado_int_ext' => $request->limpieza_sopleteado_int_ext,
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
            'verificar_conexiones_electricas' => $request->verificar_conexiones_electricas_electricas,
            'verificar_sw_actualizado' => $request->verificar_sw_actualizado,
            'complementos_plugins_desabilitar_auto' => $request->complementos_plugins_desabilitar_auto,
            'eliminar_aplicaciones_innecesarias' => $request->eliminar_aplicaciones_innecesarias,
            'equipo_dentro_dominio' => $request->equipo_dentro_dominio
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

        switch($dispositivo){
            case 'PC Escritorio':
                $pdf = Pdf::loadview('registroMantenimientos.PDF.PDF-equipoComputo', $data);
                break;
            case 'Laptop':
                $pdf = Pdf::loadview('registroMantenimientos.PDF.PDF-equipoComputo', $data);
                break;
            case 'Terminal Portatil':
                $pdf = Pdf::loadview('registroMantenimientos.PDF.PDF-terminalPortatil', $data);
                break;
            case 'Tablet':
                $pdf = Pdf::loadview('registroMantenimientos.PDF.PDF-tablet', $data);
                break;
            case 'Impresora':
                $pdf = Pdf::loadview('registroMantenimientos.PDF.PDF-impresora', $data);
                break;
            default:
                $pdf = Pdf::loadview('registroMantenimientos.PDF.PDF-otroDispositivo', $data);
                break;
        }

        return $pdf->download('Reporte_equipo_' . $registro->id . '.pdf');
    }
}
