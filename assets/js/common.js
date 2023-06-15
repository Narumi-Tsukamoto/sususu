jQuery(function($){
    $('.hum').click(function () {
        $('.hum').toggleClass('active');
        $('.nav').toggleClass('active');
    });
    $('.contact-slider').slick({
        autoplay: true,
        autoplaySpeed: 0,
        variableWidth: true,
        arrows: false,
        speed: 10000,
        cssEase: "linear",
        pauseOnHover: false,
        pauseOnFocus: false,
        draggable: false,
        rtl: true,
    });
});