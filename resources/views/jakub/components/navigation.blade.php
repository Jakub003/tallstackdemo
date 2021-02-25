{{-- Navigation --}}
<div class="hidden sm:flex flex-col items-center space-y-4 justify-between w-20 bg-gray-900 flex-shrink-0 ">

    {{-- Logo and Menu --}}
    <div class="flex flex-col h-full items-center">

        {{-- Logo --}}
        <div class="h-16 w-12 py-6 flex flex-col items-center justify-center border-b border-gray-800">
            <button @click="darkMode = !darkMode" class="focus:outline-none">
                <i class="bi bi-pie-chart-fill text-gray-800 text-2xl" x-show="darkMode" ></i>
                <i class="bi bi-pie-chart-fill text-blue-500 text-2xl" x-bind:class="{ 'hidden': darkMode }" ></i>
            </button>
        </div>

        {{-- Menu --}}
        <nav class="mt-4 space-y-3 flex flex-col overflow-y-auto no-scrollbar">
            <!-- Dashboard -->
            <div class="flex h-12 w-20 flex-shrink-0 space-x-2 group ">
                <div class="h-12 w-2 rounded bg-gray-900 transform -translate-x-1 group-hover:bg-blue-500"></div>
                <a href="{{ route('jakub') }}">
                    <div class=" h-12 w-12 px-4 rounded-md bg-gray-800 flex justify-center items-center text-gray-200 text-2xl pb-2 group-hover:bg-blue-500 group-hover:text-gray-900">
                        <i class="bi bi-house"></i>
                    </div>
                </a>
            </div>

            <!-- Kanban -->
            <div class="flex h-12 w-20 flex-shrink-0 space-x-2 group ">
                <div class="h-12 w-2 rounded bg-gray-900 transform -translate-x-1 group-hover:bg-blue-500"></div>
                <a href="{{ route('jakub') }}">
                    <div class=" h-12 w-12 px-4 rounded-md bg-gray-800 flex justify-center items-center text-gray-200 text-2xl pb-2 group-hover:bg-blue-500 group-hover:text-gray-900">
                        <i class="bi bi-kanban"></i>
                    </div>
                </a>
            </div>

        </nav>
        {{-- Menu END --}}
    </div>
    {{-- Logo and Menu END --}}

    {{-- Nav Bottom  --}}
    <div class="my-1 flex flex-col items-center justify-center space-y-4">
        <div class="border-b-2 border-gray-800"></div>
        <div class="h-12 w-12 px-1.5 pt-2.5 bg-gray-900 rounded-full border-green-500 border-4 text-sm text-gray-200 font-bold">99%</div>
        <a href="#">
            <img src="https://i.imgur.com/nDBKQWm.png" class="rounded-full w-12 h-12">
            <div class="bg-green-500 rounded-full h-3 w-3 transform translate-x-8 -translate-y-3 border border-gray-800"></div>
        </a>
    </div>

</div>
{{-- Navigation END --}}