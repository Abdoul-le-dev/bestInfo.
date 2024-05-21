
document.addEventListener('DOMContentLoaded', function() {
    
    var imageArticle = document.querySelector('.Image');
    var videoArticle = document.querySelector('.Video');
    var podcastArticle = document.querySelector('.Poadcast');
    var mixteArticle = document.querySelector('.Image-Poadcast');
    var formatArticle = document.querySelector('.Format_article');
    var imageArticle_text = document.querySelector('.Image_text');
    var videoArticle_text = document.querySelector('.Video_text');
    var podcastArticle_text = document.querySelector('.Poadcast_text');
    var mixteArticle_text = document.querySelector('.Image-Poadcast_text');
   
    if (formatArticle) {
        formatArticle.addEventListener('change', function() {
            
            switch (formatArticle.value) {
                case "Image":
                    imageArticle.classList.remove('hidden');
                    imageArticle_text .classList.remove('hidden');
                   
                    videoArticle.classList.add('hidden');
                    podcastArticle.classList.add('hidden');
                    mixteArticle.classList.add('hidden');
                    videoArticle_text.classList.add('hidden');
                    podcastArticle_text.classList.add('hidden');
                    //imageArticle_text .classList.add('hidden');
                    mixteArticle_text.classList.add('hidden');
                    imageArticle.classList.add('block');
                    imageArticle_text .classList.add('block');
                    break;
                case "Video":
                    videoArticle.classList.remove('hidden');
                    videoArticle_text.classList.remove('hidden');
                    imageArticle.classList.add('hidden');
                    podcastArticle.classList.add('hidden');
                    mixteArticle.classList.add('hidden');
                    //videoArticle_text.classList.add('hidden');
                    podcastArticle_text.classList.add('hidden');
                    imageArticle_text .classList.add('hidden');
                    mixteArticle_text.classList.add('hidden');
                   
                    videoArticle_text.classList.add('block');
                    videoArticle.classList.add('block');
                    break;
                case "Poadcast":
                    podcastArticle.classList.remove('hidden');
                    podcastArticle_text.classList.remove('hidden');
                    imageArticle.classList.add('hidden');
                    videoArticle.classList.add('hidden');
                    mixteArticle.classList.add('hidden');
                    videoArticle_text.classList.add('hidden');
                    //podcastArticle_text.classList.add('hidden');
                    imageArticle_text .classList.add('hidden');
                    mixteArticle_text.classList.add('hidden');
                    
                    podcastArticle_text.classList.add('block');
                    podcastArticle.classList.add('block');
                    break;
                case "Image-Poadcast":
                    mixteArticle.classList.remove('hidden');
                    mixteArticle_text.classList.remove('hidden');
                    imageArticle.classList.add('hidden');
                    videoArticle.classList.add('hidden');
                    podcastArticle.classList.add('hidden');
                    videoArticle_text.classList.add('hidden');
                    podcastArticle_text.classList.add('hidden');
                    imageArticle_text .classList.add('hidden');
                   // mixteArticle_text.classList.add('hidden');
                    mixteArticle.classList.add('block');
                    mixteArticle_text.classList.add('block');
                    break;
                default:
                    // Handle unknown case
                    console.error("Unknown format selected");
            }
        });
    }
});

var format_new =document.getElementById('format');

if(format_new)
{
    format_new.addEventListener('change', function() {
    console.log('Format changed to: ' + this.value);
    

    // Ici, vous pouvez ajouter d'autres actions à exécuter lorsque la valeur change
});

}



