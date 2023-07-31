<nav class="bg-gray-900 dark:bg-gray-900 shadow-md shadow-gray-500 mb-5">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <a href="{{ route('home') }}">
            <x-application-logo />
        </a>
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="p-3 rounded text-white hover:bg-gray-600">Inicio</a></li>
            <li><a href="{{ route('blog') }}" class="p-3 rounded text-white hover:bg-gray-600">Blog</a></li>
            <li><a href="{{ route('about') }}" class="p-3 rounded text-white hover:bg-gray-600">Quiénes
                    Somos</a></li>
            <li><a href="{{ route('contact') }}" class="p-3 rounded text-white hover:bg-gray-600">Contáctanos</a></li>
            <li><a href="{{ route('services') }}" class="p-3 rounded text-white hover:bg-gray-600">Servicios</a>
            </li>
        </ul>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}"
                class="text-white border border-white hover:bg-gray-600 dark:hover:bg-gray-900 dark:text-gray-900 dark:border-gray-900 px-4 py-2 rounded">Ingreso</a>
            <a href="{{ route('register') }}"
                class="text-white border border-white hover:bg-gray-600 dark:hover:bg-gray-900 dark:text-gray-900 dark:border-gray-900 px-4 py-2 rounded">Registro</a>
        </div>
    </div>
</nav>
