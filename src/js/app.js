document.addEventListener("DOMContentLoaded", function(){
    eventListeners();
});

function eventListeners(){
    const mobileMenu = document.querySelector(".mobile-menu");
    const botonCerrar = document.querySelector("#boton-cerrar");
    mobileMenu.addEventListener("click", navegacionResponsive);
    botonCerrar.addEventListener("click", cerrarModal);
}

function navegacionResponsive(){ 
    const navegacion =  document.querySelector(".navegacion");
    if(navegacion.classList.contains("mostrar")){
        navegacion.classList.remove("mostrar")
    }
    else{
        navegacion.classList.add("mostrar");
    }

}
function cerrarModal(){
    console.log("Cerrar modal, pipo es el mejor");
}