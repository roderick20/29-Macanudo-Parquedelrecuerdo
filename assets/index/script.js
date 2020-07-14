jQuery(document).ready(function ($) {
    if (typeof jQuery('.ult-carousel-3749864475ee3dd0ab0840').slick == "function") {
        $('.ult-carousel-3749864475ee3dd0ab0840').slick({
            dots: false,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 300,
            infinite: true,
            arrows: true,
            nextArrow: '<button type="button" role="button" aria-label="Next" style="color:#dbb66d; font-size:55px;" class="slick-next default"><i class="ultsl-arrow-right4"></i></button>',
            prevArrow: '<button type="button" role="button" aria-label="Previous" style="color:#dbb66d; font-size:55px;" class="slick-prev default"><i class="ultsl-arrow-left4"></i></button>',
            slidesToScroll: 1,
            slidesToShow: 3,
            swipe: true,
            draggable: true,
            touchMove: true,
            pauseOnHover: true,
            responsive: [{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            pauseOnDotsHover: true,
            customPaging: function (slider, i) {
                return '<i type="button" style= "color:#333333;" class="ultsl-record" data-role="none"></i>';
            },
        });
    }
});

