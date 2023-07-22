<div class="bg-gray-500 py-4">
    <div class="container mx-auto flex items-center justify-between px-4">
        <div class="text-white font-bold text-xl flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Fácil Work Logo"
                class="border-2 border-gray-200 rounded-full w-12 h-12 mr-2">
            <span class="text-2xl">Fácil Work</span>
        </div>
        <div class="hidden lg:flex space-x-4">
            <x-nav-link><a href="{{ route('about') }}" class="text-lg hover:text-blue-300">Sobre Nosotros</a></x-nav-link>
            <x-nav-link><a href="{{ route('contact') }}" class="text-lg hover:text-blue-300">Contáctanos</a></x-nav-link>
            <x-nav-link><a href="{{ route('blog') }}" class="text-lg hover:text-blue-300">Blog</a></x-nav-link>
            <x-nav-link><a href="{{ route('services') }}" class="text-lg hover:text-blue-300">Servicios</a></x-nav-link>
        </div>
        <div>
            <x-login-register />
        </div>
        <div class="lg:hidden">
            <livewire:responsive-navbar />
        </div>
    </div>
</div>
