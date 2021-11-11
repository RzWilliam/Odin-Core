
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

let arrow = document.querySelectorAll('.arrow');
let members = document.querySelectorAll('.member');
let nbMembers = members.length;
let x = 0;

arrow.forEach(function(item){
    item.addEventListener("click", function(){
        members[x].classList.remove('active');

        if(x < nbMembers - 1){
            x++;
        } else {
            x = 0;
        }

        console.log(x)

        members[x].classList.add('active')
        })
})

// arrow.addEventListener("click", function(){
//     members[x].classList.remove('active');
//     if(x < nbMembers - 1){
//         x++;
//     }else{
//         x = 0;
//     }

//     members[x].classList.add('active');
// })

