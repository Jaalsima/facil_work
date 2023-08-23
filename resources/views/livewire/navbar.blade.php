<nav class="mb-5 bg-gray-900 shadow-md shadow-gray-500">
    <div class="container flex items-center justify-between px-4 py-2 mx-auto">
        <a href="{{ route('home') }}">
            <x-application-logo />
        </a>
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="p-3 text-white rounded hover:bg-gray-600">Inicio</a></li>
            <li><a href="{{ route('blog') }}" class="p-3 text-white rounded hover:bg-gray-600">Blog</a></li>
            <li><a href="{{ route('about') }}" class="p-3 text-white rounded hover:bg-gray-600">Quiénes
                    Somos</a></li>
            <li><a href="{{ route('contact') }}" class="p-3 text-white rounded hover:bg-gray-600">Contáctanos</a></li>
            <li><a href="{{ route('services') }}" class="p-3 text-white rounded hover:bg-gray-600">Servicios</a>
            </li>
        </ul>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}"
                class="px-4 py-2 text-white border border-white rounded hover:bg-gray-600 dark:hover:bg-gray-900 dark:text-gray-900 dark:border-gray-900">Ingreso</a>
            <a href="{{ route('register') }}"
                class="px-4 py-2 text-white border border-white rounded hover:bg-gray-600 dark:hover:bg-gray-900 dark:text-gray-900 dark:border-gray-900">Registro</a>
        </div>
    </div>
</nav>
