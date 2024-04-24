<header class="w-full flex flex-row bg-slate-100 justify-between items-center h-20 ">
    {{-- Menu,fil actualité, logo, search connexion
         '(rubrique ,fil actualité)','(about,contact)' --}}
    
    <div class="flex flex-row items-center mx-4">

        <div class="mr-2 r">
            <img src="./data/icons/menu.png" alt="menu" class="h-8 cursor-pointer Menu1" onclick="menu1()">
            <img src="./data/icons/cross.png" alt="menu" class="h-8 cursor-pointer hidden Menu2" onclick="menu2()">
        </div>
        <div class="mx-2">
            <h2><a href="" class=" px-2 font_title_first border-r-2 border-black hover:cusor-pointer hover:border-[#4287f5] hover:text-[#4287f5]">Menu</a></h2>


        </div >
        
        <div class="mx-2 ">
            <h2><a href="" class="pr-2 font_title_first border-r-2 border-black hover:cusor-pointer hover:border-[#4287f5] hover:text-[#4287f5]">Fil d'actualité</a></h2>
        </div>

        <div class="mx-2 ">
            <h2><a href="" class=" font_title_first hover:cusor-pointer  hover:text-[#4287f5]">Newsletter</a></h2>
        </div>

    </div>

    <div class="flex flex-row items-center " >
       <div class="flex flex-row items-center">
        <img src="./data/image/logo.png" alt="logo" class="h-16">
       
       </div>
       <div class="flex items-center">
        <h2 class="font_title_first text-xl Logo">

            
            
            <span class="Logo2 "><span class="text-[#4287f5] Logo1">Best</span> Infos</span></h2>
       </div>
    </div>

    <div class="flex flex-row ">

       <div class="flex flex-row mr-2">
            <div class="mx-2">
                <input type="text" placeholder="rechercher" class="p-2 Placeholder border-1 rounded-sm border-black focus:outline-none focus:rounded-sm focus:border-2 focus:border-[#4287f5]">
            </div>
            <div class=" p-1">
                <img src="../data/icons/search.svg" alt="search" class="h-9 cursor-pointer">
            </div>
       </div>

       <div class="flex flex-row ">
        <div class="mx-1 mt-2">
            <a class="p-2 font_title_first bg-black text-white hover:bg-[#4287f5] cursor-pointer">Connexion</a>
        </div>
       <div class="mx-1 mt-2">
        <a class="p-2 font_title_first bg-[#4287f5] text-white hover:bg-black cursor-pointer ">S'abonner</a>
       </div>
       </div>
    </div>


</header>
<div class="w-full flex flex-row  border-y-2 border-[#F0F0F0] bg-slate-100 items-center justify-center">

    <ul class="flex flex-row p-2 ">
       
        <li class="mx-2 font_title_first" >Politique</li>
        <li class="mx-2 font_title_first" >Politique</li>
        <li class="mx-2 font_title_first" >Politique</li>
        <li class="mx-2 font_title_first" >Politique</li>
        <li class="mx-2 font_title_first" >Politique</li>
        <li class="mx-2 font_title_first" >Politique</li>
       
           
       
    </ul>
    
       
        
    

</div>

<div class="hidden Menu3 relative transition ease-in-out delay-1000   min-h-48 bg-[#F0F0F0] flex flex-row justify-between w-full py-4 ">

    <div class="flex flex-row justify-between w-full mx-10">
        <div class="flex flex-col mt-6 px-8 w-1/4 border-r-2 border-[#DCDCDC]">

            <div class="mb-4">
                <h1 class="font_title_first">RUBRIQUE</h1>
            </div>
            <div class="w-full flex flex-row grid grid-cols-2 gap-x-4 gap-y-4 ">
    
                <div> <span class="Placeholder cursor-pointer hover:text-[#4287f5]">Politique</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Culture</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Debat</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Economie</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Science</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Education</span></div>
                   
               
            </div>
    
        </div>
    
        <div class="flex flex-col mt-6 px-8 w-1/4 border-r-2 border-[#DCDCDC]">
    
            <div class="mb-4">
                <h1 class="font_title_first">FORMAT</h1>
            </div>
            <div class="w-full flex flex-row grid grid-cols-2 gap-x-4 gap-y-4 ">
    
                <div class="flex flex-row"> <img src="../data/icons/video.png" alt="video" class="h-4 mr-2 "> <span class="Placeholder cursor-pointer hover:text-[#4287f5]">Vidéo</span></div>
                <div class="flex flex-row"> <img src="../data/icons/pie-chart.png" alt="video" class="h-6 mr-2 "> <span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Infographie</span></div>
                <div class="flex flex-row"> <img src="../data/icons/new.png" alt="video" class="h-6 mr-2 "> <span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Podcast</span></div>
                <div class="flex flex-row"> <img src="../data/icons/urgency (1).png" alt="video" class="h-6 mr-2 "><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Chroniques</span></div>
                <div class="flex flex-row"> <img src="../data/icons/holy.png" alt="video" class="h-6 mr-2 "><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Récits</span></div>
                
                   
               
            </div>
    
        </div>
    
        <div class="flex flex-col mt-6 px-8 w-1/4 ">
    
            <div class="mb-4">
                <h1 class="font_title_first">PARCOURIR</h1>
            </div>
            <div class="w-full flex flex-col grid grid-cols-1  gap-y-4">
    
                <div class="w-full flex flex-row grid grid-cols-2 gap-x-4 gap-y-4">

                    <div class="flex flex-row"> <img src="../data/icons/newsletter.png" alt="video" class="h-5 mr-2 "><span class="Placeholder cursor-pointer hover:text-[#4287f5]">Newsletter</span></div>
                    <div class="flex flex-row"> <img src="../data/icons/category (1).png" alt="video" class="h-4 mr-2 "> <span class="Placeholder cursor-pointer hover:text-[#4287f5]">Categories</span></div>
                    <div class="flex flex-row"> <img src="../data/icons/data-science.png" alt="video" class="h-5 mr-2 "> <span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Data</span></div>
               
                     <div class="flex flex-row"> <img src="../data/icons/article.png" alt="video" class="h-5 mr-2 ">  <span   class="Placeholder cursor-pointer hover:text-[#4287f5]">Article</span></div>
               
                </div>
                <div class="flex flex-row"> <img src="../data/icons/receiver.png" alt="video" class="h-5 mr-2 "> <span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Nous contacter</span></div>
               
                   
               
            </div>
    
        </div>
    </div>

</div>