<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="x-icon" href="./data/image/logo.png">
    <title class="font_title_first">Best Infos @yield('page_title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/animationslide.css">
    <link rel="stylesheet" href="./css/animationlogo.css">
   
    <script src="./js/jquery/jquery.js"></script>
    <script src="./js/admin.js"></script>
    <script defer src="./js/telechargement.js"></script>
    <script src="./js/js.js"></script>
    <script src="./js/update_article.js"></script>
    <script defer src="./js/model_video.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script defer src="./js/animationslider.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
   
   
    
</head>
<body>

    <div class="flex flex-col">

        <div>
            @include('composants.header-connexion')
        </div>
        <div>
            @yield('page')
        </div>

    </div>
    
</body>
</html>