<div>
    <label>
        <p class="mb-12">En qué te podemos <br> ayudar?</p>
    </label>
    <x-input class="mb-12 text-2xl bg-gray-700 h-28 shadow-black" type="text" wire:model="c1Description" />

    <div>
        @if ($c1DescriptionEntered)
            <label for="category">
                <p class="mb-12">¿Dentro de qué categoría entra tu problema?</p>
            </label>
            <select id="category" wire:model="c1SelectedCategory" class="mb-12 text-2xl bg-gray-700 rounded-lg">
                <option value="">Selecciona una categoría</option>
                @foreach ($c1Categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        @endif


        @if ($c1CategoryEntered)
            <label for="skill"></label>
            <select id="skill" wire:model="c1SelectedSkill" class="mb-12 text-2xl bg-gray-700 rounded-lg">
                <option value="">Selecciona una habilidad</option>
                @if ($c1Skills)
                    @foreach ($c1Skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach
                @endif
            </select>
        @endif

    </div>
</div>
