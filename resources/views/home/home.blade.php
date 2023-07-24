{{-- <x-guest-layout>
    <div class="flex flex-col justify-between min-h-screen">
        <!-- Navbar para pantallas grandes -->
        <div class="hidden lg:block">
            <livewire:navbar />
        </div>
        <!-- Navbar para pantallas pequeñas -->
        <div class="lg:hidden">
            <livewire:responsive-navbar />
        </div>
        <livewire:home-navbar />
        <main class="bg-gray-300 py-20">
            <div class="container mx-auto">
                <!-- Contenido principal -->
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-gray-700 mb-4">Bienvenido a Fácil Work</h1>
                    <p class="text-lg text-gray-700">Encuentra profesionales para tus trabajos u ofrece tus servicios.
                    </p>
                    <livewire:user-table />
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
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fácil Work - La solución a todos tus problemas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
    <script src="https://kit.fontawesome.com/8e38c8557e.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-800">


    <livewire:navbar />
    <div class="min-h-screen mx-auto px-4 py-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">La solución a todos tus problemas</h1>

            <p class="text-gray-600 dark:text-gray-300 mb-8">Encuentra los mejores profesionales para tus
                necesidades
            </p>

            <div class="flex justify-center space-x-4">
                <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded">Soy Cliente</a>
                <a href="#" class="bg-gray-500 text-white px-6 py-3 rounded">Soy Trabajador</a>
            </div>
        </div>

    </div>
    <div>
        <footer class="bg-gray-200 dark:bg-gray-700 py-4">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Sobre nosotros</h3>
                        <p class="text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit.
                            Nullam auctor, nunc id aliquam ultrices, nisl nunc tincidunt arcu, id lacinia velit nunc
                            id
                            nunc.</p>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Enlaces rápidos</h3>
                        <ul class="list-none">
                            <li><a href="#"
                                    class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200">Inicio</a>
                            </li>
                            <li><a href="#"
                                    class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200">Acerca
                                    de</a></li>
                            <li><a href="#"
                                    class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200">Servicios</a>
                            </li>
                            <li><a href="#"
                                    class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Redes sociales</h3>
                        <ul class="list-none">
                            <li><a href="#"
                                    class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li><a href="#"
                                    class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="#"
                                    class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    @livewireScripts()
</body>

</html>
