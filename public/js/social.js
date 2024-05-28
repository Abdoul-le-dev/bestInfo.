var share = document.querySelector('.share');
var social = document.querySelector('.social');

if (share) {
    share.addEventListener('click', function(e) {
        // Toggle visibility of the social element
        if (social.classList.contains('hidden')) {
            social.classList.remove('hidden');
            social.classList.add('block');
        } else {
            social.classList.remove('block');
            social.classList.add('hidden');
        }
    });

    // Optional: If you want to show `social` on hover as well
   /* share.addEventListener('mouseenter', function(e) {
        social.classList.remove('hidden');
        social.classList.add('block');
    });

    // Hide `social` when the mouse leaves the `share` element
    share.addEventListener('mouseleave', function(e) {
        social.classList.remove('block');
        social.classList.add('hidden');
    });*/
}
