document.addEventListener('DOMContentLoaded', function () {
    // 20 derniers post sinon les 10 dernier sinon les 5 derniers
    $.ajax(
        {
            url: '/lastest',
            type: 'GET',
            success: function (response) {
                // Récupérer les données depuis la réponse
                if (response == 'impossible') {

                    console.log(response)
                }

                let data_lastest = response.data;


                // Enregistrer les données dans le localStorage
                localStorage.setItem('data_lastest', JSON.stringify(data_lastest));

                console.log('Données article récupérées et enregistrées dans le localStorage.');
            },
            error: function (error) {
                console.error('Erreur lors de la récupération des données :', error);
            }
        })
    //article a mettre en avant
    $.ajax(
        {
            url: '/articleenavant',
            type: 'GET',
            success: function (response) {
                // Récupérer les données depuis la réponse
                if (response == 'impossible') {

                    console.log(response)
                }
                let data_avant = response.data;


                // Enregistrer les données dans le localStorage
                localStorage.setItem('data_avant', JSON.stringify(data_avant));

                console.log('Données article a mettre en avant récupérées et enregistrées dans le localStorage.');
            },
            error: function (error) {
                console.error('Erreur lors de la récupération des données :', error);
            }
        })
    //article les plus lues 

    $.ajax(
        {
            url: '/articlepluelue',
            type: 'GET',
            success: function (response) {
                // Récupérer les données depuis la réponse
                let data_pluelue = response.data;


                // Enregistrer les données dans le localStorage
                localStorage.setItem('data_pluelue', JSON.stringify(data_pluelue));

                console.log('Données article les plus lues récupérées et enregistrées dans le localStorage.');
            },
            error: function (error) {
                console.error('Erreur lors de la récupération des données :', error);
            }
        })
    //article les plus lues par categorie
    $.ajax(
        {
            url: '/articleplueluecategorie',
            type: 'GET',
            success: function (response) {
                // Récupérer les données depuis la réponse
                let data_pluelues_categorie = response.data;


                // Enregistrer les données dans le localStorage
                localStorage.setItem('data_pluelues_categorie', JSON.stringify(data_pluelues_categorie));

                console.log('Données article les plus lues par categories récupérées et enregistrées dans le localStorage.');
            },
            error: function (error) {
                console.error('Erreur lors de la récupération des données :', error);
            }
        })
    //article format video
    $.ajax(
        {
            url: '/articleformatvideo',
            type: 'GET',
            success: function (response) {
                // Récupérer les données depuis la réponse
                let data_formatvideo = response.data;


                // Enregistrer les données dans le localStorage
                localStorage.setItem('data_formatvideo', JSON.stringify(data_formatvideo));

                console.log('Données article format video recuperer et enregistrées dans le localStorage.');
            },
            error: function (error) {
                console.error('Erreur lors de la récupération des données :', error);
            }
        })
    //article format poadcast
    $.ajax(
        {
            url: '/articleformatpoadcast',
            type: 'GET',
            success: function (response) {
                // Récupérer les données depuis la réponse
                let data_formatpoadcast = response.data;


                // Enregistrer les données dans le localStorage
                localStorage.setItem('data_formatpoadcast', JSON.stringify(data_formatpoadcast));

                console.log('Données article format poadcast recuperer et enregistrées dans le localStorage.');
            },
            error: function (error) {
                console.error('Erreur lors de la récupération des données :', error);
            }
        })
        $.ajax(
            {
                url: '/articlesimilaire',
                type: 'GET',
                success: function (response) {
                    // Récupérer les données depuis la réponse
                    let data_similaire = response.data;
    
    
                    // Enregistrer les données dans le localStorage
                    localStorage.setItem('data_similaire', JSON.stringify(data_similaire));
    
                    console.log('Données article similaire poadcast recuperer et enregistrées dans le localStorage.');
                },
                error: function (error) {
                    console.error('Erreur lors de la récupération des données :', error);
                }
            })    

       /* var model1 = document.querySelector('.model1');
        var model2 = document.querySelector('.model2');
        var model3 = document.querySelector('.model3');
        
        if (model1) {
            var datas = getData_lastest();
            if (datas != null && datas.length > 0) {
                var data = datas[0]; // Prendre le premier élément
        
                if (data.type_article == 'Poadcast') {
                    model3.classList.remove('hidden');
                    model1.classList.add('hidden');
                    model2.classList.add('hidden');
                    model3.classList.add('block');
                }
                if (data.type_article == 'Image') {
                    model1.classList.remove('hidden');
                    model2.classList.add('hidden');
                    model3.classList.add('hidden');
                    model1.classList.add('block');
                }
                if (data.type_article == 'Video') {
                    model2.classList.remove('hidden');
                    model1.classList.add('hidden');
                    model3.classList.add('hidden');
                    model2.classList.add('block');
                }
            }
        }*/

        
         
});

function getData_lastest() {
    var data_lastest = localStorage.getItem('data_lastest');
    if (data_lastest == null) {
        return [];

    }
    else {
        return JSON.parse(data_lastest);
    }
}