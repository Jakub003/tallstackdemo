@extends('layouts/dojoapp')

@section('content')
<div class="flex flex-col p-4 flex-grow bg-white space-y-5">
    <h2 class="text-5xl font-extrabold">Submit Ideas</h2>
    <div class="flex flex-wrap space-x-0 lg:space-x-10 space-y-9 lg:space-y-0">
        <form class="w-full max-w-lg">

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="flex space-x-5 w-full px-3">
                    <div class="w-full">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">NAME</label>
                        <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text" placeholder="Erlich Bachman*">
                    </div>
                    <div class="w-full">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">DISCORD ID</label>
                        <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text" placeholder="erlich#5112">
                    </div>
                    
                </div>
            </div>
    
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    E-mail
                    </label>
                    <input class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="erlichbachman@aviato.com">
                </div>
            </div>
    
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">MESSAGE</label>
                    <textarea class=" no-resize appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" placeholder="Let us know what types of guides you would like to see, or if there is anything we can make better!"></textarea>
                    <p class="text-gray-600 text-xs italic">Classic Markdown Supported</p>
                </div>
            </div>
    
            <div class="md:flex md:items-center">  
                <button class="shadow bg-gray-900 hover:bg-blue-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                Send Message
                </button>
            </div>
        </form>
        {{-- Get In Touch --}}
        <div class="flex flex-col space-y-5">
            <h2 class="block tracking-wide text-gray-700 text-xs font-bold ">STAY IN TOUCH</h2>
            <div class="flex space-x-3 ">
                <img src="https://i.imgur.com/OpyZ0TN.png" class="h-6 w-6 rounded">
                <a href="https://discord.gg/kyqVwzgv4j" target="_blank" >Join Our Discord Community</a>
            </div>
            <div class="flex space-x-3 ">
                <img src="https://i.imgur.com/pFtj51o.png" class="h-6 w-6 rounded">
                <a href="https://twitter.com/tallstackdojo" target="_blank">Twitter</a>
            </div>
            <div class="flex space-x-3 ">
                <img src="https://i.imgur.com/Rr50knM.png" class="h-6 w-6 rounded">
                <a href="https://www.instagram.com/tallstackdojo/" target="_blank">Instagram</a>
            </div>
            
        </div>

    </div>
    
</div>


@endsection