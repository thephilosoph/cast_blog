@props(['heading'])
    <section class="py-8 max-w-4xl mx-auto">


        <h1 class="text-lg font-bold mb-4">{{$heading}}</h1>

    <div class="flex">
        <aside class="w-48">
            <ul>
                <li>
                    <a href="admin/posts/create">New Post</a>
                </li>
            </ul>
        </aside>

    </div>
        <main>

            <x-panel>
                {{$slot}}
            </x-panel>
        </main>
    </section>
