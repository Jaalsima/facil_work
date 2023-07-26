<nav class="bg-blue-500 dark:bg-gray-900 shadow-md shadow-blue-700">
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
