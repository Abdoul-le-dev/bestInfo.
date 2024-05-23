<section class="flex flex-col items-center mt-10">
    <div class="flex items-center justify-between">
        <h1 class="font_title_first text-xl mt-10 text-[#4287F5]">Liste des articles dans la rubrique </h1>
    </div>
   @forelse ($posts as $post )

   <div class="mt-10">
    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-2xl">
        <div class="flex items-center justify-between"><span class="font-light text-gray-600 Placeholder">{{ $post->created_at}}</span><a href="#"
                class="px-2 py-1 Placeholder font-bold text-gray-100  rounded bg-[#4287F5]">{{ $post->category->name}}</a>
        </div>
        <div class="mt-2"><a href="{{ route('article',['id'=> $post->id])}}" class="text-xl font-normal text-black hover:underline font_title_first">{{ $post->title}}</a>
            <p class="mt-2 text-gray-600 Placeholder">{{ Str::limit($post->description, 220) }}</p>
        </div>
        <div class="flex items-center justify-between mt-4"><a href="{{ route('article',['id'=> $post->id])}}"
                class="text-blue-500 hover:underline font_title_first">Read more</a>
            <div><a href="#" class="flex items-center"><img
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                    <h1 class="font-bold text-gray-700 hover:underline font_title_first">{{ $post->user->name}}</h1>
                </a></div>
        </div>
    </div>
   </div>
   
       
   @empty
   <div class="min-h-[28vh]">
    <h1 class="mt-6 Placeholder">Aucun article publier</h1>
   </div>
       
   @endforelse
</section>