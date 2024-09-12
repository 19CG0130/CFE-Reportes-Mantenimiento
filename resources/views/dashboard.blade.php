<x-app-layout>
    <div class="grid grid-cols-5 gap-4 p-6">

        <!-- Filtros -->
        <section class="col-span-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <!-- Departamentos -->
                <div class="">
                    <div class="flex items-center justify-between cursor-pointer"
                        onclick="toggleSection('departamentos', 'departamentos-arrow')">
                        <span class="text-lg font-bold">Departamentos</span>
                        <!-- Flecha -->
                        <svg id="departamentos-arrow" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div id="departamentos" class="pt-1">
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Administración</span>
                            <span>( 5 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Gestión Comercial</span>
                            <span>( 8 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Informática</span>
                            <span>( 11 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Jurídico</span>
                            <span>( 9 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Medición</span>
                            <span>( 14 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Personal</span>
                            <span>( 6 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Planeación</span>
                            <span>( 5 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Superintendencia</span>
                            <span>( 1 )</span>
                        </button>
                    </div>
                </div>

                <!-- Dispositivos -->
                <div class="pt-4">
                    <div class="flex items-center justify-between cursor-pointer"
                        onclick="toggleSection('dispositivos', 'dispositivos-arrow')">
                        <span class="text-lg font-bold">Dispositivos</span>
                        <!-- Flecha -->
                        <svg id="dispositivos-arrow" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div id="dispositivos" class="pt-1">
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Equipo de Computo</span>
                            <span>( 4 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Terminal Portátil</span>
                            <span>( 6 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Tablet</span>
                            <span>( 17 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Impresora</span>
                            <span>( 3 )</span>
                        </button>
                        <button class="flex justify-between w-full py-2 px-4 bg-gray-100 hover:bg-gray-200">
                            <span>Otro Dispositivo</span>
                            <span>( 0 )</span>
                        </button>
                    </div>
                </div>
            </div>

            <script>
                function toggleSection(sectionId, arrowId) {
                    const section = document.getElementById(sectionId);
                    const arrow = document.getElementById(arrowId);

                    section.classList.toggle('hidden');

                    // Cambiar la flecha
                    if (section.classList.contains('hidden')) {
                        arrow.innerHTML =
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>';
                    } else {
                        arrow.innerHTML =
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>';
                    }
                }
            </script>
        </section>

        <!-- Tabla Registros -->
        <div class="col-span-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative">
                        <!-- Seccion Superior -->
                        <div class="flex flex-wrap items-center justify-between pb-4">
                            <!-- Ordenar por fecha -->
                            <div>
                                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="button">
                                    <svg class="w-6 h-6 px-1 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                    </svg>
                                    Ordenar por fecha
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Dropdown menu -->
                            <div id="dropdownRadio"
                                class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownRadioButton">
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="dia" type="radio" value="" name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="dia"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">
                                                {{ __('Último día') }}
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input checked="" id="semana" type="radio" value=""
                                                name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="semana"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">
                                                {{ __('Última semana ') }}
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="mes" type="radio" value="" name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="mes"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">
                                                {{ __('Último mes') }}
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="todos" type="radio" value="" name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="todos"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">
                                                {{ __('Todos') }}
                                            </label>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!--Boton Modal Seleccionar dispositivo-->
                            <div>
                                <!-- Modal toggle -->
                                <button data-modal-target="select-modal" data-modal-toggle="select-modal"
                                    class="inline-flex items-center px-4 py-2 bg-green-600 dark:bg-green-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-green-900 uppercase tracking-widest hover:bg-green-500 dark:hover:bg-green-300 focus:bg-green-500 dark:focus:bg-green-300 active:bg-green-700 dark:active:bg-green-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-green-800 transition ease-in-out duration-150"
                                    type="button">
                                    Nuevo Registro
                                </button>
                                <!-- Main modal -->
                                <div id="select-modal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Selecciona el tipo de dispositivo:
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="select-modal">
                                                    <svg class="w-6 h-6" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5">
                                                <ul class="space-y-4 mb-4">
                                                    <!-- Equipo de Computo -->
                                                    <li>
                                                        <a href="{{ route('equipo_de_computo') }}" for="job-1"
                                                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                            <div class="flex items-center">
                                                                <svg class="text-blue-500 w-8 h-8 mr-2"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                                </svg>

                                                                <div class="w-full text-lg font-semibold">Equipo de
                                                                    Computo
                                                                </div>

                                                            </div>
                                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 14 10">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                            </svg>
                                                        </a>
                                                    </li>

                                                    <!-- Terminal Portátil -->
                                                    <li>
                                                        <a href="{{ route('terminal_portatil') }}" for="job-1"
                                                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                            <div class="flex items-center">
                                                                <svg class="text-blue-500 w-8 h-8 mr-2"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                                    <rect x="4" y="3" width="16" height="18"
                                                                        rx="2" />
                                                                    <rect x="8" y="7" width="8" height="3"
                                                                        rx="1" />
                                                                    <line x1="8" y1="14"
                                                                        x2="8" y2="14.01" />
                                                                    <line x1="12" y1="14"
                                                                        x2="12" y2="14.01" />
                                                                    <line x1="16" y1="14"
                                                                        x2="16" y2="14.01" />
                                                                    <line x1="8" y1="17"
                                                                        x2="8" y2="17.01" />
                                                                    <line x1="12" y1="17"
                                                                        x2="12" y2="17.01" />
                                                                    <line x1="16" y1="17"
                                                                        x2="16" y2="17.01" />
                                                                </svg>
                                                                <div class="w-full text-lg font-semibold">Terminal
                                                                    Portátil
                                                                </div>

                                                            </div>
                                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 14 10">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                            </svg>
                                                        </a>
                                                    </li>

                                                    <!-- Tablet -->
                                                    <li>
                                                        <a href="{{ route('tablet') }}" for="job-1"
                                                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                            <div class="flex items-center">
                                                                <svg class="text-blue-500 w-8 h-8 mr-2"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <rect x="4" y="2" width="16" height="20"
                                                                        rx="2" ry="2" />
                                                                    <line x1="12" y1="18"
                                                                        x2="12.01" y2="18" />
                                                                </svg>
                                                                <div class="w-full text-lg font-semibold">Tablet
                                                                </div>

                                                            </div>
                                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 14 10">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                            </svg>
                                                        </a>

                                                        <!-- Impresora -->
                                                    <li>
                                                        <a href="{{ route('impresora') }}" for="job-1"
                                                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                            <div class="flex items-center">
                                                                <svg class="text-blue-500 w-8 h-8 mr-2"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                                                </svg>

                                                                <div class="w-full text-lg font-semibold">Impresora
                                                                </div>

                                                            </div>
                                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 14 10">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <!-- Otro Dispositivo -->
                                                    <li>
                                                        <a href="{{ route('otro_dispositivo') }}" for="job-1"
                                                            class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                            <div class="flex items-center">
                                                                <svg class="text-blue-500 w-8 h-8 mr-2"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>

                                                                <div class="w-full text-lg font-semibold">Otro
                                                                    Dispositivo
                                                                </div>

                                                            </div>
                                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 14 10">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                            </svg>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Buscar -->
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="table-search"
                                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Buscar por número de serie">
                            </div>
                        </div>
                    </div>

                    <!-- Tabla Registros -->
                    <table class="w-full shadow-md text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-200 uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400 rounded-lg">
                            <tr class="divide-x divide-gray-500">
                                <th scope="col" class="px-6 py-3 text-center">
                                    Fecha
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Número de Serie
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    RPE
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Dispositivo
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Acciones
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            <!-- Registro 1 -->
                            @foreach ($registros as $registro)

                            <tr
                                class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4 text-center">
                                    {{ $registro->fecha }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ $registro->serie }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ $registro->rpe }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ $registro->dispositivo }}
                                </td>
                                <td class="px-6 py-4 flex justify-center space-x-2">
                                    <div class="flex justify-center space-x-2">
                                        <!--svg Editar registro-->
                                        <a href="#" title="editar">
                                            <svg class="text-gray-500 w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                <line x1="16" y1="5" x2="19" y2="8" />
                                            </svg>
                                        </a>
                                        <!--svg Ver registro-->
                                        <a href="" title="ver">
                                            <svg class="text-green-500 w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                            </svg>
                                        </a>
                                        <!--svg Imprimir por PDF-->
                                        <a href="" title="imprimir">
                                            <svg class="text-blue-500 w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <!--svg Eliminar registro-->
                                        <a href="" title="eliminar">
                                            <svg class="text-red-500 w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <line x1="4" y1="7" x2="20" y2="7" />
                                                <line x1="10" y1="11" x2="10" y2="17" />
                                                <line x1="14" y1="11" x2="14" y2="17" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
