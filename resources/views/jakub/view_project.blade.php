@extends('jakub/app')

{{-- Header --}}
@section('header')
    {{-- Title of Project --}}
    <div class=" flex flex-row space-x-4 justify-between items-center"> 
        <div class="w-8 h-8 bg-blue-200 rounded-lg flex items-center justify-center">
            <div class="w-6 h-6 bg-blue-500 rounded-full">
                <i class="fas fa-arrows-alt-h text-white text-base px-1"></i>
            </div>
        </div>
        <h2 class="text-lg font-semibold space-y-2">Project Name</h2>
    </div>
@endsection

@section('toggle')
<div class="flex flex-row justify-between h-16 border-b border-gray-200 p-4">
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
    <a href="{{ route('project-settings') }}" class="h-8 w-8 rounded bg-white text-lg mr-6 focus:outline-none hover:bg-blue-500 text-blue-500 hover:text-white ">
        <i class="bi bi-gear-fill  text-base pl-2"></i>
    </a>
</div>
@endsection

{{-- Body --}}
@section('body')
    <div class="flex space-x-4">
        @include('jakub/components/kanban_column')
        @include('jakub/components/kanban_column')
        @include('jakub/components/kanban_column')
        @include('jakub/components/kanban_column')
    </div>
@endsection

{{-- Right Sidebar --}}
@section('right_sidebar')

@endsection