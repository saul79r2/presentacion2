/*alert('Bienvenidos hoy trabajaremos JavaScript');*/
var menu=document.getElementById('menu');
var altura=menu.offsetTop;
/*alert(menu.offsetTop);*/
/*alert(window.pageYOffset)*/
window.addEventListener('scroll',function()
{
if(window.pageYOffset>altura){
menu.classList.add('fixed');
}else{
    menu.classList.remove('fixed');
    }
}
)