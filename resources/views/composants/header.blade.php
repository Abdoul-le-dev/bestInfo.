<header class="flex flex-col  fixed z-[999] w-full header top-0">
    {{-- Menu,fil actualité, logo, search connexion
         '(rubrique ,fil actualité)','(about,contact)' --}}
    
   <div class="w-full flex flex-row bg-slate-100 justify-between items-center h-20 ">
    <div class="flex flex-row items-center mx-4">

        <div class="mr-2 r">
            <img src="./data/icons/menu.png" alt="menu" class="h-8 cursor-pointer Menu1" onclick="menu1()">
            <img src="./data/icons/cross.png" alt="menu" class="h-8 cursor-pointer hidden Menu2" onclick="menu2()">
        </div>
        <div class="mx-2 hidden md:flex">
            <h2><a href="" class=" px-2 font_title_first border-r-2 border-black hover:cusor-pointer hover:border-[#4287f5] hover:text-[#4287f5]">Menu</a></h2>


        </div >
        
        <div class="mx-2 hidden md:flex ">
            <h2><a href="/" class="pr-2 font_title_first lg:border-r-2 border-black hover:cusor-pointer hover:border-[#4287f5] hover:text-[#4287f5]">Fil d'actualité</a></h2>
        </div>

        <div class="mx-2 hidden lg:flex ">
            <h2><a href="/" class=" font_title_first hover:cusor-pointer  hover:text-[#4287f5]">Newsletter</a></h2>
        </div>

        <div class="flex flex-row items-center ml-4 md:hidden">
            
            <a href="/"><img src="./data/image/logo.png" alt="logo" class="h-16 cursor-pointer"></a>
           
           
           <div class="flex items-center ">
                <h2 class="font_title_first text-xl Logo">
        
                   <a href="/"> <span class="Logo "><span class="text-[#4287f5] Logo1">Best</span> Infos</span></a>
                </h2>
           </div>
        </div>   

    </div>

    <div class="flex flex-row items-center hidden md:flex" >
       <div class="flex flex-row items-center">
        
         <a href="/"><img src="./data/image/logo.png" alt="logo" class="h-16 cursor-pointer"></a>
           
       
       </div>
       <div class="flex items-center">
        <h2 class="font_title_first text-xl Logo">

           <a href="/"> <span class="Logo2"><span class="text-[#4287f5] Logo1">Best</span> Infos</span></h2></a>
       </div>
    </div>

    <div class="flex flex-row items-center">

       <div class="flex flex-row mr-2 ">
            <div class="mx-2 hidden lg:flex">
                
            

                <input type="text" id="search-input" placeholder="recherche..." class="p-2 Placeholder border-1 rounded-sm border-black focus:outline-none focus:rounded-sm focus:border-2 focus:border-[#4287f5]">
            </div>
            <div class=" p-1 hidden lg:flex">
                <img src="../data/icons/search.svg" alt="search" class="h-9 cursor-pointer">
            </div>
            
            <div class=" p-1 max-[370px]:hidden min-[371px]:flex lg:hidden">
                <img src="../data/icons/profile.png" alt="search" class="h-9 cursor-pointer">
            </div>
       </div>

       <div class="flex flex-row hidden lg:flex ">
            <div class="mx-1 mt-2  items-center">
                <a href="{{route('login')}}" class="p-2 font_title_first bg-black text-white hover:bg-[#4287f5] cursor-pointer">Connexion</a>
            </div>

            <div class="mx-1 mt-2 items-center">
            
            <a class="p-2 font_title_first bg-[#4287f5] text-white hover:bg-black cursor-pointer ">S'abonner</a>
            </div>
       </div>
       <div class="mx-1 flex flex-row items-center lg:hidden">
            
        <a class="p-2 font_title_first bg-[#4287f5] text-white hover:bg-black cursor-pointer ">S'abonner</a>
        </div>
    </div>
   </div>

   <div class="w-full headers flex flex-row bg-slate-100 border-y-2 border-[#F0F0F0] justify-center items-center  ">

    <ul class="Gcategorie flex w-full inline-block flex-row p-2 lg:bg-slate-100 justify-center items-center border-y-2 rounded-b-lg border-[#F0F0F0] overflow-x-auto ">
       
        
       {{--<li class="mx-2 font_title_first   uppercase hover:border-t-2 p-1 border-[#4287f5] rounded-lg whitespace-nowrap" >A la une</li>
        <li class="mx-2 font_title_first uppercase p-1 hover:border-b-2 border-[#4287f5] rounded-lg whitespace-nowrap" >Economie</li>
        <li class="mx-2 font_title_first uppercase p-1 hover:border-t-2 border-[#4287f5] rounded-lg whitespace-nowrap" >Culture</li>
        <li class="mx-2 font_title_first uppercase p-1 hover:border-b-2 border-[#4287f5] rounded-lg whitespace-nowrap" >Sante</li>
        <li class="mx-2 font_title_first uppercase p-1 hover:border-t-2 border-[#4287f5] rounded-lg whitespace-nowrap" >Science</li>
        <li class="mx-2 font_title_first uppercase p-1 hover:border-b-2 border-[#4287f5] rounded-lg whitespace-nowrap" >Politique</li>
        ----}}
       
           
       
    </ul>
    
   
       
        
    

   </div>



</header>




<div class="hidden Menu3  fixed z-[400] mt-[75px] transition ease-in-out delay-1000   min-h-48 bg-[#F0F0F0] flex sm:flex-row lg:flex-row justify-between w-full py-4 ">

    <div class="flex flex-col lg:flex-row mt-5 justify-between w-full mx-10">
        
        <div class="flex flex-row mt-6 px-8 mr-2 lg:hidden ">
            <div class="">
                
            

                <input type="text" id="search-input" placeholder="recherche..." class="p-2 Placeholder border-1 rounded-sm border-black focus:outline-none focus:rounded-sm focus:border-2 focus:border-[#4287f5]">
            </div>
            <div class=" p-1 ">
                <img src="../data/icons/search.svg" alt="search" class="h-9 cursor-pointer">
            </div>
            
           
       </div>
        <div class="Menu23 flex flex-col mt-6 px-8 lg:w-1/4 lg:border-r-2  border-[#DCDCDC]">

            <div class="mb-4">
                <h1 class="font_title_first">RUBRIQUE</h1>
            </div>
            <div class="w-full flex flex-row grid grid-cols-2 gap-x-2 lg:gap-x-4 gap-y-4 ">
    
                <div> <span class="Placeholder cursor-pointer hover:text-[#4287f5]">Politique</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Culture</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Debat</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Economie</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Science</span></div>
                <div><span  class="Placeholder cursor-pointer hover:text-[#4287f5]">Education</span></div>
                   
               
            </div>

            <div class="mt-4 border-b-2 lg:border-none border-[#DCDCDC]">

            </div>
           
            
    
        </div>
    
        <div class="Menu24 flex flex-col mt-6 px-8 lg:w-1/4 lg:border-r-2  border-[#DCDCDC]">
    
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
            <div class="mt-4 border-b-2 lg:border-none border-[#DCDCDC]">

            </div>
    
        </div>
    
        <div class="Menu25 flex flex-col mt-6 px-8 lg:w-1/4 lg:border-r-2  border-[#DCDCDC] ">
    
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