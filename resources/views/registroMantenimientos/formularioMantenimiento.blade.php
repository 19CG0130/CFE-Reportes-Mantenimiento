<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mantenimiento preventivo equipos de computo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="p-2 text-gray-900">
                    {{ __("Mantenimiento preventivo equipos de computo") }}
                </div>
                <form class="max-w-full mx-auto">
                    <div class="flex flex-wrap -mx-2">
                        <div class="p-2 w-1/4">
                            <label for="input-1" class="block text-sm font-medium text-gray-900">Input 1</label>
                            <input type="text" id="input-1" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="p-2 w-1/4">
                            <label for="input-2" class="block text-sm font-medium text-gray-900">Input 2</label>
                            <input type="text" id="input-2" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="p-2 w-1/4">
                            <label for="input-3" class="block text-sm font-medium text-gray-900">Input 3</label>
                            <input type="text" id="input-3" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div class="p-2 w-1/4">
                            <label for="input-4" class="block text-sm font-medium text-gray-900">Input 4</label>
                            <input type="text" id="input-4" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                </form>

                <!-- Calendario en la esquina superior derecha -->
                <div class="absolute top-0 right-0 p-4">
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select date">
                    </div>
                </div>
                <!-- Fin del calendario -->

            </div>
        </div>
    </div>
</x-app-layout>
