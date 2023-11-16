$(document).ready(function(){
    $('.carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next'),
        prevArrow: $('.carousel-button.prev')
    });
});

$(document).ready(function(){
    $('.carousel1').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next1'),
        prevArrow: $('.carousel-button.prev1')
    });
});

$(document).ready(function(){
    $('.carousel2').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next2'),
        prevArrow: $('.carousel-button.prev2')
    });
});

$(document).ready(function(){
    $('.carousel3').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next3'),
        prevArrow: $('.carousel-button.prev3')
    });
});

$(document).ready(function(){
    $('.carousel4').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next4'),
        prevArrow: $('.carousel-button.prev4')
    });
});

$(document).ready(function(){
    $('.carousel5').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next5'),
        prevArrow: $('.carousel-button.prev5')
    });
});

$(document).ready(function(){
    $('.carousel6').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next6'),
        prevArrow: $('.carousel-button.prev6')
    });
});

$(document).ready(function(){
    $('.carousel7').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next7'),
        prevArrow: $('.carousel-button.prev7')
    });
});

$(document).ready(function(){
    $('.carousel8').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next8'),
        prevArrow: $('.carousel-button.prev8')
    });
});

function abrirPagina(element) {
    var url = element.getAttribute('data-url');
    window.location.href = url;
}