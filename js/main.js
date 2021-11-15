
document.querySelector('.burger').addEventListener('click', function(){

    document.querySelector('body').style.overflow = "hidden";
    document.querySelector('.burger_container').classList.add('active');

});

document.querySelector('.burger_cross').addEventListener('click', function(){

    document.querySelector('body').style.overflow = "visible";
    document.querySelector('.burger_container').classList.add('animation');
    setTimeout(function(){
        document.querySelector('.burger_container').classList.remove('active');
        document.querySelector('.burger_container').classList.remove('animation');

    }, 1000)
    
});

let left = document.querySelector('.left');
let right = document.querySelector('.right');
let members = document.querySelectorAll('.member');
let nbMembers = members.length;
let x = 0;

left.addEventListener("click", function(){
    members[x].classList.remove('active');
    members[x].classList.remove('left');
    members[x].classList.remove('right');

    if(x < nbMembers - 1){
        x++;
    }else{
        x = 0;
    }

    members[x].classList.add('active');
    members[x].classList.add('left');
})

right.addEventListener("click", function(){
    members[x].classList.remove('active');
    members[x].classList.remove('left');
    members[x].classList.remove('right');

    if(x < nbMembers - 1){
        x++;
    }else{
        x = 0;
    }
    
    members[x].classList.add('active');
    members[x].classList.add('right');

    
})


