<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Equipo</title>
</head>

<style>
    .font-sans {
        font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    .text-left {
        text-align: left;
    }

    .text-center {
        text-align: center;
    }

    .text-right {
        text-align: right;
    }

    .text-gray-200 {
        --tw-text-opacity: 1;
        color: rgb(229 231 235 / var(--tw-text-opacity))
            /* #e5e7eb */
        ;
    }

    .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity))
            /* #6b7280 */
        ;
    }

    .text-xs {
        font-size: 0.75rem
            /* 12px */
        ;
        line-height: 1rem
            /* 16px */
        ;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .w-full {
        width: 100%;
    }

    .w-fit {
        width: fit-content;
    }

    .px-1 {
        padding-left: 0.25rem
            /* 4px */
        ;
        padding-right: 0.25rem
            /* 4px */
        ;
    }

    .py-1 {
        padding-top: 0.25rem
            /* 4px */
        ;
        padding-bottom: 0.25rem
            /* 4px */
        ;
    }

    .px-2 {
        padding-left: 0.5rem
            /* 8px */
        ;
        padding-right: 0.5rem
            /* 8px */
        ;
    }

    .pt-2 {
        padding-top: 0.5rem
            /* 8px */
        ;
    }

    .pt-6 {
        padding-top: 1.5rem
            /* 24px */
        ;
    }

    .pt-10 {
        padding-top: 2.5rem
            /* 40px */
        ;
    }

    .flex {
        display: flex;
    }

    .items-center {
        align-items: center;
    }

    .justify-between {
        justify-content: space-between;
    }

    .grid {
        display: grid;
    }

    .grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .gap-4 {
        gap: 1rem
            /* 16px */
        ;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
    }

    .table-auto {
        table-layout: auto;
    }

    .border-collapse {
        border-collapse: collapse;
    }

    .center-table {
        margin: 0 auto;
        text-align: center;
    }

    .overflow-x-auto {
        overflow-x: auto;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .logo img {
        max-width: 100px;
        height: auto;
    }

    .check img {
        max-width: 15px;
        height: auto;
    }

    .report-info h2 {
        font-size: 1em;
        margin: 0;
        text-align: right;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .bg-gray-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(107 114 128 / var(--tw-bg-opacity))
            /* #6b7280 */
        ;
    }
</style>

<body class="font-sans antialiased">
    <div class="header">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ public_path('img/logo_cfe.png') }}" alt="Logo" />
        </div>
        <!-- Información del reporte -->
        <div class="report-info">
            <h2>Comisión Federal de Electricidad<br>
                División Centro Oriente</h2>
        </div>
    </div>
    <!--tablas datos-->
    <table class="w-full shadow-md">
        <thead class="text-xs text-gray-200 uppercase bg-gray-500 rounded-lg">
            <tr class="divide-x divide-gray-500">
                <th scope="col" class="px-1 py-1 text-center">
                    Zona
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Marca
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Fecha
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Folio
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <!-- Registro -->
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                <td class="px-1 py-1 text-center">
                    {{ $registro->zona }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->marca }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ \Carbon\Carbon::parse($registro->fecha)->format('d-m-Y') }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->id }}
                </td>
            </tr>
        </tbody>
    </table>
    <table class="w-full shadow-md pt-2">
        <thead class="text-xs text-gray-200 uppercase bg-gray-500 rounded-lg">
            <tr class="divide-x divide-gray-500">
                <th scope="col" class="px-1 py-1 text-center">
                    Departamento
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Modelo
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Hora Inicio
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Hora Fin
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <!-- Registro -->
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->departamento }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->modelo }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->hora_inicio }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->hora_fin }}
                </td>
            </tr>
        </tbody>
    </table>
    <table class="w-full shadow-md pt-2">
        <thead class="text-xs text-gray-200 uppercase bg-gray-500 rounded-lg">
            <tr class="divide-x divide-gray-500">
                <th scope="col" class="px-1 py-1 text-center">
                    Tipo de dispositivo
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Nombre del usuario
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Numero serie
                </th>
                <th scope="col" class="px-1 py-1 text-center">
                    Servicio
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <!-- Registro -->
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->dispositivo }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->responsable_equipo }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->serie }}
                </td>
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->servicio }}
                </td>
            </tr>
        </tbody>
    </table>

    <table class="w-full shadow-md pt-2">
        <thead class="text-xs text-gray-200 uppercase bg-gray-500 rounded-lg">
            <tr class="divide-x divide-gray-500">
                <th scope="col" class="px-1 py-1 text-center">
                    Uso que se le da al equipo 
                </th>
            </tr>
        </thead>    
        <tbody  class="divide-y divide-gray-200">
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                <td class="px-1 py-1 text-center uppercase">
                    {{ $registro->uso }}
                </td>
            </tr>
        
        
        </tbody>     
    </table>

    <!-- Mantenimientos -->
    <section class="pt-6">
        <table class="table-auto border-collapse">
            <thead class="text-xs uppercase rounded-lg">
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Desarmar equipo para su limpieza interna.
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->desarmar_limpieza_interna == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Limpieza y sopleteado Interna y Externa del equipo.                     </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->limpieza_sopleteado_int_ext == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Limpieza de Pantalla    
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->limpieza_pantalla == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Limpieza de Teclado 
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->limpieza_teclado == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Limpieza ventiladores 
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->limpieza_ventiladores == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Limpieza y sopleteado de la tarjeta Principal 
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->limpieza_tarjeta_principal == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Verificar funcionamiento del equipo despues del Servicio 
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->equipo_operando_post_servicio == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Limpieza de Fuente de Poder 
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->limpieza_fuente_poder == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Verificación de la Bateria                    
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->verificacion_bateria == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Verificar conexiones electricas en buen estado.                   
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->verificar_conexiones_electricas == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Verificar que funcione correctamente despues del Servicio                    
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->equipo_operando_post_servicio == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Antivirus Institucional Actualizado                     
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->antivirus_actualizado == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Ejecución de Defrag                    
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->ejecucion_defrag == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Estado de Servicio de Escritorio Remoto 
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->estado_escritorio_remoto == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Asignacion de IP por DHCP                    
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->asignacion_ip_dhcp == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Sistema operativo actualizado                    
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->verificar_sw_actualizado == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Equipo dentro del dominio                    
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->equipo_dentro_dominio == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Complementos Plugins (Java, SilverLigth), Desabilitar Auto                      
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->complementos_plugins_desabilitar_auto == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="text-left px-1 py-1">
                        Eliminar aplicaciones innecesarias                  
                    </th>
                    <td class="text-center px-2">
                        @if ($mantenimiento->eliminar_aplicaciones_innecesarias == 1)
                            <div class="check">
                                <img src="{{ public_path('img/check.png') }}" />
                            </div>
                        @endif
                    </td>
                </tr>
            </thead>
        </table>
    </section>

    <!-- Observaciones -->
    <section class="pt-10">
        <table class="w-full shadow-md">
            <thead class="text-xs text-gray-200 uppercase bg-gray-500 rounded-lg">
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="px-1 py-1 text-center">
                        OBSERVACIÓNES
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <!-- Registro -->
                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-1 py-1">
                        {{ $registro->observaciones }}
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Sección de Firmas -->
    <section class="pt-10">
        <table class="w-full shadow-md">
            <thead class="text-xs text-gray-200 uppercase bg-gray-500 rounded-lg">
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="px-1 py-1 text-center">
                        Realizo Servicio
                    </th>
                    <th scope="col" class="px-1 py-1 text-center">
                        Responsable del Equipo
                    </th>
                    <th scope="col" class="px-1 py-1 text-center">
                        Visto Bueno
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <!-- Registro -->
                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-1 py-1 text-center">
                        {{ $registro->responsable_mantenimiento }}
                    </td>
                    <td class="px-1 py-1 text-center">
                        {{ $registro->responsable_equipo }}
                    </td>
                    <td class="px-1 py-1 text-center">
                        Ramiro Bejarano Raygoza
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

</body>

</html>
