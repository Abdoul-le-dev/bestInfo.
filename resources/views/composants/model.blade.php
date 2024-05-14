<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="font_title_first">Best Infos @yield('page_title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/animationslide.css">
    <link rel="stylesheet" href="./css/animationlogo.css">
    <script src="./js/jquery/jquery.js"></script>
    <script src="./js/js.js"></script>
    <script defer src="./js/animationslider.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
   
   
    
</head>
<body>

    <div class="flex flex-col ">

        <div class="">
            @include('composants.header')
        </div>
        <div class="mt-[100px] Srollhead">
            <script>
                window.addEventListener("scroll",function()
                {
                    var header = document.querySelector('.header');
                    header.classList.toggle("sticky",window.scrollY > 0)
                });
            </script>
            @yield('page')
        </div>

    </div>
    
</body>
@include('composants.footer')
</html>