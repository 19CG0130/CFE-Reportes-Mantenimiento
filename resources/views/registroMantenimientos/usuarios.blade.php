<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-200 uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400 rounded-lg">
                            
                            <tr class="divide-x divide-gray-500">

                                <th scope="col" class="px-6 py-3 text-center">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Usuario
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Correo
                                </th>
                                

                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-500">
                            @foreach ($users as $user )
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                
                                <th scope="row"
                                    class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $user->name }}
                                </th>
                                <td class="px-6 py-4 text-center">
                                    {{ $user->username }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ $user->email }}
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>