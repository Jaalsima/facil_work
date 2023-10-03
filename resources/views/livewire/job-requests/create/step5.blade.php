<div>
    <h3 class="mb-24 font-mono text-4xl">Ayúdanos a aclarar <br> tu necesidad</h3>
    <p class="mb-24 font-sans text-3xl">¿Quieres anexar una foto?</p>

    <div class="flex justify-around mb-12" x-data="{ selectedCheckbox: null }">
        <div class="w-16 rounded-lg cursor-pointer hover:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'yes' }">
            <input type="checkbox" id="yes" wire:model="image" value="Si" class="hidden"
                @click="selectedCheckbox = 'yes'" :checked="selectedCheckbox === 'yes'">
            <label for="yes" class="w-full h-full cursor-pointer">
                <!-- Inserta aquí tu icono de check para "Si" -->
                <p class="mx-2 mb-2 text-xs">Si</p>
            </label>
        </div>
        <div class="w-16 rounded-lg cursor-pointer hover:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'not' }">
            <input type="checkbox" id="not" wire:model="image" value="No" class="hidden"
                @click="selectedCheckbox = 'not'" :checked="selectedCheckbox === 'not'">
            <label for="not" class="w-full h-full cursor-pointer">
                <!-- Inserta aquí tu icono de cruz para "No" -->
                <p class="mx-2 mb-2 text-xs">No</p>
            </label>
        </div>
    </div>

    @if ($image === 'Si')
        <input type="file" wire:model="imagePaths" multiple>
    @endif

    <button wire:click="saveImages" class="px-4 py-2 text-white bg-blue-500 rounded-lg">Guardar Imágenes</button>
</div>
