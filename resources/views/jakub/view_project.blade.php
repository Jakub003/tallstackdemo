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

{{-- Body --}}
@section('body')
    Kanban Empty Section
@endsection

{{-- Right Sidebar --}}
@section('right_sidebar')

@endsection