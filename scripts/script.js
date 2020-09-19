/* SLIDE FUNCTION EM JQUERY */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {height: 800, indicators: false});
}); 

$(document).ready(function () {
    $('.sidenav').sidenav();
});

function enviar() {
    /*Coloque seu número na váriavel num*/
    var num = "5521984013243";

    window.open('https://wa.me/' + num + "?text=Eu%20gostaria%20de%20entrar%20em%20contato%20com%20à%20Conécta.");
}