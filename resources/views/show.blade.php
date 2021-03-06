<x-app-layout>

    <div class="max-w-prose mx-auto">
        <article>
            <h1>{{ $post->title }}</h3>
            {{ Illuminate\Mail\Markdown::parse($post->content) }}
        </article>
        <div class=" border-t-2 my-6">
            @if (!$post->comments->isempty())
                @foreach ($post->comments as $comment)
                    <span class="font-bold">{{ $comment->author }}</span>
                    <span>{{ $comment->content }}</span>
                @endforeach
            @else
                <span class="font-extralight">No comments yet: be the first!</span>
            @endif
        </div>
    </div>

</x-app-layout>