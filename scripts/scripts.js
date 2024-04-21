$(window).scroll(function() {
    var hT = $('#generos').offset().top,
        hH = $('#generos').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    console.log((hT - wH), wS);
    if (wS > (hT + hH - wH)) {
        $('#generos').addClass('scrolled');
    } else {
        $('#generos').removeClass('scrolled');
    }
    if (wS <= 200) {
        $('#generos').removeClass('scrolled');
    }
});
