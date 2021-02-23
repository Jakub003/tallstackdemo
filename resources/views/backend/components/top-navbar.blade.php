
<div class="bg-white border-b">
    <nav class="max-w-7xl mx-auto px-8 py-4">
        <div class="flex justify-between">
            <div class="text-xl text-gray-700 font-bold">
                <h2>Tall Stack <span class="text-blue-500">Dojo</span></h2>
            </div>
            <div class="flex space-x-1">
                <a href="" class="bg-blue-500 px-3 py-1 rounded-md text-white text-sm">Submit Ideas</a>
                <a href="" class="bg-yellow-400 px-3 py-1 rounded-md text-gray-700 text-sm">Current Issue</a>
                <button @click="darkMode = !darkMode" class="pl-3">
                    <svg class="w-6 text-yellow-500" x-show="darkMode"   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg class="w-6 text-gray-700" x-bind:class="{ 'hidden' : darkMode }"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

            </div>
        </div>
    </nav>
</div>
