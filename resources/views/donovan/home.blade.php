<x-guest-layout>
    <div
        class="flex flex-col justify-center w-[93.8vh]  h-[93.5vh] mx-auto font-sans font-semibold text-center text-gray-300 animate-pulse text-7xl">
        <a href="{{ route('request') }}"><img src="{{ asset('images/sn-icons/facilwork.png') }}" alt=""></a>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('request') }}";
        }, 3000);
    </script>
</x-guest-layout>
