function verfyCookies() {
    var cookie = localStorage.getItem('cookie');
    if (cookie === null) {
        // Si le cookie n'existe pas, renvoie un tableau vide ou une autre valeur par défaut
        return [];
    } else {
        // Si le cookie existe, parse sa valeur
        return JSON.parse(cookie);
    }
}
 

function generateUUID() { 
    var d = new Date().getTime();
    var d2 = (performance && performance.now && (performance.now() * 1000)) || 0;
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16;
        if (d > 0) {
            r = (d + r) % 16 | 0;
            d = Math.floor(d / 16);
        } else {
            r = (d2 + r) % 16 | 0;
            d2 = Math.floor(d2 / 16);
        }
        return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
    });
}
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function getPublicIP(callback) {
    $.getJSON('https://api.ipify.org?format=json', function(data) {
        // Vérifier que callback est une fonction avant de l'appeler
        if (typeof callback === "function") {
            callback(data.ip);
        } else {
            console.error("Callback is not a function");
        }
    }).fail(function() {
        console.error("Failed to retrieve IP address");
    });
}
function getOrCreateUserId() {
    let userId = getCookie('userId');
    if (!userId) {
        userId = generateUniqueId();
        setCookie('userId', userId, 365);
    }
    return userId;
}
getPublicIP(function(ip) {
    console.log("L'adresse IP publique est : " + ip);
    // Vous pouvez maintenant utiliser l'adresse IP pour le stockage ou d'autres opérations
});
//alert(getCookie('user_id'))


$(document).ready(function() {
   
    const articleId = $('.article-section').data('article-id');
    const userId = getOrCreateUserId();

    // Log article view
    getPublicIP(function(ip) {
        logArticleView(articleId, userId, ip, 'view');
    });

    let isReadLogged = false;

    // Log article read on scroll to bottom
    $(window).scroll(function() {
        if (!isReadLogged && $(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
            getPublicIP(function(ip) {
                logArticleView(articleId, userId, ip, 'read');
            });
            isReadLogged = true;
        }
    });

    // Log article read after 30 seconds
    setTimeout(function() {
        if (!isReadLogged) {
            getPublicIP(function(ip) {
                logArticleView(articleId, userId, ip, 'read');
            });
            isReadLogged = true;
        }
    }, 30000); // 30 seconds
});



function generateUniqueId() {
    return 'xxxx-xxxx-4xxx-yxxx-xxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
    });
}


function logArticleView(articleId, userId, ip, eventType) {
    let cookie = getCookie('user_id');
    $.ajax({
        url: '/logArticleView',
        type: 'GET',
        data: {
            article_id: articleId,
            user_id: userId,
            ip_address: ip,
            cookie:cookie,
            event_type: eventType,
            timestamp: new Date().toISOString()
        },
        success: function(response) {
            console.log('Article view logged successfully:', response);
        },
        error: function(error) {
            console.error('Error logging article view:', error);
        }
    });
}

verfyCookies();



