<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>One Project App</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/da34c1ccea.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/index.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        
    </style>
</head>
<body x-data="{darkMode: false}" x-bind:class="{ 'dark' : darkMode, '' : !darkMode}" class="flex flex-col h-screen dark:bg-gray-500" x-cloak>
    
    {{-- Navigation Bar --}}
    <div class="h-16 border-b gray-200 w-full">
        {{-- Navigation Body --}}
        <div class="flex mx-10 xl:mx-96 my-3 justify-between items-center">
            {{-- Logo --}}
            <a href="/" class="flex text-lg space-x-2">
                <h2 class="font-extrabold text-gray-800">TALL</h2>
                <h2 class="font-bold text-gray-700">Stack</h2>
                <h2 class="text-blue-500 font-semibold">Dojo</h2>
            </a>

            {{-- Search --}}
            <div class="h-8 w-96 pt-0.5 px-5 border rounded bg-gray-100 border-gray-200">
                Search
            </div>

            {{-- Submit --}}
            <div class="flex space-x-3">
                <button class="p-1 rounded bg-blue-500 text-white text-base focus:outline-none">Submit Ideas</button>
                <button class="p-1 rounded bg-yellow-500 text-white text-base focus:outline-none">Current Issues</button>
                <button @click="darkMode = !darkMode" class="focus:outline-none pb-2">
                    <i class="bi bi-pie-chart-fill text-gray-800 text-2xl" x-show="darkMode" ></i>
                    <i class="bi bi-pie-chart-fill text-blue-500 text-2xl" x-bind:class="{ 'hidden': darkMode }" ></i>
                </button>
            </div>

        </div>
        
    </div>

    {{-- Main Body --}}

    {{-- Footer --}}

</body>
</html>