$(document).ready(function () {
    var menu1 = document.querySelector('.Menu1');
    var menu2 = document.querySelector('.Menu2');

    

});


function menu1()
{
    var menu1 = document.querySelector('.Menu1');
    var menu2 = document.querySelector('.Menu2');
    var menu3 = document.querySelector('.Menu3');

    menu1.classList.add('hidden');
    menu2.classList.remove('hidden');
    menu3.classList.remove('hidden');
    
}
function menu2()
{
    var menu1 = document.querySelector('.Menu1');
    var menu2 = document.querySelector('.Menu2');
    var menu3 = document.querySelector('.Menu3');

    menu2.classList.add('hidden');
    menu1.classList.remove('hidden');
    menu3.classList.add('hidden');
   
    
}