//Main scripts 

(function($) {
    "use strict"; 

    function avoShowcase12 (){
             var parallaxShowCase; 
            var parallaxShowCaseOptions = {
                speed: 1000,
                autoplay: true,
                parallax: true,
                mousewheel: true,
                loop: true,
                on: { 
                    init: function () {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            $(swiper.slides[i])
                                .find('.bg-img')
                                .attr({
                                    'data-swiper-parallax': 0.75 * swiper.width
                                });
                        }
                    },
                    resize: function () {
                        this.update();
                    }
                },
                pagination: {
                    el: '.showcase-full .parallax-slider .swiper-pagination',
                    type: 'fraction',
                    clickable: true
                },

                navigation: {
                    nextEl: '.showcase-full .parallax-slider .next-ctrl',
                    prevEl: '.showcase-full .parallax-slider .prev-ctrl'
                },
                observer: true,  
                observeParents: true,
            };
            var parallaxShowCase= new Swiper( '.showcase-full .parallax-slider', parallaxShowCaseOptions);
    }
    avoShowcase12();

    function avoSlider8 () {
        $('.avo-slider.style-8').each(function () {
            var mySlider    = $( this );
            var myData      = mySlider.data( 'slider-settings' );
            var myspeed     = myData.speed;
            var myautoplay  = myData.autoplay;
            var myloop      = myData.loop;
            var swiperBusImgOptions = {
                speed       : myspeed,
                loop        : myloop,
                slidesPerView: 1,
                spaceBetween: 0,
                effect: 'fade',
                autoplay    : myautoplay,
                navigation: {
                    nextEl: '.slider-bus .next-ctrl',
                    prevEl: '.slider-bus .prev-ctrl'
                },
                observer: true,  
                observeParents: true,
            };
            var swiperBusContentOptions = {
                speed       : myspeed,
                loop        : myloop,
                slidesPerView: 1,
                spaceBetween: 30,
                autoplay    : myautoplay,
                pagination: {
                    el: '.slider-bus .swiper-pagination',
                    type: 'fraction',
                },
                observer: true,  
                observeParents: true,
            };
            var swiperBusImg = new Swiper( '.slider-bus .swiper-img', swiperBusImgOptions);
            var swiperBusContent = new Swiper( '.slider-bus .swiper-content', swiperBusContentOptions);
        });
    }
    avoSlider8();

    /* Portfolio-6 */ 
    function avoPortfolio6() {
        $('.portfolio.style-6').each(function () {
            var mySlider    = $( this );
            var swiperPortfolioOptions = {
                speed       : 1000,
                loop        : true,
                slidesPerView: 1,
                spaceBetween: 0,
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 0
                    },
                    991: {
                        slidesPerView: 3,
                        spaceBetween: 0
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 0 
                    }
                },
                pagination: {
                    el: '.caroul .swiper-pagination',
                    type: 'progressbar',
                },

                navigation: {
                    nextEl: '.caroul .swiper-button-next',
                    prevEl: '.caroul .swiper-button-prev'
                },
                observer: true,  
                observeParents: true,
            };
            var swiperBusImg = new Swiper( '.caroul .swiper-container', swiperPortfolioOptions);
        });
    }
    avoPortfolio6();

    $('[data-carousel="swiper"]').each(function () {

	    var containe = $(this).find('[data-swiper="container"]').attr('id');
	    var pagination = $(this).find('[data-swiper="pagination"]').attr('id');
	    var prev = $(this).find('[data-swiper="prev"]').attr('id');
	    var next = $(this).find('[data-swiper="next"]').attr('id');
	    var items = $(this).data('items');
	    var autoplay = $(this).data('autoplay');
	    var iSlide = $(this).data('initial');
	    var loop = $(this).data('loop');
	    var parallax = $(this).data('parallax');
	    var space = $(this).data('space');
	    var speed = $(this).data('speed');
	    var center = $(this).data('center');
	    var effect = $(this).data('effect');
	    var direction = $(this).data('direction');
	    var mousewheel = $(this).data('mousewheel');

	    // Configuration
	    var conf = {

	    };

	    // Responsive
	    if ($(this).hasClass('showcase-grid')) {
	        var conf = {

	            navigation: {
	                nextEl: '.swiper-button-next',
	                prevEl: '.swiper-button-prev'
	            },

	            breakpoints: {
	                0: {
	                    slidesPerView: 1,
	                },
	                640: {
	                    slidesPerView: 2,
	                },
	                768: {
	                    slidesPerView: 2,
	                },
	                1024: {
	                    slidesPerView: 4,
	                },
                },
                observer: true,  
                observeParents: true,
	        };
	    };

	    if ($(this).hasClass('showcase-carus')) {
	        var conf = {

	            navigation: {
	                nextEl: '.swiper-button-next',
	                prevEl: '.swiper-button-prev'
	            },

	            breakpoints: {
	                0: {
	                    slidesPerView: 1,
	                    spaceBetween: 0,
	                },
	                640: {
	                    slidesPerView: 1,
	                    spaceBetween: 0,
	                },
	                768: {
	                    slidesPerView: 2,
	                    spaceBetween: 30,
	                },
	                1024: {
	                    slidesPerView: 2,
	                    spaceBetween: 200,
	                },
                },
                observer: true,  
                observeParents: true,
	        };
	    };

	    if (items) {
	        conf.slidesPerView = items
	    };
	    if (autoplay) {
	        conf.autoplay = autoplay
	    };
	    if (iSlide) {
	        conf.initialSlide = iSlide
	    };
	    if (center) {
	        conf.centeredSlides = center
	    };
	    if (loop) {
	        conf.loop = loop
	    };
	    if (parallax) {
	        conf.parallax = parallax
	    };
	    if (space) {
	        conf.spaceBetween = space
	    };
	    if (speed) {
	        conf.speed = speed
	    };
	    if (mousewheel) {
	        conf.mousewheel = mousewheel
	    };
	    if (effect) {
	        conf.effect = effect
	    };
	    if (direction) {
	        conf.direction = direction
	    };
	    if (prev) {
	        conf.prevButton = '#' + prev
	    };
	    if (next) {
	        conf.nextButton = '#' + next
	    };
	    if (pagination) {
	        conf.pagination = '#' + pagination,
	            conf.paginationClickable = true
	    };

	    // Initialization
	    if (containe) {
	        var initID = '#' + containe;
	        var init = new Swiper(initID, conf);
	    };
    });
    
    function avoTeam4() {

        $('.team .team-container').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '.team .prev',
            nextArrow: '.team .next',
            dots: false,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }
    avoTeam4();

    $(document).ready(function(){
            $(".vc_custom_heading").find("b").contents().unwrap();
    });

})(jQuery);