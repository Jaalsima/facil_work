<div class="mx-auto px-4 py-8 w-1/2">
    <div class="text-center relative">

        <img class="h-96 w-full object-cover rounded-md" src="{{ asset('images/worker20.jpg') }}" alt="">
        <div class="absolute top-4 w-full mt-8">
            <div>
                <h1 class="text-6xl font-extrabold text-gray-200 dark:text-white mb-6"
                    style="text-shadow: 0 3px 1px rgb(92, 94, 97);">FÁCIL WORK</h1>
            </div>
            <div>
                <h2 class="text-4xl font-semibold text-gray-200 dark:text-white mb-8 px-2">La solución a todos tus
                    problemas!
                </h2>
            </div>
        </div>

        {{-- <div class="bg-cover bg-no-repeat"
            style="background-image: url('{{ asset('images/worker20.jpg') }}'); background-size: cover;">
            <div>
                <h1 class="text-6xl font-extrabold text-blue-400 dark:text-white mb-8"
                    style="text-shadow: 0 3px 1px rgb(92, 94, 97);">FÁCIL WORK</h1>
            </div>
            <div>
                <h2 class="text-4xl font-semibold text-gray-500 dark:text-white mb-8">La solución a todos tus problemas!
                </h2>
            </div>
        </div> --}}



        <div class="flex justify-center space-x-4 mt-20">
            <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded">Soy
                Cliente</a>
            <a href="{{ route('register') }}" class="bg-slate-500 hover:bg-slate-600 text-white px-6 py-3 rounded">Soy
                Trabajador</a>
        </div>
    </div>

</div>
