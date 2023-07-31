<div
    class="from-gray-400 via-gray-900 to-gray-400 bg-gradient-to-br min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900">
    <div>
        {{ $logo }}
    </div>

    <div class="sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    <div class="mt-14 space-y-4 text-gray-50 text-center sm:-mb-8">
        <p class="text-md">Al acceder, aceptas los <a href="#" class="underline">términos y condiciones</a> de
            nuestro sitio.</p>

        <p>Aplican los <a href="https://google.com/" class="underline"> términos de servicio de Google</a>.</p>
    </div>
</div>
