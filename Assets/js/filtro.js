document.addEventListener("DOMContentLoaded", function() {

    var menu = document.getElementById('filtros');
    var lista = document.getElementsByClassName('lista');
    lista.addEventListener('click', function() {
        menu.classList.add('open');
    });


})