@extends('composants.connexion-header')
@section('page')
<div class="flex flex-col shadow items-center min-h-[100vh] lg:min-h-[87vh] shadow bg-[#DCDCDC] w-full">
   
    <div class="flex flex-row mt-4 justify-between">
        <h3 class=" font_title_first  mx-4 p-2">Liste des catégories</h3>
        <div class="flex flex-center justify-center" >
            <a class=" font-normal text-black cursor-pointer hover:bg-green-400 font_title_first  rounded bg-[#4287f5] text-white border-[#4287f5] p-2 " onclick="viewCategorie()">Ajouter catégorie</a>
            
        </div>
    </div>
    @forelse ($categories as $categorie )


    <div class="mt-6 min-w-[350px]">

                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-between"><span class="font-light text-gray-600 Placeholder">Publier:{{ $categorie ->created_at}}</span><a href="#"
                            class="px-2 py-1 text-gray-600 Placeholder hidden lg:block">Dernière mise à jour:{{ $categorie ->updated_at}}</a>
                    </div>
                    <div class="my-4 flex flex-center justify-center" >
                        <a class="font-normal  hover:underline font_title_first  rounded text-[#4287f5] p-2 ">{{ $categorie->name}}</a>
                        
                    </div>
                    <div class="mt-6 flex :flex-row justify-between items-center mt-4">
                        <a href="{{ route('update_categorie',['id'=> $categorie ->id])}}" class="rounded bg-[#4287f5] border-[#4287f5] p-2 text-white font_title_first  mb-2">Modifier </a>
                        <a href="{{route('delete_categorie',['id'=> $categorie ->id])}}" class=" rounded bg-red-500 border-red-500  p-2 text-white font_title_first mb-2">Supprimer </a>
                    </div>
                   
                </div>
    </div>
        
    @empty

    <div>
        <h3 class="mt-4 Placeholder">Auccune catégorie ajouter</h3>
    </div>
        
    @endforelse


</div>

<div id="viewCategorie" class="p-10 hidden  flex justify-center items-center">
    <div class="Pop   absolute bg-indigo-50 p-10 top-32  shadow-2xl flex flex-col justify-center items-center " style="width: 400px">

        <div class="static flex flex-col justify-center items-center w-full">
    
        <img src="./data/icons/classification.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer" style="" >
        <h3 class="FP-Menu m-2 font_title_first">Ajouter une catégorie</h3>
        </div>
        <div class="w-full">
    
            <form action="{{ route('Add_Categorie') }}" method="post" >
    
                @csrf
                @method('post')
    
    
                <div class="flex flex-row p-3 flex-wrap justify-center  ">
                    <div class="flex flex-row mx-4 my-4 w-full justify-center">
                        <label for="categorie" class="FP-Menu ml-2 p-2 justify-center font_title_first " >Catégorie<span class="mx-1"></span></label>
                        <input type="text" name="categorie" id="nom" class="border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " >
                    </div>
    
    
    
                </div>
    
    
                <div class="flex justify-center mb-4">
                    <div class="flex justify-between  mt-4  w-full">
    
                        <button type="submit" class="FP-Menu bg-indigo-200 p-3 rounded-sm hover:bg-[#ADD8E6] font_title_first" >Ajouter </button>
                        <a onclick="removeCategorie()" class="FP-Menu bg-indigo-200 p-3 rounded-sm hover:bg-red-400 hover:cursor-pointer font_title_first">Annuler </a>
    
    
                    </div>
                </div>
    
    
            </form>
    
        </div>
    </div>
</div>

@endsection