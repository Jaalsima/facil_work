<div class="relative inline-block text-center cursor-pointer group">
    <a href="#" wire:click="$set('open', true)">
        <i class="p-1 text-green-400 rounded hover:text-white hover:bg-green-500 fa-solid fa-eye"></i>
        <div
            class="absolute z-10 px-3 py-2 mb-2 text-center text-white bg-gray-700 rounded-lg opacity-0 pointer-events-none text-md group-hover:opacity-80 bottom-full -left-3">
            Ver
            <svg class="absolute left-0 w-full h-2 text-black top-full" x="0px" y="0px" viewBox="0 0 255 255"
                xml:space="preserve">
                <polygon class="fill-current" points="0,0 127.5,127.5 255,0" />
            </svg>
        </div>
    </a>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <h2 class="mt-3 text-2xl text-center">{{ $jobRequest->description }}</h2>
        </x-slot>
        <x-slot name="content">
            <!-- Aquí puedes mostrar los detalles del Job Request -->
            <div class="mx-auto my-2 w-52">
                <!-- Agrega cualquier contenido que desees mostrar -->
                <p><strong>Descripción:</strong> {{ $jobRequest->description }}</p>
                <p><strong>Locación:</strong> {{ $jobRequest->location }}</p>
                <p><strong>Lugar:</strong> {{ $jobRequest->place }}</p>
                <p><strong>Herramientas:</strong> {{ $jobRequest->tools }}</p>
                <p><strong>Imágen:</strong> {{ $jobRequest->image }}</p>
                <p><strong>Fecha:</strong> {{ $jobRequest->date }}</p>
                <p><strong>Dirección:</strong> {{ $jobRequest->address }}</p>
                <p><strong>Estado:</strong> {{ $jobRequest->status }}</p>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="mx-auto">
                <x-secondary-button wire:click="$set('open', false)"
                    class="mr-4 text-gray-500 border border-gray-500 shadow-lg hover:shadow-gray-400">
                    Salir
                </x-secondary-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
