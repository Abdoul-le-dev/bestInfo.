<section class="bg-black w-full" >

    <div class="flex flex-col lg:p-6 w-full ">

        <div class="p-6 flex justify-center">
            <p class="text-white Title_font text-2xl">{{$post->title}}</p>
        </div>

        <div>
            <iframe class="w-full h-80 lg:min-h-[400px]"  src="https://www.youtube.com/embed/{{$post->fichier_link}}?si=RPHmhGGITmauQ_52" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>
        
        

    </div>
    <div class="flex flex-col lg:flex-row">
        
        <div class="w-full lg:w-2/3">
            <p class="text-white Description p-6 text-xl tracking-wide leading-relaxed ">You can share an article by clicking on the share icons at the top right of it. 
                The total or partial reproduction of an article, without the prior written authorization of Le Monde, is strictly forbidden. 
                For more information, see our Terms and Conditions. 
                For all authorization requests, contact syndication@lemonde.fr. 
                
                https://www.lemonde.fr/en/politics/article/2024/05/13/macron-considers-debating-le-pen-to-avoid-european-elections-fiasco_6671305_5.html
                
                To prevent a debacle in the European elections on June 9, President Emmanuel Macron has not ruled out confronting far-right leader Marine Le Pen in a debate. The idea of such a duel, first reported on Sunday by the newspapers Le Parisien and La Tribune Dimanche, is one of several possible scenarios, the French presidency confirmed to Le Monde. "Regarding the ways in which the president of the Republic will be involved in this campaign, everything remains open," said a source at the presidential palace. "When it comes to talking about Europe and France, we can always count on the head of state."
                
                Le Pen, reached for comment on Sunday evening, said she had "had absolutely no discussions with [Macron or his staff] about a debate." But she pointed to her previous statement, on April 21, when she told the news channel BFM-TV, "why not?" in response to a question about debating Macron. "If he proposed it to me, I wouldn't rule out taking part on principle. But above all, I'd propose a debate after the European elections, in September, to find out where he's taking us, what he intends to do with the last three years" of his term, Le Pen said on Sunday.</p>
        </div>

        {{--video de la mm categorie ou similaire --}}

        <div class="w-full lg:w-1/3 p-6">
            <div class="flex flex-col justify-center items-center "> 
                <p class="text-xl Video_title  text-[#4287f5]  ">
                    Vidéo de la même rubrique
                </p>
                <div class=" border-t-2 border-[#4287f5] w-48 lg:hidden "></div>
            </div>
            <div class="py-2">
                <div class="flex flex-row w-full">

                    <div class="w-1/2">
                        <img src="./data/image/yes.jpg" alt="" class="">
                    </div>
                    <div class="flex flex-col  w-1/2 ">
    
                        <div class="flex flex-row justify-between">
                            <p class=" Video_title text-white px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                            <p class=" Video_title text-white  px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                     
                     
                        </div>
                        
                        <p class="py-2 px-2 Video_title text-white  text-base cursor-pointer hover:text-[#4287f5]">
                            Macron considers debating Le Pen to avoid European elections fiasco
                        </p>
    
                        
    
                    </div>
                    
    
    
    
                </div>
                <div class="mt-2 border-[0.2px]  w-full border-white"></div>
            </div>

            <div class="py-2">
                <div class="flex flex-row w-full">

                    <div class="w-1/2">
                        <img src="./data/image/yes.jpg" alt="" class="">
                    </div>
                    <div class="flex flex-col  w-1/2 ">
    
                        <div class="flex flex-row justify-between">
                            <p class=" Video_title text-white px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                            <p class=" Video_title text-white  px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                     
                     
                        </div>
                        
                        <p class="py-2 px-2 Video_title text-white  text-base cursor-pointer hover:text-[#4287f5]">
                            Macron considers debating Le Pen to avoid European elections fiasco
                        </p>
    
                        
    
                    </div>
                    
    
    
    
                </div>
                <div class="mt-2 border-[0.2px]  w-full border-white"></div>
            </div>

            <div class="py-2">
                <div class="flex flex-row w-full">

                    <div class="w-1/2">
                        <img src="./data/image/yes.jpg" alt="" class="">
                    </div>
                    <div class="flex flex-col  w-1/2 ">
    
                        <div class="flex flex-row justify-between">
                            <p class=" Video_title text-white px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                            <p class=" Video_title text-white  px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                     
                     
                        </div>
                        
                        <p class="py-2 px-2 Video_title text-white  text-base cursor-pointer hover:text-[#4287f5]">
                            Macron considers debating Le Pen to avoid European elections fiasco
                        </p>
    
                        
    
                    </div>
                    
    
    
    
                </div>
                <div class="mt-2 border-[0.2px]  w-full border-white"></div>
            </div>
        </div>
    </div>
   
</section>
<section class="video_section  min-h-[80vh] w-full">
    <div class="p-6 flex flex-row w-full">

        <div class="flex-nowrap">
            <p class="Title_font text-xl text-nowrap ">Derniers Articles</p>
        </div>
        <div class="w-full border-t-2 border-black mt-4 "></div>

    </div>
    <div class="p-10 w-full flex flex-row lg:flex-row   ">

        <div class=" w-1/2 py-2 mx-6 ">
            <div class=" flex flex-row w-full mt-2 border-[0.2px]  w-full border-white">

                <div class="w-1/2">
                    <img src="./data/image/yes.jpg" alt="" class="">
                </div>
                <div class="flex flex-col  w-1/2 justify-between ">

                    <p class="py-2 px-2 Video_title text-white  text-base cursor-pointer hover:text-[#4287f5]">
                        Macron considers debating Le Pen to avoid European elections fiasco
                    </p>
                    <div class="flex flex-row justify-between">
                        <p class=" Video_title text-white px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                        <p class=" Video_title text-white  px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                 
                 
                    </div>
                    
                    

                </div>
                
            </div>
           
        </div>
        <div class=" w-1/2 py-2 mx-6">

            

                <div class=" flex flex-row w-full mt-2  border-[0.2px]  w-full border-white">

                    <div class="w-1/2">
                        <img src="./data/image/yes.jpg" alt="" class="">
                    </div>
                    <div class="flex flex-col  w-1/2 justify-between ">
    
                        <p class="py-2 px-2 Video_title text-white  text-base cursor-pointer hover:text-[#4287f5]">
                            Macron considers debating Le Pen to avoid European elections fiasco
                        </p>
                        <div class="flex flex-row justify-between">
                            <p class=" Video_title text-white px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                            <p class=" Video_title text-white  px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                     
                     
                        </div>
                        
                        
    
                    </div>
                    
                </div>

            
            
           
        </div>
        

    </div>
</section>
<section class="min-h-[80vh] w-full bg-[url('{{ asset('storage/categorie/afrique/2.jpg') }}')]">

    <div class="p-6 flex flex-row w-full">

        <div class="flex-nowrap">
            <p class="Title_font text-xl text-nowrap text-white">Politique Articles</p>
        </div>
        <div class="w-full border-t-2 border-white mt-4 "></div>

    </div>
    <div class="p-10 w-full flex flex-row lg:flex-row   ">

        <div class=" w-1/3 py-2 mx-6 ">
            <div class=" flex flex-col w-full mt-2   w-full ">

                <div class="w-[300px]">
                    <img src="./data/image/yes.jpg" alt="" class="">
                </div>
                <div class="flex flex-col  w-[300px] justify-between ">

                    <p class="py-2 px-2 Video_title text-white  text-base cursor-pointer hover:text-[#4287f5]">
                        Macron considers debating Le Pen to avoid European elections fiasco
                    </p>
                    <div class="flex flex-row justify-between">
                        <p class=" Video_title text-white px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                        <p class=" Video_title text-white  px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                 
                 
                    </div>
                    
                    

                </div>
                
            </div>
           
        </div>

        
        <div class=" w-1/3 py-2 mx-6 ">
            <div class=" flex flex-col w-full mt-2   w-full ">

                <div class="w-[300px]">
                    <img src="./data/image/yes.jpg" alt="" class="">
                </div>
                <div class="flex flex-col  w-[300px] justify-between ">

                    <p class="py-2 px-2 Video_title text-white  text-base cursor-pointer hover:text-[#4287f5]">
                        Macron considers debating Le Pen to avoid European elections fiasco
                    </p>
                    <div class="flex flex-row justify-between">
                        <p class=" Video_title text-white px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                        <p class=" Video_title text-white  px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                 
                 
                    </div>
                    
                    

                </div>
                
            </div>
           
        </div>

        <div class=" w-1/3 py-2 mx-6 ">
            <div class=" flex flex-col w-full mt-2   w-full ">

                <div class="w-[300px]">
                    <img src="./data/image/yes.jpg" alt="" class="">
                </div>
                <div class="flex flex-col  w-[300px] justify-between ">

                    <p class="py-2 px-2 Video_title text-white  text-base cursor-pointer hover:text-[#4287f5]">
                        Macron considers debating Le Pen to avoid European elections fiasco
                    </p>
                    <div class="flex flex-row justify-between">
                        <p class=" Video_title text-white px-2 cursor-pointer hover:text-[#4287f5]"> name </p>
                        <p class=" Video_title text-white  px-2 cursor-pointer hover:text-[#4287f5]"> name date</p>
                 
                 
                    </div>
                    
                    

                </div>
                
            </div>
           
        </div>
        
        
        

    </div>
    
</section>