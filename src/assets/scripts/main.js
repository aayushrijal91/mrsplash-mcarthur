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
                        arrows: true,
                        dots: true,
                        slidesToScroll: 1,
                        prevArrow: $("#homepage_deal_prev"),
                        nextArrow: $("#homepage_deal_next"),
                    });
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