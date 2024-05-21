<section class=" hidden min-h-[80vh] lg:flex lg:flex-row  p-10 bg-[url('./data/image/1.jpg')] bg-contain">
    <div class="w-2/3 flex flex-col justify-center">

        <p class="Title_font text-2xl mt-2 text-white p-10">Géopolitique</p>
        <p class="mt-10 text-white font_title_first text-xl px-10">Un regard sur la politique internationale. Du lundi au vendredi avec Pierre Haski. Samedi et dimanche avec Gallagher Fenwick</p>

        <div class="flex flex-row justify-between mt-10 px-10  ">
            <div class="flex flex-row p-2 bg-white rounded-md justify-center px-4">
                <img src="./data/icons/play-circle.png" alt="play">
                <img src="./data/icons/pause-circle.png" alt="play" class="hidden">
                <a href="" class="text-black  mx-2 p-1 font_title_first">Ecouter</a>

            </div>

            <div class="flex flex-row p-2 bg-white rounded-md justify-center">
                <img src="./data/icons/share.png" alt="play">
                
                <a href="" class="text-black font_title_first mx-2 p-1">Partager</a>

            </div>
            <div class="flex flex-row p-2 bg-white rounded-md justify-center">
                <img src="./data/icons/follow.png" alt="play">
                
                <a href="" class="text-black font_title_first mx-2 p-1">Nous suivre</a>

            </div>

            
            
            
        </div>

        <div class=" flex items-center mt-10 justify-center">
            <div class="border flex flex-row border-transparent p-8 rounded-lg bg-gray-100 shadow-md">
                
        
                <div class="flex items-center justify-center mt-4">
                    <div class="current-time px-4">00:00</div>
                    <input type="range" min="1" max="100" value="0" class="seek_slider w-2/3 h-5 bg-blue-500" onchange="seekTo()">
                    <div class="total-duration px-4">00:00</div>
                </div>
        
                <div class="flex items-center justify-center mt-4">
                    <i class="fas fa-volume-down px-4"></i>
                    <input type="range" min="1" max="100" value="99" class="volume_slider w-1/3 h-5 bg-blue-500" onchange="setVolume()">
                    <i class="fas fa-volume-up px-4"></i>
                </div>
        
                <div class="flex items-center justify-center mt-4">
                    <div class="random-track cursor-pointer px-4" onclick="randomTrack()">
                        <i class="fas fa-random text-2xl" title="random"></i>
                    </div>
                   
                    <div class="playpause-track cursor-pointer px-4" onclick="playpauseTrack()">
                        <i class="fas fa-play-circle text-5xl"></i>
                    </div>
                    
                    <div class="repeat-track cursor-pointer px-4" onclick="repeatTrack()">
                        <i class="fas fa-repeat text-2xl" title="repeat"></i>
                    </div>
                </div>
        
                <div id="wave" class="mt-4">
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                </div>
            </div>
        </div>

    </div>
    <div class="w-1/3 flex justify-center">

       <div> <img src="./data/image/video1.jpg" alt=""  class=" rounded-md w-[300px] h-[300px]"></div>

    </div>
   
    <script>

    </script>
    
</section>
<section class="flex flex-col lg:hidden min-h-[80vh]   p-5 bg-[url('./data/image/1.jpg')] bg-contain">
    
    <div class="w-full flex justify-center">

        <div> <img src="./data/image/video1.jpg" alt=""  class=" rounded-md w-[300px] h-[300px]"></div>
 
     </div>
    
    <div class="w-full flex flex-col justify-center">

        <p class="Title_font text-2xl mt-6 text-white">Géopolitique</p>
        <p class="mt-10 text-white font_title_first text-xl ">Un regard sur la politique internationale. Du lundi au vendredi avec Pierre Haski. Samedi et dimanche avec Gallagher Fenwick</p>

        <div class="flex flex-row justify-between mt-10  ">
            <div class="flex flex-row p-2 bg-white rounded-md justify-center px-4">
                <img src="./data/icons/play-circle.png" alt="play">
                <img src="./data/icons/pause-circle.png" alt="play" class="hidden">
                <a href="" class="text-black  mx-2 p-1 font_title_first">Ecouter</a>

            </div>

            <div class="flex flex-row p-2 bg-white rounded-md justify-center">
                <img src="./data/icons/share.png" alt="play">
                
                <a href="" class="text-black font_title_first mx-2 p-1">Partager</a>

            </div>
            <div class="flex p-2  min-[300px]:hidden md:flex-row bg-white rounded-md justify-center">
                <img src="./data/icons/follow.png" alt="play">
                
                <a href="" class="text-black font_title_first mx-2 p-1">Nous suivre</a>

            </div>

            
            
            
        </div>

        <div class=" flex items-center mt-10 justify-center">
            <div class="border flex min-[300px]:flex-col md:flex-row border-transparent p-8 rounded-lg bg-gray-100 shadow-md">
                
        
                <div class="flex items-center justify-center mt-4">
                    <div class="current-time px-4">00:00</div>
                    <input type="range" min="1" max="100" value="0" class="seek_slider w-2/3 h-5 bg-blue-500" onchange="seekTo()">
                    <div class="total-duration px-4">00:00</div>
                </div>
        
                <div class="flex items-center justify-center mt-4">
                    <i class="fas fa-volume-down px-4"></i>
                    <input type="range" min="1" max="100" value="99" class="volume_slider w-1/3 h-5 bg-blue-500" onchange="setVolume()">
                    <i class="fas fa-volume-up px-4"></i>
                </div>
        
                <div class="flex items-center justify-center mt-4">
                    <div class="random-track cursor-pointer px-4" onclick="randomTrack()">
                        <i class="fas fa-random text-2xl" title="random"></i>
                    </div>
                   
                    <div class="playpause-track cursor-pointer px-4" onclick="playpauseTrack()">
                        <i class="fas fa-play-circle text-5xl"></i>
                    </div>
                    
                    <div class="repeat-track cursor-pointer px-4" onclick="repeatTrack()">
                        <i class="fas fa-repeat text-2xl" title="repeat"></i>
                    </div>
                </div>
        
                <div id="wave" class="mt-4">
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                    <span class="stroke bg-gray-300 h-2 w-10"></span>
                </div>
            </div>
        </div>

    </div>
  
   
    <script>

    </script>
    
</section>
<section class="bg-white min-h-[80vh]" >
    <div class="  flex flex-col justify-center items-center mt-8 p-2">
        <p class="Title_font text-2xl">Dans la même rubrique</p>
        <div class="border-b-2 w-72 border-[#4287f5] mt-4"></div>
    </div>
    {{-----Search---}}

   <div class="p-10">
    <div class="flex flex-row justify-center items-center  w-full bg-[#E2E5E9] rounded-md">
        <img src="./data/icons/search.png" alt="search" class="w-8 h-8 mx-4">
        <input type="text" maxlength="infinity" placeholder="Rechercher par des mots" class="Description text-xl p-4 w-full outline-none bg-[#E2E5E9] ">
        <img src="./data/icons/cross-small.png" alt="search" class="w-8 h-8 mx-4 hidden">
    </div>
   </div>

    {{-----Liste des 20 derniers poadcast---}}

    <div class="flex flex-col lg:flex-row p-10">
        <div class=" w-full lg:w-1/3">

            <img src="./data/image/1.jpg" alt="" class="lg:w-full lg:h-[200px] rounded-md hover:shadown">

        </div>
        <div class="flex flex-col justify-between mt-5 lg:mt-1 lg:p-10">
            <h3 class="text-xl Video_title mb-4">
                Géorgie, Moldavie, Macédoine du Nord… Luttes d’influences aux marges de l’Union européenne
            </h3>
            <p class="text-base Description tracking-wide line-clamp-3">
                
                Le sort de l’Europe se joue également dans des pays situés à l’extérieur de l’UE, qui sont le théâtre de luttes d’influence entre Est et Ouest. En Géorgie hier, le pouvoir a cédé aux pressions russes et fait adopter une loi sur « l’influence étrangère » calquée
            </p>
            <div class="flex flex-row p-2 bg-white rounded-md  px-4">
                <img src="./data/icons/play-circle.png" alt="play">
                
                <a href="" class="text-black  mx-2 p-1 font_title_first">Ecouter</a>
                <a href="" class="border-2 w-48"></a>

            </div>
        </div>
    </div>
   
</section>