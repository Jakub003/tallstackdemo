<div class="w-64 flex-shrink-0 border-r">
    <nav class="pr-5 pt-4">
        <div class="flex w-full items-center justify-between border-b pb-3 mb-3">
            <div class="font-semibold">Projects</div>
            <a href="{{ route('kanban.create') }}" class="flex items-center justify-center h-5 w-5 focus:outline-none bg-white border rounded border-gray-200 hover:bg-blue-500 hover:text-white hover:border-blue-500">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </a>
        </div>

        @if(isset($projects))
            @if(!$projects->isEmpty())
                @foreach($projects as $project)
                <a href="{{ route('kanban.tasks', ['project' => $project->id]) }}" class="focus:outline-none flex flex-row justify-between items-center w-full border border-white rounded-md px-2 py-1 mt-1.5 {{ (request()->is('kanban/'.$project->id.'/tasks')) ? 'bg-gray-100 text-gray-700' : 'bg-white text-gray-500' }} hover:bg-blue-500 hover:text-white hover:border-blue-500">
                    <div class="flex flex-row items-center space-x-1">
                        <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                        </svg>
                        <div class="flex flex-row text-sm ">{{ $project->name }}</div>
                    </div>
                    <div class="h-4 w-4 rounded text-xs "> 25 </div>
                </a>
                @endforeach
            @else
                Please add a project
            @endif
        @endif

    </nav>
</div>
