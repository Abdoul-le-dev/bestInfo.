@extends('composants.connexion-header')

@section('page')
<div class="overflow-x-hidden bg-gray-100 shadow min-h-[90vh]">
   

    <div class="px-6 py-8">
        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
                @if (session('success'))
                <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-5" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                       
                        <p class="text-sm">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if (session('error'))
                <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-5" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-gred-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                       
                        <p class="text-sm">{{ session('error') }}</p>
                        </div>
                    </div>
                </div>
                @endif
                <div class="flex items-center justify-between">
                    <h1 class="font_title_first text-xl">Liste des articles</h1>
                </div>
               @forelse ($posts as $post )

               <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600 Placeholder">{{ $post->created_at}}</span><a href="#"
                            class="px-2 py-1 font-bold text-gray-100  rounded bg-[#4287F5]">{{ $post->category->name}}</a>
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
               <div>
                <h1 class="mt-6 Placeholder">Auccun article publier</h1>
               </div>
                   
               @endforelse

               <div class="mt-8">
                <div class="flex">
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                        previous
                    </a>
                
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        1
                    </a>
                
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        2
                    </a>
                
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        3
                    </a>
                
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        Next
                    </a>
                </div>
              </div>
               
               
                
                
            </div>
            <div class="hidden w-4/12 -mx-8 lg:block">
               
                <div class="px-8 mt-10">
                    <h1 class="mb-4 text-xl font-bold text-gray-600 font_title_first">Categories</h1>
                    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <ul>
                            @foreach ($categories as $categorie )

                            <li><a href="#" class="mx-1 font_title_first font-normal text-[#4287fc] hover:text-gray-600 hover:underline">-
                                {{$categorie->name}}
                            </a>
                        </li>
                                
                            @endforeach
                           
                            
                            
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
@endsection