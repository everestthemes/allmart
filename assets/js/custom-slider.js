"use strict";

(function ($) {

    // Main Hero Slider
    $('.hero-slider-home-v2').slick({
        dots: false,
        autoplay: true,
        speed: 600,
        arrows: true,
        slidesToShow: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                arrows: false
                }
            }
        ]
    });

    // Review Slider
    $('.reviews-slider-home-v2').slick({
        dots: true,
        autoplay: true,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,    
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

})(jQuery);
