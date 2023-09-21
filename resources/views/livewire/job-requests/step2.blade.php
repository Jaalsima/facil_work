<div class="flex w-full h-[93.8vh] font-sans font-semibold text-center text-gray-100">
    <div class="flex flex-col items-end justify-center w-3/5">
        <div class="flex flex-col justify-around w-2/5 gap-10 pl-10 mx-auto font-semibold">
            <h3 class="font-mono text-4xl">Ayúdanos a aclarar tu necesidad</h3>
            <p class="font-sans text-3xl">Selecciona una locación</p>
            <div class="flex flex-wrap justify-center gap-10">
                <button wire:click="saveTemporalData">Guardar y Continuar</button>
                <!-- Otros botones de selección -->
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center justify-start w-2/5 pl-10 mt-4 font-sans text-2xl bg-gray-900">
        <div>
            <h3 class="mt-4 text-3xl text-center">Informe:</h3>
            <div class="text-xl text-left">
                <h3>Descripción del trabajo:</h3>
                <p>{{ $jobRequest }}</p>
            </div>
        </div>
    </div>
</div>
