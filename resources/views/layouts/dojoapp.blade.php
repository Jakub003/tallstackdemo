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
<body x-data="{darkMode: false}" x-bind:class="{ 'dark' : darkMode, '' : !darkMode}" class="font-sans flex flex-col h-screen justify-between" x-cloak>

{{-- Header --}}
<div class="fixed w-full bg-white flex h-16 border-b border-gray-200 justify-center">
    <div class="p-4 flex w-full lg:w-8/12 justify-between">
        {{-- Logo --}}
        <a href="/" class="flex text-lg space-x-2 flex-shrink-0 items-center">
            <h2 class="font-extrabold text-gray-800">TALL</h2>
            <h2 class="font-bold text-gray-700">Stack</h2>
            <h2 class="text-blue-500 font-semibold">Dojo</h2>
        </a>

        {{-- Buttons --}}
        <div class="flex space-x-2 text-sm">
            <button class="px-1 rounded bg-blue-500 text-white focus:outline-none flex-shrink-0">Submit Ideas</button>
            <button class="px-1 rounded bg-yellow-500 text-white focus:outline-none flex-shrink-0">Current Issues</button>
            <button @click="darkMode = !darkMode" class="focus:outline-none pb-2 flex-shrink-0">
                <i class="bi bi-pie-chart-fill text-gray-800 " x-show="darkMode" ></i>
                <i class="bi bi-pie-chart-fill text-blue-500 " x-bind:class="{ 'hidden' : darkMode }" ></i>
            </button>
        </div>

    </div>
</div>
{{-- Header END --}}

{{-- Body --}}
<div class="flex mt-16 dark:bg-gray-800 flex-grow justify-center">
    <div class="hidden lg:flex w-2/12 bg-gray-50"></div>

    {{-- Content --}}
    <div class="w-full flex lg:w-8/12 bg-gray-50 lg:justify-between block">

        <div class="fixed w-48 h-full p-4 border-r border-gray-200">Left Navigation

        </div>

        <div class="flex flex-col p-4 ml-48 md:mr-48 flex-grow bg-white">
            <img src="https://i.gyazo.com/772c45d10792d2554cb5791c4faf2dbd.png">
            <img src="https://i.gyazo.com/772c45d10792d2554cb5791c4faf2dbd.png">
            <img src="https://i.gyazo.com/772c45d10792d2554cb5791c4faf2dbd.png">
        </div>

        {{-- Right Floating Navigation --}}
        <div class="hidden md:flex fixed w-48 right-0 h-full flex-col space-y-2 text-gray-400 p-4 text-sm bg-white">
            <h2 class="text-gray-800 font-bold ">ON THIS PAGE</h2>
            <h2 class="cursor-pointer">Test Item</h2>
            <h2 class="cursor-pointer">Test Item</h2>
            <h2 class="cursor-pointer">Test Item</h2>
            <h2 class="cursor-pointer">Test Item</h2>
            <h2 class="cursor-pointer">Test Item</h2>
        </div>
        {{-- Right Floating Navigation END --}}
    </div>
    {{-- Content END --}}

    <div class="hidden lg:flex w-2/12 bg-white"></div>
</div>
{{-- Body END --}}

</body>
</html>