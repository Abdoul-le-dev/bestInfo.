{{--- div en deux partie section article, secion rubrique ----}}
<div class="w-full flex flex-col lg:flex-row justify-between mt-10 ">
    
    {{---  section article----}}
    <div class="w-full  lg:w-2/3 ">
        {{---  section article----}}
      

       <div class="flex  flex-col items-center justify-content m-2 ">

        {{---  article concerné----}}
        

        <div class="flex w-full flex-col  p-2 justify-content">
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
            <div class="flex mt-2 items-center justify-content">
                <img src="{{ asset('storage/' . $post->fichier) }}" alt="post1">
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

            <div class="p-2 bg-[#DCDEE8]  rounded-lg ">
                <img src="./data/icons/share.png" alt="share" class="h-6 mr-4">
            </div>
    
        </div>
           
  

    </div>

   
    
    
    
    {{---  secion rubrique ----}}
    <div class="flex flex-col w-full lg:w-1/3  lg:flex ">

        {{---  Article a metre en avant comme sur la culture ----}}

        <div class="mt-2 border-b-2  mt-4 ml-4 border-[#4287f5] flex justify-center lg:justify-start  ">
            <h1 class="text-2xl font_title_first font-normal">Plus lues</h1>
        </div>

        @forelse ($posts_lue as $post )

        <div class="flex flex-col p-4 ml-4  ">

            
            <div class="flex flex-col mt-2 ">
                <p class="text-xl text-[#4287f5] hover:underline font_title_first font-normal">
                    {{$post->title   }}
                </p>
                <img src="{{ asset('storage/' . $post->fichier) }}" alt="post1 h-20" class="mt-2">
                <p class=" Placeholder mt-2">
                    {{ Str::limit($post->description, 100) }}
                </p>
            </div>

            <div>
                <p class="font_title_first text-gray-400 text-normal"> {{$post->user->name   }}</p>
            </div>

        </div>
       
            
        @empty
            
        @endforelse
       
       
        
        

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
        
        <div class="item flex flex-col">

            <img src="{{ asset('storage/' . $post->fichier) }}" alt="">
          
            <p class="font_title_first text_xs  mt-4 ">
                {{$post->title}}
            </p>
            <p class="mt-2 text-blue-400 cusor-pointer">Lire plus</p>

        </div>
        <div class="item flex flex-col">

            <p class="font_title_first text_xs  ">
                {{htmlspecialchars($post->title)}}
            </p>

            <img src="{{ asset('storage/' . $post->fichier) }}" alt="">

            <p class="fPlaceholder text_xs  mt-4 ">
                {{Str::limit($post->description,50)}}
            </p>
          
            
            <p class="mt-2 text-blue-400 cusor-pointer">Lire plus</p>

        </div>
        <div class="item flex flex-col">

            <img src="{{ asset('storage/' . $post->fichier) }}" alt="">
          
            <p class="font_title_first text_xs  mt-4 ">
                {{$post->title}}
            </p>
            <p class="mt-2 text-blue-400 cusor-pointer">Lire plus</p>

        </div>
        <div class="item flex flex-col  justify-between">

           <div>
            <img src="{{ asset('storage/' . $post->fichier) }}" alt="">
          
            <p class="font_title_first text_xs  mt-8 text-[#4287f5] hover:underline">
                {{$post->title}}
            </p>
           </div>
            <p class="mt-2 text-blue-400 cusor-pointer font_title_first">Lire plus</p>

        </div>
      
        
        
        
        
        <div class="item flex flex-col">

            <img src="./data/icons/post1.jpg" alt="">
          
            <p class="font_title_first text_xs text-ellipsis">
                Lorem, ipsum  impedit veniam quos ipsum temporibus amet dolores maxime repudiandae veritatis omnis tenetur labore, nisi modi cumque quod!
            </p>
            <p class="mt-2 text-blue-400 cusor-pointer">Lire plus</p>

        </div>
        <div class="item flex flex-col">

            <img src="./data/icons/post1.jpg" alt="">
          
            <p class="font_title_first text_xs text-ellipsis">
                Lorem, ipsum  impedit veniam quos ipsum temporibus amet dolores maxime repudiandae veritatis omnis tenetur labore, nisi modi cumque quod!
            </p>
            <p class="mt-2 text-blue-400 cusor-pointer">Lire plus</p>

        </div>
       
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
            <img src="{{ asset('storage/' . $post->fichier) }}" class="h-48" alt="{{ Str::limit($post->title,5)}}">
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
            <img src="{{ asset('storage/' . $post->fichier) }}" class="h-48" alt="{{ Str::limit($post->title,5)}}">
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
            <img src="{{ asset('storage/' . $post->fichier) }}" class="h-48" alt="{{ Str::limit($post->title,5)}}">
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
            <img src="{{ asset('storage/' . $post->fichier) }}" class="h-48" alt="{{ Str::limit($post->title,5)}}">
        </div>
        <div>
            <h3 class="p-2 font_title_first text-xs">{{ Str::limit($post->description,120)}}</h3>
        </div>

    </div>
</div>

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





