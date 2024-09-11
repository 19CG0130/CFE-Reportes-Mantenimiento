<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative p-2">
    <div class="flex justify-between">
        <div class="p-2 text-gray-900 text-xl font-bold">
            <span class="text-2xl font-extrabold">Equipo Atendido</span>
        </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
        <!-- Servicio -->
        <div>
            <label for="input-servicio" class="block text-base font-medium text-gray-900">Servicio</label>
            <select id="select-servicio" name="servicio"
                class="block w-full p-1 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Seleccionar</option>
                <option value="Informatica">Preventivo</option>
                <option value="Superintendencia">Correctivo</option>
            </select>
        </div>
        <!-- Marca -->
        <div>
            <label for="input-2" class="block text-base font-medium text-gray-900">Marca</label>
            <input type="text" id="input-marca" name="marca"
                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
        </div>
        <!-- Modelo -->
        <div>
            <label for="input-2" class="block text-base font-medium text-gray-900">Modelo</label>
            <input type="text" id="input-modelo" name="modelo"
                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
        </div>
        <!-- Serie -->
        <div>
            <label for="input-2" class="block text-base font-medium text-gray-900">Serie</label>
            <input type="text" id="input-serie" name="serie"
                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
        </div>
        <!-- Nombre D.A -->
        {{ $slot }}
        <!-- Num. Activo fijo -->
        <div>
            <label for="input-2" class="block text-base font-medium text-gray-900">Numero Activo
                fijo</label>
            <input type="text" id="input-numActivoFijo" name="numActivoFijo"
                class="block w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
        </div>
    </div>
</div>
