<x-app-layout>
    <form method="POST" action="/registro_mantenimiento_equipo/post">
        @csrf
        <!-- Mantenimiento preventivo equipos de computo -->
        <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Mantenimiento preventivo equipos de computo</span>
                    </div>
                    <div class="pl-2">
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
                <div class="flex flex-wrap -mx-2">
                    <!-- Departamento -->
                    <div class="p-2 w-1/4">
                        <label for="inputDepartamento"
                            class="block text-base font-medium text-gray-900">Departamento</label>
                        <select id="select-departamento" name="departamento"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Selecciona el departamento</option>
                            <option value="Informatica">Informatica</option>
                            <option value="Superintendencia">Superintendencia</option>
                        </select>
                    </div>
                    <!-- Puesto -->
                    <div class="p-2 w-1/4">
                        <label for="inputPuesto" class="block text-base font-medium text-gray-900">Puesto</label>
                        <input type="text" name="puesto" id="input-puesto"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Usuario -->
                    <div class="p-2 w-1/4">
                        <label for="inputUsuario" class="block text-base font-medium text-gray-900">Usuario</label>
                        <input type="text" name="usuario" id="input-usuario"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- RPE -->
                    <div class="p-2 w-1/4">
                        <label for="input-4" class="block text-base font-medium text-gray-900">RPE</label>
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
                    <div>
                        <label for="input-1" class="block text-base font-medium text-gray-900">Tipo</label>
                        <select id="select-tipo" name="tipo"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Selecciona el dispositivo</option>
                            <option value="Informatica">PC</option>
                            <option value="Superintendencia">Laptop</option>
                        </select>
                    </div>
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Marca</label>
                        <input type="text" id="input-marca" name="marca"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Modelo</label>
                        <input type="text" id="input-modelo" name="modelo"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Serie</label>
                        <input type="text" id="input-serie" name="serie"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Nombre
                            D.A</label>
                        <input type="text" id="input-nombreDA" name="nombreDA"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
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

        <!-- Software -->
        <div class="max-w-7xl pb-6 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Software</span>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <!-- Sistema Operativo -->
                    <div class="p-2 w-1/4">
                        <label for="input-1" class="block text-base font-medium text-gray-900">Sistema
                            Operativo</label>
                        <select id="select-sistemaOperativo" name="sistemaOperativo"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Informatica">Windows</option>
                            <option value="Superintendencia">MacOs</option>
                            <option value="Superintendencia">Linux</option>
                        </select>
                    </div>
                    <!-- Versión Sistema Operativo -->
                    <div class="p-2 w-1/4">
                        <label for="input-1" class="block text-base font-medium text-gray-900">Versión Sistema
                            Operativo</label>
                        <select id="select-versionSistemaOpertativo" name="versionSistemaOpertativo"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Informatica">Windows</option>
                            <option value="Superintendencia">MacOs</option>
                            <option value="Superintendencia">Linux</option>
                        </select>
                    </div>
                    <!-- Office -->
                    <div class="p-2 w-1/4">
                        <label for="input-1" class="block text-base font-medium text-gray-900">Office</label>
                        <select id="select-office" name="office"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Informatica">Office 2016</option>
                            <option value="Superintendencia">Office 2019</option>
                        </select>
                    </div>
                    <!-- Antivirus -->
                    <div class="p-2 w-1/4">
                        <label for="input-1" class="block text-base font-medium text-gray-900">Antivirus</label>
                        <select id="select-antivirus" name="antivirus"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Informatica">MCCOFFE</option>
                            <option value="Superintendencia">KASPERSKY</option>
                        </select>
                    </div>
                    <!-- Antivirus Versión -->
                    <div class="p-2 w-1/4">
                        <label for="input-3" class="block text-base font-medium text-gray-900">Antivirus
                            Versión</label>
                        <input type="text" id="input-antivirusVersion" name="antivirusVersion"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    {{-- <!-- Añadir Otro Antivirus -->
                    <div class="p-2 w-1/4">
                        <label for="input-4" class="block text-base font-medium text-gray-900">Añadir Otro Antivirus</label>
                        <input type="text" id="input-4"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Añadir Otro Software -->
                    <div class="p-2 w-1/4">
                        <label for="input-4" class="block text-base font-medium text-gray-900">Añadir Otro Software</label>
                        <input type="text" id="input-4"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Hardware y Mantenimiento Ejecutado -->
        <div class="flex grid max-w-7xl mx-auto gap-6 pb-6 lg:grid-cols-2 sm:px-6 lg:px-8">

            <!-- Hardware -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Hardware</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <!-- Agregar Otro -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Agregar Otro</label>
                        <input type="text" id="input-marca" name="marca"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Mantenimiento Ejecutado -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Mantenimiento Ejecutado</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <!-- Agregar Otro -->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Agregar Otro</label>
                        <input type="text" id="input-IpEthernet" name="IpEthernet"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
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
                        <label for="input-observaciones"
                            class="block text-base font-medium text-gray-900">Observaciones</label>
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
