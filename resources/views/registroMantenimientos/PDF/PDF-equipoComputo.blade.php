<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="font-sans antialiased">
    <div>
        <!-- Logo -->
        <div>
            <img src="{{ public_path('img/logo_cfe.png') }}" style="width:300px;height:auto;" />

        </div>
        <!--tabla-->
        <table class="w-full shadow-md">
            <thead class="text-xs text-gray-200 uppercase bg-gray-500 rounded-lg">
                <tr class="divide-x divide-gray-500">
                    <th scope="col" class="px-1 py-1 text-center">
                        Zona
                    </th>
                    <th scope="col" class="px-1 py-1 text-center">
                        Marca
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Fecha
                    </th>
                    <th scope="col" class="px-1 py-1 text-center">
                        Folio
                    </th>
                </tr>
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
                    <th scope="col" class="px-1 py-1 text-center">
                        Uso que se le da al equipo
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <!-- Registro -->
                @foreach ($registros as $registro)
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
                        <td class="px-1 py-1 text-center uppercase">
                            {{ $registro->uso }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

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

    tr:nth-child(even) {
        background-color: #d1cfcf;
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

    .text-center {
        text-align: center;
    }
</style>

</html>
