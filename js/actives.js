const menuBtn = document.querySelector(".btn-menu span");
const buscarBtn = document.querySelector(".btn-buscar");
const cerrarBtn = document.querySelector(".btn-cerrar");
const items = document.querySelector(".nav-items");
const form = document.querySelector("form");
menuBtn.onclick = () => {
    items.classList.toggle("active");
}
buscarBtn.onclick = () => {
    form.classList.toggle("active");
}
buscarBtn.onclick = () => {
    form.classList.toggle("active");
};

// Active del boton circular engranaje y derivados
// Si funciona no se toca.
function giraToggle() {
    var action = document.querySelector('.action');
    var superoverlay = document.querySelector('.superoverlay');
    action.classList.toggle('rueda');
    superoverlay.classList.toggle('active');
}
// Script para el boton copiar del footer
// Si funciona no se toca.
var btn = document.getElementById('copybtn');
        var clipboard = new ClipboardJS(btn);

        clipboard.on('success', function (e) {
            console.log(e);
        });

        clipboard.on('error', function (e) {
            console.log(e);
        });


const btnSwitch = document.querySelector('#switch');
const configUser = window.matchMedia('(prefers-color-scheme: dark)')


btnSwitch.addEventListener('click',()=>{
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');

    // Guardamos el modo dark en localStorage
    if(document.body.classList.contains('dark')){
        localStorage.setItem('dark-theme','true');
    }else{
        localStorage.setItem('dark-theme','false');
    }
});

// Obteniendo el modo que se quedo el usuario
if(localStorage.getItem('dark-theme') === 'true'){
    document.body.classList.add('dark');
    btnSwitch.classList.add('active');
}else{
    document.body.classList.remove('dark');
    btnSwitch.classList.remove('active');
}
