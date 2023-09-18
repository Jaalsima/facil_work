<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/8e38c8557e.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>


<body>
    <livewire:navbar />
    <div class="font-sans antialiased text-gray-900 bg-[#303B4D] dark:text-gray-100">
        {{ $slot }}
    </div>

    @livewireScripts()

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categorySelect = document.getElementById('category');
            const subOptions = document.querySelectorAll('.sub-option');

            // Evento cuando se cambia la categoría seleccionada
            categorySelect.addEventListener('change', function() {
                const selectedCategoryId = categorySelect.value;

                // Oculta todas las sub-opciones
                subOptions.forEach(function(option) {
                    option.style.display = 'none';
                });

                // Muestra las sub-opciones relacionadas con la categoría seleccionada
                subOptions.forEach(function(option) {
                    if (option.getAttribute('data-parent') === selectedCategoryId) {
                        option.style.display = 'block';
                    }
                });
            });
        });
    </script>
</body>

</html>
