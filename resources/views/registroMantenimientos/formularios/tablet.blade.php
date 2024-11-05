<x-app-layout>
    <form method="POST" action="{{ route('registro_mantenimiento.post') }}">
        @csrf
        <input type="hidden" name="dispositivo" value="Tablet">

        <!---------- Mantenimiento Tablet ---------->
        <x-formularios.form-mantenimiento titulo="Mantenimiento Tablet">
            <!-- Uso que se le da al equipo -->
            <div class="pr-2 pb-1 w-full sm:w-1/2 md:w-1/4">
                <label for="input-uso" class="block text-base font-medium text-gray-900">Uso que se le
                    da al equipo</label>
                <select id="select-uso" name="uso"
                    class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="Operativo" {{ old('uso') == 'Operativo' ? 'selected' : '' }}>Operativo
                    </option>
                    <option value="Capacitación" {{ old('uso') == 'Capacitación' ? 'selected' : '' }}>
                        Capacitación</option>
                </select>
                <x-input-error :messages="$errors->get('uso')" class="mt-2" />
            </div>
        </x-formularios.form-mantenimiento>

        <!---------- Equipo Atendido y Conectividad ---------->
        <div class="grid max-w-7xl mx-auto gap-6 pb-6 lg:grid-cols-2 sm:px-6 lg:px-8">

            <!---------- Equipo Atendido ---------->
            <x-formularios.form-equipo-atendido>
            </x-formularios.form-equipo-atendido>

            <!------ Conectividad ------>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">

                <!---------- Titulo ---------->
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Conectividad</span>
                    </div>
                </div>

                <!---------- Sección ---------->
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <!-- Inalámbricos -->
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
                    <div class="pr-2 pb-1 w-full sm:w-1/2 md:w-1/4">
                        <label for="input-sistema_operativo" class="block text-base font-medium text-gray-900">Sistema
                            Operativo</label>
                        <select id="select-sistema_operativo" name="sistema_operativo"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Android" {{ old('sistema_operativo') == 'Android' ? 'selected' : '' }}>
                                Android
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('sistema_operativo')" class="mt-2" />
                    </div>
                    <!-- Versión Sistema Operativo -->
                    <div class="pr-2 pb-1 w-full sm:w-1/2 md:w-1/4">
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
                        <div class="grid grid-cols-2 gap-2 sm:grid-cols-2">
                            <!-- Columna 1 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="amobile" id="checkbox-amobile" type="checkbox" value="1"
                                                {{ old('amobile') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-amobile"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Amobile</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="lmobile" id="checkbox-lmobile" type="checkbox" value="1"
                                                {{ old('lmobile') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-lmobile"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lmobile</label>
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
                                            <input name="lhmobile" id="checkbox-lhmobile" type="checkbox" value="1"
                                                {{ old('lhmobile') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-lhmobile"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">LHmobile</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
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
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
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
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
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
