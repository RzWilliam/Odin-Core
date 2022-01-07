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

let axes = document.querySelectorAll('.axe');
let background = document.querySelector('.background-container')

let value = document.querySelector('.valeur')
let social = document.querySelectorAll('.social_media');

window.addEventListener('scroll', function() {
    if(window.scrollY > (background.offsetTop + background.offsetHeight) / 3){
        axes.forEach(function(axe){
            axe.classList.add('active');
        })
    }


    if(window.scrollY > 3056){
        social.forEach(function(social){
            social.classList.add('active');
        })
    }
})

let select = document.querySelectorAll('.select');
let selected = document.querySelectorAll('.selected')

select.forEach(function(item){
    item.addEventListener('click', function(){
        select.forEach(function(kill){
            kill.classList.remove('active')
        })
        this.classList.add('active')

        let target = this.getAttribute('data-content');

        for(i = 0; i < selected.length; i++){
            selected[i].classList.add('hide');
            selected[i].classList.remove('show');

            if(selected[i].getAttribute('data-content') == target){
                selected[i].classList.remove('hide');
                selected[i].classList.add('show');
            }
        }
    })
})

let projects = document.querySelectorAll('.project');

for(i = 0; i < projects.length; i++){
    if(i % 2 == 0){
        
    }else{
        projects[i].classList.add('reverse');
    }
}