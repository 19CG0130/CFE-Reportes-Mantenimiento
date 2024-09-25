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

    .w-full {
        width: 100%;
    }

    .text-left {
        text-align: left;
    }

    .text-right {
        text-align: right;
    }

    .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity))
            /* #6b7280 */
        ;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .text-xs {
        font-size: 0.75rem
            /* 12px */
        ;
        line-height: 1rem
            /* 16px */
        ;
    }

    .text-gray-200 {
        --tw-text-opacity: 1;
        color: rgb(229 231 235 / var(--tw-text-opacity))
            /* #e5e7eb */
        ;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .bg-gray-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(107 114 128 / var(--tw-bg-opacity))
            /* #6b7280 */
        ;
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

    .pt-2 {
        padding-top: 0.5rem
            /* 8px */
        ;
    }

    .text-center {
        text-align: center;
    }

    .w-full {
        width: 100%;
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

    .logo img {
        max-width: 100px;
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
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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

    <!-- Mantenimientos -->
    <table class="pt-2" style="width:100%">
        <thead class="text-xs text-gray-200 uppercase bg-gray-500 rounded-lg">
            <tr class="divide-x divide-gray-500">
                <th scope="col" class="px-1 py-1 text-center">
                    Desarmar Equipo para su Limpieza Interna
                </th>
                <td class="px-1 py-1 text-center">
                    {{ $mantenimiento->desarmar_limpieza_interna }}
                </td>
            </tr>
            <tr class="divide-x divide-gray-500">
                <th scope="col" class="px-1 py-1 text-center">
                    Limpieza y Sopleteado Interno y Externo del Equipo
                </th>
                <td class="px-1 py-1 text-center">
                    {{ $mantenimiento->limpieza_sopleteado_int_ext }}
                </td>
            </tr>
            <tr class="divide-x divide-gray-500">
                <th scope="col" class="px-1 py-1 text-center">
                    Limpieza de Bandejas o Charolas
                </th>
                <td class="px-1 py-1 text-center">
                    {{ $mantenimiento->limpieza_bandejas }}
                </td>
            </tr>
            <tr class="divide-x divide-gray-500">
                <th scope="col" class="px-1 py-1 text-center">
                    Limpieza y Revisión del Mecanismo de Alimentación del Papel
                </th>
                <td class="px-1 py-1 text-center">
                    {{ $registro->limpieza_alimentacion_papel }}
                </td>
            </tr>
        </thead>
    </table>

</body>

</html>
