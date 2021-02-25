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
        @include('jakub/components/kanban_task')

            
        </div>
        {{-- Task Card END --}}         

    </div>

</div>
{{-- Backlog END --}}