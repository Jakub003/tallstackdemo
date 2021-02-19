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
            <button class="focus:outline-none flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 text-white bg-blue-500">
                <div class="flex flex-row text-sm ">All Tags</div>
                <div class="h-4 w-4 rounded text-xs text-white "> 15 </div>
            </button>

            <button class="focus:outline-none flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
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

        {{-- Content --}}
            <div class="flex flex-col w-full p-4  bg-white ">
                {{-- Filter Buttons --}}
                <div class="flex flex-wrap mb-5 items-center">
                    <button class="flex flex-row m-2 focus:outline-none bg-red-300 hover:bg-red-500 rounded text-sm text-white p-1  items-center"> 
                        <i class="bi bi-bug transform -translate-y-0.5"></i>
                        <h2 class="px-1">Bugs</h2>
                    </button>
                    
                    <button class="flex flex-row m-2 focus:outline-none bg-blue-300 hover:bg-blue-500 rounded text-sm text-white p-1  items-center"> 
                        <i class="bi bi-brush transform -translate-y-0.5"></i>
                        <h2 class="px-1">Design</h2>
                    </button>

                    <button class="flex flex-row m-2 focus:outline-none bg-purple-300 hover:bg-purple-500 rounded text-sm text-white p-1  items-center"> 
                        <i class="bi bi-columns transform -translate-y-0.5"></i>
                        <h2 class="px-1">Layout</h2>
                    </button>

                    <button class="flex flex-row m-2 focus:outline-none bg-yellow-300 hover:bg-yellow-500 rounded text-sm text-white p-1  items-center"> 
                        <i class="bi bi-archive transform -translate-y-0.5"></i>
                        <h2 class="px-1">Data</h2>
                    </button>

                    <button class="flex flex-row m-2 focus:outline-none bg-green-300 hover:bg-green-500 rounded text-sm text-white p-1  items-center"> 
                        <i class="bi bi-arrow-repeat transform -translate-y-0.5"></i>
                        <h2 class="px-1">CRUD</h2>
                    </button>

                </div>
                

                <div class="flex lg:space-x-6 flex-wrap">
                    {{-- Backlog --}}
                    <div class="flex flex-col w-72 flex-shrink-0 space-y-4">
                        {{-- Title --}}
                        <div class="flex flex-row justify-between items-center py-3 px-2 border-b-2 border-red-400">
                            <div class="flex flex-row  text-base font-semibold space-x-3 items-center"> 
                                <h2 class="">Backlog</h2>
                                <h2 class="text-gray-400 text-xs">15</h2>
                            </div>
                            
                            <button class="h-6 w-6 rounded-md text-base bg-Gray-200 text-gray-800 bg-gray-100 hover:bg-blue-500 hover:text-white focus:outline-none">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>

                        {{-- Task Column --}}
                        <div class="flex flex-col space-y-3 pb-4 overflow-y-auto">
                            {{-- Task Card --}}
                            <div class="group flex flex-col  border border-gray-200 rounded-md shadow-sm hover:shadow-md m-2">

                                {{-- Task Tag --}}
                                <div class="flex p-2 cursor-pointer flex-wrap">
                                    <div class="flex flex-row m-2 bg-gray-100 rounded text-sm text-gray-800 p-1  items-center"> 
                                        <i class="bi bi-hash transform -translate-y-0.5"></i>
                                        <h2 class="px-1">kanban</h2>
                                    </div>
                                    <button class="flex flex-row m-2 focus:outline-none bg-red-500 rounded text-sm text-white p-1  items-center"> 
                                        <i class="bi bi-bug transform -translate-y-0.5"></i>
                                        <h2 class="px-1">Bugs</h2>
                                    </button>
                                </div>

                                {{-- Title --}}
                                <div class="flex flex-row space-x-2 px-4 items-center space-x-2"> 
                                    <a href="/kanbantask" class="text-sm transnform -translate-y-1 hover:text-blue-500">   
                                        Gltich 1 example
                                    </a>
                                </div>

                                <div class="border-b border-gray-200 py-2"></div>
                
                                <!-- Task Features -->
                                <div class="flex flex-row px-4 py-2 justify-between items-center"> 
                                    <div class="flex flex-row text-xs text-gray-400 justify-between w-full "> 
                                        <div class="flex flex-row space-x-1 px-2 py-1 rounded hover:bg-gray-100 hover:text-black  "> 
                                            <i class="bi bi-chat-square transform -translate-y-0.5 "></i>
                                            <h2 class="">18</h2>
                                        </div>
                                        <div class="flex flex-row space-x-1 px-2 py-1 rounded hover:bg-gray-100 hover:text-black "> 
                                            <i class="bi bi-paperclip transform -translate-y-0.5 "></i>
                                            <h2>7</h2>
                                        </div>
                                        <div class="flex flex-row space-x-1  px-2 py-1 rounded hover:bg-gray-100 hover:text-black "> 
                                            <i class="bi bi-check-square transform -translate-y-0.5"></i>
                                            <h2>3 / 14</h2>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                            {{-- Task Card END --}}         

                        </div>

                    </div>
                    {{-- Backlog END --}}

                    {{-- In Development --}}
                    <div class="flex flex-col w-72 flex-shrink-0 space-y-4">
                        {{-- Title --}}
                        <div class="flex flex-row justify-between items-center py-3 px-2 border-b-2 border-blue-400">
                            <div class="flex flex-row  text-base font-semibold space-x-3 items-center"> 
                                <h2 class="">In Development</h2>
                                <h2 class="text-gray-400 text-xs">15</h2>
                            </div>
                            
                            <button class="h-6 w-6 rounded-md text-base bg-Gray-200 text-gray-800 bg-gray-100 hover:bg-blue-500 hover:text-white focus:outline-none">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>

                        {{-- Task Column --}}
                        <div class="flex flex-col space-y-3 overflow-y-auto">

                            {{-- Task Card --}}
                            <div class="group flex flex-col  border border-gray-200 rounded-md shadow-sm hover:shadow-md m-2">

                                {{-- Task Tag --}}
                                <div class="flex p-2 cursor-pointer flex-wrap">
                                    <div class="flex flex-row m-2 bg-gray-100 rounded text-sm text-gray-800 p-1  items-center"> 
                                        <i class="bi bi-hash transform -translate-y-0.5"></i>
                                        <h2 class="px-1">kanban</h2>
                                    </div>
                                    <button class="flex flex-row m-2 focus:outline-none bg-purple-500 rounded text-sm text-white p-1  items-center"> 
                                        <i class="bi bi-columns transform -translate-y-0.5"></i>
                                        <h2 class="px-1">Layout</h2>
                                    </button>
                                </div>

                                {{-- Title --}}
                                <div class="flex flex-row space-x-2 px-4 items-center space-x-2"> 
                                    <a href="/kanbantask" class="text-sm transnform -translate-y-1 hover:text-blue-500">   
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, autem nesciunt. Odit commodi pariatur ad enim inv
                                    </a>
                                </div>

                                <div class="border-b border-gray-200 py-2"></div>
                
                                <!-- Task Features -->
                                <div class="flex flex-row px-4 py-2 justify-between items-center"> 
                                    <div class="flex flex-row text-xs text-gray-400 justify-between w-full "> 
                                        <div class="flex flex-row space-x-1 px-2 py-1 rounded hover:bg-gray-100 hover:text-black  "> 
                                            <i class="bi bi-chat-square transform -translate-y-0.5 "></i>
                                            <h2 class="">18</h2>
                                        </div>
                                        <div class="flex flex-row space-x-1 px-2 py-1 rounded hover:bg-gray-100 hover:text-black "> 
                                            <i class="bi bi-paperclip transform -translate-y-0.5 "></i>
                                            <h2>7</h2>
                                        </div>
                                        <div class="flex flex-row space-x-1  px-2 py-1 rounded hover:bg-gray-100 hover:text-black "> 
                                            <i class="bi bi-check-square transform -translate-y-0.5"></i>
                                            <h2>3 / 14</h2>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                            {{-- Task Card END --}} 
                                            

                        </div>

                    </div>
                    {{-- In Development END --}}

                    {{-- Complete --}}
                    <div class="flex flex-col w-72 flex-shrink-0 space-y-4">
                        {{-- Title --}}
                        <div class="flex flex-row justify-between items-center py-3 px-2 border-b-2 border-green-400">
                            <div class="flex flex-row  text-base font-semibold space-x-3 items-center"> 
                                <h2 class="">Complete</h2>
                                <h2 class="text-gray-400 text-xs">15</h2>
                            </div>
                            
                            <button class="h-6 w-6 rounded-md text-base bg-Gray-200 text-gray-800 bg-gray-100 hover:bg-blue-500 hover:text-white focus:outline-none">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>

                        {{-- Task Column --}}
                        <div class="flex flex-col space-y-3 overflow-y-auto">
                                            

                        </div>

                    </div>
                    {{-- Complete END --}}

                </div> 
                {{-- Tasks End  --}}
                        
            </div>
        </div>
        {{-- Content END --}}
    
        <div class="hidden xl:flex w-2/12 bg-white"></div>
</div>
{{-- Body END --}}
    
</body>
</html>
