@auth
    <form method="POST" action="/posts/{{$post->slug}}/comment" >
        @csrf
         <header class="flex items-center">
            <img class="rounded-full" src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40">
    <h2 class="ml-4">wanna participate?</h2>
         </header>
    
         <div class="mt-6">
            <textarea class="w-full text-sm focus:ring focus:outline-none" name="body"cols="30" rows="10" placeholder="think of somthing to say?" required></textarea>
            @error('error')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
         </div>
    
         <div class="flex justify-end mt-10 border-t border-gray-200 pt-6">
            <x-submit-button>Submit</x-submit-button>
         </div>
    </form>
    @else
<p>want to drop a comment? <a class="text-blue-500 hover:text-blue-600" href="/register">Register</a> or <a class="text-blue-500 hover:text-blue-600" href="/login">Login</a></p>

    @endauth