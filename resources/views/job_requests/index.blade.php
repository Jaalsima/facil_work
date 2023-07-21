<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-gray-700 my-8">Solicitudes de Trabajo</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Aquí puedes mostrar las solicitudes de trabajo -->
            <!-- Ejemplo: -->
            <div class="bg-white p-4 shadow-md rounded-md">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">Título de la Solicitud</h2>
                <p class="text-gray-600 mb-4">Descripción de la solicitud de trabajo...</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-400">Categoría de Servicio</span>
                    <a href="#"
                        class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition">Ver
                        Detalles</a>
                </div>
            </div>
            <!-- Repite el mismo patrón para otras solicitudes de trabajo -->
        </div>
    </div>
</x-app-layout>
