<header class="w-full flex flex-row bg-slate-100  justify-between items-center h-20 ">
    {{-- Menu,fil actualité, logo, search connexion
         '(rubrique ,fil actualité)','(about,contact)' --}}
    
    <div class="flex flex-row items-center mx-4">

        <div class="mr-2 r">
            <img src="./data/icons/menu.png" alt="menu" class="h-8 cursor-pointer Menu1" onclick="menu1()">
            <img src="./data/icons/cross.png" alt="menu" class="h-8 cursor-pointer hidden Menu2" onclick="menu2()">
        </div>
        <div class="mx-2 hidden md:flex">
            <h2><a href="" class=" px-2 font_title_first border-r-2 border-black hover:cusor-pointer hover:border-[#4287f5] hover:text-[#4287f5]">Menu</a></h2>


        </div >
        
        <div class="mx-2 hidden md:flex ">
            <h2><a href="{{route('dashboard')}}" class="pr-2 font_title_first lg:border-r-2 border-black hover:cusor-pointer hover:border-[#4287f5] hover:text-[#4287f5]">Liste D'article</a></h2>
        </div>

        <div class="mx-2 hidden lg:flex ">
            <h2><a href="{{route('categorie')}}" class=" font_title_first hover:cusor-pointer  hover:text-[#4287f5]">Catégorie</a></h2>
        </div>

        <div class="flex flex-row items-center ml-4 md:hidden">
            
            <img src="./data/image/logo.png" alt="logo" class="h-16">
           
           
           <div class="flex items-center ">
                <h2 class="font_title_first text-xl Logo">
        
                    <span class="Logo "><span class="text-[#4287f5] Logo1">Best</span> Infos</span>
                </h2>
           </div>
        </div>   

    </div>

    <div class="flex flex-row items-center hidden md:flex" >
       <div class="flex flex-row items-center">
         <img src="./data/image/logo.png" alt="logo" class="h-16">
       
       </div>
       <div class="flex items-center">
        <h2 class="font_title_first text-xl Logo">

            <span class="Logo2"><span class="text-[#4287f5] Logo1">Best</span> Infos</span></h2>
       </div>
    </div>

    <div class="flex flex-row items-center">

       <div class="flex flex-row mr-2 ">
            <div class="mx-2 hidden lg:flex">
                <input type="text" placeholder="rechercher" class="p-2 Placeholder border-1 rounded-sm border-black focus:outline-none focus:rounded-sm focus:border-2 focus:border-[#4287f5]">
            </div>
            <div class=" p-1 hidden lg:flex">
                <img src="../data/icons/search.svg" alt="search" class="h-9 cursor-pointer">
            </div>
            
            <div class=" p-1 max-[370px]:hidden min-[371px]:flex lg:hidden">
                <img src="../data/icons/profile.png" alt="search" class="h-9 cursor-pointer">
            </div>
       </div>

       <div class="flex flex-row hidden lg:flex ">
            <div class="mx-1 mt-2  items-center ">
                
                    <img src="../data/icons/profile.png" alt="search" class="h-9 cursor-pointer">
                
            </div>

            <div class="mx-1 mt-2 items-center">
            
            <a class="p-2 font_title_first bg-[#4287f5] text-white hover:bg-black cursor-pointer ">Se deconnecter</a>
            </div>
       </div>
       
    </div>


</header>


<div class="hidden Menu3 relative transition ease-in-out delay-1000   min-h-20 bg-[#F0F0F0] flex sm:flex-row lg:flex-row justify-between w-full py-4 ">

    <div class="flex flex-col lg:flex-row  justify-between w-full mx-10">
        <div class="flex flex-col mt-6 pr-6  lg:border-r-2  border-[#DCDCDC]">

            <div class="mb-4">
                <h1 class="font_title_first hover:text-[#4287f5] cursor-pointer"><a href="{{route('session')}}">Publier article</a></h1>
            </div>
            

            <div class="mt-4 border-b-2 lg:border-none border-[#DCDCDC]">

            </div>
           
            
    
        </div>
    
        <div class="flex flex-col mt-6 pr-6   lg:border-r-2  border-[#DCDCDC]">
    
            <div class="mb-4">
                <h1 class="font_title_first hover:text-[#4287f5] cursor-pointer">Mettre à jour article</h1>
            </div>
            
    
             
            
            <div class="mt-4 border-b-2 lg:border-none border-[#DCDCDC]">

            </div>
    
        </div>
    
        <div class="flex flex-col mt-6 pr-6  lg:border-r-2  border-[#DCDCDC] ">
    
            <div class="mb-4">
                <h1 class="font_title_first hover:text-[#4287f5] cursor-pointer" >Supprimer article</h1>
            </div>
           
           
    
        </div>

        
        <div class="flex flex-col mt-6 pr-6   lg:border-r-2  border-[#DCDCDC] ">
    
            <div class="mb-4">
                <h1 class="font_title_first hover:text-[#4287f5] cursor-pointer">Contenu a mettre en avant</h1>
            </div>
           
           
    
        </div>
        <div class="flex flex-col mt-6 pr-6   lg:border-r-2  border-[#DCDCDC] ">
    
            <div class="mb-4">
                <h1 class="font_title_first hover:text-[#4287f5] cursor-pointer">Catégorie</h1>
            </div>
           
           
    
        </div>
    </div>

</div>