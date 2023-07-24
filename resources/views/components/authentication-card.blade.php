<div
    class="w-1/2 from-blue-100 via-blue-300 to-blue-600 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900">
    <div>
        {{ $logo }}
    </div>

    <div class="sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
