document.addEventListener("DOMContentLoaded", function(){
    eventListeners();
    darkMode();
});

function eventListeners(){
    const mobileMenu = document.querySelector(".mobile-menu");
    const botonCerrar = document.querySelector("#boton-cerrar");
    mobileMenu.addEventListener("click", navegacionResponsive);
    botonCerrar.addEventListener("click", cerrarModal);
}

function navegacionResponsive(){ 
    const navegacion =  document.querySelector(".navegacion-mobil");
    if(navegacion.classList.contains("mostrar")){
        navegacion.classList.remove("mostrar")
    }
    else{
        navegacion.classList.add("mostrar");
    }

}
function cerrarModal(){
    const navegacion =  document.querySelector(".navegacion-mobil");
    navegacion.classList.remove("mostrar");
}
function darkMode(){
   const botonDarkMode = document.querySelector(".dark-mode-boton");
   botonDarkMode.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
   })
}