let prevScrollPos = window.scrollY || window.pageYOffset;
const collectionFontNavbar = document.getElementsByClassName("font-navbar");
const btnDoacao = document.getElementsByClassName("btn-doacao");
const btnContato = document.getElementsByClassName("btn-contato");
const pathFooter = document.getElementById("path_footer");

// NAVBAR
window.onscroll = function () {
    if (window.scrollY <= 50 || window.pageYOffset <= 50) {
        document.getElementById("img_navbar").classList.remove("shrink");
        collectionFontNavbar[0].style.fontSize = "1.1rem";
        collectionFontNavbar[1].style.fontSize = "1.1rem";
        collectionFontNavbar[2].style.fontSize = "1.1rem";
        collectionFontNavbar[3].style.fontSize = "1.1rem";
        btnDoacao[0].style.fontSize = "1rem";
        btnContato[0].style.fontSize = "1rem";
    } else {
        document.getElementById("img_navbar").classList.add("shrink");
        collectionFontNavbar[0].style.fontSize = "medium";
        collectionFontNavbar[1].style.fontSize = "medium";
        collectionFontNavbar[2].style.fontSize = "medium";
        collectionFontNavbar[3].style.fontSize = "medium";
        btnDoacao[0].style.fontSize = "0.9rem";
        btnContato[0].style.fontSize = "0.9rem";
    }
    prevScrollPos = currentScrollPos;
}


// LOADER
window.addEventListener('load', function () {
    var loaderWrapper = document.getElementById('loader-wrapper');
    loaderWrapper.style.display = 'none';
});


// FOOTER
var pathname = window.location.pathname;

if (pathname === "/casaGE/index.php" || pathname === "/casaGE/"){
    pathFooter.setAttribute("fill", "var(--light-blue)");
    btn_link = document.getElementById("pagina_inicial_btn");
    btn_link.classList.add("active");
} else{
    pathFooter.setAttribute("fill", "var(--light-grey)");
} if(pathname === "/casaGE/views/noticias_geral.php" || pathname == "/casaGE/views/noticia.php"){
    btn_link = document.getElementById("noticia_btn");
    btn_link.classList.add("active");
} if(pathname === "/casaGE/views/diretoria.php" || pathname === "/casaGE/views/estrutura.php"){
    btn_link = document.getElementById("conheca_btn");
    btn_link.classList.add("active");
}