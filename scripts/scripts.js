let footerMain = document.querySelector('.urlFooter');

$(window).scroll(function() {
    var hT = $('#generos').offset().top,
        hH = $('#generos').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
        let navHamburger = document.querySelector('.navHamburger');
        let navBarra = document.getElementById("barraGeneros")
        console.log((hT - wH), wS);


    if (wS > (hT + hH - wH)) {
        $('#generos').addClass('scrolled');
        footerMain.classList.add('headerBottom')


    } else {
        $('#generos').removeClass('scrolled');
        footerMain.classList.remove('headerBottom')


 
    }
    if (wS <= 200) {
        $('#generos').removeClass('scrolled');
        footerMain.classList.remove('headerBottom')
    }

});



let inputFiltroGenero = document.querySelectorAll(".genero");
  
inputFiltroGenero.forEach(function (inputGen) {
  inputGen.addEventListener('click', function () {
    let inputGenValue = inputGen.innerHTML;
    let articulo = document.querySelectorAll(".articulo");
    articulo.forEach(function (filtradoGen){
      let articuloGenero = filtradoGen.querySelector(".subtitulo");
      if (articuloGenero) {
        articuloGenero = articuloGenero.innerHTML;
        let belongsToGenre = articuloGenero.includes(inputGenValue);
        console.log(belongsToGenre);
        if (belongsToGenre) {
          filtradoGen.style.display = "block";
        }
        else if (inputGenValue === "Todos" || inputGenValue === "All"){
          filtradoGen.style.display = "block";
        }
        else {
          filtradoGen.style.display = "none";
        }
      }
    });
  });
});

let tituloNoticia = document.querySelectorAll(".tituloArticulo");
let inputFiltroNoticia = document.querySelectorAll(".inputTitulo");

inputFiltroNoticia.forEach(function (inputF) {
  inputF.addEventListener('keydown', function () {

    let inputValue = inputF.value.toLowerCase();
    if (inputValue === ""){
      tituloNoticia.forEach(function (filtrado) {
        filtrado.style.display = "block";
      });
    }

    let articulo = document.querySelectorAll(".articulo");
    articulo.forEach(function (filtrado) {
      let tituloValue  = filtrado.querySelector(".tituloArticulo").innerHTML.toLowerCase();
      if (tituloValue.includes(inputValue)) {
        filtrado.style.display = "block";
      } else {
        filtrado.style.display = "none";
      }
    });
  });
});


function elementoEnElFinalDelScroll(elemento) {
  let scrollTotal = document.documentElement.scrollHeight;
  let scrollActual = window.scrollY + window.innerHeight;
  let elementoPosicion = elemento.offsetTop + elemento.offsetHeight;
  if (scrollActual >= scrollTotal && elementoPosicion <= scrollTotal) {
      return true;
  } else {
      return false;
  }
}

window.addEventListener('scroll', function() {
  if (elementoEnElFinalDelScroll(footerMain)) {
    footerMain.style.display = "none";
  }
  else {
    footerMain.style.display = "flex";
  }
});





