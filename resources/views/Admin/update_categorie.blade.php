@extends('composants.connexion-header')
@section('page')


<div id="" class="p-10   flex justify-center items-center">
    <div class="Pop   absolute bg-indigo-50 p-10 top-32  shadow-2xl flex flex-col justify-center items-center " style="width: 400px">

        <div class="static flex flex-col justify-center items-center w-full">
    
        <img src="./data/icons/classification.png" alt="" class="mr-2 ml-3 h-10 w-10 my-4 cursor-pointer" style="" >
        <h3 class="FP-Menu m-2 font_title_first">Mettre à jour  catégorie </h3>
        </div>
        <div class="w-full">
    
            <form action="{{ route('update_categories') }}" method="post" >
    
                @csrf
                @method('post')
    
    
                
                <div class="flex flex-row mx-4 my-4 w-full justify-center">
                    <label for="categorie" class="FP-Menu ml-2 p-2 justify-center font_title_first " >Catégorie<span class="mx-1"></span></label>
                    <div class="flex flex-center justify-center" >
                        <a class=" font-normal text-black cursor-pointer hover:bg-green-400 font_title_first  rounded bg-[#4287f5] text-white border-[#4287f5] p-2 " >
                            {{$categorie->name}}
                        </a>
                        
                    </div>
                </div>
                <div class="flex flex-row mx-4 my-4 w-full justify-center">
                    <label for="categorie" class="FP-Menu ml-2 p-2 justify-center font_title_first " >Remplacer par<span class="mx-1"></span></label>
                    <input type="text" name="categorie" id="nom" class="border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " required >
                </div>
                <input type="text" name="id" id="nom" class="hidden border-2 p-2 focus:outline-none focus:border-2 focus:border-blue-400 " required value="{{$categorie->id}}">
            

    
    
                <div class="flex justify-center mb-4">
                    <div class="flex justify-between  mt-4  w-full">
    
                        <button type="submit" class="FP-Menu bg-indigo-200 p-3 rounded-sm hover:bg-[#ADD8E6] font_title_first" >Mettre à jour</button>
                        <a onclick="removeCategories()" class="FP-Menu bg-indigo-200 p-3 rounded-sm hover:bg-red-400 hover:cursor-pointer font_title_first">Annuler </a>
    
    
                    </div>
                </div>
    
    
            </form>
    
        </div>
    </div>
</div>

@endsection