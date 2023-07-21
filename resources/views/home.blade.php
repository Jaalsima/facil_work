<x-guest-layout>
    <div class="flex flex-col justify-between min-h-screen">
        <header class="bg-gray-700 py-4">
            <div class="container mx-auto flex items-center justify-between px-4">
                <div class="text-white font-bold text-xl flex items-center">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Fácil Work Logo" class="rounded-full w-10 h-10 mr-2">
                    <span class="text-2xl">Fácil Work</span>
                </div>
                <nav>
                    <!-- Barra de navegación -->
                    <ul class="text-white flex space-x-4">
                       <x-nav-link><a href="#" class="text-lg text-blue-300 hover:text-blue-300 dark:text-blue-300 hover:shadow-lg hover:shadow-blue-400 hover:p-1 hover:bg-gray-00 hover:rounded">Sobre Nosotros</a></x-nav-link>
                       <x-nav-link><a href="#" class="text-lg text-blue-300 hover:text-blue-300 dark:text-blue-300 hover:shadow-lg hover:shadow-blue-400 hover:p-1 hover:bg-gray-00 hover:rounded">Contáctanos</a></x-nav-link>
                       <x-nav-link><a href="#" class="text-lg text-blue-300 hover:text-blue-300 dark:text-blue-300 hover:shadow-lg hover:shadow-blue-400 hover:p-1 hover:bg-gray-00 hover:rounded">Blog</a></x-nav-link>
                       <x-nav-link><a href="#" class="text-lg text-blue-300 hover:text-blue-300 dark:text-blue-300 hover:shadow-lg hover:shadow-blue-400 hover:p-1 hover:bg-gray-00 hover:rounded">Servicios</a></x-nav-link>
    
                   </ul>
                </nav>
                <div><x-login-register/></div>
            </div>
        </header>
        <main class="bg-gray-300 py-20">
            <div class="container mx-auto">
                <!-- Contenido principal -->
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-gray-700 mb-4">Bienvenido a Fácil Work</h1>
                    <p class="text-lg text-gray-700">Encuentra profesionales para tus trabajos u ofrece tus servicios.</p>
                    <div class="mt-8 flex justify-center">
                        <a href="{{ route('register', ['role' => 'worker']) }}" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition">Soy un Trabajador</a>
                        <a href="{{ route('register', ['role' => 'client']) }}" class="px-6 py-3 bg-green-500 text-white font-semibold rounded hover:bg-green-600 ml-4 transition">Soy un Cliente</a>
                    </div>
                </div>
            </div>
        </main>
        <div><x-footer/></div>
    </div>
</x-guest-layout>
