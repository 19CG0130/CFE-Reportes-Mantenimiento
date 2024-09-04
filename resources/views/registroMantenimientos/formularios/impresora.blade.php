<x-app-layout>
    <form method="POST" action="/registro_mantenimiento/post">
        @csrf
        <!-- Mantenimiento preventivo equipos de computo -->
        <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Boton Cancelar -->
            <a href="{{ route('dashboard') }}"
                class="mb-2 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                Cancelar
            </a>
            <!-- Título -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-1 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Mantenimiento Impresora</span>
                    </div>
                    <div class=" pl-2">
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input id="datepicker-autohide" type="text" name="fecha"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Fecha">
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <!-- Zona -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-zona" class="block text-base font-medium text-gray-900">Zona</label>
                        <select id="select-zona" name="zona"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Informatica">Nuevo Casas Grandes</option>
                        </select>
                    </div>
                    <!-- Departamento -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-Departamento"
                            class="block text-base font-medium text-gray-900">Departamento</label>
                        <select id="select-departamento" name="departamento"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Informatica">Informatica</option>
                            <option value="Superintendencia">Superintendencia</option>
                        </select>
                    </div>
                    <!-- div Vacio -->
                    <div class="pr-2 pb-1 w-1/4">
                    </div>
                    <!-- Hora Inicio / Fin -->
                    <div class="pr-2 pb-1 flex w-1/4">
                        <div class="w-1/2 pr-2">
                            <label for="start-time" class="block text-base font-medium text-gray-900">Inicio</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="time" id="start-time" name="horaInicio"
                                    class="block w-full pr-5 p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" />
                            </div>
                        </div>
                        <div class="w-1/2 pr-2">
                            <label for="end-time" class="block text-base font-medium text-gray-900">Fin</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="time" id="end-time" name="horaFin"
                                    class="block w-full pr-5 p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" />
                            </div>
                        </div>
                    </div>

                    <!-- Usuario -->
                    <div class="pr-2 w-1/4">
                        <label for="input-Usuario" class="block text-base font-medium text-gray-900">Usuario</label>
                        <input type="text" name="usuario" id="input-usuario"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Puesto -->
                    <div class="pr-2 w-1/4">
                        <label for="input-Puesto" class="block text-base font-medium text-gray-900">Puesto</label>
                        <input type="text" name="puesto" id="input-puesto"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- RPE -->
                    <div class="pr-2 w-1/4">
                        <label for="input-RPE" class="block text-base font-medium text-gray-900">RPE</label>
                        <input type="text" name="RPE" id="input-RPE"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

            </div>
        </div>

        <!-- Equipo Atendido y Conectividad -->
        <div class="flex grid max-w-7xl mx-auto gap-6 pb-6 lg:grid-cols-2 sm:px-6 lg:px-8">
            <!-- Equipo Atendido -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Equipo Atendido</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <!-- Servicio -->
                    <div>
                        <label for="input-servicio" class="block text-base font-medium text-gray-900">Servicio</label>
                        <select id="select-servicio" name="servicio"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Informatica">Preventivo</option>
                            <option value="Superintendencia">Correctivo</option>
                        </select>
                    </div>
                    <!-- Marca -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Marca</label>
                        <input type="text" id="input-marca" name="marca"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Modelo -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Modelo</label>
                        <input type="text" id="input-modelo" name="modelo"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Serie -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Serie</label>
                        <input type="text" id="input-serie" name="serie"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Nombre D.A -->

                    <!-- Num. Activo fijo -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Num. Activo
                            fijo</label>
                        <input type="text" id="input-numActivoFijo" name="numActivoFijo"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Conectividad -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Conectividad</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <!-- IP Ethernet -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">IP
                            Ethernet</label>
                        <!-- <input type="text" id="input-IpEthernet" name="IpEthernet"-->
                        <!--class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">

                        <!--Script IP Ethernet-->
                        <style>
                            .ip-segment {
                                width: 35px;
                                text-align: center;
                                margin-right: 5px;
                            }

                            .ip-container input[type="text"] {
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                padding: 5px;
                            }
                        </style>

                        <div class="ip-container">
                            <input type="text" class="ip-segment" maxlength="3" id="seg1" />
                            .
                            <input type="text" class="ip-segment" maxlength="3" id="seg2" />
                            .
                            <input type="text" class="ip-segment" maxlength="3" id="seg3" />
                            .
                            <input type="text" class="ip-segment" maxlength="3" id="seg4" />
                        </div>

                        <!-- Input para mostrar la IP completa -->
                        <div>
                            <input type="hidden" id="input-IpEthernet" name="IpEthernet" readonly />
                        </div>

                        <script>
                            const segments = document.querySelectorAll('.ip-segment');
                            const fullIpInput = document.getElementById('input-IpEthernet');

                            segments.forEach((segment, index) => {
                                segment.addEventListener('input', function() {

                                    const ipAddress = Array.from(segments).map(seg => seg.value).join('.');
                                    fullIpInput.value = ipAddress;
                                });

                                segment.addEventListener('keydown', function(e) {

                                    if (e.key === 'Backspace' && segment.value === '' && index > 0) {
                                        segments[index - 1].focus();
                                    } else if (e.key === 'ArrowRight' && index < 3) {
                                        segments[index + 1].focus();
                                    } else if (e.key === 'ArrowLeft' && index > 0) {
                                        segments[index - 1].focus();
                                    }
                                });
                            });


                            document.querySelector('form').addEventListener('submit', function(e) {
                                let valid = true;
                                segments.forEach(segment => {
                                    if (segment.value.length < 1 || segment.value.length > 3) {
                                        valid = false;
                                    }
                                });

                                if (!valid) {
                                    e.preventDefault();
                                    alert('Por favor, asegúrese de que cada segmento de la IP tenga entre 1 y 3 dígitos.');
                                } else {
                                    // Concatenar 
                                    const ipAddress = Array.from(segments).map(seg => seg.value).join('.');
                                    fullIpInput.value = ipAddress;
                                }
                            });
                        </script>


                        <!--End of Script IP Ethernet-->
                    </div>
                    <!-- MAC Ethernet -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">MAC
                            Ethernet</label>
                        <input type="hidden" id="input-macEthernet" name="macEthernet">
                        <!--Script MAC Ethernet-->
                        <style>
                            .Mac-segment {
                                width: 35px;
                                text-align: center;
                                margin-right: 5px;
                            }

                            .ip-container input[type="text"] {
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                padding: 5px;
                            }
                        </style>

                        <div class="ip-container">
                            <input type="text" class="Mac-segment" maxlength="3" id="segm1" />
                            :
                            <input type="text" class="Mac-segment" maxlength="3" id="segm2" />
                            :
                            <input type="text" class="Mac-segment" maxlength="3" id="segm3" />
                            :
                            <input type="text" class="Mac-segment" maxlength="3" id="segm4" />
                            :
                            <input type="text" class="Mac-segment" maxlength="3" id="segm4" />
                            :
                            <input type="text" class="Mac-segment" maxlength="3" id="segm4" />
                        </div>

                        <script>
                            const segmentsM = document.querySelectorAll('.Mac-segment');
                            const fullIpInputI = document.getElementById('input-macEthernet');

                            segmentsM.forEach((segment, index) => {
                                segment.addEventListener('input', function() {
                                    
                                    const macAddressI = Array.from(segmentsM).map(seg => seg.value).join(':');
                                    fullIpInputI.value = macAddressI;
                                });

                                segment.addEventListener('keydown', function(e) {
                                    // Navegación manual entre segmentos con las flechas o Backspace
                                    if (e.key === 'Backspace' && segment.value === '' && index > 0) {
                                        segmentsM[index - 1].focus();
                                    } else if (e.key === 'ArrowRight' && index < 5) {
                                        segmentsM[index + 1].focus();
                                    } else if (e.key === 'ArrowLeft' && index > 0) {
                                        segmentsM[index - 1].focus();
                                    }
                                });
                            });

                            
                            document.querySelector('form').addEventListener('submit', function(e) {
                                let valid = true;
                                segmentsM.forEach(segment => {
                                    if (segment.value.length < 1 || segment.value.length > 2) {
                                        valid = false;
                                    }
                                });

                                if (!valid) {
                                    e.preventDefault();
                                    alert('Por favor, asegúrese de que cada segmento de la MAC tenga entre 1 y 2 dígitos.');
                                } else {
                                    
                                    const macAddressI = Array.from(segmentsM).map(seg => seg.value).join(':');
                                    fullIpInputI.value = macAddressI;
                                }
                            });
                        </script>

                        <!--End Script MAC Ethernet-->
                    </div>
                    <!-- IP Inalámbrica -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">IP
                            Inalámbrica</label>
                        <input type="hidden" id="input-IpInalambrica" name="IpInalambrica">

                        <!-- Script IP Inalámbrica -->
                        <style>
                            .ip-segmentI {
                                width: 35px;
                                text-align: center;
                                margin-right: 5px;
                            }

                            .ip-container input[type="text"] {
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                padding: 5px;
                            }
                        </style>

                        <div class="ip-container">
                            <input type="text" class="ip-segmentI" maxlength="3" id="segI1" />
                            .
                            <input type="text" class="ip-segmentI" maxlength="3" id="segI2" />
                            .
                            <input type="text" class="ip-segmentI" maxlength="3" id="segI3" />
                            .
                            <input type="text" class="ip-segmentI" maxlength="3" id="segI4" />
                        </div>

                        <script>
                            const segmentsI = document.querySelectorAll('.ip-segmentI');
                            const fullIpInputI = document.getElementById('input-IpInalambrica');

                            segmentsI.forEach((segment, index) => {
                                segment.addEventListener('input', function() {
                                    // Unir los valores de los segmentos cuando se ingresa algo en cualquiera de ellos
                                    const ipAddressI = Array.from(segmentsI).map(seg => seg.value).join('.');
                                    fullIpInputI.value = ipAddressI;
                                });

                                segment.addEventListener('keydown', function(e) {
                                    // Navegación manual entre segmentos con las flechas o Backspace
                                    if (e.key === 'Backspace' && segment.value === '' && index > 0) {
                                        segmentsI[index - 1].focus();
                                    } else if (e.key === 'ArrowRight' && index < 3) {
                                        segmentsI[index + 1].focus();
                                    } else if (e.key === 'ArrowLeft' && index > 0) {
                                        segmentsI[index - 1].focus();
                                    }
                                });
                            });

                            // Validar que todos los segmentos estén llenos al enviar el formulario
                            document.querySelector('form').addEventListener('submit', function(e) {
                                let valid = true;
                                segmentsI.forEach(segment => {
                                    if (segment.value.length < 1 || segment.value.length > 3) {
                                        valid = false;
                                    }
                                });

                                if (!valid) {
                                    e.preventDefault();
                                    alert('Por favor, asegúrese de que cada segmento de la IP tenga entre 1 y 3 dígitos.');
                                } else {
                                    // Concatenar los segmentos y asignar el valor al input de IP completa
                                    const ipAddressI = Array.from(segmentsI).map(seg => seg.value).join('.');
                                    fullIpInputI.value = ipAddressI;
                                }
                            });
                        </script>
                        <!--End Script IP Inalámbrica-->
                    </div>
                    <!-- MAC Inalámbrica -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">MAC
                            Inalámbrica</label>
                        <input type="text" id="input-macInalambrica" name="macInalambrica"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- MAC Bluetooth -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">MAC
                            Bluetooth</label>
                        <input type="text" id="input-macBluetooth" name="macBluetooth"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>
        </div>

        <!-- Software -->

        <!-- Hardware -->


        <!-- Mantenimiento Ejecutado -->
        <div class="max-w-7xl pb-6 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Mantenimiento Ejecutado</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-full px-4">
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-2">
                            <!-- Columna 1 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="desarmar_limpieza_interna"
                                                id="checkbox-desarmar_limpieza_interna" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-desarmar_limpieza_interna"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Desarmar
                                                Equipo para su Limpieza Interna</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_sopleteado_int_ext"
                                                id="checkbox-limpieza_sopleteado_int_ext" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_sopleteado_int_ext"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado Interno y Externo del Equipo</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_bandejas" id="checkbox-limpieza_bandejas"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_bandejas"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Bandejas o Charolas</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_alimentacion_papel"
                                                id="checkbox-limpieza_alimentacion_papel" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_alimentacion_papel"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Revisión del Mecanismo de Alimentación del Papel</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_unidad_fusion" id="checkbox-limpieza_unidad_fusion"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_unidad_fusion"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Revisión de la Unidad de Fusión</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_unidad_laser" id="checkbox-limpieza_unidad_laser"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_unidad_laser"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Revisión de la Unidad Láser</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="validar_consumibles" id="checkbox-validar_consumibles"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-validar_consumibles"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Validar
                                                Estado de Consumibles</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="equipo_en_red" id="checkbox-equipo_en_red" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-equipo_en_red"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Equipo
                                                en Red</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="realizar_auto_prueba" id="checkbox-realizar_auto_prueba"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-realizar_auto_prueba"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Realizar
                                                Auto Prueba</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_post_servicio"
                                                id="checkbox-verificar_post_servicio" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_post_servicio"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Equipo
                                                Operando Después del Servicio</label>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Observaciones -->
        <div class="max-w-7xl pb-6 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Observaciones</span>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <!-- Observaciones -->
                    <div class="p-2 w-full">
                        <textarea id="input-observaciones" name="observaciones"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            rows="4"></textarea>
                    </div>
                </div>
            </div>
        </div>


        <!-- Botón Guardar -->
        <div class="flex justify-center pb-6">
            <x-primary-button>
                {{ __('Guardar Registro') }}
            </x-primary-button>
        </div>
    </form>


</x-app-layout>
