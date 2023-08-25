<nav class="bg-gray-900 shadow-md shadow-gray-500">
    <div class="flex items-center justify-between px-4 py-2 mx-auto">
        <x-dropdown align="left" width="60">
            <x-slot name="trigger">
                <span class="inline-flex w-10 rounded-md cursor-pointer">
                    <img src="{{ asset('images/sn-icons/menu.png') }}" alt="menu">
                </span>
            </x-slot>

            <x-slot name="content">
                <div class="w-60">

                    <!-- Team Settings -->
                    <x-dropdown-link href="">
                        {{ __('Primeros Pasos...') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="">
                        {{ __('Coméntanos...') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="">
                        {{ __('Sobre Nosotros') }}
                    </x-dropdown-link>
                </div>
            </x-slot>
        </x-dropdown>
        <div class="flex w-16 space-x-4">
            <a href="{{ route('home') }}"><img src="{{ asset('images/sn-icons/logofw.png') }}" alt=""></a>
            {{-- <li><a href="{{ route('home') }}" class="p-3 text-white rounded hover:bg-gray-600">Inicio</a></li>
            <li><a href="{{ route('blog') }}" class="p-3 text-white rounded hover:bg-gray-600">Blog</a></li>
            <li><a href="{{ route('about') }}" class="p-3 text-white rounded hover:bg-gray-600">Quiénes
                    Somos</a></li>
            <li><a href="{{ route('contact') }}" class="p-3 text-white rounded hover:bg-gray-600">Contáctanos</a>
            </li>
            <li><a href="{{ route('services') }}" class="p-3 text-white rounded hover:bg-gray-600">Servicios</a>
            </li> --}}
        </div>

        <x-dropdown align="right" width="60">
            <x-slot name="trigger">
                <span class="inline-flex w-10 rounded-md cursor-pointer">
                    <x-application-logo />
                </span>
            </x-slot>

            <x-slot name="content">
                <div class="w-60">
                    {{-- <div class="flex space-x-4">
            <a href="{{ route('login') }}"
                class="px-4 py-2 text-white border border-white rounded hover:bg-gray-600 dark:hover:bg-gray-900 dark:text-gray-900 dark:border-gray-900">Ingreso</a>
            <a href="{{ route('register') }}"
                class="px-4 py-2 text-white border border-white rounded hover:bg-gray-600 dark:hover:bg-gray-900 dark:text-gray-900 dark:border-gray-900">Registro</a>
        </div> --}}

                    <!-- Team Settings -->
                    <x-dropdown-link href="#">
                        {{ __('Políticas de trabajo') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="{{ route('register') }}">
                        {{ __('Registrar') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="{{ route('login') }}">
                        {{ __('Iniciar sesión') }}
                    </x-dropdown-link>
                </div>
            </x-slot>
        </x-dropdown>
    </div>
</nav>
