window.addEventListener("load", function(){
    let appbar=document.querySelector(".appbar");
    let menu = document.querySelector(".menu");
    let iconeMenu=document.querySelector(".menuCubes");
    let iconeFermer=document.querySelector(".fermerMenu");
    let langue=document.querySelector(".langue");
    let recherche=document.querySelector(".search");

    iconeMenu.addEventListener("click", function(){
        appbar.classList.add("montre");
        langue.classList.remove("hidden");
        iconeMenu.classList.add("hidden");
        iconeFermer.classList.remove("hidden");
        recherche.classList.add("hidden");

    })
    iconeFermer.addEventListener("click", function(){
        appbar.classList.remove("montre");
        langue.classList.add("hidden");
        iconeMenu.classList.remove("hidden");
        iconeFermer.classList.add("hidden");
        recherche.classList.remove("hidden");

    })


});