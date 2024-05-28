let now_playing = document.querySelector('.now-playing');
let playpause_btn = document.querySelector('.playpause-track');
let seek_slider = document.querySelector('.seek_slider');
let volume_slider = document.querySelector('.volume_slider');
let curr_time = document.querySelector('.current-time');
let total_duration = document.querySelector('.total-duration');
let wave = document.getElementById('wave');
let randomIcon = document.querySelector('.fa-random');
let curr_track = document.createElement('audio');
let Categorie_model3 = document.querySelector('.Categorie_model3');
let Titre_model3 = document.querySelector('.Titre_model3');
let Img_model3 = document.querySelector('.Img_model3');
let Description_model3 = document.querySelector('.Description_model3');

let track_index = 0;
let isPlaying = false;
let isRandom = false;
let updateTimer;

function getData_lastest() {
    var data_lastest = localStorage.getItem('data_lastest');
    if (data_lastest === null || data_lastest === 'undefined') {
        return [];
    } else {
        try {
            return JSON.parse(data_lastest);
        } catch (e) {
            console.error('Erreur lors du parsing de JSON:', e);
            return [];
        }
    }
}

function getCategorie() {
    var categorie = localStorage.getItem('categorie');
    if (categorie === null || categorie === 'undefined') {
        return [];
    } else {
        try {
            return JSON.parse(categorie);
        } catch (e) {
            console.error('Erreur lors du parsing de JSON:', e);
            return [];
        }
    }
}

var datas = getData_lastest();
const music_list = [];

if (datas != null && datas.length > 0) {
    var data = datas[0];
    if(data.type_article == 'Poadcast')
    {
        music_list.push({
            music: '/storage/' + data.fichier_audio
        });
        // alert(music_list[0].music);
        var Categorie = getCategorie();
        if (Categorie) {
    
            var data_category = data.category_id;
            var categorie_name = '';
    
            Categorie.forEach(Categorie => {
    
                if (Categorie.id == data_category) {
                    categorie_name = Categorie.name
    
                }
    
            });
            if (Categorie_model3) {
                Categorie_model3.innerText = categorie_name;
    
            }
            if (Titre_model3) {
                Titre_model3.innerText = data.title
    
    
            }
            if (Img_model3) {
                if (data.fichier_image != null) {
                    Img_model3.src = '/storage/' + data.fichier_image;
                }
    
            }
            if (Description_model3) {
    
                Description_model3.innerText =data.description
    
            }
        }
       
    }
   
   
}

loadTrack(track_index);

function loadTrack(track_index) {
    if (music_list.length === 0 || !music_list[track_index]) {
        console.error('Music list is empty or track index is out of bounds');
        return;
    }

    clearInterval(updateTimer);
    reset();

    curr_track.src = music_list[track_index].music;
    curr_track.load();


    updateTimer = setInterval(setUpdate, 1000);

}

function random_bg_color() {
    let hex = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e'];
    let a;

    function populate(a) {
        for (let i = 0; i < 6; i++) {
            let x = Math.round(Math.random() * 14);
            let y = hex[x];
            a += y;
        }
        return a;
    }
    let Color1 = populate('#');
    let Color2 = populate('#');
    var angle = 'to right';

    let gradient = 'linear-gradient(' + angle + ',' + Color1 + ', ' + Color2 + ")";
    document.body.style.background = gradient;
}

function reset() {
    curr_time.textContent = "00:00";
    total_duration.textContent = "00:00";
    seek_slider.value = 0;
}

function randomTrack() {
    isRandom ? pauseRandom() : playRandom();
}

function playRandom() {
    isRandom = true;
    randomIcon.classList.add('randomActive');
}

function pauseRandom() {
    isRandom = false;
    randomIcon.classList.remove('randomActive');
}

function repeatTrack() {
    let current_index = track_index;
    loadTrack(current_index);
    playTrack();
}

function playpauseTrack() {
    isPlaying ? pauseTrack() : playTrack();
}

function playTrack() {
    curr_track.play();
    isPlaying = true;
    // track_art.classList.add('rotate');
    wave.classList.add('loader');
    playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
}
function playTracks() {
    curr_track.play();
    isPlaying = true;
    document.querySelector('.bt1').classList.add('hidden');
    document.querySelector('.bt2').classList.remove('hidden');
    document.querySelector('.bt2').classList.add('block');
    document.querySelector('.bt3').innerText = 'Pause';
    // track_art.classList.add('rotate');
    wave.classList.add('loader');
    playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
}
function pauseTracks() {
    curr_track.pause();
    isPlaying = false;
    document.querySelector('.bt2').classList.add('hidden');
    document.querySelector('.bt1').classList.remove('hidden');
    document.querySelector('.bt3').innerText = 'Ecouter';
    document.querySelector('.bt1').classList.add('block');
    // track_art.classList.remove('rotate');
    wave.classList.remove('loader');
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}
function pauseTrack() {
    curr_track.pause();
    isPlaying = false;
    // track_art.classList.remove('rotate');
    wave.classList.remove('loader');
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

function seekTo() {
    let seekto = curr_track.duration * (seek_slider.value / 100);
    curr_track.currentTime = seekto;
}

function setVolume() {
    curr_track.volume = volume_slider.value / 100;
}

function setUpdate() {
    let seekPosition = 0;
    if (!isNaN(curr_track.duration)) {
        seekPosition = curr_track.currentTime * (100 / curr_track.duration);
        seek_slider.value = seekPosition;

        let currentMinutes = Math.floor(curr_track.currentTime / 60);
        let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
        let durationMinutes = Math.floor(curr_track.duration / 60);
        let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);

        if (currentSeconds < 10) {
            currentSeconds = "0" + currentSeconds;
        }
        if (durationSeconds < 10) {
            durationSeconds = "0" + durationSeconds;
        }
        if (currentMinutes < 10) {
            currentMinutes = "0" + currentMinutes;
        }
        if (durationMinutes < 10) {
            durationMinutes = "0" + durationMinutes;
        }

        curr_time.textContent = currentMinutes + ":" + currentSeconds;
        total_duration.textContent = durationMinutes + ":" + durationSeconds;
    }
}
