<div>
    <input wire:model="name" type="text" placeholder="Nombre">
    @error('name') <span class="error">{{ $message }}</span> @enderror

    <input wire:model="email" type="text" placeholder="Correo electrónico">
    @error('email') <span class="error">{{ $message }}</span> @enderror

    <button wire:click="nextStep">Siguiente</button>
</div>
