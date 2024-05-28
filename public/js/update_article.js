document.addEventListener('DOMContentLoaded', (event) => {
    var formatSelect = document.getElementById('formatSelect');

    if (formatSelect) {
        var Image_costum = document.querySelector('.Image_costum');
        var Poadcast_costum = document.querySelector('.Poadcast_costum');
        var Video_costum = document.querySelector('.Video_costum');
        var ImagePoadcast_costum = document.querySelector('.Image-Poadcast_costum');

        formatSelect.addEventListener('change', function() {
            var selectedFormat = formatSelect.value;

            // Vérifiez et manipulez les éléments en fonction du format sélectionné
            if (Image_costum) {
                Image_costum.classList.add('hidden');
            }
            if (Poadcast_costum) {
                Poadcast_costum.classList.add('hidden');
            }
            if (Video_costum) {
                Video_costum.classList.add('hidden');
            }
            if (ImagePoadcast_costum) {
                ImagePoadcast_costum.classList.add('hidden');
            }

            if (selectedFormat === 'Image' && Image_costum) {
                Image_costum.classList.remove('hidden');
            } else if (selectedFormat === 'Poadcast' && Poadcast_costum) {
                Poadcast_costum.classList.remove('hidden');
            } else if (selectedFormat === 'Video' && Video_costum) {
                Video_costum.classList.remove('hidden');
            } else if (selectedFormat === 'Image-Poadcast' && ImagePoadcast_costum) {
                ImagePoadcast_costum.classList.remove('hidden');
            }
        });

        // Déclencher l'événement change pour appliquer les classes au chargement initial
        formatSelect.dispatchEvent(new Event('change'));
    } else {
        console.error('Élément <select> introuvable.');
    }
});
