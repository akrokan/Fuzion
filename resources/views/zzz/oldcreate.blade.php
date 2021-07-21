@extends('layouts.app')

@section('content')

<div class="bg-white items-center max-w-xl p-2 shadow-lg space-y-4 ">

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="text-red-600">{{ $error }}</div>        
        @endforeach
    @endif

    <form method="POST" action="{{ url('/dashboard/post/create') }}" enctype="multipart/form-data">
        @csrf
        <span class="block mb-2">
            <label for="title" id="title">Title</label>
            <input type="text" name="title" class="border px-2 py-1 shadow-inner text-gray-800 w-full" value="{{ $post->title ?? '' }}">
        </span>
        <span class="block mb-2">
            <label for="slug" id="slug">Slug</label>
            <input type="text" name="slug" class="border px-2 py-1 shadow-inner w-full">
        </span>
        <span class="block mb-2">
            <label for="file" id="file">Select file</label>
            <input type="file" name="file" class="py-1 w-full">
        </span>
        <span class="flex mb-2 space-x-5">
            <button type="submit" class="bg-green-500 flex hover:bg-green-700 px-3 py-1 rounded text-white">Create</button>
            <button class="bg-green-500 flex hover:bg-green-700 px-3 py-1 rounded text-white">Cancel</button>
        </span>
    </form>
</div>

@endsection