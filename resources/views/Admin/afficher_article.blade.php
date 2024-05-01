@extends('composants.connexion-header')

@section('page')

    
    

    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        
        <div class="flex justify-center items-center border-b-2 border-[#4287f5] ">
            <h1 class="font_title_first font-normal text-xl">Article n°{{$post->id}}</h1>
        </div>
        <div class="mt-4">
            <h2 class="font-normal text-xl text-vlack leading-tight font_title_first">
                {{ $post->title }}
            </h2>
        </div>   
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <img src="{{ asset('storage/' . $post->fichier) }}" alt="">
            
        </div>
        <div class="mt-2">
            <p class="mt-2 text-gray-600 Placeholder">{{ $post->description }}</p>
        </div>
        <div class="mt-2 flex :flex-row justify-between items-center">
            <a href="{{ route('update',['id',$post->id])}}" class="roundedbg-[#4287f5] border-[#4287f5] p-2 text-white font_title_first text-xs mb-2">Modifier l'article</a>
            <a href="{{route('delete')}}" class="rounded bg-red-500 border-red-500  p-2 text-white font_title_first text-xs mb-2">Supprimer l'article</a>
        </div>
       
    </div>

@endsection