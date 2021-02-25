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