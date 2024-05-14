@extends('composants.connexion-header')

@section('page')

<div class=" flex flex-col  items-center min-h-[100vh] lg:min-h-[87vh] shadow bg-[#DCDCDC]">

    <div class="mt-10">
       <h3 class="font_title_first text-xl">Ajouter un article</h3>
    </div>
    @if ($errors)

    @foreach ( $errors->all() as $error  )
    <div class="flex flex-col justify-start">
        <li class="Placeholder text-red-400">{{ $error}}</li>
    </div>
        
    @endforeach
        
    @endif

    <div class="flex flex-row justify-between items-center mb-2">
        <label for="format" class="mx-2 font_title_first lg:w-1/2">Format de l'article</label>
        <select name="format" id="" class="Format_article p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>

            <option value="Image" class="mx-8 Placeholder">Image</option>
            <option value="Video" class="mx-8 Placeholder"">Video</option>
            <option value="Poadcast" class="mx-8 Placeholder"">Poadcast</option>
            <option value="Image-Poadcast" class="mx-8 Placeholder"">Image && Poadcast</option>

        </select>
    </div>

    <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data" class="Image">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required ></textarea>
        </div>

        
    
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2" required>Fichier</label>
            
            <input name="file" type="file" class="border Placeholder">
        </div>
        
        

        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

    <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data" class="Video hidden">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required ></textarea>
        </div>

        
    
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2" required>Fichier</label>
            
            <input name="file" type="file" class="border Placeholder">
        </div>
        
        

        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>

    <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data" class="Poadcast hidden">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required ></textarea>
        </div>

        
    
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2" required>Fichier</label>
            
            <input name="file" type="file" class="border Placeholder">
        </div>
        
        

        <div>
            <button class="p-2 bg-blue-400 border-2 w-80 border-blue-400 font_title_first" type="submit">
                Publier l'article
            </button>
        </div>  

    </form>
    <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data" class="Image-Poadcast hidden">
        @csrf

        <div class="flex flex-row justify-between  items-center mb-2 mt-10">
            <label for="titre" class="mx-2 font_title_first lg:w-1/2">Titre</label>
            <textarea name="titre" id="" cols="30" rows="3" class="border-2  rounded-md focus:outline-none  focus:border-[#4287f5]" required></textarea>
        </div>
        <div class="flex flex-row  justify-between items-center mb-2 ">
            
            <label for="description" class="mx-2 font_title_first lg:w-1/2">Description</label>
            
            
            <textarea name="description" id="" cols="30" rows="3" class="border-2 rounded-md focus:outline-none  focus:border-[#4287f5]" required ></textarea>
        </div>

        
    
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article1" class="mx-2 font_title_first w-1/3  lg:w-1/2">Id Article lié n°1</label>
            <input name="article1" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]" >
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article2" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°2</label>
            <input name="article2" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="article3" class="mx-2 font_title_first lg:w-1/2">Id Article lié n°3</label>
            <input name="article3" type="text" class="border px-2 rounded-md focus:outline-none  focus:border-[#4287f5]">
        </div>
       
        <div class="flex flex-row justify-between items-center mb-2">
            <label for="categorie" class="mx-2 font_title_first lg:w-1/2">Catégorie</label>
            <select name="categorie" id="" class="p-2 border-[#4287f5] rounded-md focus:outline-none  focus:border-[#4287f5]" required>

                @foreach ($categories as $categorie)

                <option value="{{$categorie->id}}" class="mx-8 Placeholder">{{$categorie->name}} {{$categorie->name}}</option>
                    
                @endforeach
               

            </select>
        </div>
        <div class="flex flex-row justify-between items-center mb-2" required>
            <label for="file" class="mx-2 font_title_first lg:w-1/2" required>Fichier</label>
            
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