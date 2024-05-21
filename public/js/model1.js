var section_article = document.querySelector('.section_article');

function getArticle_avant() {
    var data_avant = localStorage.getItem('data_avant');
    if (data_avant == null) {
        return [];

    }
    else {
        return JSON.parse(data_avant);
    }
}
function getArticle_recherche() {
    var data_recherche = localStorage.getItem('data_recherche');
    if (data_recherche == null) {
        return [];

    }
    else {
        return JSON.parse(data_recherche);
    }
}
function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min; // L'inclusion de max est ici assurée
}


var data_avant = getArticle_avant();

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
    title.className = 'text-xl text-[#4287f5] hover:underline font_title_first font-normal';
    title.textContent = data.title; // Remplacer par la variable appropriée
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

