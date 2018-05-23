// el menu comienza desaparecido.
$('.container-menu').hide();
// trasladamos el menu 100% a la izquierda (fuera de la pantalla).
$('.container-menu').css({
    left: '-100%'
});
// al hacer click traemos el menu a la pantalla con una animacion.
$('.icon-menu').on('click', () => {
    $('.container-menu').show();
    $('.container-menu').animate({
        left: '0'
    }, 'swing');

    // achicamos el main.
    $('main').addClass("main-scale");
});

// al hacer click en la 'X' volvemos el menu a la izquierda con una animacion
$('.close').on('click', () => {
    $('.container-menu').animate({
        left: '-100%'
    }, 'swing');

    // volvemos el main a su tamano normal.
    $('main').removeClass("main-scale");
});