<x-app-layout>

    <div class="max-w-prose mx-auto">
    @if ($posts ?? '')
        @foreach ($posts ?? '' as $post)
        <article class="py-2">
            <h1><a href="{{ url('blog/' .$post->slug) }}">{{ $post->title }}</a></h1>
            {{ Illuminate\Mail\Markdown::parse(Str::limit($post->content, 300, $end='<a href="#">...</a>')) }}
        </article>
        @endforeach
    @endif
    </div>

</x-app-layout>