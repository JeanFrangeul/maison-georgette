jQuery(document).ready(function ($) {

    $('.home-slider').slick({
        infinite: false,
        slidesToShow: 6,
        slidesToScroll: 6,
        autoplay: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {

                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});