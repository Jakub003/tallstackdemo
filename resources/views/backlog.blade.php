@extends('layouts/dojoapp')

@section('content')
<div class="flex flex-col w-full p-4  bg-white ">
    {{-- Filter Buttons --}}
    <div class="flex cursor-pointer flex-wrap mb-5">
        <div class="flex flex-row m-2 bg-blue-500 hover:bg-blue-400 rounded space-x-1 text-sm text-white p-1  items-center"> 
            <i class="bi bi-hash transform -translate-y-0.5"></i>
            <h2 class="px-1"> Tailwind CSS </h2>
        </div>

        <div class="flex flex-row bg-purple-500 hover:bg-purple-400 rounded space-x-1 text-sm text-white p-1 m-2 items-center"> 
            <i class="bi bi-hash transform -translate-y-0.5"></i>
            <h2 class="px-1"> Alpine JS </h2>
        </div>

        <div class="flex flex-row bg-red-500 hover:bg-red-400 rounded space-x-1 text-sm text-white p-1 m-2 items-center"> 
            <i class="bi bi-hash transform -translate-y-0.5"></i>
            <h2 class="px-1"> Laravel </h2>
        </div>

        <div class="flex flex-row bg-green-500 hover:bg-green-400 rounded space-x-1 text-sm text-white p-1 m-2 items-center"> 
            <i class="bi bi-hash transform -translate-y-0.5"></i>
            <h2 class="px-1"> Livewire </h2>
        </div>

        <div class="flex flex-row bg-yellow-500 hover:bg-yellow-400 rounded space-x-1 text-sm text-white p-1 m-2 items-center"> 
            <i class="bi bi-hash transform -translate-y-0.5"></i>
            <h2 class="px-1"> Misc </h2>
        </div>

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
                    <div class="flex px-4 pt-4 cursor-pointer">
                        <div class="flex flex-row bg-blue-500 hover:bg-blue-400 rounded space-x-1 text-sm text-white p-1  items-center"> 
                            <i class="bi bi-hash transform -translate-y-0.5"></i>
                            <h2 class="px-1"> Tailwind CSS </h2>
                        </div>
                    </div>

                    {{-- Title --}}
                    <div class="flex flex-row space-x-2 p-4 items-center space-x-2"> 
                        <i class="bi bi-diamond-fill text-xs text-red-400 transform -translate-y-0.5"></i>
                        <a href="#">   
                            <h2 class="text-sm transnform -translate-y-1 hover:text-blue-500 ">Responsive Mobile Layout</h2> 
                        </a>
                    </div>

                    
                </div>
                {{-- Task Card END --}}

                {{-- Task Card --}}
                <div class="group flex flex-col  border border-gray-200 rounded-md shadow-sm hover:shadow-md m-2">

                    {{-- Task Tag --}}
                    <div class="flex px-4 pt-4 cursor-pointer">
                        <div class="flex flex-row bg-purple-500 hover:bg-purple-400 rounded space-x-1 text-sm text-white p-1  items-center"> 
                            <i class="bi bi-hash transform -translate-y-0.5"></i>
                            <h2 class="px-1"> Alpine JS </h2>
                        </div>
                    </div>

                    {{-- Title --}}
                    <div class="flex flex-row space-x-2 p-4 items-center space-x-2"> 
                        <i class="bi bi-diamond-fill text-xs text-yellow-400 transform -translate-y-0.5"></i>
                        <a href="#">   
                            <h2 class="text-sm transnform -translate-y-1 hover:text-blue-500 ">Drag and drop functionality</h2> 
                        </a>
                    </div>

                    
                </div>
                {{-- Task Card END --}}

                {{-- Task Card --}}
                <div class="group flex flex-col  border border-gray-200 rounded-md shadow-sm hover:shadow-md m-2">

                    {{-- Task Tag --}}
                    <div class="flex px-4 pt-4 cursor-pointer">
                        <div class="flex flex-row bg-purple-500 hover:bg-purple-400 rounded space-x-1 text-sm text-white p-1  items-center"> 
                            <i class="bi bi-hash transform -translate-y-0.5"></i>
                            <h2 class="px-1"> Alpine JS </h2>
                        </div>
                    </div>

                    {{-- Title --}}
                    <div class="flex flex-row space-x-2 p-4 items-center space-x-2"> 
                        <i class="bi bi-diamond-fill text-xs text-green-400 transform -translate-y-0.5"></i>
                        <a href="#">   
                            <h2 class="text-sm transnform -translate-y-1 hover:text-blue-500 ">Accordian Menu</h2> 
                        </a>
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
                    <div class="flex px-4 pt-4 cursor-pointer">
                        <div class="flex flex-row bg-red-500 hover:bg-red-400 rounded space-x-1 text-sm text-white p-1  items-center"> 
                            <i class="bi bi-hash transform -translate-y-0.5"></i>
                            <h2 class="px-1"> Laravel </h2>
                        </div>
                    </div>

                    {{-- Title --}}
                    <div class="flex flex-row space-x-2 p-4 items-center space-x-2"> 
                        <a href="#">   
                            <h2 class="text-sm transnform -translate-y-1 hover:text-blue-500 ">generic CRUD guide</h2> 
                        </a>
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
                                
            {{-- Task Card --}}
                <div class="group flex flex-col  border border-gray-200 rounded-md shadow-sm hover:shadow-md m-2">

                    {{-- Task Tag --}}
                    <div class="flex p-2 cursor-pointer flex-wrap">
                        <div class="flex flex-row m-2 bg-blue-500 hover:bg-blue-400 rounded space-x-1 text-sm text-white p-1  items-center"> 
                            <i class="bi bi-hash transform -translate-y-0.5"></i>
                            <h2 class="px-1"> Tailwind CSS </h2>
                        </div>
                        <div class="flex flex-row bg-purple-500 hover:bg-purple-400 rounded space-x-1 text-sm text-white p-1 m-2 items-center"> 
                            <i class="bi bi-hash transform -translate-y-0.5"></i>
                            <h2 class="px-1"> Alpine JS </h2>
                        </div>
                    </div>

                    {{-- Title --}}
                    <div class="flex flex-row space-x-2 p-4 items-center space-x-2"> 
                    
                        <a href="#">   
                            <h2 class="text-sm transnform -translate-y-1 hover:text-blue-500 ">Dark Mode</h2> 
                        </a>
                    </div>

                    
                </div>
                {{-- Task Card END --}}

            </div>

        </div>
        {{-- Complete END --}}
    </div>    
    

    


</div>
@endsection