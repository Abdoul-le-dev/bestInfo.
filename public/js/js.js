$(document).ready(function () {
    
    var menu1 = document.querySelector('.Menu1');
    var menu2 = document.querySelector('.Menu2');
    //gestion publication article
    var Image_article = document.querySelector('.Image');
    var Video_article = document.querySelector('.Video');
    var Poadcast_article = document.querySelector('.Poadcast');
    var Mixte_article = document.querySelector('.Image-Poadcast');

    var Article_add_admin = document.querySelector('.Format_article');

   if(Article_add_admin)
    {
        Article_add_admin.addEventListener('change',function()
        {
            if(Article_add_admin ==="Image")
            {
                Video_article.classList.add('hidden');
                Poadcast_article.classList.add('hidden');
                Mixte_article.classList.add('hidden');
    
            }
            if(Article_add_admin ==="Video")
            {
                Video_article.classList.remove('hidden');
                Video_article.classList.add('flex');
    
                Article_article.classList.add('hidden');
                Poadcast_article.classList.add('hidden');
                Mixte_article.classList.add('hidden');
        
            }
            if(Article_add_admin ==="Poadcast")
                {
                    Poadcast_article.classList.remove('hidden');
                    Poadcast_article.classList.add('flex');
        
                    Article_article.classList.add('hidden');
                    Video_article.classList.add('hidden');
                    Mixte_article.classList.add('hidden');
            
            }
            if(Article_add_admin ==="Image-Poadcast")
            {
                    Mixte_article.classList.remove('hidden');
                    Mixte_article.classList.add('flex');
        
                    Article_article.classList.add('hidden');
                    Video_article.classList.add('hidden');
                    Poadcast_article.classList.add('hidden');
            
            }
           
        });
    }

    //video page 

    var video_section = document.querySelector('.video_section');
    var randomNumber = getRandomBetween1And4();
    if(video_section)
    {
        if(randomNumber ===1)
        {
            
            video_section.classList.add("bg-[url('./data/image/video1.jpg')]");
        }
        if(randomNumber ===2)
        {
                video_section.classList.add("bg-[url('./data/image/video2.jpg')]");
        }
        if(randomNumber ===3)
        {
                video_section.classList.add("bg-[url('./data/image/video3.jpg')]");
        }
        if(randomNumber ===4)
        {
                video_section.classList.add("bg-[url('./data/image/video4.jpg')]");
        }
        
    }





});

function getRandomBetween1And4() {
    return Math.floor(Math.random() * 4) + 1;
}


 // Affichera un nombre aléatoire entre 1 et 4



function menu1() {
    var menu1 = document.querySelector('.Menu1');
    var menu2 = document.querySelector('.Menu2');
    var menu3 = document.querySelector('.Menu3');
    var header = document.querySelector('.headers');
    var Srollhead = document.querySelector('.Srollhead');

    menu1.classList.add('hidden');
    menu2.classList.remove('hidden');
    menu3.classList.remove('hidden');
    header.classList.add('hidden');
    Srollhead.classList.remove('mt-[100px]');

}
function menu2() {
    var menu1 = document.querySelector('.Menu1');
    var menu2 = document.querySelector('.Menu2');
    var menu3 = document.querySelector('.Menu3');
    var header = document.querySelector('.headers');
    var Srollhead = document.querySelector('.Srollhead');

    menu2.classList.add('hidden');
    menu1.classList.remove('hidden');
    menu3.classList.add('hidden');
    header.classList.remove('hidden');
    Srollhead.classList.add('mt-[100px]');



}
$.ajax(
    {
        url: '/categorie?categorie=1',
        type: 'GET',
        success: function (response) {
            // Récupérer les données depuis la réponse
            let categorie = response.categorie;


            // Enregistrer les données dans le localStorage
            localStorage.setItem('categorie', JSON.stringify(categorie));

            console.log('Données categorie récupérées et enregistrées dans le localStorage.');
        },
        error: function (error) {
            console.error('Erreur lors de la récupération des données :', error);
        }
})


function getCategorie() {
    var categorie = localStorage.getItem('categorie');
    if (categorie == null) {
        return [];

    }
    else {
        return JSON.parse(categorie);
    }
}

document.addEventListener('DOMContentLoaded', function () {

    

    // Récupérer les catégories
      var categories = getCategorie(); 
      //console.log(typeof categories)
   
      var parentElement = document.querySelector('.Gcategorie');

    // Parcourir chaque catégorie et générer les éléments <li>
    categories.forEach(function (category) {
        // Créer un nouvel élément <li>
        var liElement = document.createElement('li');

        // Ajouter les classes à l'élément <li>
        liElement.classList.add('mx-2', 'font_title_first', 'cursor-pointer', 'uppercase', 'hover:border-t-2', 'p-1', 'border-[#4287f5]', 'rounded-lg', 'whitespace-nowrap');

        // Ajouter le texte de la catégorie à l'élément <li>
        if(parentElement)
        {
                liElement.textContent = category.name; // Supposons que le nom de la catégorie est stocké dans la propriété "nom"

                // Ajouter l'élément <li> en tant qu'enfant de l'élément parent
                parentElement.appendChild(liElement);
                liElement.addEventListener('click', function() {
                    CategorieRedirect(category.id); });
        }
          //  console.log('Catégorie cliquée :', category.name);
       
    });

});

function CategorieRedirect(id)
{
    $.ajax({

        url: '/redirect',
        type: 'get',
        data: {
           id
        },
        success: function (data) {
           console.log(data);

        }

    });
}

