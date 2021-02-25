@extends('jakub/app')

{{-- Header --}}
@section('header')
    Add New Project
@endsection

{{-- Body --}}
@section('body')
<div class="flex flex-col space-y-6">

    {{-- Project Title --}}
    <div class="flex flex-col  space-y-4">
        <h2 class="font-semibold text-xl">Project Icon, Color and Title</h2>
        <button class="bg-blue-400 rounded py-1 text-gray-100 w-28 focus:outline-none hover:bg-blue-500 text-sm "> Save Settings </button>
        <form class="flex space-x-4">
            <div class="flex-col">
                <h2 class="font-semibold">Color</h2>
                <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                    <option value="text-blue-500 bg-blue-300">Blue</option>
                    <option value="text-red-500 bg-red-300">Red</option>
                </select>
            </div>

            <div class="flex-col">
                <h2 class="font-semibold">Icon</h2>
                <input placeholder="bi bi-icon" class="border-2 rounded px-2 py-1 focus:outline-none">
            </div>

            <div class="flex-col">
                <h2 class="font-semibold">Project Name</h2>
                <input placeholder="project name" class="border-2 rounded px-2 py-1 focus:outline-none">
            </div>
            
        </form>

        {{-- Preview --}}
        <div class="bg-white border-2 rounded border-gray-800 space-x-4">
            <div class="px-4 py-2 bg-gray-800 text-white w-full">
                <h2 class="text-lg font-semibold">Preview</h2>
            </div>
            {{-- Content --}}
            <div class="flex p-4 space-x-4">
                <div class="w-8 h-8 bg-blue-200 rounded-lg flex items-center justify-center">
                    <div class="w-6 h-6 bg-blue-500 rounded-full">
                        <i class="fas fa-arrows-alt-h text-white text-base px-1"></i>
                    </div>
                </div>
                <h2 class="text-lg font-semibold space-y-2">Project Name</h2>
            </div>
        </div>


        <hr>
    </div>

    {{-- Project Columns --}}
    <div class="flex flex-col  space-y-4">
        <h2 class="font-semibold text-xl">Kanban Columns</h2>
        <div class="flex space-x-4">
            <button class="bg-green-500 rounded py-1 text-gray-100 w-28 focus:outline-none hover:bg-blue-500 text-sm "> Default Columns </button>
            <button class="bg-red-400 rounded py-1 text-gray-100 w-28 focus:outline-none hover:bg-blue-500 text-sm "> Clear Columns </button>   
            <button class="bg-blue-400 rounded py-1 text-gray-100 w-28 focus:outline-none hover:bg-blue-500 text-sm "> Save Settings </button>
        </div>
        
        <form class="flex space-x-4">
            <div class="flex-col">
                <h2 class="font-semibold">Color</h2>
                <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                    <option value="text-blue-500 bg-blue-300">Blue</option>
                    <option value="text-red-500 bg-red-300">Red</option>
                </select>
            </div>

            <div class="flex-col">
                <h2 class="font-semibold">Column Name</h2>
                <input placeholder="ex... Backlog" class="border-2 rounded px-2 py-1 focus:outline-none">
            </div>

            <button class="bg-gray-800 rounded py-1 text-gray-100 w-32 focus:outline-none hover:bg-blue-500 text-sm mt-7 mb-1 "> Add Extra Column</button>
        </form>

        {{-- Added Columns --}}
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                <option value="text-blue-500 bg-blue-300">Red</option>
                <option value="text-red-500 bg-red-300">Red</option>
            </select>
            <input placeholder="Backlog" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                <option value="text-blue-500 bg-blue-300">Blue</option>
                <option value="text-red-500 bg-red-300">Red</option>
            </select>
            <input placeholder="In Progress" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                <option value="text-blue-500 bg-blue-300">Green</option>
                <option value="text-red-500 bg-red-300">Red</option>
            </select>
            <input placeholder="Complete" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        
        {{-- Preview --}}
        <div class="bg-white border-2 rounded border-gray-800 space-x-4">
            <div class="px-4 py-2 bg-gray-800 text-white w-full">
                <h2 class="text-lg font-semibold">Preview</h2>
            </div>
            {{-- Content --}}
            <div class="flex p-4 space-x-4">
                <div class="flex flex-row justify-between items-center w-72 py-3 px-2 border-b-2 border-red-400">
                    <div class="flex flex-row  text-base font-semibold space-x-3 items-center"> 
                        <h2 class="">Backlog</h2>
                        <h2 class="text-gray-400 text-xs">15</h2>
                    </div>
                    
                    <button class="h-6 w-6 rounded-md text-base bg-Gray-200 text-gray-800 bg-gray-100 hover:bg-blue-500 hover:text-white focus:outline-none">
                        <i class="bi bi-plus"></i>
                    </button>
                </div>

                <div class="flex flex-row justify-between items-center w-72 py-3 px-2 border-b-2 border-blue-400">
                    <div class="flex flex-row  text-base font-semibold space-x-3 items-center"> 
                        <h2 class="">In Progress</h2>
                        <h2 class="text-gray-400 text-xs">15</h2>
                    </div>
                    
                    <button class="h-6 w-6 rounded-md text-base bg-Gray-200 text-gray-800 bg-gray-100 hover:bg-blue-500 hover:text-white focus:outline-none">
                        <i class="bi bi-plus"></i>
                    </button>
                </div>

                <div class="flex flex-row justify-between items-center w-72 py-3 px-2 border-b-2 border-green-400">
                    <div class="flex flex-row  text-base font-semibold space-x-3 items-center"> 
                        <h2 class="">Complete</h2>
                        <h2 class="text-gray-400 text-xs">15</h2>
                    </div>
                    
                    <button class="h-6 w-6 rounded-md text-base bg-Gray-200 text-gray-800 bg-gray-100 hover:bg-blue-500 hover:text-white focus:outline-none">
                        <i class="bi bi-plus"></i>
                    </button>
                </div>

            </div>
        </div>

        
        

        <hr>
    </div>



    {{-- Project Tags --}}
    <div class="flex flex-col  space-y-4">
        <h2 class="font-semibold text-xl">Adding Tags</h2>
        <div class="flex space-x-4">
            <button class="bg-green-500 rounded py-1 text-gray-100 w-28 focus:outline-none hover:bg-blue-500 text-sm "> Default Tags </button>
            <button class="bg-red-400 rounded py-1 text-gray-100 w-28 focus:outline-none hover:bg-blue-500 text-sm "> Clear Tags </button>
            <button class="bg-blue-400 rounded py-1 text-gray-100 w-28 focus:outline-none hover:bg-blue-500 text-sm "> Save Settings </button>
        </div>
        <form class="flex space-x-4">
            <div class="flex-col">
                <h2 class="font-semibold">Color</h2>
                <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                    <option value="text-blue-500 bg-blue-300">Blue</option>
                    <option value="text-red-500 bg-red-300">Red</option>
                </select>
            </div>

            <div class="flex-col">
                <h2 class="font-semibold">Icon</h2>
                <input placeholder="ex... bi bi-icon" class="border-2 rounded px-2 py-1 focus:outline-none">
            </div>

            <div class="flex-col">
                <h2 class="font-semibold">Tag name</h2>
                <input placeholder="ex... layouts" class="border-2 rounded px-2 py-1 focus:outline-none">
            </div>

            <button class="bg-gray-800 rounded py-1 text-gray-100 w-32 focus:outline-none hover:bg-blue-500 text-sm mt-7 mb-1 "> Add Extra Tag</button>
            
        </form>
        {{-- Once Tags are Added --}}
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                <option value="text-blue-500 bg-blue-300">Blue</option>
                <option value="text-red-500 bg-red-300">Red</option>
            </select>
            <input placeholder="bi bi-icon" class="border-2 rounded px-2 py-1 focus:outline-none">
            <input placeholder="Bugs" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                <option value="text-blue-500 bg-blue-300">Blue</option>
                <option value="text-red-500 bg-red-300">Red</option>
            </select>
            <input placeholder="bi bi-icon" class="border-2 rounded px-2 py-1 focus:outline-none">
            <input placeholder="Design" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                <option value="text-blue-500 bg-blue-300">Blue</option>
                <option value="text-red-500 bg-red-300">Red</option>
            </select>
            <input placeholder="bi bi-icon" class="border-2 rounded px-2 py-1 focus:outline-none">
            <input placeholder="Layouts" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                <option value="text-blue-500 bg-blue-300">Blue</option>
                <option value="text-red-500 bg-red-300">Red</option>
            </select>
            <input placeholder="bi bi-icon" class="border-2 rounded px-2 py-1 focus:outline-none">
            <input placeholder="Data" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <select name="icon_color" id="icon_color" class="border-2 rounded px-2 py-1 focus:outline-none w-20">
                <option value="text-blue-500 bg-blue-300">Blue</option>
                <option value="text-red-500 bg-red-300">Red</option>
            </select>
            <input placeholder="bi bi-icon" class="border-2 rounded px-2 py-1 focus:outline-none">
            <input placeholder="CRUD" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>

        {{-- Preview --}}
        <div class="bg-white border-2 rounded border-gray-800 space-x-4">
            <div class="px-4 py-2 bg-gray-800 text-white w-full">
                <h2 class="text-lg font-semibold">Preview</h2>
            </div>
            {{-- Content --}}
            <div class=" p-4 flex flex-wrap items-center">
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
        </div>

        <hr>
    </div>


    {{-- Project Categories --}}
    <div class="flex flex-col  space-y-4">
        <h2 class="font-semibold text-xl">Adding Categories</h2>
        <div class="flex space-x-4">
            <button class="bg-blue-400 rounded py-1 text-gray-100 w-28 focus:outline-none hover:bg-blue-500 text-sm "> Save Settings </button>
        </div>
        <form class="flex space-x-4">
            <div class="flex-col">
                <h2 class="font-semibold">Category Name</h2>
                <input placeholder="dashboard-page" class="border-2 rounded px-2 py-1 focus:outline-none">
            </div>
            <button class="bg-gray-800 rounded py-1 text-gray-100 w-32 focus:outline-none hover:bg-blue-500 text-sm mt-7 mb-1 "> Add Extra Category</button>
        </form>
        {{-- Added Categories --}}
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <input placeholder="dashboard-project" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <input placeholder="kanban" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>
        <div class="flex space-x-2 px-4">
            <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
            <input placeholder="example-category" class="border-2 rounded px-2 py-1 focus:outline-none">
            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 mt-2 cursor-pointer"></i>
        </div>

        <hr>
    </div>

</div>
@endsection

{{-- Right Sidebar --}}
@section('right_sidebar')

@endsection