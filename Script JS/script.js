$(document).ready(function(){
    $('.carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        nextArrow: $('.carousel-button.next'),
        prevArrow: $('.carousel-button.prev')
    });
});