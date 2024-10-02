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
                        <span class="text-2xl font-extrabold">{{ $titulo }}</span>
                    </div>

                    <!---------- Fecha ---------->
                    <div class="pl-2">
                        <div class="relative max-w-sm">
                            <input type="date" name="fecha" value="{{ date('Y-m-d') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                        </div>
                    </div>

                </div>

                <!---------- Sección ---------->
                <div class="flex flex-wrap">

                    <!---------- Zona ---------->
                    <div class="pr-2 pb-1 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Zona</label>
                        <select name="zona"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Nuevo Casas Grandes"
                                {{ old('zona') == 'Nuevo Casas Grandes' ? 'selected' : '' }}>Nuevo Casas Grandes
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('zona')" class="mt-2" />
                    </div>

                    <!---------- Departamento ---------->
                    <div class="pr-2 pb-1 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Departamento</label>
                        <select name="departamento"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Administración"
                                {{ old('departamento') == 'Administración' ? 'selected' : '' }}>Administración</option>
                            <option
                                value="Gestión Comercial"{{ old('departamento') == 'Gestión Comercial' ? 'selected' : '' }}>
                                Gestión Comercial</option>
                            <option value="Informática" {{ old('departamento') == 'Informática' ? 'selected' : '' }}>
                                Informática</option>
                            <option value="Jurídico" {{ old('departamento') == 'Jurídico' ? 'selected' : '' }}>Jurídico
                            </option>
                            <option value="Medición, Conexiones y Servicios"
                                {{ old('departamento') == 'Medición, Conexiones y Servicios' ? 'selected' : '' }}>
                                Medición, Conexiones y Servicios</option>
                            <option value="Personal" {{ old('departamento') == 'Personal' ? 'selected' : '' }}>Personal
                            </option>
                            <option value="Planeación" {{ old('departamento') == 'Planeación' ? 'selected' : '' }}>
                                Planeación</option>
                            <option value="Superintendencia"
                                {{ old('departamento') == 'Superintendencia' ? 'selected' : '' }}>Superintendencia
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
                    </div>

                    <!---------- Uso que se le da al equipo ---------->
                    {{ $slot }}

                    <!---------- Hora Inicio / Fin ---------->
                    <div class="pr-2 pb-1 flex w-1/4">
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
                                <input type="time" name="hora_inicio" value="{{ old('hora_inicio') }}"
                                    class="block w-full pr-5 p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" />
                            </div>
                            <x-input-error :messages="$errors->get('hora_inicio')" class="mt-2" />
                        </div>
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
                                <input type="time" name="hora_fin" value="{{ old('hora_fin') }}"
                                    class="block w-full pr-5 p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" />
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
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" name="responsable_mantenimiento" value="{{ Auth::user()->name }} {{ Auth::user()->last_name }}" title="El Responsable del Mantenimiento es el Usuario que Inicio Sesión"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                                readonly>
                        </div>
                        <x-input-error :messages="$errors->get('responsable_mantenimiento')" class="mt-2" />
                    </div>

                    <!---------- Responsable del Equipo ---------->
                    <div class="pr-2 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Responsable del
                            Equipo</label>
                        <input type="text" name="responsable_equipo" value="{{ old('responsable_equipo') }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        <x-input-error :messages="$errors->get('responsable_equipo')" class="mt-2" />
                    </div>

                    <!---------- Puesto ---------->
                    <div class="pr-2 pb-1 w-1/4">
                        <label class="block text-base font-medium text-gray-900">Puesto</label>
                        <select name="puesto"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Jefe Departamento"
                                {{ old('puesto') == 'Jefe Departamento' ? 'selected' : '' }}>Jefe Departamento</option>
                            <option value="Superintendente"
                                {{ old('puesto') == 'Superintendente' ? 'selected' : '' }}>
                                Superintendente</option>
                            <option value="Jefe Oficina" {{ old('puesto') == 'Jefe Oficina' ? 'selected' : '' }}>Jefe
                                Oficina</option>
                            <option value="Secretaria" {{ old('puesto') == 'Secretaria' ? 'selected' : '' }}>
                                Secretaria</option>
                            <option value="Administrador" {{ old('puesto') == 'Administrador' ? 'selected' : '' }}>
                                Administrador</option>
                            <option value="Supervisor" {{ old('puesto') == 'Supervisor' ? 'selected' : '' }}>
                                Supervisor</option>
                            <option value="Agente Comercial"
                                {{ old('puesto') == 'Agente Comercial' ? 'selected' : '' }}>Agente Comercial</option>
                            <option value="Oficinista" {{ old('puesto') == 'Oficinista' ? 'selected' : '' }}>
                                Oficinista</option>
                            <option value="Auxiliar Especializado"
                                {{ old('puesto') == 'Auxiliar Especializado' ? 'selected' : '' }}>Auxiliar
                                Especializado</option>
                            <option value="Auxiliar Administrativo"
                                {{ old('puesto') == 'Auxiliar Administrativo' ? 'selected' : '' }}>Auxiliar
                                Administrativo</option>
                            <option value="Operador Distribución"
                                {{ old('puesto') == 'Operador Distribución' ? 'selected' : '' }}>Operador Distribución
                            </option>
                            <option value="Técnico" {{ old('puesto') == 'Técnico' ? 'selected' : '' }}>Técnico
                            </option>
                            <option value="Sobrestante" {{ old('puesto') == 'Sobrestante' ? 'selected' : '' }}>
                                Sobrestante</option>
                            <option value="Verificador Calibrador"
                                {{ old('puesto') == 'Verificador Calibrador' ? 'selected' : '' }}>Verificador
                                Calibrador</option>
                            <option value="Profesionista" {{ old('puesto') == 'Profesionista' ? 'selected' : '' }}>
                                Profesionista</option>
                        </select>
                        <x-input-error :messages="$errors->get('puesto')" class="mt-2" />
                    </div>

                    <!---------- RPE ---------->
                    <div class="pr-2 w-1/4">
                        <label class="block text-base font-medium text-gray-900">RPE</label>
                        <input type="text" name="rpe" value="{{ old('rpe') }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        <x-input-error :messages="$errors->get('rpe')" class="mt-2" />
                    </div>

                    <!---------- Tipo de Dispositivo ---------->
                    @isset($otroDispositivo)
                        {{ $otroDispositivo }}
                    @endisset

                </div>
            </div>
        </div>
