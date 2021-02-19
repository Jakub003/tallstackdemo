@extends('backend/app')

@section('content')
<div class="flex flex-col p-4 flex-grow bg-white space-y-5">
    <h2 class="text-xl font-semibold">Navigation Menu Settings</h2>
    {{-- Add Menu Items --}}
    <form action="#" method="POST" class="w-full max-w-lg space-y-4">
        @csrf
        {{-- Upload Logo --}}
        <div class="flex flex-col">
            <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">UPLOAD LOGO</label>
            <div class="div">
                Upload Logo
            </div>
        </div>      
        
        {{-- Add Title --}}
        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">ADD TITLE</label>
        <div class="w-full flex space-x-3 flex-shrink-0 ">
            <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="navTitle" type="text">
        </div>

        {{-- Submit Button --}}
        <button class="shadow bg-gray-900 hover:bg-blue-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Add Menu Item
        </button>
        
    </form>

    {{-- View Menu / Drag And Drop --}}
    <hr>

    <div class="">
        In this section I want to view the frontend navigation menu, and be able to drag and drop the order of the elements. 
    </div>


</div>

@endsection
