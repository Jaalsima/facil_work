<div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class="px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md dark:bg-gray-800 sm:rounded-lg">
        {{ $slot }}
    </div>
    <div class="space-y-4 text-center mt-14 text-gray-50 sm:-mb-8">
        <p class="text-md">Al acceder, aceptas los <a href="#" class="underline">términos y condiciones</a> de
            nuestro sitio.</p>

        <p>Aplican los <a href="https://google.com/" class="underline"> términos de servicio de Google</a>.</p>
    </div>
</div>
