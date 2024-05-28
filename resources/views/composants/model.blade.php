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
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/animationlogo.css">
    <script defer  src="./js/jquery/jquery.js"></script>
   
   
    <script defer src="./js/js.js"></script>
    <script defer src="./js/social.js"></script>
    <script defer src="./js/search.js"></script>
    <script defer src="./js/gestion.js"></script>
    <script defer src="./js/model_video.js"></script>
    <script defer src="./js/animationslider.js"></script>
    <script defer src="./js/model1.js"></script>
    <script defer src="./js/model2.js"></script>
    <script defer src="./js/model3.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
   
   
    
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