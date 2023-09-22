<div>
    <x-guest-layout>
        <div class="flex w-full h-[93.5vh] font-sans font-semibold text-center text-gray-100">
            <div class="flex flex-col items-end justify-center w-3/5">
                <div class="flex flex-col justify-around w-3/5 mx-auto font-mono text-4xl font-semibold">

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
                    @elseif ($step == 6)
                        <livewire:job-requests.step6 />
                    @elseif ($step == 7)
                        <livewire:job-requests.step7 />
                    @endif

                    @if ($step == 1)
                        <div class="text-center">
                            <button wire:click="next" class="text-2xl hover:bg-[#336699] rounded-lg py-2">
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        fill="currentColor" class="w-full bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    @elseif($step > 7)
                        <div>
                            <button wire:click="before" class="text-2xl font-bold hover:bg-[#336699] rounded-lg py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                    fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="2"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </button>
                        </div>
                    @else
                        <div class="flex justify-center">
                            <div>
                                <button wire:click="before"
                                    class="text-2xl font-bold hover:bg-[#336699] rounded-lg py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="text-center">
                                <button wire:click="next" class="text-2xl hover:bg-[#336699] rounded-lg py-2">
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                            fill="currentColor" class="w-full bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="flex flex-col w-2/5 pl-10 mt-4 font-sans text-2xl bg-gray-900">
                @if ($step == 1)
                    <div class="flex flex-col justify-around h-full text-left">
                        <a href="{{ route('blog') }}">Primeros Pasos</a>
                        <a href="{{ route('policy') }}">Políticas</a>
                        <a href="{{ route('about') }}">Sobre Nosotros</a>
                    </div>
                @elseif($step > 1)
                    <h3 class="mr-4 py-2 mt-10 text-3xl bg-[#336699] rounded-lg">Informe</h3>
                    <div class="mt-10 mr-4 text-left">
                        <div class="py-2 pl-3 mt-6 mb-4 bg-[#336699] rounded-lg">
                            <h1>solicitud de trabajo:</h1>
                            <h1 class="pl-10 text-xl">{{ $jobRequest }}</h1>
                        </div>
                        <div class="py-2 pl-3 mb-4 bg-[#336699] rounded-lg">
                            <h1>location:</h1>
                            <h1 class="pl-10 text-xl">{{ $location }}</h1>
                        </div>
                        <div class="py-2 pl-3 mb-4 bg-[#336699] rounded-lg">
                            <h1>location:</h1>
                            <h1 class="pl-10 text-xl">{{ $place }}</h1>
                        </div>
                        <div class="py-2 pl-3 mb-4 bg-[#336699] rounded-lg">
                            <h1>location:</h1>
                            <h1 class="pl-10 text-xl">{{ $tools }}</h1>
                        </div>
                        <div class="py-2 pl-3 mb-4 rounded-lg">
                            <h1>location:</h1>
                            <h1 class="pl-10 text-xl">{{ $image }}</h1>
                        </div>
                        <div class="py-2 pl-3 mb-4 rounded-lg">
                            <h1>location:</h1>
                            <h1 class="pl-10 text-xl">{{ $date }}</h1>
                        </div>
                        <div class="py-2 pl-3 mb-4 rounded-lg">
                            <h1>location:</h1>
                            <h1 class="pl-10 text-xl">{{ $address }}</h1>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </x-guest-layout>
</div>
