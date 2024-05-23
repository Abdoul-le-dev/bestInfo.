
$(document).ready(function () {
    $('#search-input').on('input', function () {
        let query = $(this).val();
        if (query.length > 2) {
            // Commencer la recherche après 3 caractères
            $.ajax({
                url: '/search',
                type: 'GET',
                data: {
                    query: query
                },
                success: function (data) {
                    displayResults(data.posts);
                },
                error: function (error) {
                    console.error('Erreur lors de la récupération des données :', error);
                }
            });
        } else {
            // Si le champ de recherche est vide ou contient moins de 3 caractères, vider les résultats
            clearResults();
        }
    });

    function displayResults(data) {
        document.querySelector('.search').classList.remove('hidden');
        document.querySelector('.search').classList.add('block');
        $('#results-list').empty();
        data.forEach( post =>  {
            
            createPost(post);

        });
    }
});

function createPost(post) {
    // Create main container
    const mainDiv = document.createElement('div');
    mainDiv.classList.add('mt-10');

    // Create the inner container
    const innerDiv = document.createElement('div');
    innerDiv.classList.add('max-w-4xl', 'px-10', 'py-6', 'mx-auto', 'bg-white', 'rounded-lg', 'shadow-2xl');
    mainDiv.appendChild(innerDiv);

    // Create the header
    const headerDiv = document.createElement('div');
    headerDiv.classList.add('flex', 'items-center', 'justify-between');
    innerDiv.appendChild(headerDiv);

    const spanDate = document.createElement('span');
    spanDate.classList.add('font-light', 'text-gray-600', 'Placeholder');
    spanDate.textContent = post.created_at;
    headerDiv.appendChild(spanDate);

    const categoryLink = document.createElement('a');
    categoryLink.href = "#";
    categoryLink.classList.add('px-2', 'py-1', 'Placeholder', 'font-bold', 'text-gray-100', 'rounded', 'bg-[#4287F5]');
    categoryLink.textContent = post.category.name;
    headerDiv.appendChild(categoryLink);

    // Create the content
    const contentDiv = document.createElement('div');
    contentDiv.classList.add('mt-2');
    innerDiv.appendChild(contentDiv);

    const titleLink = document.createElement('a');
    titleLink.href = `/article/${post.id}`;
    titleLink.classList.add('text-xl', 'font-normal', 'text-black', 'hover:underline', 'font_title_first');
    titleLink.textContent = post.title;
    contentDiv.appendChild(titleLink);

    const descriptionP = document.createElement('p');
    descriptionP.classList.add('mt-2', 'text-gray-600', 'Placeholder');
    descriptionP.textContent = post.description.length > 220 ? post.description.substring(0, 220) + '...' : post.description;
    contentDiv.appendChild(descriptionP);

    // Create the footer
    const footerDiv = document.createElement('div');
    footerDiv.classList.add('flex', 'items-center', 'justify-between', 'mt-4');
    innerDiv.appendChild(footerDiv);

    const readMoreLink = document.createElement('a');
    readMoreLink.href = `/article_data?id=`+post.id;
    readMoreLink.classList.add('text-blue-500', 'hover:underline', 'font_title_first');
    readMoreLink.textContent = 'Read more';
    footerDiv.appendChild(readMoreLink);

    const userDiv = document.createElement('div');
    footerDiv.appendChild(userDiv);

    const userLink = document.createElement('a');
    userLink.href = "#";
    userLink.classList.add('flex', 'items-center');
    userDiv.appendChild(userLink);

    const avatarImg = document.createElement('img');
    avatarImg.src = "https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80";
    avatarImg.alt = "avatar";
    avatarImg.classList.add('hidden', 'object-cover', 'w-10', 'h-10', 'mx-4', 'rounded-full', 'sm:block');
    userLink.appendChild(avatarImg);

    const userNameH1 = document.createElement('h1');
    userNameH1.classList.add('font-bold', 'text-gray-700', 'hover:underline', 'font_title_first');
    userNameH1.textContent = post.user.name;
    userLink.appendChild(userNameH1);

    // Append the mainDiv to the body or any other container
    document.getElementById('results-list').appendChild(mainDiv);
   // document.querySelector('.search').appendChild();
}

function clearResults() {
    document.querySelector('.search').classList.remove('block');
    document.querySelector('.search').classList.add('hidden');
    $('#results-list').empty();
}