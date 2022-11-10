// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({
                    duration: 1500,
                });
                $(() => {
                    $('#homepage_deal_1_slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: true,
                        slidesToScroll: 1,
                        autoplay: true,
                        prevArrow: $("#homepage_deal_prev"),
                        nextArrow: $("#homepage_deal_next"),
                    });

                    $('#homepage_services_slider').slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        responsive: [
                            {
                                breakpoint: 1560,
                                settings: {
                                    slidesToShow: 2,
                                    arrows: false,
                                }
                            },
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                            {
                                breakpoint: 540,
                                settings: {
                                    slidesToShow: 1,
                                }
                            }
                        ]
                    });

                    $('#services_slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        arrows: true,
                        centerPadding: '229px',
                        autoplay: true,
                        dots: true,
                        prevArrow: $("#services_prev"),
                        nextArrow: $("#services_next"),
                        responsive: [
                            {
                                breakpoint: 1560,
                                settings: {
                                    centerPadding: "60px",
                                }
                            },
                            {
                                breakpoint: 1100,
                                settings: {
                                    centerMode: false,
                                    centerPadding: 0,
                                }
                            }
                        ]
                    })
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1000) {
        jQuery('#back-top').fadeIn();
        jQuery("#back-top").addClass('active');
    } else {
        jQuery('#back-top').fadeOut();
        jQuery("#back-top").removeClass('active');
    }
});
jQuery('#back-top').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 1000);
    return false;
});