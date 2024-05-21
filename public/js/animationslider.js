
let items = document.querySelectorAll(' .slider .item');
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');
    let next1 = document.getElementById('next1');
    let prev1 = document.getElementById('prev1');
    
    let active = 3;
    function loadShow(){
        let stt = 0;
        if(items[active])
        {
        items[active].style.transform = `none`;
        items[active].style.zIndex = 1;
        items[active].style.filter = 'none';
        items[active].style.opacity = 1;
        for(var i = active + 1; i < items.length; i++){
            stt++;
            items[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
            items[i].style.zIndex = -0.8;
            items[i].style.filter = 'blur(10px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
        stt = 0;
        for(var i = active - 1; i >= 0; i--){
            stt++;
            items[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
            items[i].style.zIndex  = -0.1;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
        }
    }
   
    
    loadShow();
    if(next)
    {
        next.onclick = function(){
            active = active + 1 < items.length ? active + 1 : active;
            loadShow();
        }
    }
    if(prev)
    {
        prev.onclick = function(){
            active = active - 1 >= 0 ? active - 1 : active;
            loadShow();
        }
    }
    if(next1)
    {
        next1.onclick = function(){
            active = active + 1 < items.length ? active + 1 : active;
            loadShow();
        }
    }
    if(prev1)
    {
        prev1.onclick = function(){
            active = active - 1 >= 0 ? active - 1 : active;
            loadShow();
        }
    }
   
   
    
   
   

    function viewCategorie()
    {
        let add= document.getElementById('viewCategorie');
        add.classList.remove('hidden');
       
    }
    function removeCategorie()
    {
        let add= document.getElementById('viewCategorie');
       
        add.classList.add('hidden');
       
    }

   