<div>
    <div class="flex w-full h-[93.5vh] font-sans font-semibold text-center text-gray-100">
        <div class="flex flex-col items-end justify-center w-3/5">
            <div class="flex flex-col justify-around w-3/5 mx-auto font-mono text-4xl font-semibold">

                @if ($mStep == 1)
                    <livewire:job-requests.create-job-request.step1 :c1DataDescription="$mDescription" />
                @elseif ($mStep == 2)
                    <livewire:job-requests.create-job-request.step2 :c2Location="$mLocation" />
                @elseif ($mStep == 3)
                    <livewire:job-requests.create-job-request.step3 :c3Place="$mPlace" />
                @elseif ($mStep == 4)
                    <livewire:job-requests.create-job-request.step4 :c4Tools="$mTools" />
                @elseif ($mStep == 5)
                    <livewire:job-requests.create-job-request.step5 :c5Image="$mImage" />
                @elseif ($mStep == 6)
                    <livewire:job-requests.create-job-request.step6 :c6Date="$mDate" />
                @elseif ($mStep == 7)
                    <livewire:job-requests.create-job-request.step7 :c7Address="$mAddress" />
                @elseif ($mStep == 8)
                    <livewire:job-requests.create-job-request.step8 />
                @endif

                @if ($mStep == 1)
                    <div class="text-center">
                        <button wire:click="nextStep" class="text-2xl hover:bg-[#336699] rounded-lg py-2">
                            <div class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                                    class="w-full bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>
                        </button>
                    </div>
                @elseif($mStep > 7)
                    <div class="flex justify-center">
                        <div>
                            <button wire:click="beforeStep"
                                class="text-2xl font-bold hover:bg-[#336699] rounded-lg py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                    fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-center">
                            <h1>{{ $mStep }}</h1>
                            <button wire:click="nextStep"
                                class="text-2xl hover:bg-[#336699] rounded-lg py-2 active:bg-[#336699]">
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        fill="currentColor" class="w-full" viewBox="0 0 448 512">
                                        <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                @else
                    <div class="flex justify-center">
                        <div>
                            <button wire:click="beforeStep"
                                class="text-2xl font-bold hover:bg-[#336699] rounded-lg py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                    fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-center">
                            <button wire:click="nextStep"
                                class="text-2xl hover:bg-[#336699] rounded-lg py-2 active:bg-[#336699]">
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
            @if ($mStep == 1)
                <div class="flex flex-col justify-around h-full text-left">
                    <a href="{{ route('blog') }}">Primeros Pasos</a>
                    <a href="{{ route('policy') }}">Políticas</a>
                    <a href="{{ route('about') }}">Sobre Nosotros</a>
                </div>
            @elseif($mStep > 1)
                <h3 class="py-2 mt-10 mr-4 text-3xl rounded-lg">Informe</h3>
                <div class="mt-10 mr-4 text-left">
                    <div class="py-2 pl-3 mt-6 mb-4 rounded-lg">
                        <h1>Descripción de la solicitud:</h1>
                        <h1 class="pl-10 text-xl">{{ $mDescription }}</h1>
                    </div>

                    <div class="py-2 pl-3 mb-4 rounded-lg">
                        <h1>Categoría:</h1>
                        <h1 class="pl-10 text-xl">{{ $mCategoryName }}</h1>
                    </div>

                    <div class="py-2 pl-3 mb-4 rounded-lg">
                        <h1>Habilidad:</h1>
                        <h1 class="pl-10 text-xl">{{ $mSkillName }}</h1>
                    </div>

                    <div class="py-2 pl-3 mb-4 rounded-lg">
                        <h1>Ubicación:</h1>
                        <h1 class="pl-10 text-xl">{{ $mLocation }}</h1>
                    </div>
                    <div class="py-2 pl-3 mb-4 rounded-lg">
                        <h1>Lugar:</h1>
                        <h1 class="pl-10 text-xl">{{ $mPlace }}</h1>
                    </div>
                    <div class="py-2 pl-3 mb-4 rounded-lg">
                        <h1>Herramientas:</h1>
                        <h1 class="pl-10 text-xl">{{ $mTools }}</h1>
                    </div>
                    <div class="py-2 pl-3 mb-4 rounded-lg">
                        <h1>Imagen:</h1>
                        <h1 class="pl-10 text-xl">{{ $mImage }}</h1>
                    </div>
                    <div class="py-2 pl-3 mb-4 rounded-lg">
                        <h1>Fecha:</h1>
                        <h1 class="pl-10 text-xl">{{ $mDate }}</h1>
                    </div>
                    <div class="py-2 pl-3 mb-4 rounded-lg">
                        <h1>Dirección:</h1>
                        <h1 class="pl-10 text-xl">{{ $mAddress }}</h1>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
