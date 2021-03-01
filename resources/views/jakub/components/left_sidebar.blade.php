{{-- Left Sidebar --}}
<div @click.away="leftSidebarOverlay = false"
    class="hidden xl:flex flex-col z-50 w-70 min-h-full border-r bg-white border-gray-200 flex-shrink-0 dark:bg-gray-500" x-bind:class="{'absolute xl:static inset-y-0 left-0 flex sm:mb-0' : leftSidebarOverlay, 'hidden' : !leftSidebarOverlay }" >

    <div class="h-16 py-4 flex flex-row justify-between items-center flex-shrink-0 border-b border-gray-200">
        <a href="{{ route('jakub') }}"><h3 class="font-semibold text-lg ml-6">Projects</h3></a>

        <!--
            Here we passing the route of create project page
            in web.php we define
            Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');

            Now in blade file we can access the route name which is ('project.create') with help of route() method.

         -->
        <a href="{{ route('project.create') }}" class="h-8 w-8 rounded bg-blueGray-100 text-lg text-gray-900 mr-6 focus:outline-none hover:text-white hover:bg-blue-500 ">
            <i class="bi bi-plus pl-1.5"></i>
        </a>
    </div>

    <div class="px-4 pt-4 flex flex-col space-y-6 overflow-auto no-scrollbar">

        <!-- Collapsed Project -->
        <div class="flex flex-row space-x-3 px-4">
            <div class="flex flex-row w-6 h-6 items-center pb-1 justify-center bg-yellow-100 rounded-lg">
                <i class="text-yellow-400 bi bi-emoji-laughing-fill"></i>
            </div>
            <a href="{{ route('view-project') }}" class="cursor-pointer"><h2 class="font-semibold hover:text-blue-500">Project Name<h2></a>
        </div>

        <!-- Open Project -->
        <div class="p-2 ml-2 rounded-lg bg-blueGray-100 ">
            <!-- Course Mockups -->
            <div class="flex flex-row  items-center justify-between">
                <div class="flex flex-row space-x-3 items-center">
                    <div class="flex flex-row w-6 h-6 items-center pb-1 justify-center bg-blueGray-100 rounded-lg">
                        <i class="fas fa-arrows-alt-h bg-blue-500 rounded-full text-white text-sm transform translate-y-0.5 "></i>
                    </div>
                    <h2 class="font-semibold">Project Example<h2>
                </div>
                <i class="text-sm text-gray-400 bi bi-chevron-down"></i>
            </div>

            <div clas="flex flex-col">

                <!-- Project Tags -->
                <div class="flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 text-white bg-blue-500">
                    <div class="flex flex-row text-sm ">All Pages</div>
                    <div class="h-4 w-4 rounded text-xs text-white "> 45 </div>
                </div>

                <div class="flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                    <div class="flex flex-row items-center space-x-1">
                        <i class="text-xs bi bi-hash mb-1"></i>
                        <div class="flex flex-row text-sm ">kanban</div>
                    </div>
                    <div class="h-4 w-4 rounded text-xs "> 25 </div>
                </div>

                <div class="flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                    <div class="flex flex-row items-center space-x-1">
                        <i class="text-xs bi bi-hash mb-1"></i>
                        <div class="flex flex-row text-sm  ">profile-settings</div>
                    </div>
                    <div class="h-4 w-4 rounded text-xs "> 15 </div>
                </div>

                <div class="flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                    <div class="flex flex-row items-center space-x-1">
                        <i class="text-xs bi bi-hash mb-1"></i>
                        <div class="flex flex-row text-sm  ">dashboard</div>
                    </div>
                    <div class="h-4 w-4 rounded text-xs "> 10 </div>
                </div>


            </div>

        </div>

        <!-- Collapsed Projects -->
        <div class="flex flex-row space-x-3 px-4">
            <div class="flex flex-row w-6 h-6 items-center pb-1 justify-center bg-red-100 rounded-lg">
                <i class="text-red-400 fas fa-basketball-ball text-sm transform translate-y-0.5 "></i>
            </div>
            <h2 class="font-semibold hover:text-blue-500">Social Media Graphics<h2>
        </div>

        <!-- Collapsed Projects -->
        <div class="flex flex-row space-x-3 px-4">
            <div class="flex flex-row w-6 h-6 items-center pb-1 justify-center bg-purple-100 rounded-lg">
                <i class="text-purple-400 fab fa-twitch text-sm transform translate-y-0.5"></i>
            </div>
            <h2 class="font-semibold hover:text-blue-500">Video Templates<h2>
        </div>

        <!-- Collapsed Projects -->
        <div class="flex flex-row space-x-3 px-4">
            <div class="flex flex-row w-6 h-6 items-center pb-1 justify-center bg-green-100 rounded-lg">
                <i class="text-green-400 fas fa-leaf text-sm transform translate-y-0.5"></i>
            </div>
            <h2 class="font-semibold hover:text-blue-500">Stream Layout<h2>
        </div>
    </div>

</div>
{{-- Left Sidebar END --}}
