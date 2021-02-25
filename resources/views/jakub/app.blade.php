<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Jakub Kanban</title>

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
<body x-data="{darkMode: false, leftSidebarOverlay: false, rightSidebarOverlay: false, rightSidebarToggle: true, sidebarTab: 1 }" x-bind:class="{ 'dark' : darkMode, '': !darkMode}" class="flex h-screen" x-cloak>

        {{-- Navigation --}}
        @include('jakub/components/navigation')

        {{-- Left Sidebar --}}
        @include('jakub/components/left_sidebar')
        

        {{-- Middle Body + Mobile Navigation Menu --}}
        <div class="w-full h-full justify-between flex flex-col bg-blueGray-100 dark:bg-gray-800">
            
            {{-- Header --}}
            <div class="flex flex-row justify-between h-16 border-b border-gray-200 p-4 xl:px-6">
                @yield('header')
            </div>
            {{-- Header END --}}
                
            {{-- Main Content --}}
            <div class="flex flex-row px-4 py-6 space-x-6 h-full overflow-auto">
                @yield('body')
            </div>
            {{-- Main END --}}

            
        </div>
        {{-- Middle Body + Mobile Navigaton END --}}

</body>
</html>
