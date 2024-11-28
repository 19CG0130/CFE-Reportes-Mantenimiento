<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Username -->
        <div class="text-center mb-4">
            <div>
                <x-input-label for="username" :value="__('Nombre de Usuario')" />
                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                    autocomplete="username" placeholder="ej. usuario123" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

            <!-- First Name -->
            <div>
                <x-input-label for="name" :value="__('Nombre')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="last_name" :value="__('Apellidos')" />
                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                    autofocus autocomplete="last_name" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>

            <!-- Rol -->
            <div>
                <x-input-label for="usertype" :value="__('Rol')" />
                <select id="usertype" name="usertype" :value="old('usertype')"
                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="admin" {{ old('usertype') == 'admin' ? 'selected' : '' }}>admin</option>
                    <option value="usuario" {{ old('usertype') == 'usuario' ? 'selected' : '' }}>usuario</option>
                </select>
                <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <!-- Botones -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('usuarios') }}">
                Cancelar
            </a>

            <x-primary-button class="ms-4">
                Registrar Nuevo Usuario
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
