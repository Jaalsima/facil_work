{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
 --}}

<x-app-layout>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg px-8 py-6">
                    <div class="text-xl font-bold mb-6">Panel de Control del Cliente</div>

                    <div class="mb-4">
                        <p>Bienvenido, {{ Auth::user()->name }}!</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-xl font-bold mb-2">Mis Solicitudes de Trabajo</h4>
                        <table class="w-full border-collapse">
                            <thead>
                                <tr>
                                    <th class="border border-gray-400 px-4 py-2">Número de Solicitud</th>
                                    <th class="border border-gray-400 px-4 py-2">Fecha de Creación</th>
                                    <th class="border border-gray-400 px-4 py-2">Estado</th>
                                    <th class="border border-gray-400 px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($workRequests as $workRequest)
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">{{ $workRequest->id }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $workRequest->created_at }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $workRequest->status }}</td>
                                        <td class="border border-gray-400 px-4 py-2">
                                            <a href="{{ route('work_request.show', $workRequest->id) }}"
                                                class="text-blue-500 hover:text-blue-700">Ver Detalles</a>
                                            @if ($workRequest->status === 'pendiente')
                                                <a href="{{ route('work_request.edit', $workRequest->id) }}"
                                                    class="text-blue-500 hover:text-blue-700 ml-4">Editar</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold mb-2">Mis Cotizaciones Recibidas</h4>
                        <table class="w-full border-collapse">
                            <thead>
                                <tr>
                                    <th class="border border-gray-400 px-4 py-2">Número de Cotización</th>
                                    <th class="border border-gray-400 px-4 py-2">Fecha de Creación</th>
                                    <th class="border border-gray-400 px-4 py-2">Estado</th>
                                    <th class="border border-gray-400 px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quotations as $quotation)
                                    <tr>
                                        <td class="border border-gray-400 px-4 py-2">{{ $quotation->id }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $quotation->created_at }}</td>
                                        <td class="border border-gray-400 px-4 py-2">{{ $quotation->status }}</td>
                                        <td class="border border-gray-400 px-4 py-2">
                                            <a href="{{ route('quotation.show', $quotation->id) }}"
                                                class="text-blue-500 hover:text-blue-700">Ver Detalles</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
