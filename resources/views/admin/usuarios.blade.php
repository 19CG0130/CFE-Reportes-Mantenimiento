<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('register.store') }}"
                    class="inline-flex items-center px-4 py-2 bg-green-600 dark:bg-green-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-green-900 uppercase tracking-widest hover:bg-green-500 dark:hover:bg-green-300 focus:bg-green-500 dark:focus:bg-green-300 active:bg-green-700 dark:active:bg-green-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-green-800 transition ease-in-out duration-150">
                    Nuevo Usuario
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Tabla Usuarios -->
                    <table class="w-full shadow-md text-base text-center rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-200 uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400 rounded-lg">
                            <tr class="divide-x divide-gray-500">
                                <th scope="col" class="px-6 py-3 text-center">
                                    Rol
                                </th>
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

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $user )
                            <tr
                                class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="px-6 py-4 text-center uppercase">
                                    {{ $user->usertype }}
                                </td>
                                <td scope="px-6 py-4 text-center uppercase">
                                    {{ $user->name }}
                                </td>
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