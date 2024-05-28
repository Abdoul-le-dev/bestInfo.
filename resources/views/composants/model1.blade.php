{{--- div en deux partie section article, secion rubrique ----}}
<section class="hidden search">

    <div id="results-list"></div>



</section>


<section class="sectionP P-10">

    <div class="w-full flex flex-col lg:flex-row justify-between mt-10 ">
    
        {{---  section article----}}
        <div class="w-full section_articleP  lg:w-2/3 ">
            {{---  section article----}}
          
    
           <div class="flex  flex-col items-center justify-content m-2 ">
    
            {{---  article concerné----}}
            
    
            <div class="flex  flex-col  p-2 justify-content">
                {{---  title----}}
                <div class="flex w-full mt-4 flex-col justify-content">
                    <h1 class="text-xl lg:text-2xl font_title_first">
                        {{$post->title}}
                    </h1>
                </div>
                {{---  border avec les info de publication----}}
                <div class="flex flex-col">
                    <div class="flex flex-row lg:mt-4 mt-2 ">
    
                        <div class="rounded-full p-2 lg:w-14 lg:h-14 bg-white border-2 lg:border-4 mr-4 border-[#4287f5] w-10 h-10">
    
                            <img src="./data/image/logo.png" alt="logo">
    
                        </div>
                        <div class="lg:mt-4 mt-2 ">
                            <p class="font_title_first text_xs"> {{$post->user->name}}</p>
                        </div>
                        
                        
    
                    </div>
    
                    <div class="flex flex-col ">
    
                        <div class=" p-1 lg:p-2 w-full bg-white border-b-2 mr-4 border-[#DCDEE8]"></div>
    
                        <div class="mt-1 font_title_first text-xs flex flex-row justify-between ">
                            <p class="flex flex-row"> <span class="lg:border-r-2 lg:pr-2  lg:border-[#DCDEE8] mr-4  ">Publié le  {{$post->created_at}}</span> <span class="hidden lg:flex">Mise a jour le  {{$post->updated_at}}</span></p>
    
                            <div class="flex flex-row ">
                                <img src="./data/icons/clock.png" alt="clock" class="h-4 mr-2">
                                <p class="text-xs font_title_first">Temps de lecture: 3min</p>
                            </div>
                        </div>
                        <div></div>
    
                    </div>
                </div>
                {{---  image ou video publication----}}
                <div class="flex mt-2 items-center justify-center">
                   
                    @if ($post->fichier_image)
    
                    <img src="{{ asset('storage/' . $post->fichier_image) }}" alt="image">
                        
                    @endif
        
                    @if ($post->fichier_link)
        
                    <iframe class="w-full h-80 lg:min-h-[400px]"  src="{{$post->fichier_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
                        
                    @endif
        
                    @if ($post->fichier_audio)
        
                   <div class="flex justify-center p-6"> 
                    <audio controls  >
                        <source src="{{ asset('storage/' . $post->fichier_audio) }}">
                    </audio>
                   </div>
                        
                    @endif
                   
                </div>
                {{--- description de l'article----}}
                <div>
    
                    <h3 class="Placeholder p-2 mt-4 text-start">
                        
                        {{$post->description}}
    
                        
                    </h3>
    
                </div>
    
            </div>
                
            
            {{---  article liéé---}}
            <div class="flex flex-row ">
    
               
                
            </div>
    
    
          </div>
    
            <div class=" flex flex-row justify-end mx-2  border-[#DCDEE8] ">
    
            
            {{-- <div class="flex flex-row p-2 bg-[#DCDEE8]  rounded-lg "> 
                    <img src="./data/icons/heart.png" alt="heart" class="h-6 mr-8">
                    <img src="./data/icons/thumb-down.png" alt="heart" class="h-6">
                </div>
                <div class="p-2 bg-[#DCDEE8]  rounded-lg ">
                    <img src="./data/icons/chat.png" alt="heart" class="h-6 mr-4">
                </div>--}}
    
                <div class="p-2 bg-[#DCDEE8]  rounded-lg flex flex-row ">
                    <img src="./data/icons/share.png" alt="share" class="h-6 mr-4 share">
                    <div class="flex flex-row social hidden ">
                        <img src="./data/icons/facebook.png" alt="facebook" class="h-6 mr-4 hover:h-8 ">
                        <img src="./data/icons/tiktok.png" alt="tiktok" class="h-6 mr-4 hover:h-8">
                        <img src="./data/icons/twitter-alt-circle.png" alt="twitter" class="h-6 mr-4 hover:h-8">
                        <img src="./data/icons/gmail.png" alt="gmail" class="h-6 mr-4 hover:h-8">
                        <img src="./data/icons/social.png" alt="instagram" class="h-6 mr-4 hover:h-8">
                    </div>
                </div>
        
            </div>
               
      
    
        </div>
    
       
        
        
        
        {{---  secion rubrique ----}}
        <div class="flex section_article flex-col w-full lg:w-1/3  ">
    
            {{---  Article a metre en avant comme sur la culture ----}}
    
            <div class="mt-2 border-b-2  mt-4 ml-4 border-[#4287f5] flex justify-center lg:justify-start  ">
                <h1 class="text-2xl font_title_first font-normal">Article mis en avant</h1>
            </div>
    
           
           
           
            
            
    
            {{--- Article plus lue----}}
    
            <div>
    
            </div>
    
        </div>
    </div>
    
    
    {{--- Article similaire ----}}
    <div class=" pt-2 flex flex-col shadow bg-[#DCDEE8]  mt-2 items-center">
    
        <h3 class="font_title_first test-2xl mb-2">Article Similaire</h3>
        <div class="border-2 border-red-200 w-1/3 lg:w-full "></div>
    
    </div>
    <div class="body flex flex-row justify-between">
        <div>
            <button id="prev1" class="lg:hidden ">></button>
            
        </div>
        <div class="slider">
            
            
            {{---@foreach ($tab as $post )
    
            <div class="item flex flex-col">
    
                <img src="{{ asset('storage/' . $post->fichier_image) }}" alt="">
              
                <p class="font_title_first text_xs  mt-4 ">
                    {{$post->title}}
                </p>
                <p class="mt-2 text-blue-400 cusor-pointer">Lire plus</p>
    
            </div>
                
            @endforeach---}}
           
          
            
            
            
            
            
           
            <button id="next" class="absolute hidden lg:flex">></button>
            <button id="prev" class="absolute hidden lg:flex"><</button>
        </div>
        <div>
            <button id="next1" class=" lg:hidden ">></button>
           
        </div>
    
    </div>
    
    {{--- La sélection de la rédaction----}}
    <div class="flex flex-col justify-center items-center mt-10  ">
        <p class="font_title_first test-2xl  ">Categorie</p>
        <div class=" border-t-2 border-[#4287f5] w-48 "></div>
    </div>
    <div class="mt-4 flex min-h-[70vh] w-full justify-center items-center flex-col lg:flex-row lg:flex-wrap  ">
       
       
        <div class="border-2 border-black w-80 lg:w-1/3 mx-8 my-10">
    
            <div class="border-b-2 border-black " >
               
                <div class="mx-4 flex flex-row justify-between p-2">
                    <p class="font_title_first text-xs ">{{$post->created_at}}</p>
                    <p class="font_title_first text-xs text-[#4287f5]">Read</p>
                </div>
            </div>
            <div>
                <h3 class="p-2 font_title_first " >{{$post->title}}</h3>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('storage/' . $post->fichier_image) }}" class="h-48" alt="{{ Str::limit($post->title,5)}}">
            </div>
            <div>
                <h3 class="p-2 font_title_first text-xs">{{ Str::limit($post->description,120)}}</h3>
            </div>
    
        </div>
        <div class="border-2 border-black w-80 lg:w-1/3 mx-8 my-10">
    
            <div class="border-b-2 border-black " >
               
                <div class="mx-4 flex flex-row justify-between p-2">
                    <p class="font_title_first text-xs ">{{$post->created_at}}</p>
                    <p class="font_title_first text-xs text-[#4287f5]">Read</p>
                </div>
            </div>
            <div>
                <h3 class="p-2 font_title_first " >{{$post->title}}</h3>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('storage/' . $post->fichier_image) }}" class="h-48" alt="{{ Str::limit($post->title,5)}}">
            </div>
            <div>
                <h3 class="p-2 font_title_first text-xs">{{ Str::limit($post->description,120)}}</h3>
            </div>
    
        </div>
        <div class="border-2 border-black w-80 lg:w-1/3 mx-8 my-10">
    
            <div class="border-b-2 border-black " >
               
                <div class="mx-4 flex flex-row justify-between p-2">
                    <p class="font_title_first text-xs ">{{$post->created_at}}</p>
                    <p class="font_title_first text-xs text-[#4287f5]">Read</p>
                </div>
            </div>
            <div>
                <h3 class="p-2 font_title_first " >{{$post->title}}</h3>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('storage/' . $post->fichier_image) }}" class="h-48" alt="{{ Str::limit($post->title,5)}}">
            </div>
            <div>
                <h3 class="p-2 font_title_first text-xs">{{ Str::limit($post->description,120)}}</h3>
            </div>
    
        </div>
        <div class="border-2 border-black w-80 lg:w-1/3 mx-8 my-10">
    
            <div class="border-b-2 border-black " >
               
                <div class="mx-4 flex flex-row justify-between p-2">
                    <p class="font_title_first text-xs ">{{$post->created_at}}</p>
                    <p class="font_title_first text-xs text-[#4287f5]">Read</p>
                </div>
            </div>
            <div>
                <h3 class="p-2 font_title_first " >{{$post->title}}</h3>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('storage/' . $post->fichier_image) }}" class="h-48" alt="{{ Str::limit($post->title,5)}}">
            </div>
            <div>
                <h3 class="p-2 font_title_first text-xs">{{ Str::limit($post->description,120)}}</h3>
            </div>
    
        </div>
    </div>
</section>

{{--- Video && Poadcast----}}
<section class="flex flex-col min-h-[500px]">
    {{--Video--}}

    <div class="flex flex-row justify-between px-3 lg:px-10">

        <p class="font_title_first text-xl text-[#4287f5]  ">
            Vidéo & Poadcast
        </p>

        <div class="flex flex-row">
            <img src="./data/icons/arrow.png" alt="" class="h-6">
            <img src="./data/icons/right-arrow.png" alt="" class="h-6">
        </div>

    </div>
    <div class="flex flex-col lg:flex-row px-3 lg:px-10 ">

        <div class="w-full px-4 py-2 lg:w-2/3 lg:h-[400px]">

            <img src="./data/image/yes.jpg" alt="">

        </div>

        <div class="flex flex-col w-full px-4 py-2 lg:w-1/3">

            <div class="py-2">
                <div class="flex flex-row w-full">

                    <div class="w-1/2">
                        <img src="./data/image/yes.jpg" alt="" class="">
                    </div>
                    <div class="flex flex-col  w-1/2">
    
                        <div class="flex flex-row justify-between">
                            <p class="text-[#0045] Placeholder px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                            <p class="text-[#0045] Placeholder px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                     
                     
                        </div>
                        
                        <p class="py-4 px-2 font_title_first text-xs cursor-pointer hover:text-[#4287f5]">Title Tititle TitleTitleTitleTitleTitlee TitleTititleTitleTitleTitleTitleTitleeTT</p>
    
                        
    
                    </div>
                    
    
    
    
                </div>
                <div class="mt-2 border-[0.2px]  w-full border-[#0045]"></div>
            </div>
            <div class="py-2">
                <div class="flex flex-row w-full">

                    <div class="w-1/2">
                        <img src="./data/image/yes.jpg" alt="" class="">
                    </div>
                    <div class="flex flex-col  w-1/2">
    
                        <div class="flex flex-row justify-between">
                            <p class="text-[#0045] Placeholder px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                            <p class="text-[#0045] Placeholder px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                     
                     
                        </div>
                        
                        <p class="py-4 px-2 font_title_first text-xs cursor-pointer hover:text-[#4287f5]">Title Tititle TitleTitleTitleTitleTitlee TitleTititleTitleTitleTitleTitleTitleeTT</p>
    
                        
    
                    </div>
                    
    
    
    
                </div>
                <div class="mt-2 border-[0.2px]  w-full border-[#0045]"></div>
            </div>
            <div class="py-2">
                <div class="flex flex-row w-full">

                    <div class="w-1/2">
                        <img src="./data/image/yes.jpg" alt="" class="">
                    </div>
                    <div class="flex flex-col  w-1/2">
    
                        <div class="flex flex-row justify-between">
                            <p class="text-[#0045] Placeholder px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                            <p class="text-[#0045] Placeholder px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                     
                     
                        </div>
                        
                        <p class="py-4 px-2 font_title_first text-xs cursor-pointer hover:text-[#4287f5]">Title Tititle TitleTitleTitleTitleTitlee TitleTititleTitleTitleTitleTitleTitleeTT</p>
    
                        
    
                    </div>
                    
    
    
    
                </div>
                <div class="mt-2 border-[0.2px]  w-full border-[#0045]"></div>
            </div>
            

        </div>
        

    </div>
    
   
</section>







