<x-backend-layout>
    <div class="pl-4 my-5">
        @if(session()->has('message'))
            <div class="bg-green-200 text-green-800 px-3 py-2 rounded my-4 ">
                <p>
                    {{ session('message') }}
                </p>
            </div>
        @endif

        <div class="w-full flex flex-col p-4 ">
            {{-- Task Header  --}}
            <div class="flex cursor-pointer flex-wrap items-center">
                <div class="flex flex-row m-2 bg-gray-100 rounded text-sm text-gray-800 p-1  items-center">
                    <i class="bi bi-hash transform -translate-y-0.5"></i>
                    <h2 class="px-1">{{ $project->name }}</h2>
                </div>
                <button
                    class="flex flex-row m-2 focus:outline-none bg-purple-500 rounded text-sm text-white p-1  items-center">
                    <i class="bi bi-columns transform -translate-y-0.5"></i>
                    <h2 class="px-1">{{ $project->tasks['0']['tag'] }}</h2>
                </button>
                <h2 class="m-2 p-1 font-semibold text-lg">{{ $project->tasks['0']['title'] }}</h2>
            </div>
            {{-- Task Header END --}}

            {{-- Message and Response --}}
            <div class="flex flex-col justify-between h-full overflow-hidden">

                {{-- Message --}}
                <div class="flex flex-col p-4 space-y-5 overflow-y-auto">
                    {{-- Regular Message --}}

                    @foreach($project->tasks[0]->messages as $message)
                        <div class="flex flex-row space-x-3">
                            <img
                                src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-4-470x470-4ef82ef45a9598d24c4c951ead4d626a.png"
                                class="rounded-full w-10 h-10">
                            <div class="flex flex-col space-y-1 bg-white border rounded-md px-4 py-3 shadow-sm">
                                <div class="flex flex-row items-center space-x-3">
                                    <h2 class="font-semibold text-base">{{ $message->user->name }}</h2>
                                    <p class="text-gray-400 text-xs">{{ $message->created_at->diffForHumans() }}</p>
                                </div>
                                <p class="text-sm">
                                    {{ $message->message }}
                                </p>
                            </div>
                        </div>
                    @endforeach


                </div>
                {{-- Message END --}}

                {{-- SEND MESSAGE --}}
                <form method="POST" action="{{ route('kanban.project.task.message.store', ['project' => $project->id, 'task' => $project->tasks[0]['id']]) }}">
                    @csrf
                <div class="flex flex-row items-center p-4">

                    <div class="flex items-center w-full rounded-lg shadow border-none bg-white">
                        @csrf
                        <div>
                            <div class="flex h-8 w-8 rounded-md bg-gray-100 m-2 justify-center font-medium text-xl text-gray-400">
                                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <div class="flex h-8 w-8 rounded-md bg-gray-100 m-2 justify-center font-medium text-xl text-gray-400">
                                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <textarea name="message" class="flex w-full border-none" placeholder="Enter your message"></textarea>
                        <button type="submit" class="flex px-5 py-6 rounded-md bg-blue-500 m-2 justify-center font-medium text-sm text-white">
                            Send
                        </button>

                    </div>
                </div>
                </form>
                {{-- Send MEssage END --}}
            </div>

        </div>

    </div>
</x-backend-layout>
