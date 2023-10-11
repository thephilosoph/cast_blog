@props(['comment'])

<x-panel class="bg-gray-50 ">
<article class="flex  space-x-4" >
    <div class="flex-shrink-0">
        <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{$comment->user->id}}" alt="" width="60" height="60">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">
            {{$comment->user->userName}}
            </h3>
            <p class="text-xs">posted
                <time> {{$comment->created_at->diffForHumans() }}</time>
            </p>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
</x-panel>
