jQuery(document).ready(function ($) {

    var mySlider = $(".slider");
    mySlider.each(function() {
        $(this).slick({
            mobileFirst: true,
            infinite: false,
            arrows: false,
            autoplay: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2,
            initialSlide: 1,
    
            responsive: [{
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3,
                        initialSlide: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        centerMode: false,
                        arrows: true,
                        slidesToShow: 6,
                        slidesToScroll: 6,
                    }
                }
            ]
        });
    })

    /*$('.home-slider-1').slick({
        mobileFirst: true,
        infinite: false,
        arrows: false,
        autoplay: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2,
        initialSlide: 1,

        responsive: [{
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3,
                    initialSlide: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    arrows: true,
                    slidesToShow: 6,
                    slidesToScroll: 6,
                }
            }
        ]
    });
    $('.home-slider-2').slick({
        mobileFirst: true,
        infinite: false,
        arrows: false,
        autoplay: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2,
        initialSlide: 1,

        responsive: [{
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3,
                    initialSlide: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    arrows: true,
                    slidesToShow: 6,
                    slidesToScroll: 6,
                }
            }
        ]
    });

    $('.home-slider-3').slick({
        mobileFirst: true,
        infinite: false,
        arrows: false,
        autoplay: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2,
        initialSlide: 1,

        responsive: [{
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3,
                    initialSlide: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    arrows: true,
                    slidesToShow: 6,
                    slidesToScroll: 6,
                }
            }
        ]
    });
    $('.home-slider-4').slick({
        mobileFirst: true,
        infinite: false,
        arrows: false,
        autoplay: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2,
        initialSlide: 1,

        responsive: [{
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3,
                    initialSlide: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    arrows: true,
                    slidesToShow: 6,
                    slidesToScroll: 6,
                }
            }
        ]
    });
    $('.home-slider-5').slick({
        mobileFirst: true,
        infinite: false,
        arrows: false,
        autoplay: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2,
        initialSlide: 1,

        responsive: [{
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3,
                    initialSlide: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    arrows: true,
                    slidesToShow: 6,
                    slidesToScroll: 6,
                }
            }
        ]
    });*/
});