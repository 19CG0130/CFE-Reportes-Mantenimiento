        <!------ Observaciones ------>
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
                        <textarea id="input-observaciones" name="observaciones" value="{{ old('observaciones') }}"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500"
                            rows="4"></textarea>
                            <x-input-error :messages="$errors->get('observaciones')" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>

        <!------ Botón Guardar ------>
        <div class="flex justify-center pb-6">
            <button type="submit" 
                class="inline-flex items-center px-4 py-2 bg-green-600 dark:bg-green-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-green-900 uppercase tracking-widest hover:bg-green-500 dark:hover:bg-green-300 focus:bg-green-500 dark:focus:bg-green-300 active:bg-green-700 dark:active:bg-green-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-green-800 transition ease-in-out duration-150">
                Guardar Registro
            </button>
        </div>
