@extends('composants.model')

@section('page')

    
    

    <section class="min-h-[80vh]">

        <div class="max-w-4xl px-10   py-6 mx-auto bg-white rounded-lg shadow-md">
        
            <div class="flex justify-center items-center border-b-2 border-[#4287f5] ">
                <h1 class="font_title_first font-normal text-xl">Article n°{{$post->id}}</h1>
            </div>
            <div class="mt-4">
                <h2 class="font-normal text-xl text-vlack leading-tight font_title_first">
                    {{ $post->title }}
                </h2>
            </div>   
            <div class=" flex flex-row justify-center items-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @if ($post->fichier_image)
    
                <img src="{{ asset('storage/' . $post->fichier_image) }}" alt="image">
                    
                @endif
    
                @if ($post->fichier_link)
    
                <iframe class="w-full h-80 lg:min-h-[400px]"  src="{{$post->fichier_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    
                    
                @endif
    
                @if ($post->fichier_audio)
    
                <audio controls >
                    <source src="{{ asset('storage/' . $post->fichier_audio) }}">
                </audio>
                    
                @endif
               
                
            </div>
            <div class="mt-2">
                <p class="mt-2 text-gray-600 Placeholder">{{ $post->description }}</p>
            </div>
            <div class="mt-2 flex :flex-row justify-between items-center">
                <a href="/" class="rounded bg-[#4287f5] border-[#4287f5] p-2 text-white font_title_first text-xs mb-2">Retour à l'acceuil</a>
                
            </div>
           
        </div>

    </section>

@endsection