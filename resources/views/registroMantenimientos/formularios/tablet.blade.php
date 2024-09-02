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
                        <span class="text-2xl font-extrabold">Mantenimiento Tablet</span>
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
                    <!-- Uso que se le da al equipo -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-usoQueSeLeDa" class="block text-base font-medium text-gray-900">Uso que se le
                            da al equipo</label>
                        <select id="select-usoQueSeLeDa" name="usoQueSeLeDa"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Informatica">Operativo</option>
                            <option value="Superintendencia">Stock</option>
                        </select>
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
                        <label for="input-1" class="block text-base font-medium text-gray-900">Servicio</label>
                        <select id="select-tipo" name="tipo"
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
                        <input type="text" id="input-IpEthernet" name="IpEthernet"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- MAC Ethernet -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">MAC
                            Ethernet</label>
                        <input type="text" id="input-macEthernet" name="macEthernet"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- IP Inalámbrica -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">IP
                            Inalámbrica</label>
                        <input type="text" id="input-IpInalambrica" name="IpInalambrica"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
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
        <!-- Justificación del porqué se Realiza el Mantenimiento Fuera del Periodo -->
        <div class="max-w-7xl pb-6 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Justificación del porqué se Realiza el Mantenimiento
                            Fuera del Periodo</span>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <!-- Justificacion -->
                    <div class="p-2 w-full">
                        <textarea id="input-justificacion" name="justificacion"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            rows="4"></textarea>
                    </div>
                </div>
            </div>
        </div>

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
                                            <input name="limpiezaSopleteadoExternoEquipo"
                                                id="checkbox-limpiezaSopleteadoExternoEquipo" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpiezaSopleteadoExternoEquipo"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado Externo del Equipo</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="validarTouchPantalla" id="checkbox-validarTouchPantalla"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-validarTouchPantalla"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Validar
                                                Touch Pantalla</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="revisionBateria" id="checkbox-revisionBateria"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-revisionBateria"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Revision
                                                de Bateria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificarSwInstitucional"
                                                id="checkbox-verificarSwInstitucional" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificarSwInstitucional"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Sw Institucional Actualizado</label>
                                        </div>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificarEstadoConectorDatos"
                                                id="checkbox-verificarEstadoConectorDatos" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificarEstadoConectorDatos"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Estado del Conector de Datos</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="validarEstadoTeclado" id="checkbox-validarEstadoTeclado"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-validarEstadoTeclado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Validar
                                                Estado del Teclado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificarFuncionamientoEquipoDespuesServicio"
                                                id="checkbox-verificarFuncionamientoEquipoDespuesServicio"
                                                type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificarFuncionamientoEquipoDespuesServicio"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Funcionamiento del Equipo Después del Servicio</label>
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
