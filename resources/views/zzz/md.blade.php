@extends('layouts.app')

@section('content')

<div class="max-w-prose mx-auto">
<article>
    <h1>{{ $post->title }}</h3>
    {{ Illuminate\Mail\Markdown::parse($post->content) ?? "No content here" }}
</article>
</div>

@endsection