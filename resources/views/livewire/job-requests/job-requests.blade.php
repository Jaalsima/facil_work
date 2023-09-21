<div>
    <x-guest-layout>
        <div class="flex w-full h-[93.5vh] font-sans font-semibold text-center text-gray-100">
            <div class="flex flex-col items-end justify-center w-3/5">
                <div class="flex flex-col justify-around w-2/5 pl-10 mx-auto font-mono text-4xl font-semibold">
                    @if ($step == 1)
                        <livewire:job-requests.step1 />
                    @elseif ($step == 2)
                        <livewire:job-requests.step2 />
                    @elseif ($step == 3)
                        <livewire:job-requests.step3 />
                    @elseif ($step == 4)
                        <livewire:job-requests.step4 />
                    @elseif ($step == 5)
                        <livewire:job-requests.step5 />
                    @endif

                    @if ($step == 1)
                        <div class="text-center">
                            <button wire:click="next" class="text-2xl">
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        fill="currentColor" class="w-full bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                        </button>
                    @elseif($step == 6)
                        <div>
                            <button wire:click="before" class="text-2xl font-bold">
                                Atrás
                            </button>
                        </div>
                    @else
                        <div class="flex justify-around">
                            <button wire:click="before" class="text-2xl font-bold">
                                Atrás
                            </button>
                            <button wire:click="next" class="text-2xl font-bold">
                                Sigiente
                            </button>
                        </div>
                    @endif


                </div>
            </div>
            <div class="flex flex-col items-start justify-around w-2/5 pl-10 mt-4 font-sans text-2xl bg-gray-900">
                @if ($step == 1)
                    <a href="{{ route('blog') }}">Primeros Pasos</a>
                    <h1>{{ $jobRequest }}</h1>
                    <a href="{{ route('policy') }}">Políticas</a>
                    <a href="{{ route('about') }}">Sobre Nosotros</a>
                @elseif($step > 1)
                    <h3 class="mt-4 text-3xl text-center">Informe:</h3>
                    <div class="text-xl text-left">
                        <h3>Descripción del trabajo:</h3>

                        <h1>solicitud de trabajo: {{ $jobRequest }}</h1>
                        <h1>location: {{ $location }}</h1>
                    </div>
                @endif

            </div>
        </div>
    </x-guest-layout>
</div>
