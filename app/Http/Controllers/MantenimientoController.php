<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use App\Models\Software;
use App\Models\Conectividad;
use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\EquipoMantenimiento;
use App\Models\EquiposConectividad;
use Illuminate\Http\RedirectResponse;
use App\Models\EquipoSoftware;

class MantenimientoController extends Controller
{

    public function index()
    {
        $registros = Equipos::latest()->paginate(10);

        return view('dashboard', compact('registros'));
    }

    public function edit($dispositivo, $id)
    {
        $equipo = Equipos::findOrFail($id);
        $software = EquipoSoftware::where('id_equipos', $id)->first();

        $action = 'editar';

        switch ($dispositivo) {
            case 'PC Escritorio':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-equipoComputo';
                break;
            case 'Laptop':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-equipoComputo';
                break;
            case 'Terminal Portatil':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-terminalPortatil';
                break;
            case 'Tablet':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-tablet';
                break;
            case 'Impresora':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-impresora';
                break;
            default:
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-otroDispositivo';
                break;
        }

        return view($view, compact('equipo', 'software','action', 'dispositivo'));
    }

    public function ver($dispositivo, $id)
    {
        $equipo = Equipos::findOrFail($id);
        $software = EquipoSoftware::where('id_equipos', $id)->first();

        $action = 'ver';

        switch ($dispositivo) {
            case 'PC Escritorio':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-equipoComputo';
                break;
            case 'Laptop':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-equipoComputo';
                break;
            case 'Terminal Portatil':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-terminalPortatil';
                break;
            case 'Tablet':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-tablet';
                break;
            case 'Impresora':
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-impresora';
                break;
            default:
                $view = 'registroMantenimientos.formularios.ver-editar.ver-editar-otroDispositivo';
                break;
        }

        return view($view, compact('equipo', 'software', 'action', 'dispositivo'));
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
                'arquitectura' => ['required'],
                'version_sistema_operativo' => ['required'],
                'office' => ['required'],
                'antivirus' => ['required'],
                'antivirus_version' => ['required'],
                'ip_ethernet' => ['nullable', 'ip'],
                'mac_ethernet' => ['nullable', 'mac_address'],
                'ip_inalambrica' => ['nullable', 'ip'],
                'mac_inalambrica' => ['nullable', 'mac_address'],
                'mac_bluetooth' => ['nullable', 'mac_address'],
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
                'ip_inalambrica' => ['nullable', 'ip'],
                'mac_inalambrica' => ['nullable', 'mac_address'],
                'mac_bluetooth' => ['nullable', 'mac_address'],
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
                'ip_inalambrica' => ['nullable', 'ip'],
                'mac_inalambrica' => ['nullable', 'mac_address'],
                'mac_bluetooth' => ['nullable', 'mac_address'],
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
                'ip_ethernet' => ['nullable', 'ip'],
                'mac_ethernet' => ['nullable', 'mac_address'],
                'ip_inalambrica' => ['nullable', 'ip'],
                'mac_inalambrica' => ['nullable', 'mac_address'],
                'mac_bluetooth' => ['nullable', 'mac_address'],
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
                'dispositivo' => ['required'],
                'servicio' => ['required'],
                'marca' => ['required', 'max:30'],
                'modelo' => ['required', 'max:30'],
                'serie' => ['required', 'max:30'],
                'num_activo_fijo' => ['required', 'max:30'],
                'ip_ethernet' => ['nullable', 'ip'],
                'mac_ethernet' => ['nullable', 'mac_address'],
                'ip_inalambrica' => ['nullable', 'ip'],
                'mac_inalambrica' => ['nullable', 'mac_address'],
                'mac_bluetooth' => ['nullable', 'mac_address'],
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
            'arquitectura' => $request->arquitectura,
            'office' => $request->office,
            'antivirus' => $request->antivirus,
            'antivirus_version' => $request->antivirus_version,
            'visual_appeal' => $request->visual_appeal,
            'mysap_r3' => $request->mysap_r3,
            'kavi' => $request->kavi,
            'facthor' => $request->facthor,
            'tpa' => $request->tpa,
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

        $mantenimiento = Mantenimiento::create([
            'antivirus_actualizado' => $request->antivirus_actualizado,
            'asignacion_ip_dhcp' => $request->asignacion_ip_dhcp,
            'complementos_plugins_desabilitar_auto' => $request->complementos_plugins_desabilitar_auto,
            'desarmar_limpieza_interna' => $request->desarmar_limpieza_interna,
            'ejecucion_defrag' => $request->ejecucion_defrag,
            'eliminar_aplicaciones_innecesarias' => $request->eliminar_aplicaciones_innecesarias,
            'equipo_dentro_dominio' => $request->equipo_dentro_dominio,
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
            'sistema_operativo_actualizado' => $request->sistema_operativo_actualizado,
            'realizar_auto_prueba' => $request->realizar_auto_prueba,
            'validar_consumibles' => $request->validar_consumibles,
            'validar_teclado' => $request->validar_teclado,
            'validar_touch' => $request->validar_touch,
            'verificacion_bateria' => $request->verificacion_bateria,
            'verificar_conector_datos' => $request->verificar_conector_datos,
            'verificar_conexiones_electricas' => $request->verificar_conexiones_electricas,
            'verificar_sw_actualizado' => $request->verificar_sw_actualizado,

        ]);

        EquipoMantenimiento::create([
            'id_mantenimientos' => $mantenimiento->id,
            'id_equipos' => $equipo->id
        ]);

        return redirect(route('dashboard','action', absolute: false));
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

        switch ($dispositivo) {
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
