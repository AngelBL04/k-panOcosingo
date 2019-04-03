/*codigo que sirve para hacer el evento del menu al dar click al menu en 
la página responsive*/

/* Variable que ayuda a llamar el id del icono del menu en el html*/
var btnMenu = document.getElementById('btn-menu');
/* Variable que ayuda a llamar el id del contenedor nav en el html*/
var nav = document.getElementById('nav');
/* Evento que ayuda a llamar el menu al darle click */

btnMenu.addEventListener('click', function(){
  nav.classList.toggle('mostrar');
});