<div>
    <div class="flex w-full h-[93.5vh] font-sans font-semibold text-center text-gray-100">
        <div class="flex flex-col items-end justify-center w-3/5">
            <div class="flex flex-col justify-around w-2/5 gap-10 pl-10 mx-auto font-mono text-4xl font-semibold">

                @if ($contador == 1)
                    <label for="jobRequest">En qué te podemos <br> ayudar?</label>

                    <x-input class="text-2xl bg-gray-700 h-28 shadow-black" type="text" id="jobRequest"
                        wire:model="jobRequest" />
                    <button type="submit" class="text-6xl fa-solid fa-angle-right"></button>
                @elseif ($contador == 2)
                    <h3 class="font-mono text-4xl">Ayúdanos a aclarar tu necesidad</h3>
                    <p class="font-sans text-3xl">Selecciona una locación</p>
                    <div class="flex flex-wrap justify-center gap-10">
                        <x-input class="text-2xl bg-gray-700 h-28 shadow-black" type="text" id="jobRequest"
                            wire:model="location" />
                    </div>
                @elseif ($contador == 3)
                    <h3 class="font-mono text-4xl">Ayúdanos a aclarar tu necesidad</h3>
                    <p class="font-sans text-3xl">Selecciona una lugar</p>
                    <div class="flex justify-center gap-10">
                        <x-input class="" type="checkbox" id="house" value="house"
                            wire:model="house" />
                        <label for="house">
                                house
                                <i class="mx-auto text-6xl text-center fa-solid fa-kitchen-set"></i>
                        </label>

                        <x-input class="" type="checkbox" id="place" value="place"
                            wire:model="place" />
                        <label for="place">
                                place
                                <i class="mx-auto text-6xl fa-solid fa-bath"></i>
                        </label>

                    </div>
                @endif


            </div>
        </div>
        <div class="flex flex-col items-start justify-around w-2/5 pl-10 mt-4 font-sans text-2xl bg-gray-900">
            @if ($contador == 1)
                <a href="{{ route('blog') }}">Primeros Pasos</a>
                <a href="{{ route('policy') }}">Políticas</a>
                <a href="{{ route('about') }}">Sobre Nosotros</a>
            @else
                <h1> {{ $jobRequest }} </h1>
                <h1> {{ $location }} </h1>
                <h1> {{ $house }} </h1>
                <h1>{{$place}}</h1>
            @endif

        </div>
    </div>

    <button wire:click="before">atras</button>

    <button wire:click="next">siguiente</button>



</div>
