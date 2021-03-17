function openMenu(){
    let x = document.getElementById('ham');
    let obj1 = document.getElementById('first');
    let obj2 = document.getElementById('second');

    obj1.style.transform = "rotate(-45deg)";
    obj2.style.transform = "rotate(45deg)";
    let id = setInterval(move, 1);
    let pos = -400;
    function move(){
        if(pos == 0){
            clearInterval(id);
        }
        else{
            pos+=5;
            x.style.right = pos + 'px';
        }
    }
}
function closeMenu(){
    let x = document.getElementById('ham');
    let obj1 = document.getElementById('first');
    let obj2 = document.getElementById('second');

    obj1.style.transform = "rotate(0deg)";
    obj2.style.transform = "rotate(0deg)";
    let id = setInterval(move, 0.1);
    let pos = 0;
    function move(){
        if(pos == -400){
            clearInterval(id);
        }
        else{
            pos-=5;
            x.style.right = pos + 'px';
        }
    }
}
window.addEventListener('scroll', function() {
    if(pageYOffset >= 100){
        document.getElementById('nav').style.background = "#101010"
    }
    else{
        document.getElementById('nav').style.background = "none"
    }
});