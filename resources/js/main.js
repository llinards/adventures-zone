$(document).ready(function () {

    (function ($) {
        $(document).on("ready", function () {
            var urlHash = window.location.href.split("#")[1];
            $('html,body').animate({
                scrollTop: $('.' + urlHash + ', #' + urlHash + ',[name=' + urlHash + ']').first().offset().top
            }, 500);
        });

    })(jQuery);

    (function ($) {
        $('a[href*=\\#]').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    })(jQuery);

    $('.navbar-collapse a').click(function () {
        $(".navbar-collapse").collapse('hide');
    });

    $('.attractions').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        swipeToSlide: true,
        arrows: true,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    swipeToSlide: true,
                    infinite: true,
                    arrows: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    arrows: true,
                    swipeToSlide: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                    swipeToSlide: true,
                }
            }
        ]
    });

    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            // alwaysShowClose: true
        });
    });

    $('.product-gallery').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        swipeToSlide: true,
        arrows: true,
        nextArrow: $('.nextGallery'),
        prevArrow: $('.prevGallery'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    swipeToSlide: true,
                    infinite: true,
                    arrows: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    arrows: true,
                    swipeToSlide: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: true,
                    swipeToSlide: true,
                }
            }
        ]
    });
});
