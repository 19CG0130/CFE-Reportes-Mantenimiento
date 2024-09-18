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
                        <span class="text-2xl font-extrabold">{{ $titulo }}</span>
                    </div>
                    <!-- Fecha -->
                    <div class=" pl-2">
                        <div class="relative max-w-sm">
                            <input type="date" name="fecha" value="{{ date('Y-m-d') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
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
                        <x-input-error :messages="$errors->get('zona')" class="mt-2" />

                    </div>
                    <!-- Departamento -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-Departamento"
                            class="block text-base font-medium text-gray-900">Departamento</label>
                        <select id="select-departamento" name="departamento" :value="old('departamento')"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="Administración">Administración</option>
                            <option value="Gestión Comercial">Gestión Comercial</option>
                            <option value="Informática">Informática</option>
                            <option value="Jurídico">Jurídico</option>
                            <option value="Medición, Conexiones y Servicios">Medición, Conexiones y Servicios</option>
                            <option value="Personal">Personal</option>
                            <option value="Planeación">Planeación</option>
                            <option value="Superintendencia">Superintendencia</option>
                        </select>
                        <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
                    </div>
                    <!-- Uso que se le da al equipo -->
                    {{ $slot }}
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

                    <!-- Responsable del Equipo -->
                    <div class="pr-2 w-1/4">
                        <label for="input-responsable" class="block text-base font-medium text-gray-900">Responsable del
                            Equipo</label>
                        <input type="text" name="responsable" id="input-responsable"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        <x-input-error :messages="$errors->get('responsable')" class="mt-2" />
                    </div>
                    <!-- Puesto -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-puesto" class="block text-base font-medium text-gray-900">Puesto</label>
                        <select id="select-puesto" name="puesto"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccionar</option>
                            <option value="JEFE DEPARTAMENTO">JEFE DEPARTAMENTO</option>
                            <option value="SUPERINTENDENTE">SUPERINTENDENTE</option>
                            <option value="JEFE OFICINA">JEFE OFICINA</option>
                            <option value="SECRETARIA">SECRETARIA</option>
                            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                            <option value="SUPERVISOR">SUPERVISOR</option>
                            <option value="AGENTE COMERCIAL">AGENTE COMERCIAL</option>
                            <option value="OFICINISTA">OFICINISTA</option>
                            <option value="AUXILIAR ESPECIALIZADO">AUXILIAR ESPECIALIZADO</option>
                            <option value="AUXILIAR ADMINISTRATIVO">AUXILIAR ADMINISTRATIVO</option>
                            <option value="OPERADOR DISTRIBUCIÓN">OPERADOR DISTRIBUCIÓN</option>
                            <option value="TÉCNICO">TÉCNICO</option>
                            <option value="SOBRESTANTE">SOBRESTANTE</option>
                            <option value="VERIFICADOR CALIBRADOR">VERIFICADOR CALIBRADOR</option>
                            <option value="PROFESIONISTA">PROFESIONISTA</option>
                        </select>
                    </div>
                    <!-- RPE -->
                    <div class="pr-2 w-1/4">
                        <label for="input-RPE" class="block text-base font-medium text-gray-900">RPE</label>
                        <input type="text" name="RPE" id="input-RPE"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Tipo de Dispositivo -->
                    @isset($otroDispositivo)
                        {{ $otroDispositivo }}
                    @endisset

                </div>

            </div>
        </div>
