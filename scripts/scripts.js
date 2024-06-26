let footerMain = document.querySelector('.urlFooter');

$(window).scroll(function() {
    var hT = $('#generos').offset().top,
        hH = $('#generos').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
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


document.addEventListener('DOMContentLoaded',function(){
let inputFiltroGenero = document.querySelectorAll(".genero");
  
inputFiltroGenero.forEach(function (inputGen) {
  inputGen.addEventListener('click', function () {
    let inputGenValue = inputGen.innerHTML;
    console.log(inputGenValue);
    let articulo = document.querySelectorAll(".articulo");
    articulo.forEach(function (filtradoGen){
      let articuloGenero = filtradoGen.querySelector(".subtitulo");
      if (articuloGenero) {
        articuloGenero = articuloGenero.innerHTML;
        let belongsToGenre = articuloGenero.includes(inputGenValue);
        let recordatorioFiltro = document.getElementById('seleccionFiltro');
        if (window.location.search.includes('lang=es')) {
        recordatorioFiltro.innerHTML = "Ha filtrado por: " + inputGenValue;  
        }
        else if (window.location.search.includes('lang=en')) {
          recordatorioFiltro.innerHTML = "You filtered by: " + inputGenValue;  
        }
        if (belongsToGenre) {
          filtradoGen.style.display = "flex";
        }
        else if (inputGenValue === "Todos" || inputGenValue === "All"){
          filtradoGen.style.display = "flex";
          recordatorioFiltro.innerHTML ="";
        }
        else {
          filtradoGen.style.display = "none";
        }
      }
    });
  });
});

})

let tituloNoticia = document.querySelectorAll(".tituloArticulo");
let inputFiltroNoticia = document.querySelectorAll(".inputTitulo");

inputFiltroNoticia.forEach(function (inputF) {
  inputF.addEventListener('keydown', function () {

    const busqueda1 = document.getElementById('busqueda1');
    const busqueda2 = document.getElementById('busqueda2');

    function sincronizarValores(event) {
      if (event.target === busqueda1) {
          busqueda2.value = busqueda1.value;
      } else if (event.target === busqueda2) {
          busqueda1.value = busqueda2.value;
      }
  }
  busqueda1.addEventListener('input', sincronizarValores);
  busqueda2.addEventListener('input', sincronizarValores);

    let inputValue = inputF.value.toLowerCase();
    if (inputValue === ""){
      tituloNoticia.forEach(function (filtrado) {
        filtrado.style.display = "flex";
      });
    }

    let articulo = document.querySelectorAll(".articulo");
    articulo.forEach(function (filtrado) {
      let tituloValue  = filtrado.querySelector(".tituloArticulo").innerHTML.toLowerCase();
      if (tituloValue.includes(inputValue)) {
        filtrado.style.display = "flex";
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

function ocultarFooterAlFinal() {
  let scrollTotal = document.documentElement.scrollHeight;
  let scrollActual = window.scrollY + window.innerHeight;

  if (scrollActual >= scrollTotal) {
    footerMain.style.display = "none";
  } else {
    footerMain.style.display = "flex";
  }
}

window.addEventListener('scroll', ocultarFooterAlFinal);

window.addEventListener('load', ocultarFooterAlFinal);

let selectIdioma = document.querySelector('.idiomas');

selectIdioma.addEventListener('click', function(){

  let containerIdiomas = document.querySelectorAll('.contenedorIdiomas');

  containerIdiomas.forEach(function(elemento){

    if (elemento.classList.contains('hidden')){
      elemento.classList.remove('hidden');
  
    }
    else{
      elemento.classList.add('hidden');
    }
  });



});

let modoClaro= document.querySelector('.lightMode');
let modoOscuro= document.querySelector('.darkMode');
let modoSepia= document.querySelector('.readMode');
let selectModo= document.querySelector('.modosVision');

selectModo.addEventListener('click', function(){
  
  let containerModo = document.querySelector('.contenedorModosVision');

  if (containerModo.classList.contains('hidden')){
    containerModo.classList.remove('hidden');
  }
  else{
    containerModo.classList.add('hidden');
  }
    let seleccionModo = document.querySelectorAll('.opcionModo');
    seleccionModo.forEach(function (seleccion){
      seleccion.addEventListener('click', function(){
        let modBody = document.getElementById('body');
        let modHeader = document.querySelector('.header').children;
        let allDocument = document.getElementsByTagName("*");
        let generosContainer = document.getElementById('generos');
        let stopColor1 = document.getElementById('stopColor1');
        let stopColor2 = document.getElementById('stopColor2');
        let colorMenu = document.getElementById('menu');
        let backgroundGeneros = document.getElementById('barraGeneros');
      

        if (seleccion.classList.contains('darkMode')) {
          modBody.style.backgroundColor = "#1a2c32";
          for (let child of modHeader) {
            child.style.color = "#ffffff"; 
          }

          for (let link of allDocument) {
            link.style.color = "#ffffff";
          }

          inputFiltroNoticia.forEach(elementInput =>{
            elementInput = elementInput.style.color="black"

          });
          generosContainer.style.backgroundColor="transparent"
          stopColor1.style.stopColor="rgb(59, 117, 127,0.3)"
          stopColor2.style.stopColor="rgb(59, 117, 127,1)"
          colorMenu.style.backgroundColor="rgba(95, 170, 177, 1)"
          backgroundGeneros.style.backgroundColor="transparent"
          for (let child of generosContainer){
            child.style.backgroundColor="transparent"
          }


  

        } else if (seleccion.classList.contains('lightMode')) {
          modBody.style.backgroundColor = "#ddeff0";
          for (let child of modHeader) {
            child.style.color = "#1a2c32"; 
          }
        
          for (let link of allDocument) {
            link.style.color = "#1a2c32";
          }

            generosContainer.style.backgroundColor="transparent"
            stopColor1.style.stopColor="rgb(59, 117, 127,0.3)"
            stopColor2.style.stopColor="rgb(59, 117, 127,1)"
            colorMenu.style.backgroundColor="rgba(95, 170, 177, 1)"
            backgroundGeneros.style.backgroundColor="transparent"
            for (let child of generosContainer){
              child.style.backgroundColor="transparent"
            }




        } else if (seleccion.classList.contains('readMode')) {
          modBody.style.backgroundColor = "#8c5131";
          for (let child of modHeader) {
            child.style.color = "#1a2c32"; 
          }

          for (let link of allDocument) {
            link.style.color = "#e2d1a5";
          }
          inputFiltroNoticia.forEach(elementInput =>{
            elementInput = elementInput.style.color="black"

          });
          
          generosContainer.style.backgroundColor="transparent"
          stopColor1.style.stopColor="rgb(226, 209, 165,0.1)"
          stopColor2.style.stopColor="rgb(140, 81, 49)"
          colorMenu.style.backgroundColor="#73422d"
          backgroundGeneros.style.backgroundColor="transparent"
          for (let child of generosContainer){
            child.style.backgroundColor="transparent"
          }



        } else {
          modBody.style.backgroundColor = "#1a2c32";
          for (let child of modHeader) {
            child.style.color = "#ffffff"; 
          }

          for (let link of allDocument) {
            link.style.color = "#ffffff";
          }       
          generosContainer.style.backgroundColor="#5faab180"
          stopColor1.style.stopColor="rgb(59, 117, 127,0.3)"
          stopColor2.style.stopColor="rgb(59, 117, 127,1)"
        }
        console.log(seleccion);
        
      });
    });
  });

  if (window.location.search.includes('lang=')) {
    document.querySelector('.lenguaje').classList.add('hidden');
    document.querySelector(".lenguaje").classList.remove('lenguaje');
    document.getElementById('contenido').classList.remove('hidden');
    document.querySelector('.header').classList.remove('hidden');
}




  


