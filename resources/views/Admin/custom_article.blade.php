@extends('composants.connexion-header')

@section('page')

<div class=" flex flex-col  items-center min-h-[100vh] lg:min-h-[87vh] shadow bg-[#DCDCDC]">

    <div class="mt-10 flex flex-row">
       <h3 class="font_title_first text-xl mx-2">Ajouter un article</h3>
       <p class="font_title_first text-xl Image_text">Rubrique:Image</p>
       <p class="font_title_first text-xl hidden Video_text">Rubrique:Video</p>
       <p class="font_title_first text-xl hidden Poadcast_text">Rubrique:Poadcast</p>
        <p class="font_title_first text-xl hidden Image-Poadcast_text">Rubrique:Image && Poadcast</p>
    </div>
    @if ($errors)

    @foreach ( $errors->all() as $error  )
    <div class="flex flex-col justify-start">
        <li class="Placeholder text-red-400">{{ $error}}</li>
    </div>
        
    @endforeach
        
    @endif

    <div class="flex flex-row justify-between items-center mb-2 mt-10">
        <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
        <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>

            <option value="Image" class="mx-8 Placeholder">Image</option>
            <option value="Video" class="mx-8 Placeholder">Video</option>
            <option value="Poadcast" class="mx-8 Placeholder">Poadcast</option>
            <option value="Image-Poadcast" class="mx-8 Placeholder">Image && Poadcast</option>

        </select>
    </div>

    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="Image">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre de l'article"  rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" placeholder="contenu de l'article" cols="30" rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required ></textarea>
        </div>

        
    
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" placeholder="id article" type="text" class="border Placeholder px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" placeholder="id article" type="text" class="border Placeholder px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" placeholder="id article" type="text" class="border Placeholder px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] Placeholder rounded-md focus:outline-none  focus:border-[#4287f5]" required>

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>

        
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2" required>Fichier image</label>
            
            <input name="file" type="file" class="Upload border Placeholder">
        </div>
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label  class="mx-2 font_title_first lg:w-1/2 text-[#4287f5] ex" required></label>
            <label  class="mx-2 font_title_first lg:w-1/2 size" required></label>
            
           
        </div>
        
        <div class="flex flex-row justify-between items-center mb-2" required>
            
            <div class="pr lg:w-1/2 hidden flex flex-row flex-wrap justify-between">
                <label for="file" class="mx-2 font_title_first  label" ></label>
                <label  class="mx-2 font_title_first  size" required></label>
            </div>
            <progress min="0" max="100" class="pl hidden" value="0">

            </progress>
           
           
           
        </div>

        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
                <option value="Image" class="mx-8 Placeholder">Image</option>
               
            </select>
        </div>
        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data" class="Video hidden">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" placeholder="Titre de l'article" cols="30" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" placeholder="contenu de l'article" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2" required ></textarea>
        </div>

        
    
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" placeholder="id article" type="text" class="Placeholder border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" placeholder="id article" type="text" class="Placeholder border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" placeholder=" id article" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder">
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
        <div class="flex flex-row justify-between items-center mb-2" >

             <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Lien fichier</label>
          
            
            <input name="video_link" type="text"  placeholder="Lien de la vidéo" class="Placeholder p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>
        </div>
        <div class="flex hidden flex-row justify-between items-center mb-2 mt-10">
            <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
            <select name="format" id="format" class="Format_article  p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
                <option value="Video" class="mx-8 Placeholder">Video</option>
               
            </select>
        </div>
        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

    <form action="{{route('create')}}" method="POST" enctype="multipart/form-data" class="Poadcast hidden">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" placeholder="Titre du poadcast" cols="30" rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id=""  placeholder="Contenu du poadcast"  cols="30" rows="3" class="border-2 Placeholder p-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required ></textarea>
        </div>

        
    
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text" placeholder="id article" class="border Placeholder px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text" placeholder="id article" class="border Placeholder px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text" placeholder="id article" class="border px-2 Placeholder rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2" required>Fichier audio</label>
            
            <input name="file" type="file" class="Uploads border Placeholder">
        </div>
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label  class="mx-2 font_title_first lg:w-1/2 text-[#4287f5] exs" required></label>
            <label  class="mx-2 font_title_first lg:w-1/2 sizes" required></label>
            
           
        </div>
        
        <div class="flex flex-row justify-between items-center mb-2" required>
            
            <div class="prs lg:w-1/2 hidden flex flex-row justify-between">
                <label for="file" class="mx-2 font_title_first  labels" ></label>
                <label  class="mx-2 font_title_first  size" required></label>
            </div>
            <progress min="0" max="100" class="pls  hidden" value="0">

            </progress>
           
           
           
        </div>

        <select name="format" id="format" class="Format_article hidden p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder" required>
    
            <option value="Poadcast" class="mx-8 Placeholder">Poadcast</option>
           
        </select>
        
        

        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier le poadcast
            </button>
        </div>  

    </form>

    <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data" class="Image-Poadcast hidden">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" placeholder="Titre" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" placeholder="Contenu" cols="30" rows="3" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5] Placeholder p-2" required ></textarea>
        </div>

        
    
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text" placeholder="id article" class="Placeholder border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text"  placeholder="id article" class="Placeholder border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text"  placeholder="id article" class="Placeholder border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 Placeholder border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2" required>Fichier image && audio </label>
            
            <input name="file" type="file" class="border Placeholder">
        </div>
        
        

        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

   



</div>


@endsection