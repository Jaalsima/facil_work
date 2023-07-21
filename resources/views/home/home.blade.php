<x-guest-layout>
    <div class="flex flex-col justify-between min-h-screen">
        <header class="bg-gray-500 py-4">
            <div class="container mx-auto flex items-center justify-between px-4">
                <div class="text-white font-bold text-xl flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Fácil Work Logo"
                        class="border-2 border-gray-200 rounded-full w-12 h-12 mr-2">
                    <span class="text-2xl">Fácil Work</span>
                </div>
                <nav>
                    <!-- Barra de navegación -->
                    <ul class="text-white flex space-x-4">
                        <x-nav-link><a href="{{ route('about') }}"
                                class="text-lg hover:text-blue-300 dark:text-blue-300">Sobre
                                Nosotros</a></x-nav-link>
                        <x-nav-link><a href="{{ route('contact') }}"
                                class="text-lg hover:text-blue-300 dark:text-blue-300">Contáctanos</a></x-nav-link>
                        <x-nav-link><a href="{{ route('blog') }}"
                                class="text-lg hover:text-blue-300 dark:text-blue-300">Blog</a>
                        </x-nav-link>
                        <x-nav-link><a href="{{ route('services') }}"
                                class="text-lg hover:text-blue-300 dark:text-blue-300">Servicios</a></x-nav-link>
                    </ul>
                </nav>
                <div>
                    <x-login-register />
                </div>
            </div>
        </header>
        <main class="bg-gray-300 py-20">
            <div class="container mx-auto">
                <!-- Contenido principal -->
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-gray-700 mb-4">Bienvenido a Fácil Work</h1>
                    <p class="text-lg text-gray-700">Encuentra profesionales para tus trabajos u ofrece tus servicios.
                    </p>
                    <div class="mt-8 flex justify-center">
                        <a href="{{ route('register', ['role' => 'worker']) }}"
                            class="px-6 py-3 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition">Soy
                            un Trabajador</a>
                        <a href="{{ route('register', ['role' => 'client']) }}"
                            class="px-6 py-3 bg-green-500 text-white font-semibold rounded hover:bg-green-600 ml-4 transition">Soy
                            un Cliente</a>
                    </div>
                </div>
            </div>
        </main>
        <div>
            <x-footer />
        </div>
    </div>
</x-guest-layout>
