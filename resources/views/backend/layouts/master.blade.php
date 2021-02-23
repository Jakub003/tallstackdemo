<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>TALL Stack Dojo</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>
<body >

<div x-data="{darkMode: false, formBacklog: false, formDevelopment: false}" x-bind:class="{ 'dark' : darkMode, '' : !darkMode}" class="flex flex-col h-screen" x-cloak>

    <x-backend-top-navbar />

    <div class="bg-white">
        <div class="max-w-7xl px-8 mx-auto">
            <div class="flex">

                <x-backend-left-sidebar />

                <div class="w-full">
                    @if(request()->routeIs('kanban*'))
                        @if(!request()->is('kanban/*/*/messages'))
                        <div class="w-full p-5 bg-white">
                            <div class="flex space-x-2">
                                <form method="POST" action="{{ route('kanban.tasks.filterByTag', ['tag' => 'bugs']) }}">
                                    @csrf
                                    <button type="submit" class="flex items-center bg-red-500 text-white px-2 py-1.5 rounded-md text-sm leading-none">
                                        <svg class="w-3.5 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><style type="text/css">.st0{fill:none;}</style><g id="XMLID_1_"><path id="XMLID_2_" class="st0" d="M251.7 90.5c24.6 0 43-12.8 43-24.3S276.4 42 251.7 42s-43 12.8-43 24.3 18.4 24.2 43 24.2z" fill="none"/><path id="XMLID_10_" class="st0" d="M342.1 178.5c-23.7-31-54.7-48-87.4-48-32.6 0-63.7 17.1-87.4 48-.3.4-.6.8-.9 1.1 28.7 12.5 60.2 19.2 92.9 19.2 29.1 0 57.9-6.2 84.7-17.7-.5-.8-1.2-1.7-1.9-2.6z" fill="none"/><path id="XMLID_11_" class="st0" d="M146.3 214.5c-11.4 26-17.6 55.7-17.6 86.8 0 34.7 7.6 67.6 21.8 95.7.1.2.2.4.3.7 4.8 9.4 10.3 18.2 16.6 26.4 18.7 24.5 42 40.2 67.1 45.8-.4-1.6-.6-3.3-.6-5L235 238c-31.2-3-61.1-11-88.7-23.5z" fill="none"/><path id="XMLID_12_" class="st0" d="M274.9 238.4l-1.1 226.4c0 1.8-.3 3.6-.8 5.3 25.8-5.1 49.8-21.1 69-46.2 24.9-32.6 38.6-76.1 38.6-122.7 0-30.2-5.8-59.2-16.7-84.7-28.2 12.6-58.3 20.1-89 21.9z" fill="none"/><path id="XMLID_46_" d="M490 304.2c11.6 0 21-9.4 21-21s-9.4-21-21-21h-72.2c-3.4-23-9.6-44.4-18.4-64.3 3.4-2.2 6.8-4.5 10.2-6.9 42.9-29.8 76.9-70.9 98.4-118.5 4.5-10.1.1-21.9-10-26.5-10.1-4.5-21.9-.1-26.5 10-20.1 44.4-52.7 81.3-91.8 106.4-1.9-2.8-3.9-5.5-5.9-8.1-16.3-21.3-35.5-37.6-56.5-48.4 11.1-11.2 17.3-25.1 17.3-39.6 0-18.3-9.8-35.6-27-47.7C292.5 7.9 272.6 2 251.7 2s-40.8 5.9-56 16.6c-17.1 12-27 29.4-27 47.7 0 15.4 7 30.2 19.5 41.7-19.5 10.8-37.3 26.4-52.6 46.3-1.6 2-3.1 4.1-4.6 6.2-37.4-24.8-67.7-60.4-86-103.7-4.3-10.2-16-14.9-26.2-10.6-10.2 4.3-15 16-10.7 26.2 21.8 51.5 58.1 94 103 123.1-7.9 17.3-13.9 35.7-17.6 55.7H22c-11.6 0-21 9.4-21 21s9.4 21 21 21h66.9c-.1 2-.1 5.5-.1 8.3 0 33.1 6 65 17.2 93.8-25.9 11.8-68.7 37.8-92.5 88.2-4.7 10-.5 21.9 9.5 26.6 2.8 1.3 5.7 1.9 8.5 1.9 7.5 0 14.7-4.2 18.1-11.5 18.8-39.8 54.3-60.5 74.2-69.5 3.7 6 7.6 11.7 11.8 17.2 31.4 41.1 73.8 63.7 119.1 63.7 45.4 0 87.7-22.6 119.1-63.7 4.3-5.6 8.3-11.5 12-17.6 19.7 8.6 55.6 29.2 74.9 69.8 3.4 7.2 10.6 11.5 18.1 11.5 2.9 0 5.8-.6 8.5-1.9 10-4.7 14.2-16.6 9.5-26.6-24.1-50.8-67.5-76.7-93.3-88.3 10.9-28 16.8-58.9 17.1-90.9H490zM251.7 42c24.6 0 43 12.8 43 24.3s-18.4 24.3-43 24.3-43-12.8-43-24.3 18.4-24.3 43-24.3zm-17.2 427.7c-25-5.5-48.4-21.3-67.1-45.8-6.2-8.1-11.8-17-16.6-26.4-.1-.2-.2-.5-.3-.7-14.2-28-21.8-61-21.8-95.7 0-31.1 6.1-60.8 17.6-86.8 27.6 12.6 57.5 20.6 88.6 23.4l-1.1 226.9c0 1.9.3 3.5.7 5.1zm-68-290c.3-.4.6-.8.9-1.1 23.7-31 54.7-48 87.4-48 32.6 0 63.7 17.1 87.4 48 .7.9 1.4 1.8 2 2.7-26.9 11.4-55.6 17.7-84.7 17.7-32.8-.1-64.3-6.9-93-19.3zm175.6 244.2c-19.2 25.1-43.2 41.1-69 46.2.5-1.7.8-3.5.8-5.3l1.1-226.4c30.7-1.9 60.8-9.3 89.2-21.9 10.9 25.5 16.7 54.5 16.7 84.7-.2 46.6-13.9 90.2-38.8 122.7z"/></g><metadata><rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:dc="http://purl.org/dc/elements/1.1/"><rdf:Description about="https://iconscout.com/legal#licenses" dc:title="bug" dc:description="bug" dc:publisher="Iconscout" dc:date="2018-04-23" dc:format="image/svg+xml" dc:language="en"><dc:creator><rdf:Bag><rdf:li>Neelpari Artist</rdf:li></rdf:Bag></dc:creator></rdf:Description></rdf:RDF></metadata></svg>
                                        Bugs
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('kanban.tasks.filterByTag', ['tag' => 'design']) }}">
                                    @csrf
                                <button class="flex items-center bg-blue-500 text-white px-2 py-1.5 rounded-md text-sm leading-none">
                                    <svg class="w-3.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                    </svg>
                                    Design
                                </button>
                                </form>
                                <form method="POST" action="{{ route('kanban.tasks.filterByTag', ['tag' => 'layout']) }}">
                                    @csrf
                                <button class="flex items-center bg-purple-500 text-white px-2 py-1.5 rounded-md text-sm leading-none">
                                    <svg class="w-3.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Layout
                                </button>
                                </form>
                                <form method="POST" action="{{ route('kanban.tasks.filterByTag', ['tag' => 'data']) }}">
                                    @csrf
                                <button class="flex items-center bg-yellow-400 text-white px-2 py-1.5 rounded-md text-sm leading-none">
                                    <svg class="w-3.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    Data
                                </button>
                                </form>
                                <form method="POST" action="{{ route('kanban.tasks.filterByTag', ['tag' => 'crud']) }}">
                                    @csrf
                                <button class="flex items-center bg-green-500 text-white px-2 py-1.5 rounded-md text-sm leading-none">
                                    <svg class="w-3.5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    CRUD
                                </button>
                                </form>
                            </div>
                        </div>
                        @endif
                    @endif

                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
