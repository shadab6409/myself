(function($) {
    "use strict";

    var conf = $('.testi-slider').data('slick');
    var md_slidesToShow
    if (conf.slidesToShow == 1) {
        md_slidesToShow = 1;
    } else {
        md_slidesToShow = 2;
    }

    // testimonial slider 
    $('.testi-slider').slick({
        autoplay: conf.autoplay,
        dots: false,
        slidesToShow: conf.slidesToShow,
        slidesToScroll: 1,
        arrows: false,
        autoplaySpeed: 3000,
        speed: 1500,
        fade: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: conf.slidesToShow,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: md_slidesToShow,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

})(jQuery);