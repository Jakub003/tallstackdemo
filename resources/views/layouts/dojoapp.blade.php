<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>TALL Stack Dojo</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/da34c1ccea.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/index.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.59.2/lib/codemirror.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .cursive {
            font-family: 'Nanum Pen Script', cursive;
        }
        [x-cloak] { display: none; }

        .CodeMirror-focused {   
            border-radius: .375rem;
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-opacity: 0.5;
            --tw-ring-color: rgba(199, 210, 254, var(--tw-ring-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }
        .CodeMirror {
            padding: 0.75rem;
            font-family: inherit;
            font-size: inherit;
            border-bottom-left-radius: .375rem;
            border-bottom-right-radius: .375rem;
            --tw-border-opacity: 1;
            border: 1px solid rgba(209, 213, 219, var(--tw-border-opacity));
        }
        .CodeMirror.CodeMirror-focused {
            --tw-border-opacity: 1;
            border-color: rgba(165, 180, 252, var(--tw-border-opacity));
        }

        .cm-s-default .cm-header,
        .cm-s-default .cm-variable-2 {
            color: rgb(31, 41, 55);
        }
    </style>
</head>
<body x-data="{darkMode: false}" x-bind:class="{ 'dark' : darkMode, '' : !darkMode}" class="font-sans flex flex-col h-screen justify-between" x-cloak>

{{-- Header --}}
<div class="fixed w-full bg-white flex h-16 border-b border-gray-200 dark:bg-gray-700 dark:text-white justify-center">
    <div class="p-4 flex w-full lg:w-8/12 justify-between">
        {{-- Logo --}}
        <a href="/" class="hidden sm:flex text-lg space-x-2 flex-shrink-0 items-center">
            <h2 class="font-extrabold text-gray-800 dark:text-white">TALL</h2>
            <h2 class="font-bold text-gray-700 dark:text-gray-300">Stack</h2>
            <h2 class="text-blue-500 font-semibold">Dojo</h2>
        </a>

        {{-- Buttons --}}
        <div class="flex space-x-3 text-sm items-center">
            <a href="/ideas"><button class="px-1 rounded bg-blue-500 text-white focus:outline-none flex-shrink-0">Submit Ideas</button></a>
            <a href="/backlog"><button class="px-1 rounded bg-yellow-500 text-white focus:outline-none flex-shrink-0">Current Issues</button></a>
            <button @click="darkMode = !darkMode" class="focus:outline-none flex-shrink-0 text-xl h-16 w-6 pb-2">
                <i class="bi bi-moon text-blue-500 " x-show="darkMode" ></i>
                <i class="bi bi-brightness-high-fill text-yellow-500  " x-bind:class="{ 'hidden' : darkMode }" ></i>
            </button>
        </div>

    </div>
</div>
{{-- Header END --}}

{{-- Body --}}
<div class="flex mt-16  flex-grow justify-center">
    <div class="hidden xl:flex w-2/12 bg-gray-50"></div>

    {{-- Content --}}
    <div class="w-full flex xl:w-8/12 dark:bg-gray-800 xl:justify-between block">

        {{-- Navigation --}}
        <nav class="hidden md:block fixed w-60 space-y-4 h-full p-4 border-r bg-gray-50 border-gray-200">
            <div class="flex justify-between items-center cursor-pointer">
                <div class="flex space-x-2 items-center">
                    <img src="https://i.imgur.com/uRxfWQn.png" class="h-8 w-8 rounded"/>
                    <h2>Getting Started</h2>
                </div>
                <i class="bi bi-chevron-right text-gray-500 text-sm pb-1"></i>
            </div>
            
            <div class="flex flex-col space-y-1">
                <div class="flex justify-between items-center  cursor-pointer">
                    <div class="flex space-x-2 items-center">
                        <img src="https://i.imgur.com/Wxuqcvw.png" class="h-8 w-8 rounded"/>
                        <h2>VS Code</h2>
                    </div>
                    <i class="bi bi-chevron-down text-gray-500 text-sm pb-1"></i>
                </div>
                <div class="pl-10 space-y-1  cursor-pointer">
                    <h4>Item 1</h4>
                    <h4>Item 1</h4>
                    <h4>Item 1</h4>
                    <h4>Item 1</h4>
                    <h4>Item 1</h4>
                </div>
            </div>
                
            <div class="flex justify-between items-center cursor-pointer">
                <div class="flex space-x-2 items-center">
                    <img src="https://miro.medium.com/max/632/1*5QD8DKhOjRe-gcYjozlLNQ.png" class="h-8 w-8 rounded"/>
                    <h2>Tailwind CSS</h2>
                </div>
                <i class="bi bi-chevron-right text-gray-500 text-sm pb-1"></i>
            </div>
            
            <div class="flex justify-between items-center cursor-pointer">
                <div class="flex space-x-2 items-center">
                    <img src="https://avatars.githubusercontent.com/u/59030169?s=280&v=4" class="h-8 w-8 rounded"/>
                    <h2>Alpine JS</h2>
                </div>
                <i class="bi bi-chevron-right text-gray-500 text-sm pb-1"></i>
            </div>
            
            <div class="flex justify-between items-center cursor-pointer">
                <div class="flex space-x-2 items-center">
                    <img src="https://cdn3.iconfinder.com/data/icons/logos-and-brands-adobe/512/194_Laravel-512.png" class="h-8 w-8 rounded"/>
                    <h2>Laravel</h2>
                </div>
                <i class="bi bi-chevron-right text-gray-500 text-sm pb-1"></i>
            </div>
            
            <div class="flex justify-between items-center cursor-pointer">
                <div class="flex space-x-2 items-center">
                    <img src="https://laravel-livewire.com/img/twitter.png" class="h-8 w-8 rounded"/>
                    <h2>Livewire</h2>
                </div>
                <i class="bi bi-chevron-right text-gray-500 text-sm pb-1"></i>
            </div>
        </nav>
        {{-- Navigation END --}}

        {{-- Content --}}
        @yield('content')
        {{-- Content END --}}

        {{-- Right Floating Navigation --}}
        @yield('sidebar')
        {{-- Right Floating Navigation END --}}
    </div>
    {{-- Content END --}}

    <div class="hidden xl:flex w-2/12 bg-white"></div>
</div>
{{-- Body END --}}

</body>
</html>