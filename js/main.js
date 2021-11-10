
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

