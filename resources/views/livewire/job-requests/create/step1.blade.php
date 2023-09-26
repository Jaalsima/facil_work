<div>
    <label>
        <p class="mb-24">En qué te podemos <br> ayudar?</p>
    </label>
    <x-input class="mb-24 text-2xl bg-gray-700 h-28 shadow-black" type="text" wire:model="description" />

    <div>
        <label for="category">Categoría:</label>
        <select id="category" wire:model="category" class="mb-24 text-2xl bg-gray-700">
            <option value="">Selecciona una categoría</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="skill">Habilidad:</label>
        <select id="skill" wire:model="category" class="mb-24 text-2xl bg-gray-700">
            <option value="">Selecciona una habilidad</option>
            @if ($category)
                @foreach ($category->skills as $skill)
                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
