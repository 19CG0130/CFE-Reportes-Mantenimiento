<x-app-layout>
    <form method="POST" action="{{ route('registro_mantenimiento.post') }}">
        @csrf

        <!---------- Mantenimiento Equipo de Computo ---------->
        <x-formularios.form-mantenimiento titulo="Mantenimiento Equipo de Computo">
            <!-- Uso que se le da al equipo -->
            <div class="pr-2 pb-1 w-1/4">
                <label for="input-usoQueSeLeDa" class="block text-base font-medium text-gray-900">Uso que se le
                    da al equipo</label>
                <select id="select-usoQueSeLeDa" name="usoQueSeLeDa"
                    class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="Operativo" {{ old('usoQueSeLeDa') == 'Operativo' ? 'selected' : '' }}>Operativo
                    </option>
                    <option value="Capacitación" {{ old('usoQueSeLeDa') == 'Capacitación' ? 'selected' : '' }}>
                        Capacitación</option>
                </select>
                <x-input-error :messages="$errors->get('usoQueSeLeDa')" class="mt-2" />
            </div>
            <x-slot name="otroDispositivo">
                <!-- Tipo de Dispositivo -->
                <div class="pr-2 w-1/4">
                    <label class="block text-base font-medium text-gray-900">Tipo de
                        Dispositivo</label>
                    <select type="text" name="dispositivo" value="{{ old('dispositivo') }}"
                        class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="PC Escritorio" {{ old('dispositivo') == 'PC Escritorio' ? 'selected' : '' }}>PC
                            Escritorio</option>
                        <option value="Laptop" {{ old('dispositivo') == 'Laptop' ? 'selected' : '' }}>Laptop</option>
                    </select>
                    <x-input-error :messages="$errors->get('dispositivo')" class="mt-2" />
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
                    <input type="text" id="input-nombreDA" name="nombreDA" value="{{ old('nombreDA') }}"
                        class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                    <x-input-error :messages="$errors->get('nombreDA')" class="mt-2" />
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
                        <label for="input-sistemaOperativo" class="block text-base font-medium text-gray-900">
                            Sistema Operativo</label>
                        <select id="select-sistemaOperativo" name="sistemaOperativo"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Windows" {{ old('sistemaOperativo') == 'Windows' ? 'selected' : '' }}>Windows
                            </option>
                            <option value="MacOS" {{ old('sistemaOperativo') == 'MacOS' ? 'selected' : '' }}>MacOS
                            </option>
                            <option value="Linux" {{ old('sistemaOperativo') == 'Linux' ? 'selected' : '' }}>Linux
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('sistemaOperativo')" class="mt-2" />
                    </div>
                    <!-- Arquitectura -->
                    <div class="flex pr-2 mt-3.5 items-center">
                        <label for="arquitectura"
                            class="text-sm font-medium text-gray-900 dark:text-gray-300 pr-3">Arquitectura:</label>
                        <div class="relative">
                            <select id="arquitectura" name="Arquitectura"
                                class="block appearance-none w-36 bg-white border border-gray-300 text-gray-900 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="x32" {{ old('Arquitectura') == 'x32' ? 'selected' : '' }}>x32
                                </option>
                                <option value="x64" {{ old('Arquitectura') == 'x64' ? 'selected' : '' }}>x64
                                </option>
                            </select>
                            <x-input-error :messages="$errors->get('Arquitectura')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Versión Sistema Operativo -->
                    <div class="pr-2 w-1/4">
                        <label for="input-versionSistemaOpertativo"
                            class="block text-base font-medium text-gray-900">Versión Sistema Operativo</label>
                        <input type="text" name="versionSistemaOpertativo" id="input-versionSistemaOpertativo"
                            value="{{ old('versionSistemaOpertativo') }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        <x-input-error :messages="$errors->get('versionSistemaOpertativo')" class="mt-2" />
                    </div>
                    <!-- Office -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="inputOffice" class="block text-base font-medium text-gray-900">Office</label>
                        <select id="select-office" name="office"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Office 365" {{ old('office') == 'Office 365' ? 'selected' : '' }}>Office 365
                            </option>
                            <option value="Office 2016" {{ old('office') == 'Office 2016' ? 'selected' : '' }}>Office
                                2016</option>
                            <option value="Office 2019" {{ old('office') == 'Office 2019' ? 'selected' : '' }}>Office
                                2019</option>
                        </select>
                        <x-input-error :messages="$errors->get('office')" class="mt-2" />
                    </div>
                    <!-- Antivirus -->
                    <div class="pr-2 pb-1 w-1/4">
                        <label for="input-Antivirus" class="block text-base font-medium text-gray-900">Antivirus</label>
                        <select id="select-antivirus" name="antivirus"
                            class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Institucional" {{ old('antivirus') == 'Institucional' ? 'selected' : '' }}>
                                Institucional</option>
                        </select>
                        <x-input-error :messages="$errors->get('antivirus')" class="mt-2" />
                    </div>
                    <!-- Antivirus Versión -->
                    <div class="pr-2 w-1/4">
                        <label for="input-antivirusVersion" class="block text-base font-medium text-gray-900">Antivirus
                            Versión</label>
                        <input type="text" name="antivirusVersion" id="input-antivirusVersion"
                            value="{{ old('antivirusVersion') }}"
                            class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                        <x-input-error :messages="$errors->get('antivirusVersion')" class="mt-2" />
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
                                            <input name="visualAppeal" id="checkbox-visualAppeal" type="checkbox"
                                                value="1" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-visualAppeal" title="SICOM, SICOSS, SIMED"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visual
                                                Appeal</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="facthor" id="checkbox-facthor" type="checkbox"
                                                value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-facthor"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">FACTHOR</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="vpn" id="checkbox-vpn" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
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
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-siad"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">SIAD</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="autocad" id="checkbox-autocad" type="checkbox"
                                                value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-autocad"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">AUTOCAD</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="sinergy" id="checkbox-sinergy" type="checkbox"
                                                value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
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
                                            <input name="mysapR3" id="checkbox-mysapR3" type="checkbox"
                                                value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-mysapR3"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">MySAP
                                                R3</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="lotus" id="checkbox-lotus" type="checkbox" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-lotus"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">LOTUS</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Agregar Otro -->
                    <div>
                        <label for="input-agregarOtroSoftware"
                            class="block text-base font-medium text-gray-900">Agregar Otro</label>
                        <div class="relative w-full">
                            <input type="text" id="input-agregarOtroSoftware" name="agregarOtroSoftware"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                            <button type="submit"
                                class="absolute top-0 end-0 text-sm p-1 font-medium h-full text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 12h14m-7 7V5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---------- Hardware ---------->
        <div class="max-w-7xl pb-6 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
                <div class="flex justify-between">
                    <div class="p-2 text-gray-900 text-xl font-bold">
                        <span class="text-2xl font-extrabold">Hardware</span>
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
                                            <input name="microfono" id="checkbox-microfono" type="checkbox"
                                                value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-microfono"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Microfono</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="bocina" id="checkbox-bocina" type="checkbox"
                                                value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-bocina"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bocina</label>
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
                                            <input name="hubUSB" id="checkbox-hubUSB" type="checkbox"
                                                value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-hubUSB"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hub
                                                USB</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="camaraWeb" id="checkbox-camaraWeb" type="checkbox"
                                                value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-camaraWeb"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Camara
                                                Web</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Agregar Otro -->
                    <div>
                        <label for="input-agregarOtroHardware"
                            class="block text-base font-medium text-gray-900">Agregar Otro</label>
                        <div class="relative w-full">
                            <input type="text" id="input-agregarOtroHardware" name="agregarOtroHardware"
                                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500" />
                            <button type="submit"
                                class="absolute top-0 end-0 text-sm p-1 font-medium h-full text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 12h14m-7 7V5" />
                                </svg>
                            </button>
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
                                            <input name="desarmar_equipo" id="checkbox-desarmar_equipo"
                                                type="checkbox" value="1"
                                                {{ old('desarmar_equipo') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-desarmar_equipo"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Desarmar
                                                Equipo Para su Limpieza Interna</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_sopleteado_interno_externo"
                                                id="checkbox-limpieza_sopleteado_interno_externo" type="checkbox"
                                                value="1"
                                                {{ old('limpieza_sopleteado_interno_externo') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_sopleteado_interno_externo"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado Interno y Externo del Equipo</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_pantalla" id="checkbox-limpieza_pantalla"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_pantalla') == '1' ? 'checked' : '' }}
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
                                                {{ old('limpieza_teclado') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_teclado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Teclado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_ventiladores" id="checkbox-limpieza_ventiladores"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_ventiladores') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_ventiladores"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                Ventiladores</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_tarjeta_principal"
                                                id="checkbox-limpieza_tarjeta_principal" type="checkbox"
                                                value="1"
                                                {{ old('limpieza_tarjeta_principal') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_tarjeta_principal"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                y Sopleteado de la Tarjeta Principal</label>
                                        </div>
                                    </li>
                                    <li class="w-full dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="limpieza_fuente_poder" id="checkbox-limpieza_fuente_poder"
                                                type="checkbox" value="1"
                                                {{ old('limpieza_fuente_poder') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-limpieza_fuente_poder"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Limpieza
                                                de Fuente de Poder</label>
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
                                            <input name="verificacion_bateria" id="checkbox-verificacion_bateria"
                                                type="checkbox" value="1"
                                                {{ old('verificacion_bateria') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificacion_bateria"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificación
                                                de la Bateria</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_conexiones_electricas"
                                                id="checkbox-verificar_conexiones_electricas" type="checkbox"
                                                value="1"
                                                {{ old('verificar_conexiones_electricas') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_conexiones_electricas"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                Conexiones Eléctricas en Buen Estado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="verificar_post_servicio"
                                                id="checkbox-verificar_post_servicio" type="checkbox" value="1"
                                                {{ old('verificar_post_servicio') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-verificar_post_servicio"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verificar
                                                que Funcione Correctamente Después del Servicio</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="antivirus_actualizado" id="checkbox-antivirus_actualizado"
                                                type="checkbox" value="1"
                                                {{ old('antivirus_actualizado') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-antivirus_actualizado"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Antivirus
                                                Institucional Actualizado</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="ejecucion_defrag" id="checkbox-ejecucion_defrag"
                                                type="checkbox" value="1"
                                                {{ old('ejecucion_defrag') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-ejecucion_defrag"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ejecución
                                                de Defrag</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="estado_servicio_escritorio_remoto"
                                                id="checkbox-estado_servicio_escritorio_remoto" type="checkbox"
                                                value="1"
                                                {{ old('estado_servicio_escritorio_remoto') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-estado_servicio_escritorio_remoto"
                                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado
                                                de Servicio de Escritorio Remoto</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input name="asignacion_ip_dhcp" id="checkbox-asignacion_ip_dhcp"
                                                type="checkbox" value="1"
                                                {{ old('asignacion_ip_dhcp') == '1' ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-600 dark:border-gray-500">
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

        <!---------- bottom ---------->
        <x-formularios.form-bottom>
        </x-formularios.form-bottom>

    </form>
</x-app-layout>
