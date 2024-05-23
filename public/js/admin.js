function getCategorie() {
    var categorie = localStorage.getItem('categorie');
    if (categorie == null) {
        return [];

    }
    else {
        return JSON.parse(categorie);
    }
}

$(document).ready(function() {
    $.ajax({
        url: '/data_admin',
        type: 'GET',
        success: function(data) {
            // Mettre à jour le total
            $('.Total').text(data.data[0].count);

            var categorie_data = getCategorie();
             


            // Mettre à jour les données par catégorie
            var categorieHtml = '';
            data.data_categorie.forEach(function(item) {

                var name ='';

                categorie_data.forEach(function(items) {

                    if(items.id == item.Categorie)
                    {
                        name = items.name;
                    }

                });
                categorieHtml += '<li class="Placeholder font-bold text-[#4287f5]"><a href="/categorie_article?id=' + item.Categorie + '">' + name + ': ' + item.count + '</a></li>';
           });
            $('.Categorie_data').html(categorieHtml);

            // Mettre à jour les données par type
            var typeHtml = '';
            data.data_type.forEach(function(item) {
                typeHtml += '<li class="Placeholder font-bold text-[#4287f5]">' + item.Type + ': ' + item.count + '</li>';
            });
            $('.Type_data').html(typeHtml);
        }
    });
});

