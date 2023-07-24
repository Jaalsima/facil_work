{{-- <div class="bg-gray-500 py-4">
    <div class="container mx-auto flex items-center justify-between px-4">
        <div class="text-white font-bold text-xl flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Fácil Work Logo"
                class="border-2 border-gray-200 rounded-full w-12 h-12 mr-2">
            <span class="text-2xl">Fácil Work</span>
        </div>
        <div class="hidden lg:flex space-x-4">
            <x-nav-link><a href="{{ route('about') }}" class="text-lg hover:text-blue-300">Sobre Nosotros</a></x-nav-link>
            <x-nav-link><a href="{{ route('contact') }}" class="text-lg hover:text-blue-300">Contáctanos</a></x-nav-link>
            <x-nav-link><a href="{{ route('blog') }}" class="text-lg hover:text-blue-300">Blog</a></x-nav-link>
            <x-nav-link><a href="{{ route('services') }}" class="text-lg hover:text-blue-300">Servicios</a></x-nav-link>
        </div>
        <div>
            <x-login-register />
        </div>
        <div class="lg:hidden">
            <livewire:responsive-navbar />
        </div>
    </div>
</div> --}}

<nav class="bg-blue-500 dark:bg-gray-900">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <a href="{{ route('home') }}">
            <x-application-logo />
        </a>
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="p-3 rounded text-white hover:bg-blue-600">Inicio</a></li>
            <li><a href="{{ route('blog') }}" class="p-3 rounded text-white hover:bg-blue-600">Blog</a></li>
            <li><a href="{{ route('about') }}" class="p-3 rounded text-white hover:bg-blue-600">Quiénes
                    Somos</a></li>
            <li><a href="{{ route('contact') }}" class="p-3 rounded text-white hover:bg-blue-600">Contáctanos</a></li>
            <li><a href="{{ route('services') }}" class="p-3 rounded text-white hover:bg-blue-600">Servicios</a>
            </li>
        </ul>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}"
                class="text-white border border-white hover:bg-blue-600 dark:hover:bg-gray-500 dark:text-blue-500 dark:border-blue-500 px-4 py-2 rounded">Ingreso</a>
            <a href="{{ route('register') }}"
                class="text-white border border-white hover:bg-blue-600 dark:hover:bg-gray-500 dark:text-blue-500 dark:border-blue-500 px-4 py-2 rounded">Registro</a>
        </div>
    </div>
</nav>
