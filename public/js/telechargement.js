
let progress = document.querySelector('progress');
let progress_indicator = document.querySelector('.progress_indicator');
let load = 0;
let process = "";
let file = document.querySelector('.Upload');
let button = document.querySelector('.button');

if (file) {
    file.oninput = () => {
        let filename = file.files[0].name;
        let extension = filename.split('.').pop().toLowerCase();
        let filesize = file.files[0].size;

        if (filename.length > 10) {
            filename = filename.substring(0, 10) + '...';
        }

        const imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'];
        if (!imageExtensions.includes(extension)) {
            alert("Veuillez sélectionner un fichier image.");
            file.value = "";
            return;
        }

        if (filesize <= 1000000) {
            filesize = (filesize / 1000).toFixed(2) + 'kb';
        } else if (filesize <= 1000000000) {
            filesize = (filesize / 1000000).toFixed(2) + 'mb';
        } else if (filesize <= 1000000000000) {
            filesize = (filesize / 1000000000).toFixed(2) + 'gb';
        }

        document.querySelector('.label').innerText = filename;
        document.querySelector('.size').innerText = filesize;

        getFile(filename);
    };

    function upload() {
        if (load >= 100) {
            clearInterval(process);
            document.querySelector('.ex').innerText = '100% téléchargement complet';
        } else {
            load++;
            progress.value = load;
            document.querySelector('.ex').innerText = load + '% téléchargement en cours';
        }
    }

    function getFile(filename) {
        if (filename) {
            document.querySelector('.pr').classList.remove('hidden');
            document.querySelector('.pr').classList.add('block');
            document.querySelector('.pl').classList.remove('hidden');
            document.querySelector('.pl').classList.add('block');
            load = 0;
            progress.value = 0;
          

            process = setInterval(upload, 100);
        }
    }
}


//////

let progresss = document.querySelector('.pls');
let loads = 0;
let processs = "";
let filez = document.querySelector('.Uploads');

// Fonction pour gérer la simulation de progression du téléchargement
let uploads = () => {
    if (loads >= 100) {
        clearInterval(processs);
        document.querySelector('.exs').innerText = '100% téléchargement complet';
    } else {
        loads++;
        progresss.value = loads;
        document.querySelector('.exs').innerText = loads + '% téléchargement en cours';
    }
};

// Fonction pour démarrer le téléchargement et afficher les informations du fichier
function getFiles(filenames) {
    if (filenames) {
        document.querySelector('.prs').classList.remove('hidden');
        document.querySelector('.prs').classList.add('block');
        document.querySelector('.pls').classList.remove('hidden');
        document.querySelector('.pls').classList.add('block');
        loads = 0;
        progresss.value = 0;
        document.querySelector('.exs').innerText = '';

        processs = setInterval(uploads, 100);
    }
}

// Gestionnaire d'événement pour la sélection de fichier
if(filez)
    {
        filez.oninput = () => {
            let filenames = filez.files[0].name;
            let extension = filenames.split('.').pop().toLowerCase();
            let filesizes = filez.files[0].size;
        
            if (filenames.length > 10) {
                filenames = filenames.substring(0, 10) + '...';
            }
        
            const audioExtensions = ['mp3', 'wav', 'ogg', 'flac', 'aac', 'm4a'];
            if (!audioExtensions.includes(extension)) {
                alert("Veuillez sélectionner un fichier audio.");
                filez.value = "";
                return;
            }
        
            if (filesizes <= 1000000) {
                filesizes = (filesizes / 1000).toFixed(2) + 'kb';
            } else if (filesizes <= 1000000000) {
                filesizes = (filesizes / 1000000).toFixed(2) + 'mb';
            } else if (filesizes <= 1000000000000) {
                filesizes = (filesizes / 1000000000).toFixed(2) + 'gb';
            }
        
            document.querySelector('.labels').innerText = filenames;
            document.querySelector('.sizes').innerText = filesizes;
        
            getFiles(filenames);
        };
    }
