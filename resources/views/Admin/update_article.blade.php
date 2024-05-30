@extends('composants.connexion-header')

@section('page')

<div class=" flex flex-col  items-center min-h-[100vh] lg:min-h-[87vh] shadow bg-[#DCDCDC]">

    <div class="mt-10">
       <h3 class="font_title_first text-xl">Mise à jour de l'article n°{{$article->id}}</h3>
    </div>
    @if ($errors)

    @foreach ( $errors->all() as $error  )
    <div class="flex flex-col justify-start">
        <li class="Placeholder text-red-400">{{ $error}}</li>
    </div>
        
    @endforeach
        
    @endif

    <section>
        <div class="flex flex-row justify-center items-center mb-2 Placeholder mt-8 w-full">
            <div class="flex flex-row justify-end ">
                <label for="format" class="mx-2 font_title_first ">Format de base de l'article</label>
            </div>
            <select name="format" id="formatSelect"  class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]"  >
    
                <option value="{{ $article->type_article}}" class="mx-8  Placeholder">{{ $article->type_article}}</option>
               
            </select>
        </div>
        
    
        <div class="flex flex-row justify-center items-center  border-b-2 border-black w-70 mt-4">
    
        </div>
    
       
    </section>

    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="Image_costum hidden max-w-[600px] p-4" >
        @csrf

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="">Titre:</a> {{$article->title}}</p>
        </div>
        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre de l'article"  rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"  ></textarea>
        </div>
        <div class="flex flex-col Placeholder">
            <p><a href="">Descrption:</a> {{Str::limit($article->description,200)}}</p>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" placeholder="contenu de l'article" cols="30" rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"   ></textarea>
        </div>

        
     
        <div class="flex flex-col Placeholder items-center">
            <p>
                <a >Article lié n°1:</a> 
               {{-- @if ($article_similaire->post_similaire_1 != null)

                {{$article_similaire->post_similaire_1}}

                @else
                Auccun
                    
                @endif
           --}}
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-col Placeholder items-center">
            <p>
                <a >Article lié n°2:</a> 
                {{--@if ($article_similaire->post_similaire_2 != null)

                {{$article_similaire->post_similaire_2}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-col Placeholder items-center">
            <p>
                <a >Article lié n°3:</a> 
                {{--@if ($article_similaire->post_similaire_3 != null)

                {{$article_similaire->post_similaire_3}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       

       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] Placeholder rounded-md focus:outline-none  focus:border-[#4287f5]"  >

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>

        
        <div class="flex flex-row justify-between items-center mb-2"  >
            <label for="file" class="mx-2 font_title_first lg:w-1/2"  >Fichier image</label>
            
            <input name="file" type="file" class="Upload border Placeholder">
        </div>
        <div class="flex flex-row justify-between items-center mb-2"  >
            <label  class="mx-2 font_title_first lg:w-1/2 text-[#4287f5] ex"  ></label>
            <label  class="mx-2 font_title_first lg:w-1/2 size"  ></label>
            
           
        </div>
        
        <div class="flex flex-row justify-between items-center mb-2"  >
            
            <div class="pr lg:w-1/2 hidden flex flex-row flex-wrap justify-between">
                <label for="file" class="mx-2 font_title_first  label" ></label>
                <label  class="mx-2 font_title_first  size" ></label>
            </div>
            <progress min="0" max="100" class="pl hidden" value="0">

            </progress>
           
           
           
        </div>

        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >
    
                <option value="Image" class="mx-8 Placeholder">Image</option>
               
            </select>
        </div>
        <div class="w-full flex flex-row justify-center mt-4">
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="Video_costum hidden max-w-[600px] p-4">
        @csrf

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="">Titre:</a> {{$article->title}}</p>
        </div>

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" placeholder="Titre de l'article" cols="30" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2"  ></textarea>
        </div>
        <div class="flex flex-col Placeholder">
            <p><a href="">Descrption:</a> {{Str::limit($article->description,200)}}</p>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" placeholder="contenu de l'article" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2"   ></textarea>
        </div>

        
     
        <div class="flex flex-col Placeholder items-center">
            <p>
               {{-- <a >Article lié n°1:</a> 
                @if ($article_similaire->post_similaire_1 != null)

                {{$article_similaire->post_similaire_1}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-col Placeholder items-center">
            <p>
                {{--<a >Article lié n°2:</a> 
                @if ($article_similaire->post_similaire_2 != null)

                {{$article_similaire->post_similaire_2}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-col Placeholder items-center">
            <p>
                {{--<a >Article lié n°3:</a> 
                @if ($article_similaire->post_similaire_3 != null)

                {{$article_similaire->post_similaire_3}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       

       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
        <div class="flex flex-row justify-between items-center mb-2" >

             <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Lien fichier</label>
          
            
            <input name="video_link" type="text"  placeholder="Lien de la vidéo" class="Placeholder p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]"  >
        </div>
        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >
    
                <option value="Video" class="mx-8 Placeholder">Video</option>
               
            </select>
        </div>
        <div class="w-full flex flex-row justify-center mt-4">
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

    <form action="{{route('create')}}" method="POST" enctype="multipart/form-data" class="Poadcast_costum hidden max-w-[600px] p-4">
        @csrf

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="">Titre:</a> {{$article->title}}</p>
        </div>

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" placeholder="Titre du poadcast" cols="30" rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"  ></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id=""  placeholder="Contenu du poadcast"  cols="30" rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]"   ></textarea>
        </div>

        
    
        
        <div class="flex flex-col Placeholder items-center">
            <p>
               {{-- <a >Article lié n°1:</a> 
                @if ($article_similaire->post_similaire_1 != null)

                {{$article_similaire->post_similaire_1}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-col Placeholder items-center">
            <p>
                {{--<a >Article lié n°2:</a> 
                @if ($article_similaire->post_similaire_2 != null)

                {{$article_similaire->post_similaire_2}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-col Placeholder items-center">
            <p>
               {{-- <a >Article lié n°3:</a> 
                @if ($article_similaire->post_similaire_3 != null)

                {{$article_similaire->post_similaire_3}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       

        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2"  >
            <label for="file" class="mx-2 font_title_first lg:w-1/2"  >Fichier audio</label>
            
            <input name="file" type="file" class="Uploads border Placeholder">
        </div>
        <div class="flex flex-row justify-between items-center mb-2"  >
            <label  class="mx-2 font_title_first lg:w-1/2 text-[#4287f5] exs"  ></label>
            <label  class="mx-2 font_title_first lg:w-1/2 sizes"  ></label>
            
           
        </div>
        
        <div class="flex flex-row justify-between items-center mb-2"  >
            
            <div class="prs lg:w-1/2 hidden flex flex-row justify-between">
                <label for="file" class="mx-2 font_title_first  labels" ></label>
                <label  class="mx-2 font_title_first  size"  ></label>
            </div>
            <progress min="0" max="100" class="pls  hidden" value="0">

            </progress>
           
           
           
        </div>

        <select name="format" id="format" class="Format_article hidden p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder"  >
    
            <option value="Poadcast" class="mx-8 Placeholder">Poadcast</option>
           
        </select>
        
        

        <div class="w-full flex flex-row justify-center mt-4">
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier le poadcast
            </button>
        </div>  

    </form>

    <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data" class="Image-Poadcast_costum hidden max-w-[600px] p-4">
        @csrf

        <div class="flex flex-col  justify-content Placeholder mt-2">
            <p><a href="">Titre:</a> {{$article->title}}</p>
        </div>
        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2"  ></textarea>
        </div>
        <div class="flex flex-col Placeholder">
            <p><a href="">Descrption:</a> {{Str::limit($article->description,200)}}</p>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" placeholder="Contenu" cols="30" rows="3" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2"   ></textarea>
        </div>

        
    
        
        <div class="flex flex-col Placeholder items-center">
            <p>
                {{--<a >Article lié n°1:</a> 
                @if ($article_similaire->post_similaire_1 != null)

                {{$article_similaire->post_similaire_1}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-col Placeholder items-center">
            <p>
               {{-- <a >Article lié n°2:</a> 
                @if ($article_similaire->post_similaire_2 != null)

                {{$article_similaire->post_similaire_2}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-col Placeholder items-center">
            <p>
                {{--<a >Article lié n°3:</a> 
                @if ($article_similaire->post_similaire_3 != null)

                {{$article_similaire->post_similaire_3}}

                @else
                Auccun
                    
                @endif--}}
           
            </p>
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text"   class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       

       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 Placeholder border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]"  >

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
        <div class="flex flex-row justify-between items-center mb-2"  >
            <label for="file" class="mx-2 font_title_first lg:w-1/2"  >Fichier image && audio </label>
            
            <input name="file" type="file" class="border Placeholder">
        </div>
        
        

        <div class="w-full flex flex-row justify-center mt-4">
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

   



</div>

@endsection