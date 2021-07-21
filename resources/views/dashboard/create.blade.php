<x-app-layout>

    <div class="bg-white items-center max-w-xl p-2 shadow-lg space-y-4 ">

        @if (session('title'))
            <div x-data="{ show: true }" x-show="show" class="flex justify-between items-center bg-red-200 border-l-2 border-red-500 text-red-700 px-4 py-3" role="alert">
                <div>
                    <p class="font-bold">{{ session('title') }}</p>
                    <p>{{ session('content') }}</p>
                </div>
                <div>
                    <button type="button" @click="show = false" class="px-2 text-red-900">
                        <span class="text-2xl">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        <form method="POST" action="{{ url('/dashboard/post/create') }}" enctype="multipart/form-data">
            @csrf
            <span class="block mb-2">
                <label for="file" id="file">Choose a article to import</label>
                <input type="file" name="file" class="py-1 w-full">
            </span>
            <span class="flex mb-2 space-x-5">
                <button type="submit" class="bg-green-500 flex hover:bg-green-700 px-3 py-1 rounded text-white">Create</button>
                <a href="{{ route('dashboard') }}" class="bg-green-500 flex hover:bg-green-700 px-3 py-1 rounded text-white">Cancel</a>
            </span>
        </form>
    </div>

</x-app-layout>