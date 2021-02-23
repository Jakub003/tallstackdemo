<x-backend-layout>
    <div class="pl-4 my-5">
        @if(session()->has('message'))
        <div class="bg-green-200 text-green-800 px-3 py-2 rounded my-4 ">
            <p>
                {{ session('message') }}
            </p>
        </div>
        @endif

        <div class="w-full shadow p-5 rounded-md">
            <h3 class="text-gray-700 text-lg capitalize">Add New Project</h3>

            <form method="POST" action="{{ route('kanban.store') }}">
                @csrf
                <div class="flex flex-col space-y-4 my-8">
                    <div>
                        <label class="inline-block mb-1">Project Title</label>
                        <input type="text" name="name" class="w-full border rounded-md leading-none">
                        @error('name')
                        <div class="text-red-600 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="inline-block mb-1">Order</label>
                        <input type="number" name="order" class="w-full border rounded-md leading-none">
                        @error('order')
                        <div class="text-red-600 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
{{--                    <div>
                        <label class="inline-block mb-1 mr-1">Status</label>
                        <label>
                            <input type="checkbox" name="is_active" class="w-4 h-4 border rounded">
                            <span class="text-xs">Mark the checkbox to make status inactive. Default status is Active</span>
                        </label>
                        @error('is_active')
                        <div class="text-red-600 text-xs">{{ $message }}</div>
                        @enderror
                    </div>--}}
                    <div class="pt-3">
                        <button type="submit" class="inline-block text-sm bg-green-500 rounded-md text-black px-5 py-1">Save</button>
                        <a href="{{ route('kanban') }}" class="inline-block text-sm bg-gray-300 rounded-md text-black px-5 py-1">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-backend-layout>
