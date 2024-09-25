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
            <select name="servicio" value="{{ old('servicio') }}"
                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" disabled selected>Seleccionar</option>
                <option value="Informatica" {{ old('servicio') == 'Informatica' ? 'selected' : '' }}>Preventivo</option>
                <option value="Superintendencia" {{ old('servicio') == 'Superintendencia' ? 'selected' : '' }}>
                    Correctivo</option>
            </select>
            <x-input-error :messages="$errors->get('servicio')" class="mt-2" />
        </div>

        <!---------- Marca ---------->
        <div>
            <label class="block text-base font-medium text-gray-900">Marca</label>
            <input type="text" name="marca" value="{{ old('marca') }}"
                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
        </div>

        <!---------- Modelo ---------->
        <div>
            <label class="block text-base font-medium text-gray-900">Modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}"
                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
        </div>

        <!---------- Serie ---------->
        <div>
            <label class="block text-base font-medium text-gray-900">Serie</label>
            <input type="text" name="serie" value="{{ old('serie') }}"
                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
            <x-input-error :messages="$errors->get('serie')" class="mt-2" />
        </div>

        <!---------- Nombre D.A ---------->
        {{ $slot }}

        <!---------- Num. Activo fijo ---------->
        <div>
            <label class="block text-base font-medium text-gray-900">Numero Activo
                fijo</label>
            <input type="text" name="numActivoFijo" value="{{ old('serie') }}"
                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
            <x-input-error :messages="$errors->get('serie')" class="mt-2" />
        </div>

    </div>
</div>
