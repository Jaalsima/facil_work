<x-guest-layout>
    <div class="flex w-full h-[93.8vh] font-sans font-semibold text-center text-gray-100">
        <div class="flex flex-col items-end justify-center w-3/5">
            <form class="flex flex-col justify-around w-2/5 gap-10 pl-10 mx-auto font-semibold" method="POST"
                action="{{ route('job-requests.step2') }}">
                @csrf
                <h3 class="font-mono text-4xl">Ayúdanos a aclarar tu necesidad</h3>
                <p class="font-sans text-3xl">Selecciona una locación</p>
                <div class="flex justify-center gap-10">
                    <x-button class="w-28 h-28 shadow-black">
                        <i class="mx-auto text-6xl text-center fa-solid fa-house"></i>
                    </x-button>
                    <x-button class="w-28 h-28 shadow-black">
                        <i class="mx-auto text-6xl fa-solid fa-building"></i>
                    </x-button>
                </div>

                <a href="{{ route('job-requests.step3') }}"><i class="text-6xl fa-solid fa-angle-right"></i></a>
            </form>
        </div>

        <div class="flex flex-col items-center justify-start w-2/5 pl-10 mt-4 font-sans text-2xl bg-gray-900">
            <div>
                <h3 class="mt-4 text-3xl text-center">Informe:</h3>
                <div class="text-xl text-center">
                    <!-- Mostrar la información ingresada en step1 utilizando la sesión -->
                    Descripción del trabajo: {{ session('job_request_data.job_request', 'No especificado') }}
                    <br>
                    Categoría: {{ session('job_request_data.category', 'No especificada') }}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
