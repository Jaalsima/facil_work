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
    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
        {{ $slot }}
    </div>
    <!-- Add Tailwind CSS classes for responsive navigation -->
    <style>
        .nav-menu {
            display: none;
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .nav-menu.active {
                display: block;
            }
        }
    </style>

    <!-- Add JavaScript for responsive navigation -->
    <script>
        function toggleNavMenu() {
            var navMenu = document.querySelector('.nav-menu');
            navMenu.classList.toggle('active');
        }
    </script>
    @livewireScripts()
</body>

</html>
