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
                    <table
                        class="w-full shadow-md text-base text-center rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-200 uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400 rounded-lg">
                            <tr class="divide-x divide-gray-500">
                                <th scope="col" class="px-6 py-3 text-center">
                                    Rol
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Nombre de Usuario
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Apellido
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Correo Electrónico
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr
                                    class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="px-6 py-4 text-center uppercase">
                                        {{ $user->usertype }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $user->username }}
                                    </td>
                                    <td scope="px-6 py-4 text-center uppercase">
                                        {{ $user->name }}
                                    </td>
                                    <td scope="px-6 py-4 text-center uppercase">
                                        {{ $user->last_name }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-1 py-4 text-center">
                                        <!-- Modal Editar -->
                                        <button data-modal-target="editar-modal-{{ $user->id }}"
                                            data-modal-toggle="editar-modal-{{ $user->id }}"
                                            class="inline-flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Editar
                                        </button>
                                        <!-- Modal Eliminar -->
                                        <button data-modal-target="eliminar-modal-{{ $user->id }}"
                                            data-modal-toggle="eliminar-modal-{{ $user->id }}"
                                            class="inline-flex text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                            type="button">
                                            Eliminar
                                        </button>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!---------- foreach modal editar y eliminar ---------->
                    @foreach ($users as $user)
                        <!-- Editar Usuario modal -->
                        <div id="editar-modal-{{ $user->id }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-3 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Usuario
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="editar-modal-{{ $user->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Cerrar</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form method="POST" action="{{ route('register') }}" class="p-4 md:p-5">
                                        @csrf

                                        <!-- Username -->
                                        <div class="text-center mb-4">
                                            <div>
                                                <x-input-label for="username" :value="__('Nombre de Usuario')" />
                                                <x-text-input id="username" class="block mt-1 w-full" type="text"
                                                    name="username" value="{{ $user->username }}"
                                                    autocomplete="username" placeholder="ej. usuario123" />
                                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

                                            <!-- First Name -->
                                            <div>
                                                <x-input-label for="name" :value="__('Nombre')" />
                                                <x-text-input id="name" class="block mt-1 w-full" type="text"
                                                    name="name" value="{{ $user->name }}" autofocus
                                                    autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>

                                            <!-- Last Name -->
                                            <div>
                                                <x-input-label for="last_name" :value="__('Apellidos')" />
                                                <x-text-input id="last_name" class="block mt-1 w-full" type="text"
                                                    name="last_name" value="{{ $user->last_name }}" autofocus
                                                    autocomplete="last_name" />
                                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                            </div>

                                            <!-- Rol -->
                                            <div>
                                                <x-input-label for="usertype" :value="__('Rol')" />
                                                <select id="usertype" name="usertype" :value={{ $user->usertype }}
                                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">
                                                    <option value="" disabled selected>Seleccionar</option>
                                                    <option value="admin"
                                                        {{ old('usertype') == 'admin' ? 'selected' : '' }}>admin
                                                    </option>
                                                    <option value="usuario"
                                                        {{ old('usertype') == 'usuario' ? 'selected' : '' }}>usuario
                                                    </option>
                                                </select>
                                                <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
                                            </div>

                                            <!-- Email Address -->
                                            <div>
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="block mt-1 w-full" type="email"
                                                    name="email" value="{{ $user->email }}"
                                                    autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <!-- Password -->
                                            <div>
                                                <x-input-label for="password" :value="__('Password')" />
                                                <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password" name="password" autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>

                                            <!-- Confirm Password -->
                                            <div>
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password" name="password_confirmation"
                                                    autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>

                                        <!-- Botones -->
                                        <div class="flex items-center justify-end mt-4">
                                            <x-primary-button class="ms-4">
                                                Editar Usuario
                                            </x-primary-button>
                                        </div>
                                    </form>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Eliminar Usuario modal -->
                        <div id="eliminar-modal-{{ $user->id }}" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="eliminar-modal-{{ $user->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Cerrar modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Estas
                                            seguro que quieres eliminar al usuario {{ $user->username }}?</h3>
                                        <button data-modal-hide="eliminar-modal-{{ $user->id }}" type="button"
                                            href="/eliminar/{{ $user->id }}"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">Eliminar</button>
                                        <button data-modal-hide="eliminar-modal-{{ $user->id }}" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
