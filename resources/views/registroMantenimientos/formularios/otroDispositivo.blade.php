<x-app-layout>
    <form method="POST" action="{{ route('registro_mantenimiento.post') }}">
        @csrf
        <!---------- Mantenimiento de Otro Dispositivo ---------->
        <x-formularios.form-mantenimiento titulo="Mantenimiento de Otro Dispositivo">
            <x-slot name="slot">
                <!-- Uso que se le da al equipo -->
                <div class="pr-2 pb-1 w-1/4">
                    <label for="input-usoQueSeLeDa" class="block text-base font-medium text-gray-900">Uso que se le
                        da al equipo</label>
                    <select id="select-usoQueSeLeDa" name="usoQueSeLeDa"
                        class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Seleccionar</option>
                        <option value="Operativo">Operativo</option>
                        <option value="Capacitación">Capacitación</option>
                        <option value="Stock">Stock</option>
                    </select>
                </div>
            </x-slot>
            <x-slot name="otroDispositivo">
                <!-- Tipo de Dispositivo -->
                <div class="pr-2 w-1/4">
                    <label for="input-dispositivo" class="block text-base font-medium text-gray-900">Tipo de
                        Dispositivo</label>
                    <input type="text" name="dispositivo" id="dispositivo" placeholder="Router, Switch, etc..."
                        class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                </div>
            </x-slot>
        </x-formularios.form-mantenimiento>

        <!---------- Equipo Atendido y Conectividad ---------->
        <div class="grid max-w-7xl mx-auto gap-6 pb-6 lg:grid-cols-2 sm:px-6 lg:px-8">
            <!-- Equipo Atendido -->
            <x-formularios.form-equipo-atendido>
                <!-- Nombre D.A -->
                <div>
                    <label for="input-2" class="block text-base font-medium text-gray-900">Nombre Active
                        Directory</label>
                    <input type="text" id="input-nombreDA" name="nombreDA"
                        class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                </div>
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
                                            <input name="antivirus_actualizado" id="checkbox-antivirus_actualizado"
                                                type="checkbox" value="1" 
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-antivirus_actualizado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Antivirus
                                                Institucional Actualizado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="asignacion_ip_dhcp" id="checkbox-asignacion_ip_dhcp"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-asignacion_ip_dhcp"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asignación
                                                de IP por DHCP</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="desarmar_limpieza_interna"
                                                id="checkbox-desarmar_limpieza_interna" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-desarmar_limpieza_interna"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Desarmar
                                                Equipo Para su Limpieza Interna</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="ejecucion_defrag" id="checkbox-ejecucion_defrag"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-ejecucion_defrag"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ejecución
                                                de Defrag</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="equipo_en_red" id="checkbox-equipo_en_red" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-equipo_en_red"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Equipo
                                                en Red</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="equipo_operando_post_servicio"
                                                id="checkbox-equipo_operando_post_servicio" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-equipo_operando_post_servicio"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                que Funcione Correctamente Después del Servicio</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="estado_escritorio_remoto"
                                                id="checkbox-estado_escritorio_remoto" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-estado_escritorio_remoto"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado
                                                de Servicio de Escritorio Remoto</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_alimentacion_papel"
                                                id="checkbox-limpieza_alimentacion_papel" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_alimentacion_papel"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Revisión del Mecanismo de Alimentación del Papel</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_bandejas" id="checkbox-limpieza_bandejas"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_bandejas"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Bandejas o Charolas</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_fuente_poder" id="checkbox-limpieza_fuente_poder"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_fuente_poder"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Fuente de Poder</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_pantalla" id="checkbox-limpieza_pantalla"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_pantalla"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Pantalla</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_sopleteado_ext"
                                                id="checkbox-limpieza_sopleteado_ext" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_sopleteado_ext"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado Externo del Equipo</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_sopleteado_int_ext"
                                                id="checkbox-limpieza_sopleteado_int_ext" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_sopleteado_int_ext"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado Interno y Externo del Equipo</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_tarjeta_principal"
                                                id="checkbox-limpieza_tarjeta_principal" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_tarjeta_principal"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado de la Tarjeta Principal</label>
                                        </div>
                                </ul>
                            </div>

                            <!-- Columna 2 -->
                            <div class="pb-2">
                                <ul
                                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_unidad_fusion" id="checkbox-limpieza_unidad_fusion"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_unidad_fusion"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Revisión de la Unidad de Fusión</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_unidad_laser" id="checkbox-limpieza_unidad_laser"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_unidad_laser"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Revisión de la Unidad Láser</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_ventiladores" id="checkbox-limpieza_ventiladores"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_ventiladores"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                Ventiladores</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="realizar_auto_prueba" id="checkbox-realizar_auto_prueba"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-realizar_auto_prueba"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Realizar
                                                Auto Prueba</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="revision_bateria" id="checkbox-revision_bateria"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-revision_bateria"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Revision
                                                de Bateria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="validar_consumibles" id="checkbox-validar_consumibles"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-validar_consumibles"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Validar
                                                Estado de Consumibles</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="validar_teclado" id="checkbox-validar_teclado"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-validar_teclado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Validar
                                                Estado del Teclado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="validar_touch" id="checkbox-validar_touch" type="checkbox" value="1"
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
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificacion_bateria"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificación
                                                de la Bateria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_conector_datos"
                                                id="checkbox-verificar_conector_datos" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_conector_datos"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Estado del Conector de Datos</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_conexiones" id="checkbox-verificar_conexiones"
                                                type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_conexiones"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Conexiones Eléctricas en Buen Estado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_post_servicio"
                                                id="checkbox-verificar_post_servicio" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_post_servicio"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                que Funcione Correctamente Después del Servicio</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_sw_actualizado"
                                                id="checkbox-verificar_sw_actualizado" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_sw_actualizado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Sw Institucional Actualizado</label>
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
