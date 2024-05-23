@extends('composants.model')

@section('page_title')

Dashboard

@endsection

@section('page')
<div class="mx-6 min-h-[80vh]">
    <div class="grid mt-[10vh] sm:grid-cols-2 items-center gap-16 p-8 mx-auto max-w-4xl bg-white shhadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md text-[#333] font-[sans-serif]">
        <div>
            <h1 class="text-3xl font-extrabold"> <a href="/"> <span class="Logo  font_title_first text-xl"><span class="text-[#4287f5] Logo1 font_title_first text-xl">Best</span> Infos</span></a>
            </h1>
            <p class="text-md mt-3 Video_title text-black">
                
                Best Info, votre blog de référence pour des informations de qualité et une actualité vérifiée. Nous nous engageons à vous offrir des articles bien documentés, couvrant un large éventail de sujets pour vous tenir informés des dernières tendances et nouvelles importantes. Si vous avez des questions, des suggestions ou souhaitez simplement nous contacter, n'hésitez pas à nous écrire
            </p>
            <div class="mt-12">
                <h2 class="text-lg font-extrabold font_title_first">Email</h2>
                <ul class="mt-3">
                    <li class="flex items-center mt-4">
                        <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                viewBox="0 0 479.058 479.058">
                                <path
                                    d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                    data-original="#000000" />
                            </svg>
                        </div>
                        <a target="blank" href="#" class="text-[#007bff] text-sm ml-3">
                            <small class="block font_title_first">Mail</small>
                            <strong>contact@bestinfo.com</strong>
                        </a>
                        
                    </li>
                    <li class="flex items-center mt-4">
                        <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                viewBox="0 0 479.058 479.058">
                                <path
                                    d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                    data-original="#000000" />
                            </svg>
                        </div>
                        <a target="blank" href="#" class="text-[#007bff] text-sm ml-3">
                            <small class="block font_title_first">Mail</small>
                            <strong>contact@bestinfo.com</strong>
                        </a>
                        
                    </li>
                   
                </ul>
            </div>
            
        </div>
      
        <form class="ml-auo space-y-4">
            <input type='text' placeholder='Non'
                class="w-full Placeholder rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
            <input type='email' placeholder='Email'
                class="w-full Placeholder rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
            <input type='text' placeholder='Objet'
                class="w-full Placeholder rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
            <textarea placeholder='Message' rows="6"
                class="w-full rounded-md Placeholder px-4 border text-sm pt-2.5 outline-[#007bff]"></textarea>
            <button type='button'
                class="text-white bg-[#4287f5] hover:bg-blue-600 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Envoyer</button>
        </form>
    </div>
</div>

@endsection


