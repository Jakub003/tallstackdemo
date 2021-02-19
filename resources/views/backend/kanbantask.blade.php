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
    <style>
        
    </style>
</head>
<body x-data="{darkMode: false}" x-bind:class="{ 'dark' : darkMode, '' : !darkMode}" class="font-sans flex flex-col h-screen justify-between" x-cloak>

{{-- Header --}}
<div class="w-full bg-white flex h-16 border-b border-gray-200 dark:bg-gray-700 dark:text-white justify-center">
    <div class="p-4 flex w-full xl:w-8/12 justify-between">
        {{-- Logo --}}
        <a href="/" class="hidden sm:flex text-lg space-x-2 flex-shrink-0 items-center w-60">
            <h2 class="font-extrabold text-gray-800 dark:text-white">TALL</h2>
            <h2 class="font-bold text-gray-700 dark:text-gray-300">Stack</h2>
            <h2 class="text-blue-500 font-semibold">Dojo</h2>
        </a>

        <div class="flex w-full justify-between items-center pl-2">
            <div class="flex space-x-4">
                <a href="/dashboard" class="hover:text-blue-500 font-semibold">Dashboard View</a>
                <a href="/kanban" class="hover:text-blue-500 font-semibold">Kanban</a>
            </div>
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
</div>
{{-- Header END --}}

{{-- Body --}}
<div class="flex flex-grow justify-center overflow-hidden">
    <div class="hidden xl:flex w-2/12 bg-gray-50"></div>

    {{-- Content --}}
    <div class="w-full flex xl:w-8/12 dark:bg-gray-800 xl:justify-between">

        {{-- Navigation --}}
        <nav class="hidden md:block flex flex-col w-60 space-y-2  p-4 border-r bg-gray-50 border-gray-200 flex-shrink-0">

            <div class="flex w-full items-center justify-between">
                <div class="font-semibold">Projects</div>
                <button class="h-7 w-7 pb-1 focus:outline-none bg-white border rounded border-gray-200 hover:bg-blue-500 hover:text-white hover:border-blue-500">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
            <hr>
            <button class="focus:outline-none flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:text-white hover:bg-blue-500">
                <div class="flex flex-row text-sm ">All Tags</div>
                <div class="h-4 w-4 rounded text-xs text-white "> 15 </div>
            </button>

            <button class="focus:outline-none flex flex-row justify-between items-center w-full border  rounded  px-2 py-1 mt-1.5  bg-blue-500 text-white border-blue-500">
                <div class="flex flex-row items-center space-x-1">
                    <i class="text-xs bi bi-hash mb-1"></i>
                    <div class="flex flex-row text-sm ">kanban</div>
                </div>
                <div class="h-4 w-4 rounded text-xs "> 25 </div>
            </button>

            <button class="focus:outline-none flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                <div class="flex flex-row items-center space-x-1">
                    <i class="text-xs bi bi-hash mb-1"></i>
                    <div class="flex flex-row text-sm ">current issues</div>
                </div>
                <div class="h-4 w-4 rounded text-xs "> 15 </div>
            </button>

            <button class="focus:outline-none flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                <div class="flex flex-row items-center space-x-1">
                    <i class="text-xs bi bi-hash mb-1"></i>
                    <div class="flex flex-row text-sm ">submit ideas</div>
                </div>
                <div class="h-4 w-4 rounded text-xs "> 15 </div>
            </button>

            <button class="focus:outline-none flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                <div class="flex flex-row items-center space-x-1">
                    <i class="text-xs bi bi-hash mb-1"></i>
                    <div class="flex flex-row text-sm ">add pages</div>
                </div>
                <div class="h-4 w-4 rounded text-xs "> 15 </div>
            </button>

            <button class="focus:outline-none flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                <div class="flex flex-row items-center space-x-1">
                    <i class="text-xs bi bi-hash mb-1"></i>
                    <div class="flex flex-row text-sm ">drag and drop</div>
                </div>
                <div class="h-4 w-4 rounded text-xs "> 15 </div>
            </button>                   
        </nav>
        {{-- Navigation END --}}

        {{-- Main Body --}}
        <div class="w-full flex flex-col p-4 ">
            {{-- Task Header  --}}
            <div class="flex cursor-pointer flex-wrap items-center">
                <div class="flex flex-row m-2 bg-gray-100 rounded text-sm text-gray-800 p-1  items-center"> 
                    <i class="bi bi-hash transform -translate-y-0.5"></i>
                    <h2 class="px-1">kanban</h2>
                </div>
                <button class="flex flex-row m-2 focus:outline-none bg-purple-500 rounded text-sm text-white p-1  items-center"> 
                    <i class="bi bi-columns transform -translate-y-0.5"></i>
                    <h2 class="px-1">Layout</h2>
                </button>
                <h2 class="m-2 p-1 font-semibold text-lg"> Title of kanban task</h2>
            </div>
            {{-- Task Header END --}}

            {{-- Message and Response --}}
            <div class="flex flex-col justify-between h-full overflow-hidden">

                {{-- Message --}}
                <div class="flex flex-col p-4 space-y-5 overflow-y-auto"> 
                    {{-- Regular Message --}}
                    <div class="flex flex-row space-x-3"> 
                        <img src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-4-470x470-4ef82ef45a9598d24c4c951ead4d626a.png"
                            class="rounded-full w-10 h-10">
                        <div class="flex flex-col space-y-1 bg-white border rounded-md px-4 py-3 shadow-sm"> 
                            <div class= "flex flex-row items-center space-x-3"> 
                                <h2 class="font-semibold text-base">Andrew</h2>
                                <p class="text-gray-400 text-xs">Monday, 9:37 PM</p>
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum ratione doloremque. Commodi, eaque illo recusandae aperiam nostrum hic ipsam totam, consectetur accusamus beatae necessitatibus minima dicta fugiat sint eos!</p>
                        </div>
                    </div>
                
                
                    {{-- Message With Responses --}}
                    <div class="flex flex-row space-x-3"> 
                        <img src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-4-470x470-4ef82ef45a9598d24c4c951ead4d626a.png"
                            class="rounded-full w-10 h-10">
                        <div class="flex flex-col space-y-1 bg-white border rounded-md  py-3 shadow-sm"> 
                            <div class= " px-4 flex flex-row items-center space-x-3"> 
                                <h2 class="font-semibold text-base">Andrew</h2>
                                <p class="text-gray-400 text-xs">Monday, 9:37 PM</p>
                            </div>
                            <p class="px-4 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum ratione doloremque. Commodi, eaque illo recusandae aperiam nostrum hic ipsam totam, consectetur accusamus beatae necessitatibus minima dicta fugiat sint eos!</p>
                
                        
                            {{-- USER RESPONSES --}}
                            <div class="border-b gray-200 min-w-full py-1"> </div>
                
                            <div class="flex flex-row text-gray-400 text-sm px-4 space-x-2 pb-1"> 
                                <i class="bi bi-chevron-down -transform translate-y-0.5 text-xs"></i>
                                <span>Collapse All</span>
                            </div>
                
                            {{-- User Response --}}
                            <div class="p-2 flex flex-row space-x-3"> 
                                <img src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-4-470x470-4ef82ef45a9598d24c4c951ead4d626a.png"
                                    class="rounded-full w-10 h-10">
                                <div class="flex flex-col space-y-1 px-1"> 
                                    <div class= "flex flex-row items-center space-x-3"> 
                                        <h2 class="font-semibold text-base">Andrew</h2>
                                        <p class="text-gray-400 text-xs">Monday, 9:37 PM</p>
                                    </div>
                                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum ratione doloremque. Commodi, eaque illo recusandae aperiam nostrum hic ipsam totam, consectetur accusamus beatae necessitatibus minima dicta fugiat sint eos!</p>
                                </div>
                            </div>
                
                            {{-- User Response --}}
                            <div class="p-2 flex flex-row space-x-3"> 
                                <img src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-4-470x470-4ef82ef45a9598d24c4c951ead4d626a.png"
                                    class="rounded-full w-10 h-10">
                                <div class="flex flex-col space-y-1 px-1"> 
                                    <div class= "flex flex-row items-center space-x-3"> 
                                        <h2 class="font-semibold text-base">Andrew</h2>
                                        <p class="text-gray-400 text-xs">Monday, 9:37 PM</p>
                                    </div>
                                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum ratione doloremque. Commodi, eaque illo recusandae aperiam nostrum hic ipsam totam, consectetur accusamus beatae necessitatibus minima dicta fugiat sint eos!</p>
                                </div>
                            </div>
                
                
                
                
                        </div>
                    </div>
                
                </div>
                {{-- Message END --}}

                {{-- SEND MESSAGE --}}
                <div  class="flex flex-row items-center p-4 " >
                    <div class="flex items-center w-full rounded-lg shadow border-none bg-white">
                        <div class="flex h-8 w-8 rounded-md bg-gray-100 m-2 justify-center font-medium text-xl text-gray-400">
                            <i class="bi bi-plus"></i>
                        </div>
                        <textarea class="flex w-full border-none"
                            placeholder="Enter your message">
                        </textarea>
                        <div class="flex h-8 w-8 rounded-md bg-gray-100 m-2 justify-center font-medium text-xl text-gray-400">
                            <i class="bi bi-emoji-smile"></i>
                        </div>
                    </div>
                </div>
                {{-- Send MEssage END --}}
            </div>

        </div>

    </div>
    {{-- Content END --}}

    <div class="hidden xl:flex w-2/12 bg-white"></div>
</div>
{{-- Body END --}}
    
</body>
</html>
