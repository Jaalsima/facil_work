<x-guest-layout>
    <div class="flex flex-col justify-between min-h-screen">
        <!-- Navbar para pantallas grandes -->
        <div class="hidden lg:block">
            <livewire:navbar />
        </div>
        <!-- Navbar para pantallas pequeñas -->
        <div class="lg:hidden">
            <livewire:responsive-navbar />
        </div>
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
