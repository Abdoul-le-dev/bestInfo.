var section_article = document.querySelector('.section_article');

function getDataFromLocalStorage(key) {
    var data = localStorage.getItem(key);
    if (data === null || data === 'undefined') {
        return [];
    } else {
        try {
            return JSON.parse(data);
        } catch (e) {
            console.error(`Erreur lors du parsing de JSON pour la clé ${key}:`, e);
            return [];
        }
    }
}

function getArticle_avant() {
    return getDataFromLocalStorage('data_avant');
}

function getArticle_recherche() {
    return getDataFromLocalStorage('data_recherche');
}

function getArticle_similaire() {
    return getDataFromLocalStorage('data_similaire');
}

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min; // L'inclusion de max est ici assurée
}


var data_avant = getArticle_avant();

if(data_avant.length == 0)
{
   section_article.classList.add('hidden');
    document.querySelector('.section_articleP').classList.remove('lg:w-2/3');


}
else
{
    data_avant.forEach(data_avant => {
        var id = data_avant.id_article;
        var data_check = getArticle_recherche();
        var found = false;
    
        data_check.forEach(data => {
            if (data.id == id) {
                displayData(data);
                found = true;
            }
        });
    
        if (!found) {
            $.ajax({
                url: '/recherche?recherche=' + id,
                type: 'GET',
                success: function (response) {
                    if (response.data) {
                        let data = response.data;
                        let existingData = localStorage.getItem('data_recherche');
    
                        if (existingData) {
                            existingData = JSON.parse(existingData);
                            existingData.push(data);
                            localStorage.setItem('data_recherche', JSON.stringify(existingData));
                        } else {
                            localStorage.setItem('data_recherche', JSON.stringify([data]));
                        }
    
                        console.log('Données article recherche trouvées et enregistrées dans le localStorage.');
                        displayData(data);
                    } else {
                        console.log('Aucune donnée trouvée pour cet article.');
                        section_article.classList.add('hidden');
                    }
                },
                error: function (xhr, status, error) {
                    if (xhr.status === 404) {
                        console.error('Données non trouvées :', error);
                    } else {
                        console.error('Erreur lors de la récupération des données :', error);
                    }
                }
            });
        }
    });
}




function displayData(data) {
    // Création du conteneur principal
    const mainDiv = document.createElement('div');
    section_article.appendChild(mainDiv);
    mainDiv.className = 'flex flex-col p-4 ml-4 ';

    // Création de la première sous-division
    const subDiv1 = document.createElement('div');
    subDiv1.className = 'flex flex-col mt-2';

    // Ajout du titre
    const title = document.createElement('p');
    title.className = 'text-xl text-[#4287f5] hover:underline font_title_first font-normal cursor-pointer';
   // title.textContent = data.title;
    const a = document.createElement('a');
    a.href='/article_data?id='+ data.id;
    a.textContent = data.title;// Remplacer par la variable appropriée
    title.appendChild(a);
    subDiv1.appendChild(title);

    // Ajout de l'image

    // alert(data.fichier_image);
    if (data.fichier_image) {
        const img = document.createElement('img');
        img.src = '/storage/' + data.fichier_image; // Remplacer par la variable appropriée
        img.alt = 'post1 ';
        img.className = 'mt-2 h-[200px] object-cover ';

        subDiv1.appendChild(img);
    }
    if (data.fichier_audio) {
        const img = document.createElement('img');
        let randomNumber = getRandomIntInclusive(1, 3);
        //alert(randomNumber);
        const subDivaudio = document.createElement('div');
        subDivaudio.className = 'flex flex-row items-center justify-center   ';

        if (randomNumber === 1) {
            img.src = '/data/icons/poadcast1.png';
        } else if (randomNumber === 2) {
            img.src = '/data/icons/poadcast2.png';
        } else if (randomNumber === 3) {
            img.src = '/data/icons/poadcast3.png';
        }

        // Remplacer par la variable appropriée
        img.alt = 'post1 ';
        img.className = 'mt-2 h-26 w-20 object-cover ';

       


        subDivaudio.appendChild(img);
        subDiv1.appendChild(subDivaudio);
        
    }
    if (data.fichier_link) {
        
        
        //alert(randomNumber);
        const subDivaudios = document.createElement('div');
        subDivaudios.className = 'flex flex-row items-center justify-center ';

        const regex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/|youtube-nocookie\.com\/embed\/)([^"&?\/\s]{11})/i;
        const match =data.fichier_link.match(regex);

        const videoId = match[1];

    if (videoId) {
        const iframeUrl = 'https://www.youtube.com/embed/'+videoId+'?si=EgaLvDz1u_iXTx5c';

        // Créer l'élément <div>
       // const div = document.createElement('div');

        // Créer l'élément <iframe>
        const iframe = document.createElement('iframe');
        iframe.className ='h-[200px] mt-2 w-full'
        iframe.width = '560';
        iframe.height = '315';
        iframe.src = iframeUrl;
        iframe.title = 'YouTube video player';
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
        iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
        iframe.setAttribute('allowfullscreen', true);

        // Ajouter l'élément <iframe> au <div>
        subDivaudios.appendChild(iframe);

        

        // Ajouter le <div> à l'élément avec l'ID 'section_article'
     
    } else {
        console.error('Invalid YouTube URL');
    }
        

    
        

       


        subDiv1.appendChild(subDivaudios);
        
    }

    // Ajout de la description
    const description = document.createElement('p');
    description.className = 'Placeholder mt-2';
    description.textContent = data.description.length > 100 ? data.description.substring(0, 120) + '...' : data.description;
    subDiv1.appendChild(description);


    // Ajout de la première sous-division au conteneur principal
    mainDiv.appendChild(subDiv1);

    // Création de la deuxième sous-division
    const subDiv2 = document.createElement('div');

    // Ajout du nom de l'utilisateur
    const userName = document.createElement('p');
    userName.className = 'font_title_first text-gray-400 text-normal';
    userName.textContent = data.user_name; // Remplacer par la variable appropriée
    subDiv2.appendChild(userName);

    // Ajout de la deuxième sous-division au conteneur principal
    mainDiv.appendChild(subDiv2);
}

///article similaire

// Fonction pour récupérer des articles similaires
var data_similaire = getArticle_similaire();
// Fonction pour récupérer des articles en avant


// Vérifier et créer les éléments similaires
function checkAndCreatePosts() {
    var data_avant = getArticle_avant();
    var data_similaire = getArticle_similaire();

    data_similaire.forEach(data => {
        let existsInAvant = false;
        // Vérifier si l'article existe déjà dans data_avant
        if(data_avant)
            {
                
                    data_avant.forEach(datas => {
                        // Vérifier si l'article existe déjà dans data_avant
                        
                       
                            if (datas.id_article == data) {
                                existsInAvant = true;
                            }
                        });
            }
          
        if (!existsInAvant ) {
            // Si l'article n'existe pas, faire la requête AJAX
            $.ajax({
                url: '/articlesearch?id=' + data,
                type: 'GET',
                success: function (response) {
                    // Récupérer les données depuis la réponse
                    let post = response.data;
                   console.log(post.id)
                    createPostElement(post);

                    // Mettre à jour items et réinitialiser l'animation
                    reloadItemsAndAnimate();

                    console.log('perfect');
                },
                error: function (error) {
                    console.error('Erreur lors de la récupération des données :', error);
                }
            });
        } else {
            console.log(`L'article avec l'ID ${data} existe déjà dans data_avant.`);
        }
    });
}

// Fonction pour recharger les éléments et réinitialiser l'animation
function reloadItemsAndAnimate() {
    let items = document.querySelectorAll('.slider .item');
    let active = 3;

    function loadShow() {
        let stt = 0;
        if (items[active]) {
            items[active].style.transform = `none`;
            items[active].style.zIndex = 1;
            items[active].style.filter = 'none';
            items[active].style.opacity = 1;
            for (var i = active + 1; i < items.length; i++) {
                stt++;
                items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
                items[i].style.zIndex = -0.8;
                items[i].style.filter = 'blur(10px)';
                items[i].style.opacity = stt > 2 ? 0 : 0.6;
            }
            stt = 0;
            for (var i = active - 1; i >= 0; i--) {
                stt++;
                items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
                items[i].style.zIndex = -0.1;
                items[i].style.filter = 'blur(5px)';
                items[i].style.opacity = stt > 2 ? 0 : 0.6;
            }
        }
    }

    loadShow();

    let next = document.getElementById('next');
    let prev = document.getElementById('prev');
    let next1 = document.getElementById('next1');
    let prev1 = document.getElementById('prev1');

    if (next) {
        next.onclick = function () {
            active = active + 1 < items.length ? active + 1 : active;
            loadShow();
        }
    }
    if (prev) {
        prev.onclick = function () {
            active = active - 1 >= 0 ? active - 1 : active;
            loadShow();
        }
    }
    if (next1) {
        next1.onclick = function () {
            active = active + 1 < items.length ? active + 1 : active;
            loadShow();
        }
    }
    if (prev1) {
        prev1.onclick = function () {
            active = active - 1 >= 0 ? active - 1 : active;
            loadShow();
        }
    }
}

// Fonction pour créer un élément de post
function createPostElement(post) {
    const container = document.querySelector('.slider');
    const div = document.createElement('div');
    div.className = 'item flex flex-col';

    const img = document.createElement('img');
    img.src = `/storage/${post.fichier_image}`;
    img.alt = '';
    div.appendChild(img);

    const title = document.createElement('p');
    title.className = 'font_title_first text_xs mt-4';
    title.textContent = post.title;
    div.appendChild(title);

    const readMore = document.createElement('a');
    readMore.className = 'mt-2 text-blue-400 cursor-pointer';
    readMore.textContent = 'Lire plus';
  
    readMore.href='/article_data?id='+ post.id;
   
    div.appendChild(readMore);

    container.appendChild(div);
}

// Initial call to set up posts and animation
checkAndCreatePosts();


// Initial call to set up animation
reloadItemsAndAnimate();

// Fonction pour générer un nouvel élément avec les propriétés spécifiées
function createPostElement(post) {
    // Créer l'élément principal <div>
    const mainDiv = document.createElement('div');
    mainDiv.className = 'item flex flex-col justify-between';

    // Créer l'élément <img> et définir ses attributs
   
   let existe =0;
    if (post.fichier_image) {
        const img = document.createElement('img');
        img.src = '/storage/' + post.fichier_image; // Remplacer par la variable appropriée
        img.alt = 'post1 ';
        existe++;
       // img.className = 'mt-2 h-[200px] object-cover ';

       mainDiv.appendChild(img);
    }
    if (post.fichier_audio && existe==0 ) {
        const img = document.createElement('img');
        let randomNumber = getRandomIntInclusive(1, 3);
        //alert(randomNumber);
        const subDivaudio = document.createElement('div');
        subDivaudio.className = 'flex flex-row items-center justify-center   ';

        if (randomNumber === 1) {
            img.src = '/data/icons/poadcast1.png';
        } else if (randomNumber === 2) {
            img.src = '/data/icons/poadcast2.png';
        } else if (randomNumber === 3) {
            img.src = '/data/icons/poadcast3.png';
        }

        // Remplacer par la variable appropriée
        img.alt = 'post1 ';
        img.className = 'mt-2 h-26 w-20 object-cover ';

       


        subDivaudio.appendChild(img);
        mainDiv.appendChild(subDivaudio);
        
    }
    if (post.fichier_link && existe==0) {
        
        
        //alert(randomNumber);
        const subDivaudios = document.createElement('div');
        subDivaudios.className = 'flex flex-row items-center justify-center ';

        const regex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/|youtube-nocookie\.com\/embed\/)([^"&?\/\s]{11})/i;
        const match =post.fichier_link.match(regex);

        const videoId = match[1];

        if (match && match[1]) {
            const videoId = match[1];
            const iframeUrl =post.fichier_link;

            const iframe = document.createElement('iframe');
            iframe.className = 'h-[200px] mt-2 w-full';
            iframe.width = '560';
            iframe.height = '315';
            iframe.src = iframeUrl;
            iframe.title = 'YouTube video player';
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
            iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
            iframe.setAttribute('allowfullscreen', true);

            //div.appendChild();
            subDivaudios.appendChild(iframe);
             mainDiv.appendChild(subDivaudios);
            
        } else {
            console.error('Invalid YouTube URL');
        }
        

    
        

       


        
        
    }

    // Créer l'élément <p> pour le titre et définir ses classes et son contenu
    const titleP = document.createElement('p');
    titleP.className = 'font_title_first text_xs mt-6';
    titleP.textContent = post.title.length > 60 ?  post.title.substring(0, 50) + '...' :  post.title;
    mainDiv.appendChild(titleP);

    // Créer l'élément <p> pour le lien "Lire plus" et définir ses classes et son contenu
    const readMoreP = document.createElement('p');
    readMoreP.className = 'mt-6 text-blue-400 cursor-pointer';
    readMoreP.textContent = 'Lire plus';
    mainDiv.appendChild(readMoreP);

    // Ajouter le <div> principal à l'élément du document souhaité
    document.querySelector('.slider').appendChild(mainDiv); // Assurez-vous que '#container' est l'ID de l'élément parent où vous souhaitez ajouter les nouveaux éléments
}

// Exemple de post pour la génération
