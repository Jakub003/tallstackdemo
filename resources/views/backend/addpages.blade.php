@extends('backend/app')

@section('content')
<form action="#" class=" p-4 flex flex-col w-full">
    {{-- Add Title and Buttons --}}
    <div class="flex space-x-5">
        <input type="text" name="pageTitle" placeholder="Enter Title of Page" class="w-96">

        {{-- These are the navigation menu items items --}}
        <select id="navigation" name="navigation" class="w-40 p-2">
            <option value="Visual Code">Visual Code</option>
            <option value="Laravel">Laravel</option>
            <option value="Tailwind">Tailwind</option>
            <option value="Livewire">Livewire</option>
        </select>

        <button type="submit" class="bg-green-400 text-white text-lg p-2 font-semibold rounded-md focus:outline-none">
            SAVE CHANGES
        </button>
    </div>

    {{-- Add New Section --}}
    {{-- This is what is displayed in the right sidebar for the anchors --}}
    <div class="flex space-x-5 pt-10">
        <input type="text" name="sectionTitle" placeholder="Enter Title of Section" class="w-96">

        <button type="submit" class="bg-blue-400 text-white text-lg p-2 font-semibold rounded-md focus:outline-none">
            Add New Section
        </button>
    </div>
    
    {{-- Displays All Section --}}
    <div class="flex w-full bg-gray-50 border-gray-200 rounded mt-10">
        <div class="p-4 m-4 w-full bg-white border-gray-200 rounded space-y-3">
            <div class="flex justify-between">
                {{-- Can edit title --}}
                <h2 class="font-semibold text-lg"> Section 1 Title </h2>

                {{-- Add Elements to Section Text Editor or Codepen --}}
                <div class="flex space-x-4">
                    <button  class="bg-green-300 text-white text-sm h-6 px-2 rounded focus:outline-none">
                        Add Text Editor
                    </button>
                    <button  class="bg-purple-300 text-white text-sm h-6 px-2 rounded focus:outline-none">
                        Add Code Pen
                    </button>
                </div>
                
            </div>
            
            
            {{-- This will be rich text editor. Can drag and drop the codepen and text editor --}}
            <img src="https://i.gyazo.com/f540d12d89d59d48796378e3a861c587.png">

            {{-- This would be the codepen view--}}
            <div class=" flex flex-col p-4 border-gray-200 border rounded space-y-5">
                {{-- Preview of Code --}}
                <div class="flex flex-col space-y-2">
                    <h2 class="text-lg font-semibold">Code Preview</h2>
                    <button type="submit" class="bg-blue-400 text-white text-lg p-2 w-40 font-semibold rounded-md focus:outline-none">
                        Example Button
                    </button>
                </div>
                
                {{-- Code --}}
                <div class="flex flex-col space-y-2">
                    <h2 class="text-lg font-semibold">Enter Code</h2>
                    <div>
                        <img src="https://i.gyazo.com/2d176ed04372b0fe3d1045886c500fc3.png">

                    </div>
                </div>
            </div>

        </div>

        {{-- Can drag and drop the sections in this menu, and it would change the order of the main sections --}}
        <div class="flex flex-col m-4 p-4 bg-white border-gray-200 flex-shrink-0 space-y-4">
            <h2 class="text-gray-800 font-bold">ON THIS PAGE</h2>
            <a href="#section1" class="hover:text-blue-500">section 1</a>
            <a href="#section2" class="hover:text-blue-500">section 2</a>
            <a href="#section3" class="hover:text-blue-500">section 3</a>
            <a href="#section4" class="hover:text-blue-500">Section 4</a>
        </div>
        


    </div>


</form>

@endsection
