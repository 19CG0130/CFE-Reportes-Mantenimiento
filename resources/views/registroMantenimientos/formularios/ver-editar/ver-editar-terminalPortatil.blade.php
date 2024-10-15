<x-app-layout>
    <form method="POST" action="{{ route('registro_mantenimiento.post') }}">
        @csrf
        <input type="hidden" name="dispositivo" value="Terminal Portatil">

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
                        <span class="text-2xl font-extrabold">Mantenimiento Terminal Portatil</span>
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
                        <label for="input-uso" class="block text-base font-medium text-gray-900">U  so que se le da al
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

                </div>
            </div>
        </div>

        <!---------- Equipo Atendido y Conectividad ---------->
        <div class="grid max-w-7xl mx-auto gap-6 pb-6 lg:grid-cols-2 sm:px-6 lg:px-8">

            <!---------- Equipo Atendido ---------->
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

            <!---------- Conectividad ---------->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Conectividad</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <!-- IP Inalámbrica -->
                    <x-formularios.inalambrico-input>
                    </x-formularios.inalambrico-input>
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
                        <label for="input-sistema_operativo" class="block text-base font-medium text-gray-900">Sistema
                            Operativo</label>
                        <select id="select-sistema_operativo" name="sistema_operativo"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Android" {{ old('Android') == 'Android' ? 'selected' : '' }}>Android
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('sistema_operativo')" class="mt-2" />
                    </div>
                    <!-- Versión Sistema Operativo -->
                    <div class="pr-2 w-1/4">
                        <label for="input-version_sistema_operativo"
                            class="block text-base font-medium text-gray-900">Versión Sistema Operativo</label>
                        <input type="text" name="version_sistema_operativo" id="input-version_sistema_operativo"
                            value="{{ old('version_sistema_operativo') }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        <x-input-error :messages="$errors->get('version_sistema_operativo')" class="mt-2" />
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
                                    <li class="w-full border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="kavi" id="checkbox-kavi" type="checkbox" value="1"
                                                {{ old('kavi') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-kavi" title="SICOM, SICOSS, SIMED"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">KAVI</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="facthor" id="checkbox-facthor" type="checkbox"
                                                value="1" {{ old('facthor') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-facthor"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">FACTHOR</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Columna 3 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="tpa" id="checkbox-tpa" type="checkbox" value="1"
                                                {{ old('tpa') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-tpa"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">TPA</label>
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
                                            <input name="limpieza_sopleteado_ext"
                                                id="checkbox-limpieza_sopleteado_ext" type="checkbox" value="1"
                                                {{ old('limpieza_sopleteado_ext') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_sopleteado_ext"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado Externo del Equipo</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="validar_touch" id="checkbox-validar_touch" type="checkbox"
                                                value="1" {{ old('validar_touch') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-validar_touch"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Validar
                                                Touch Pantalla</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificacion_bateria" id="checkbox-verificacion_bateria"
                                                type="checkbox" value="1"
                                                {{ old('verificacion_bateria') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificacion_bateria"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Revision
                                                de Bateria</label>
                                        </div>
                                    </li>
                                    <li class="w-full">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_sw_actualizado"
                                                id="checkbox-verificar_sw_actualizado" type="checkbox" value="1"
                                                {{ old('verificar_sw_actualizado') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_sw_actualizado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Software Institucional Actualizado</label>
                                        </div>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_conector_datos"
                                                id="checkbox-verificar_conector_datos" type="checkbox" value="1"
                                                {{ old('verificar_conector_datos') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_conector_datos"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Estado del Conector de Datos</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="validar_teclado" id="checkbox-validar_teclado"
                                                type="checkbox" value="1"
                                                {{ old('validar_teclado') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-validar_teclado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Validar
                                                Estado del Teclado</label>
                                        </div>
                                    </li>
                                    <li class="w-full">
                                        <div class="flex items-center ps-3">
                                            <input name="equipo_operando_post_servicio"
                                                id="checkbox-equipo_operando_post_servicio" type="checkbox"
                                                value="1"
                                                {{ old('equipo_operando_post_servicio') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-equipo_operando_post_servicio"
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

        <!---------- bottom ---------->
        <x-formularios.form-bottom>
        </x-formularios.form-bottom>

    </form>
</x-app-layout>
