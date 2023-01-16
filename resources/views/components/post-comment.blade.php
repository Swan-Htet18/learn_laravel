@props(['comment'])
<article class="flex gap-2 bg-gray-50 px-4 py-2 rounded-xl border border-gray-200 max-w-4xl">

    <div class="flex-shrink-0">
        <img class="rounded-xl border " src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="">
    </div>
    <div>
        <header>
            <h3 class="font-bold mb-4">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>

</article>