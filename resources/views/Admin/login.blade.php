@extends('composants.login')

@section('page')

<div class="flex h-[500px]  w-full justify-center items-center " >

    <div class="flex flex-col min-h-[450px] w-96 bg-[#F1F5F9] items-center shadow-lg">

        <div class=" flex flex-row justify-center my-1 w-full ">
            <h2 class="FP-titre py-4 text-lg font_title_first">Connexion</h2>
        </div>
        <div class=" flex flex-row justify-center my-3 w-full  ">
           <img src="./data/icons/profil.png" alt="">

        </div>

        <div class=" flex items-center ">
            <form action="" method="post">
                @csrf

                <div class="mt-3">
                    <input type="text" name="email" value="{{old('email')}}" placeholder="Identifiants" class=" text-xs Placeholder shadow-lg border-2 rounded-lg p-2 border-indigo-500/50 w-60 focus:outline-none focus:border-2 focus:border-indigo-500/10 focus:rounded-lg " >
                    @error('email')
                       <li class="  text-red-500 text-xs">
                        {{ $message}}
                       </li>
                    @enderror
                </div>
                <div class="mt-3">

                    <input type="text"  name="password" placeholder="Password" class="text-xs Placeholder shadow-lg border-2 rounded-lg p-2 border-indigo-500/50 w-60 focus:outline-none focus:border-2 focus:border-indigo-500/10 focus:rounded-lg" >
                    @error('password')
                    <li class="text-red-500 text-xs">
                     {{ $message}}
                    </li>
                 @enderror
                </div>
                <div class="flex mt-4 mb-2 justify-center w-full FP-Menu">
                   <button type="submit" class="p-2 font_title_first bg-indigo-500/50  rounded-sm w-32" >Se connecter</button>
                </div>


            </form>
        </div>


     </div>

</div>
@endsection