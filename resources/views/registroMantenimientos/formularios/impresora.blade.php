<x-app-layout>
    <form method="POST" action="{{ route('registro_mantenimiento.post') }}">
        @csrf
        <input type="hidden" name="dispositivo" value="Impresora">

        <!---------- Mantenimiento Impresora ---------->
        <x-formularios.form-mantenimiento titulo="Mantenimiento Impresora">
            <!-- Espacio Vacio -->
            <div class="pr-2 pb-1 w-1/4">
            </div>
        </x-formularios.form-mantenimiento>

        <!---------- Equipo Atendido y Conectividad ---------->
        <div class="grid max-w-7xl mx-auto gap-6 pb-6 lg:grid-cols-2 sm:px-6 lg:px-8">
            <!-- Equipo Atendido -->
            <x-formularios.form-equipo-atendido>
            </x-formularios.form-equipo-atendido>
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
                        <x-formularios.ethernet-input>
                        </x-formularios.ethernet-input>
                    </div>
                    <!-- Inalámbricos -->
                    <x-formularios.inalambrico-input>
                    </x-formularios.inalambrico-input>
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
                                            <input id="checkbox_desarmar_limpieza_interna"
                                                name="desarmar_limpieza_interna" type="checkbox" value="1"
                                                {{ old('desarmar_limpieza_interna') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_desarmar_limpieza_interna"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Desarmar
                                                Equipo para su Limpieza Interna</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="checkbox_limpieza_sopleteado_int_ext"
                                                name="limpieza_sopleteado_int_ext" type="checkbox"
                                                value="1"
                                                {{ old('limpieza_sopleteado_int_ext') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_limpieza_sopleteado_int_ext"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado Interno y Externo del Equipo</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="checkbox_limpieza_bandejas" name="limpieza_bandejas"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_bandejas') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_limpieza_bandejas"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Bandejas o Charolas</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="checkbox_limpieza_alimentacion_papel"
                                                name="limpieza_alimentacion_papel" type="checkbox" value="1"
                                                {{ old('limpieza_alimentacion_papel') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_limpieza_alimentacion_papel"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Revisión del Mecanismo de Alimentación del Papel</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="checkbox_limpieza_unidad_fusion" name="limpieza_unidad_fusion"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_unidad_fusion') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_limpieza_unidad_fusion"
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
                                            <input id="checkbox_limpieza_unidad_laser" name="limpieza_unidad_laser"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_unidad_laser') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_limpieza_unidad_laser"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Revisión de la Unidad Láser</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="checkbox_validar_consumibles" name="validar_consumibles"
                                                type="checkbox" value="1"
                                                {{ old('validar_consumibles') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_validar_consumibles"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Validar
                                                Estado de Consumibles</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="checkbox_equipo_en_red" name="equipo_en_red" type="checkbox"
                                                value="1" {{ old('equipo_en_red') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_equipo_en_red"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Equipo
                                                en Red</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="checkbox_realizar_auto_prueba" name="realizar_auto_prueba"
                                                type="checkbox" value="1"
                                                {{ old('realizar_auto_prueba') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_realizar_auto_prueba"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Realizar
                                                Auto Prueba</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="checkbox_equipo_operando_post_servicio"
                                                name="equipo_operando_post_servicio" type="checkbox" value="1"
                                                {{ old('equipo_operando_post_servicio') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox_equipo_operando_post_servicio"
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

        <!---------- bottom ---------->
        <x-formularios.form-bottom>
        </x-formularios.form-bottom>

    </form>
</x-app-layout>
