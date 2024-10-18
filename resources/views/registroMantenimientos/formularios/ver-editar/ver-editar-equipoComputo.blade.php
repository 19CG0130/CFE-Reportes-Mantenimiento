<x-app-layout>
    <form method="POST" action="{{ route('registro_mantenimiento.update', $equipo->id) }}">
        @csrf
        @method('PUT')
        <!--------- Mantenimiento ---------->
        <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!---------- Boton Cancelar ---------->
            <a href="{{ route('dashboard') }}"
                class="mb-2 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                Cancelar
            </a>

            <!---------- Sección ---------->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">

                    <!---------- Título ---------->
                    <div class="p-1 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Mantenimiento Equipo de Computo</span>
                    </div>

                    <!---------- Fecha ---------->
                    <div class="pl-2">
                        <div class="relative max-w-sm">
                            <input type="{{ $action == 'ver' ? 'text' : 'date' }}" name="fecha"
                                value="{{ old('fecha', $equipo->fecha ?? date('Y-m-d')) }}"
                                size="{{ strlen(old('fecha', $equipo->fecha ?? date('Y-m-d'))) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-center dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                {{ $action == 'ver' ? 'disabled' : '' }}>
                            <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                        </div>
                    </div>

                </div>

                <!---------- Sección ---------->
                <div class="flex flex-wrap">

                    <!---------- Zona ---------->
                    <div class="pr-2 pb-1 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Zona</label>
                        @if ($action == 'ver')
                            <input type="text" name="zona" value="{{ old('zona', $equipo->zona ?? '') }}"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled>
                        @else
                            <select name="zona"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled>Seleccionar</option>
                                <option value="Nuevo Casas Grandes"
                                    {{ old('zona', $equipo->zona) == 'Nuevo Casas Grandes' ? 'selected' : '' }}>Nuevo
                                    Casas Grandes
                                </option>
                            </select>
                        @endif
                        <x-input-error :messages="$errors->get('zona')" class="mt-2" />
                    </div>

                    <!---------- Departamento ---------->
                    <div class="pr-2 pb-1 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Departamento</label>
                        @if ($action == 'ver')
                            <input type="text" name="departamento"
                                value="{{ old('departamento', $equipo->departamento ?? '') }}"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled>
                        @else
                            <select name="departamento"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled>Seleccionar</option>
                                <option value="Administración"
                                    {{ old('departamento', $equipo->departamento) == 'Administración' ? 'selected' : '' }}>
                                    Administración
                                </option>
                                <option
                                    value="Gestión Comercial"{{ old('departamento', $equipo->departamento) == 'Gestión Comercial' ? 'selected' : '' }}>
                                    Gestión Comercial</option>
                                <option value="Informática"
                                    {{ old('departamento') == 'Informática' ? 'selected' : '' }}>
                                    Informática</option>
                                <option value="Jurídico"
                                    {{ old('departamento', $equipo->departamento) == 'Jurídico' ? 'selected' : '' }}>
                                    Jurídico
                                </option>
                                <option value="Medición, Conexiones y Servicios"
                                    {{ old('departamento', $equipo->departamento) == 'Medición, Conexiones y Servicios' ? 'selected' : '' }}>
                                    Medición, Conexiones y Servicios</option>
                                <option value="Personal"
                                    {{ old('departamento', $equipo->departamento) == 'Personal' ? 'selected' : '' }}>
                                    Personal
                                </option>
                                <option value="Planeación"
                                    {{ old('departamento', $equipo->departamento) == 'Planeación' ? 'selected' : '' }}>
                                    Planeación</option>
                                <option value="Superintendencia"
                                    {{ old('departamento', $equipo->departamento) == 'Superintendencia' ? 'selected' : '' }}>
                                    Superintendencia
                                </option>
                            </select>
                        @endif
                        <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
                    </div>

                    <!---------- Uso que se le da al equipo ---------->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-uso" class="block text-base font-medium text-gray-900">Uso que se le da al
                            equipo</label>
                        @if ($action == 'ver')
                            <input type="text" name="uso" value="{{ old('uso', $equipo->uso ?? '') }}"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled>
                        @else
                            <select id="select-uso" name="uso"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled {{ old('uso') ? '' : 'selected' }}>Seleccionar</option>
                                <option value="Operativo"
                                    {{ old('uso', $equipo->uso ?? '') == 'Operativo' ? 'selected' : '' }}>
                                    Operativo
                                </option>
                                <option value="Capacitación"
                                    {{ old('uso', $equipo->uso ?? '') == 'Capacitación' ? 'selected' : '' }}>
                                    Capacitación
                                </option>
                            </select>
                        @endif
                        <x-input-error :messages="$errors->get('uso')" class="mt-2" />
                    </div>

                    <!---------- Hora Inicio / Fin ---------->
                    <div class="pr-2 pb-1 flex w-1/4">
                        <!-- Hora de Inicio -->
                        <div class="w-1/2 pr-2">
                            <label class="block text-base font-medium text-gray-900">Inicio</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="time" name="hora_inicio"
                                    value="{{ old('hora_inicio', $equipo->hora_inicio ?? '') }}"
                                    class="block w-full pr-5 p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                    @disabled($action == 'ver')>
                            </div>
                            <x-input-error :messages="$errors->get('hora_inicio')" class="mt-2" />
                        </div>

                        <!-- Hora de Fin -->
                        <div class="w-1/2 pr-2">
                            <label class="block text-base font-medium text-gray-900">Fin</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="time" name="hora_fin"
                                    value="{{ old('hora_fin', $equipo->hora_fin ?? '') }}"
                                    class="block w-full pr-5 p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                    @disabled($action == 'ver')>
                            </div>
                            <x-input-error :messages="$errors->get('hora_fin')" class="mt-2" />
                        </div>
                    </div>

                    <!---------- Responsable del Mantenimiento ---------->
                    <div class="pr-2 w-1/4">
                        <label class="block text-base font-medium text-gray-900">
                            Responsable del Mantenimiento</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" name="responsable_mantenimiento"
                                value="{{ old('responsable_mantenimiento', $equipo->responsable_mantenimiento) }}"
                                title="El Responsable del Mantenimiento es el Usuario que Inicio Sesión"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                @disabled($action == 'ver')>
                        </div>
                        <x-input-error :messages="$errors->get('responsable_mantenimiento')" class="mt-2" />
                    </div>

                    <!---------- Responsable del Equipo ---------->
                    <div class="pr-2 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Responsable del Equipo</label>
                        <input type="text" name="responsable_equipo"
                            value="{{ old('responsable_equipo', $equipo->responsable_equipo ?? '') }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('responsable_equipo')" class="mt-2" />
                    </div>


                    <!---------- Puesto ---------->
                    <div class="pr-2 pb-1 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Puesto</label>
                        @if ($action == 'ver')
                            <input type="text" name="puesto" value="{{ old('puesto', $equipo->puesto ?? '') }}"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                disabled>
                        @else
                            <select name="puesto"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled
                                    {{ old('puesto', $equipo->puesto ?? '') ? '' : 'selected' }}>Seleccionar</option>
                                <option value="Jefe Departamento"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Jefe Departamento' ? 'selected' : '' }}>
                                    Jefe Departamento</option>
                                <option value="Superintendente"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Superintendente' ? 'selected' : '' }}>
                                    Superintendente</option>
                                <option value="Jefe Oficina"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Jefe Oficina' ? 'selected' : '' }}>Jefe
                                    Oficina</option>
                                <option value="Secretaria"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Secretaria' ? 'selected' : '' }}>
                                    Secretaria</option>
                                <option value="Administrador"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Administrador' ? 'selected' : '' }}>
                                    Administrador</option>
                                <option value="Supervisor"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Supervisor' ? 'selected' : '' }}>
                                    Supervisor</option>
                                <option value="Agente Comercial"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Agente Comercial' ? 'selected' : '' }}>
                                    Agente Comercial</option>
                                <option value="Oficinista"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Oficinista' ? 'selected' : '' }}>
                                    Oficinista</option>
                                <option value="Auxiliar Especializado"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Auxiliar Especializado' ? 'selected' : '' }}>
                                    Auxiliar Especializado</option>
                                <option value="Auxiliar Administrativo"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Auxiliar Administrativo' ? 'selected' : '' }}>
                                    Auxiliar Administrativo</option>
                                <option value="Operador Distribución"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Operador Distribución' ? 'selected' : '' }}>
                                    Operador Distribución</option>
                                <option value="Técnico"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Técnico' ? 'selected' : '' }}>Técnico
                                </option>
                                <option value="Sobrestante"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Sobrestante' ? 'selected' : '' }}>
                                    Sobrestante</option>
                                <option value="Verificador Calibrador"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Verificador Calibrador' ? 'selected' : '' }}>
                                    Verificador Calibrador</option>
                                <option value="Profesionista"
                                    {{ old('puesto', $equipo->puesto ?? '') == 'Profesionista' ? 'selected' : '' }}>
                                    Profesionista</option>
                            </select>
                        @endif
                        <x-input-error :messages="$errors->get('puesto')" class="mt-2" />
                    </div>

                    <!---------- RPE ---------->
                    <div class="pr-2 w-1/4">
                        <label class="block text-base font-medium text-gray-900">RPE</label>
                        <input type="text" name="rpe" value="{{ old('rpe', $equipo->rpe ?? '') }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('rpe')" class="mt-2" />
                    </div>

                    <!---------- Tipo de Dispositivo ---------->
                    <div class="pr-2 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Tipo de Dispositivo</label>
                        @if ($action == 'ver')
                            <input type="text" name="dispositivo"
                                value="{{ old('dispositivo', $equipo->dispositivo ?? '') }}"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                disabled>
                        @else
                            <select name="dispositivo" value="{{ old('dispositivo', $equipo->dispositivo ?? '') }}"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="PC Escritorio"
                                    {{ old('dispositivo', $equipo->dispositivo ?? '') == 'PC Escritorio' ? 'selected' : '' }}>
                                    PC Escritorio
                                </option>
                                <option value="Laptop"
                                    {{ old('dispositivo', $equipo->dispositivo ?? '') == 'Laptop' ? 'selected' : '' }}>
                                    Laptop
                                </option>
                            </select>
                        @endif
                        <x-input-error :messages="$errors->get('dispositivo')" class="mt-2" />
                    </div>

                </div>
            </div>
        </div>

        <!---------- Equipo Atendido y Conectividad ---------->
        <div class="grid max-w-7xl mx-auto gap-6 pb-6 lg:grid-cols-2 sm:px-6 lg:px-8">
            <!-- Equipo Atendido -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">

                <!---------- Titulo ---------->
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Equipo Atendido</span>
                    </div>
                </div>

                <!---------- Sección ---------->
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">

                    <!---------- Servicio ---------->
                    <div>
                        <label class="block text-base font-medium text-gray-900">Servicio</label>
                        @if ($action == 'ver')
                            <input type="text" name="servicio"
                                value="{{ old('servicio', $equipo->servicio ?? '') }}"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled>
                        @else
                            <select name="servicio"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled {{ old('servicio') ? '' : 'selected' }}>Seleccionar
                                </option>
                                <option value="Preventivo"
                                    {{ old('servicio', $equipo->servicio ?? '') == 'Preventivo' ? 'selected' : '' }}>
                                    Preventivo
                                </option>
                                <option value="Correctivo"
                                    {{ old('servicio', $equipo->servicio ?? '') == 'Correctivo' ? 'selected' : '' }}>
                                    Correctivo
                                </option>
                            </select>
                        @endif
                        <x-input-error :messages="$errors->get('servicio')" class="mt-2" />
                    </div>

                    <!---------- Marca ---------->
                    <div>
                        <label class="block text-base font-medium text-gray-900">Marca</label>
                        <input type="text" name="marca" value="{{ old('marca', $equipo->marca) }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                    </div>

                    <!---------- Modelo ---------->
                    <div>
                        <label class="block text-base font-medium text-gray-900">Modelo</label>
                        <input type="text" name="modelo" value="{{ old('modelo', $equipo->modelo) }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                    </div>

                    <!---------- Serie ---------->
                    <div>
                        <label class="block text-base font-medium text-gray-900">Serie</label>
                        <input type="text" name="serie" value="{{ old('serie', $equipo->serie) }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('serie')" class="mt-2" />
                    </div>

                    <!---------- Nombre D.A ---------->
                    <div>
                        <label for="input-2" class="block text-base font-medium text-gray-900">Nombre
                            Active
                            Directory</label>
                        <input type="text" id="input-active_directory" name="active_directory"
                            value="{{ old('active_directory', $equipo->active_directory) }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('active_directory')" class="mt-2" />
                    </div>

                    <!---------- Num. Activo fijo ---------->
                    <div>
                        <label class="block text-base font-medium text-gray-900">Numero Activo
                            fijo</label>
                        <input type="text" name="num_activo_fijo"
                            value="{{ old('num_activo_fijo', $equipo->num_activo_fijo) }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('serie')" class="mt-2" />
                    </div>

                </div>
            </div>

            <!------ Conectividad ------>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Conectividad</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <!--  Ethernets -->
                    <div>
                        <!---------- IP Ethernet ---------->
                        <div>
                            <label class="block text-base font-medium text-gray-900">IP Ethernet</label>
                            <input type="text" name="ip_ethernet" value="{{ old('ip_ethernet', $conectividad->ip_ethernet) }}"
                                class="block w-full p-1 text-gray-900 border {{ $errors->has('ip_ethernet') ? 'border-red-500 bg-red-200' : 'border-gray-300' }} rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                maxlength="15" @disabled($action == 'ver')>
                            <x-input-error :messages="$errors->get('ip_ethernet')" class="mt-2" />
                        </div>

                        <!---------- MAC Ethernet ---------->
                        <div>
                            <label class="block text-base font-medium text-gray-900">MAC Ethernet</label>
                            <input type="text" name="mac_ethernet" value="{{ old('mac_ethernet', $conectividad->mac_ethernet) }}"
                                class="block w-full p-1 text-gray-900 border {{ $errors->has('mac_ethernet') ? 'border-red-500 bg-red-200' : 'border-gray-300' }} rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                maxlength="17" @disabled($action == 'ver')>
                            <x-input-error :messages="$errors->get('mac_ethernet')" class="mt-2" />
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var ipPattern =
                                    /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/;

                                var macPattern = /^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}$/;

                                const ipInput = document.querySelector('input[name="ip_ethernet"]');
                                if (ipInput) {
                                    ipInput.addEventListener('input', function() {
                                        if (this.value === '') {
                                            this.classList.remove('border-red-500', 'bg-red-200');
                                        } else if (!ipPattern.test(this.value)) {
                                            this.classList.add('border-red-500', 'bg-red-200');
                                        } else {
                                            this.classList.remove('border-red-500', 'bg-red-200');
                                        }
                                    });
                                }

                                function formatMac(input) {
                                    let value = input.value.replace(/[^0-9A-Fa-f]/g, '');
                                    let mac = '';
                                    for (let i = 0; i < value.length; i++) {
                                        mac += value[i];
                                        if ((i % 2 === 1) && i < value.length - 1) {
                                            mac += ':';
                                        }
                                    }
                                    input.value = mac.toUpperCase();
                                }

                                function validateMac(input) {
                                    if (input.value === '') {
                                        input.classList.remove('border-red-500', 'bg-red-200');
                                    } else if (!macPattern.test(input.value)) {
                                        input.classList.add('border-red-500', 'bg-red-200');
                                    } else {
                                        input.classList.remove('border-red-500', 'bg-red-200');
                                    }
                                }

                                const macInput = document.querySelector('input[name="mac_ethernet"]');
                                if (macInput) {
                                    macInput.addEventListener('input', function() {
                                        formatMac(macInput);
                                        validateMac(macInput);
                                    });
                                }
                            });
                        </script>

                    </div>
                    <!-- Inalámbricos -->
                    <!---------- IP Inalámbrica ---------->
                    <div>
                        <label class="block text-base font-medium text-gray-900">IP Inalámbrica</label>
                        <input type="text" name="ip_inalambrica" value="{{ old('ip_inalambrica', $conectividad->ip_inalambrica) }}"
                            class="block w-full p-1 text-gray-900 border {{ $errors->has('ip_inalambrica') ? 'border-red-500 bg-red-200' : 'border-gray-300' }} rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            maxlength="15" @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('ip_inalambrica')" class="mt-2" />
                    </div>

                    <!---------- MAC Inalámbrica ---------->
                    <div>
                        <label class="block text-base font-medium text-gray-900">MAC Inalámbrica</label>
                        <input type="text" name="mac_inalambrica" value="{{ old('mac_inalambrica', $conectividad->mac_inalambrica) }}"
                            class="block w-full p-1 text-gray-900 border {{ $errors->has('mac_inalambrica') ? 'border-red-500 bg-red-200' : 'border-gray-300' }} rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            maxlength="17" @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('mac_inalambrica')" class="mt-2" />
                    </div>

                    <!---------- MAC Bluetooth ---------->
                    <div>
                        <label class="block text-base font-medium text-gray-900">MAC Bluetooth</label>
                        <input type="text" name="mac_bluetooth" value="{{ old('mac_bluetooth',$conectividad->mac_inalambrica) }}"
                            class="block w-full p-1 text-gray-900 border {{ $errors->has('mac_bluetooth') ? 'border-red-500 bg-red-200' : 'border-gray-300' }} rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            maxlength="17" @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('mac_bluetooth')" class="mt-2" />
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var ipPattern =
                                /\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/;

                            var macPattern = /^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}$/;

                            const ipInput = document.querySelector('input[name="ip_inalambrica"]');
                            if (ipInput) {
                                ipInput.addEventListener('input', function() {
                                    if (this.value === '') {
                                        this.classList.remove('border-red-500', 'bg-red-200');
                                    } else if (!ipPattern.test(this.value)) {
                                        this.classList.add('border-red-500', 'bg-red-200');
                                    } else {
                                        this.classList.remove('border-red-500', 'bg-red-200');
                                    }
                                });
                            }

                            function formatMac(input) {
                                let value = input.value.replace(/[^0-9A-Fa-f]/g, '');
                                let mac = '';
                                for (let i = 0; i < value.length; i++) {
                                    mac += value[i];
                                    if ((i % 2 === 1) && i < value.length - 1) {
                                        mac += ':';
                                    }
                                }
                                input.value = mac.toUpperCase();
                            }

                            function validateMac(input) {
                                if (input.value === '') {
                                    input.classList.remove('border-red-500', 'bg-red-200');
                                } else if (!macPattern.test(input.value)) {
                                    input.classList.add('border-red-500', 'bg-red-200');
                                } else {
                                    input.classList.remove('border-red-500', 'bg-red-200');
                                }
                            }

                            const macInputs = document.querySelectorAll(
                                'input[name="mac_inalambrica"], input[name="mac_bluetooth"]');
                            macInputs.forEach(function(macInput) {
                                macInput.addEventListener('input', function() {
                                    formatMac(macInput);
                                    validateMac(macInput);
                                });
                            });
                        });
                    </script>


                </div>
            </div>
        </div>

        <!---------- Software ---------->
        <div class="pb-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-1 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Software</span>
                    </div>
                </div>
                <div class="pb-3 flex flex-wrap">
                    <!-- Sistema Operativo -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-sistema_operativo" class="block text-base font-medium text-gray-900">
                            Sistema Operativo</label>
                        @if ($action == 'ver')
                            <input type="text" name="sistema_operativo"
                                value="{{ old('sistema_operativo', $software_->sistema_operativo ?? '') }}"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled>
                        @else
                            <select id="select-sistema_operativo" name="sistema_operativo"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Windows" {{ old('sistema_operativo', $software_->sistema_operativo) == 'Windows' ? 'selected' : '' }}>
                                Windows
                            </option>
                            <option value="MacOS" {{ old('sistema_operativo',$software_->sistema_operativo) == 'MacOS' ? 'selected' : '' }}>MacOS
                            </option>
                            <option value="Linux" {{ old('sistema_operativo',$software_->sistema_operativo) == 'Linux' ? 'selected' : '' }}>Linux
                            </option>
                            </select>
                        @endif    
                        <x-input-error :messages="$errors->get('sistema_operativo')" class="mt-2" />
                    </div>
                    <!-- Arquitectura -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-sistema_operativo"
                            class="block text-base font-medium text-gray-900">arquitectura</label>
                        <fieldset class="mt-2">
                            <legend class="sr-only">arquitectura</legend>
                            <div class="flex items-center">
                                <input id="arquitectura-option-1" type="radio" name="arquitectura" value="x32"
                                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                    {{ old('arquitectura', $software_->arquitectura) ? 'checked' : '' }} @disabled($action == 'ver')>
                                <label for="arquitectura-option-1"
                                    class="block ms-1 pr-2 text-sm font-medium text-gray-900 dark:text-gray-300">x32</label>
                                <input id="arquitectura-option-2" type="radio" name="arquitectura" value="x64"
                                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                    {{ old('arquitectura', $software_->arquitectura) ? 'checked' : '' }} @disabled($action == 'ver')>
                                <label for="arquitectura-option-2"
                                    class="block ms-1 text-sm font-medium text-gray-900 dark:text-gray-300">x64</label>
                            </div>
                        </fieldset>
                        <x-input-error :messages="$errors->get('arquitectura')" class="mt-2" />
                    </div>

                    <!-- Versión Sistema Operativo -->
                    <div class="pr-2 w-1/4">
                        <label for="input-version_sistema_operativo"
                            class="block text-base font-medium text-gray-900">Versión Sistema Operativo</label>
                            <input type="text" name="version_sistema_operativo"
                                id="input-version_sistema_operativo"
                                value="{{ old('version_sistema_operativo', $software_->version_sistema_operativo ?? '') }}"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('version_sistema_operativo')" class="mt-2" />
                    </div>


                    <!-- Office -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="inputOffice" class="block text-base font-medium text-gray-900">Office</label>
                        @if ($action == 'ver')
                            <input type="text" name="office"
                                id="input-office"
                                value="{{ old('office', $software_->office ?? '') }}"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                disabled>
                        @else
                        <select id="select-office" name="office"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Office 365" {{ old('office',$software_->office) == 'Office 365' ? 'selected' : '' }}>Office
                                365
                            </option>
                            <option value="Office 2016" {{ old('office',$software_->office) == 'Office 2016' ? 'selected' : '' }}>Office
                                2016
                            </option>
                            <option value="Office 2019" {{ old('office',$software_->office) == 'Office 2019' ? 'selected' : '' }}>Office
                                2019
                            </option>
                        </select>
                        @endif
                        <x-input-error :messages="$errors->get('office')" class="mt-2" />
                    </div>
                    <!-- Antivirus -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-Antivirus"
                            class="block text-base font-medium text-gray-900">Antivirus</label>
                        @if ($action == 'ver')
                            <input type="text" name="antivirus"
                                id="input-antivirus"
                                value="{{ old('antivirus', $software->antivirus ?? '') }}"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                disabled>
                        @else
                            <select id="select-antivirus" name="antivirus"
                                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Institucional" {{ old('antivirus',$software_->antivirus) == 'Institucional' ? 'selected' : '' }}>
                                    Institucional</option>
                            </select>
                        @endif
                        <x-input-error :messages="$errors->get('antivirus')" class="mt-2" />
                    </div>
                    <!-- Antivirus Versión -->
                    <div class="pr-2 w-1/4">
                        <label for="input-antivirus_version"
                            class="block text-base font-medium text-gray-900">Antivirus
                            Versión</label>
                        <input  type="text" name="antivirus_version" id="input-antivirus_version"
                            value="{{ old('antivirus_version', $software_->antivirus_version) }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            @disabled($action == 'ver')>
                        <x-input-error :messages="$errors->get('antivirus_version')" class="mt-2" />
                    </div>
                </div>
                <!-- Otros Softwares Checkbox -->
                <div class="flex justify-center">
                    <div class="w-full px-4">
                        <div class="grid grid-cols-3 gap-4 sm:grid-cols-3">
                            <!-- Columna 1 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="visual_appeal" id="checkbox-visual_appeal" type="checkbox"
                                                value="1" value="1"
                                                {{ old('visual_appeal', $software_->visual_appeal) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-visual_appeal" title="SICOM, SICOSS, SIMED"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visual
                                                Appeal</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="facthor" id="checkbox-facthor" type="checkbox"
                                                value="1"{{ old('facthor', $software_->facthor) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-facthor"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">FACTHOR</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="vpn" id="checkbox-vpn" type="checkbox" value="1"
                                                {{ old('vpn', $software_->vpn) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-vpn"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">VPN</label>
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
                                            <input name="siad" id="checkbox-siad" type="checkbox" value="1"
                                                {{ old('siad', $software_->siad) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-siad"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">SIAD</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="autocad" id="checkbox-autocad" type="checkbox"
                                                value="1" {{ old('autocad', $software_->autocad) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-autocad"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">AUTOCAD</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="sinergy" id="checkbox-sinergy" type="checkbox"
                                                value="1" {{ old('sinergy', $software_->sinergy) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-sinergy"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">SINERGY</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Columna 3 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="mysap_r3" id="checkbox-mysap_r3" type="checkbox"
                                                value="1" {{ old('mysap_r3', $software_->mysap_r3) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-mysap_r3"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">MySAP
                                                R3</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="lotus" id="checkbox-lotus" type="checkbox" value="1"
                                            {{ old('lotus', $software_->lotus) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-lotus"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">LOTUS</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---------- Mantenimiento Ejecutado ---------->
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
                                                value="1"
                                                {{ old('desarmar_limpieza_interna', $mantenimiento->desarmar_limpieza_interna) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-desarmar_limpieza_interna"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Desarmar
                                                Equipo Para su Limpieza Interna</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_sopleteado_int_ext"
                                                id="checkbox-limpieza_sopleteado_int_ext" type="checkbox"
                                                value="1"
                                                {{ old('limpieza_sopleteado_int_ext', $mantenimiento->limpieza_sopleteado_int_ext) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-limpieza_sopleteado_int_ext"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado Interno y Externo del Equipo</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_pantalla" id="checkbox-limpieza_pantalla"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_pantalla', $mantenimiento->limpieza_pantalla) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_pantalla"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Pantalla</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_teclado" id="checkbox-limpieza_teclado"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_teclado', $mantenimiento->limpieza_teclado) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-limpieza_teclado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Teclado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_ventiladores" id="checkbox-limpieza_ventiladores"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_ventiladores', $mantenimiento->limpieza_ventiladores) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-limpieza_ventiladores"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Ventiladores</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_tarjeta_principal"
                                                id="checkbox-limpieza_tarjeta_principal" type="checkbox"
                                                value="1"
                                                {{ old('limpieza_tarjeta_principal', $mantenimiento->limpieza_tarjeta_principal) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-limpieza_tarjeta_principal"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado de la Tarjeta Principal</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_fuente_poder" id="checkbox-limpieza_fuente_poder"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_fuente_poder', $mantenimiento->limpieza_fuente_poder) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-limpieza_fuente_poder"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Fuente de Poder</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificacion_bateria" id="checkbox-verificacion_bateria"
                                                type="checkbox" value="1"
                                                {{ old('verificacion_bateria', $mantenimiento->verificacion_bateria) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-verificacion_bateria"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificación
                                                de la Bateria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_conexiones_electricas"
                                                id="checkbox-verificar_conexiones_electricas" type="checkbox"
                                                value="1"
                                                {{ old('verificar_conexiones_electricas', $mantenimiento->verificar_conexiones_electricas) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-verificar_conexiones_electricas"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Conexiones Eléctricas en Buen Estado</label>
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
                                            <input name="equipo_operando_post_servicio"
                                                id="checkbox-equipo_operando_post_servicio" type="checkbox"
                                                value="1"
                                                {{ old('equipo_operando_post_servicio', $mantenimiento->equipo_operando_post_servicio) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-equipo_operando_post_servicio"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                que Funcione Correctamente Después del Servicio</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="antivirus_actualizado" id="checkbox-antivirus_actualizado"
                                                type="checkbox" value="1"
                                                {{ old('antivirus_actualizado', $mantenimiento->antivirus_actualizado) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-antivirus_actualizado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Antivirus
                                                Institucional Actualizado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="ejecucion_defrag" id="checkbox-ejecucion_defrag"
                                                type="checkbox" value="1"
                                                {{ old('ejecucion_defrag', $mantenimiento->ejecucion_defrag) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-ejecucion_defrag"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ejecución
                                                de Defrag</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="equipo_dentro_dominio" id="checkbox-equipo_dentro_dominio"
                                                type="checkbox" value="1"
                                                {{ old('equipo_dentro_dominio', $mantenimiento->equipo_dentro_dominio) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-equipo_dentro_dominio"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Equipo Dentro de Dominio
                                            </label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="sistema_operativo_actualizado"
                                                id="checkbox-sistema_operativo_actualizado" type="checkbox"
                                                value="1"
                                                {{ old('sistema_operativo_actualizado', $mantenimiento->sistema_operativo_actualizado) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-sistema_operativo_actualizado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Sistema Operativo Actualizado
                                            </label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="complementos_plugins_desabilitar_auto"
                                                id="checkbox-complementos_plugins_desabilitar_auto" type="checkbox"
                                                value="1"
                                                {{ old('complementos_plugins_desabilitar_auto', $mantenimiento->complementos_plugins_desabilitar_auto) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-complementos_plugins_desabilitar_auto"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Complementos Plugins (Java, SilverLigth), Desabilitar Auto
                                            </label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="eliminar_aplicaciones_innecesarias"
                                                id="checkbox-eliminar_aplicaciones_innecesarias" type="checkbox"
                                                value="1"
                                                {{ old('eliminar_aplicaciones_innecesarias', $mantenimiento->eliminar_aplicaciones_innecesarias) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-eliminar_aplicaciones_innecesarias"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Eliminar Aplicaciones Innecesarias
                                            </label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="estado_escritorio_remoto"
                                                id="checkbox-estado_escritorio_remoto" type="checkbox" value="1"
                                                {{ old('estado_escritorio_remoto', $mantenimiento->estado_escritorio_remoto) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-estado_escritorio_remoto"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado
                                                de Servicio de Escritorio Remoto</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="asignacion_ip_dhcp" id="checkbox-asignacion_ip_dhcp"
                                                type="checkbox" value="1"
                                                {{ old('asignacion_ip_dhcp', $mantenimiento->asignacion_ip_dhcp) ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500"
                                                @disabled($action == 'ver')>
                                            <label for="checkbox-asignacion_ip_dhcp"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asignación
                                                de IP por DHCP</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---------- Observaciones ---------->
        <div class="max-w-7xl pb-6 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Observaciones</span>
                    </div>
                </div>
                <!-- Observaciones -->
                <div class="p-2 w-full">
                    <textarea name="observaciones"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                        rows="4" {{ $action == 'ver' ? 'disabled' : '' }}>{{ old('observaciones', $equipo->observaciones ?? '') }}</textarea>
                    <x-input-error :messages="$errors->get('observaciones')" class="mt-2" />
                </div>
            </div>
        </div>
        </div>

        <!---------- Botón Guardar ---------->
        <div class="flex justify-center pb-6">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-green-600 dark:bg-green-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-green-900 uppercase tracking-widest hover:bg-green-500 dark:hover:bg-green-300 focus:bg-green-500 dark:focus:bg-green-300 active:bg-green-700 dark:active:bg-green-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-green-800 transition ease-in-out duration-150">
                Guardar Registro
            </button>
        </div>

    </form>
</x-app-layout>
