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
</x-app-layout> --}}


<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Panel de Control del Cliente</div>

                    <div class="card-body">
                        <p>Bienvenido, {{ Auth::user()->name }}!</p>

                        <h4>Mis Solicitudes de Trabajo</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Número de Solicitud</th>
                                    <th>Fecha de Creación</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($workRequests as $workRequest)
                                    <tr>
                                        <td>{{ $workRequest->id }}</td>
                                        <td>{{ $workRequest->created_at }}</td>
                                        <td>{{ $workRequest->status }}</td>
                                        <td>
                                            <a href="{{ route('work_request.show', $workRequest->id) }}" class="btn btn-sm btn-primary">Ver Detalles</a>
                                            @if ($workRequest->status === 'pendiente')
                                                <a href="{{ route('work_request.edit', $workRequest->id) }}" class="btn btn-sm btn-info">Editar</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h4>Mis Cotizaciones Recibidas</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Número de Cotización</th>
                                    <th>Fecha de Creación</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quotations as $quotation)
                                    <tr>
                                        <td>{{ $quotation->id }}</td>
                                        <td>{{ $quotation->created_at }}</td>
                                        <td>{{ $quotation->status }}</td>
                                        <td>
                                            <a href="{{ route('quotation.show', $quotation->id) }}" class="btn btn-sm btn-primary">Ver Detalles</a>
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
</x-guest-layout>
