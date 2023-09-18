<!-- resources/views/job_requests/step1.blade.php -->
<x-guest-layout>
    <div class="flex w-full h-[93.5vh] font-sans font-semibold text-center text-gray-100">
        <div class="flex flex-col items-end justify-center w-3/5">
            <form class="flex flex-col justify-around w-2/5 gap-10 pl-10 mx-auto font-mono text-4xl font-semibold"
                method="POST" action="{{ route('job-requests.step1') }}">
                @csrf
                <label for="job_request">En qué te podemos <br> ayudar?</label>
                <x-input class="text-2xl bg-gray-700 h-28 shadow-black" type="text" id="job_request"
                    name="job_request" />
                <a href="{{ route('job-requests.step2') }}"><i class="text-6xl fa-solid fa-angle-right"></i></a>

                <select name="category" id="category"
                    class="text-xl py-4 rounded-lg bg-[#303B4D] ring-0 focus:ring-0 focus:border-gray-900 shadow-lg shadow-black">
                    <option>--Elige una categoría--</option>
                    @foreach ($categoriesWithSkills as $category)
                        <optgroup label="{{ $category->name }}">
                            @foreach ($category->skills as $skill)
                                <option class="text-md" value="{{ $skill->id }}">{{ $skill->name }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </form>
        </div>

        <div class="flex flex-col items-start justify-around w-2/5 pl-10 mt-4 font-sans text-2xl bg-gray-900">
            <a href="{{ route('blog') }}">Primeros Pasos</a>
            <a href="{{ route('policy') }}">Políticas</a>
            <a href="{{ route('about') }}">Sobre Nosotros</a>
        </div>
    </div>
</x-guest-layout>
