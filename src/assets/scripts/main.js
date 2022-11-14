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
                    $('#close-slidenav').on('click', function () {
                        $('.slide-nav').removeClass('nav-open');
                    });

                    $('#triggerSlideNav').on('click', function () {
                        $('.slide-nav').addClass('nav-open');
                    });

                    $(document).on("change", ".form_wrapper .wpcf7-list-item input[type='radio']", function () {
                        $(".form_wrapper .wpcf7-list-item label").removeClass("checked");
                        $(this).parent('label')[this.checked ? "addClass" : "removeClass"]("checked");
                    });

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

jQuery('#datetimepicker3').datetimepicker({
    format: 'd.m.Y H:i',
    inline: true,
    lang: 'ru'
});

let formSlick = jQuery("#form_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    draggable: false,
    dots: true,
    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                draggable: false,
                touchMove: false,
            }
        }
    ]
});

let currentTab = 0;
showTab(currentTab);

function showTab(n) {
    formSlick.slick('slickGoTo', n);

    let x = document.getElementsByClassName("tab");

    if (n == 0) {
        jQuery("#prevBtn").css('display', 'none');
    } else if (n == (x.length)) {
        jQuery('.buttons').removeClass('d-flex').addClass('d-none');
    } else if (n == (x.length - 1)) {
        jQuery("#nextBtn").html('Submit');
    } else {
        jQuery("#nextBtn").html('Next');
        jQuery("#nextBtn").removeClass('btn-white').removeClass('text-primary').addClass('border-white').addClass('text-white');
        jQuery("#prevBtn").css('display', 'inline');
        jQuery('.form .title').removeClass('d-none').addClass('d-block');
        jQuery('.buttons').removeClass('d-none').addClass('d-flex');
    }
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");

    if (n == 1 && !validateForm()) return false;
    currentTab = currentTab + n;

    if (currentTab >= x.length) {
        document.getElementById("slider-form").submit();

        return false;
    }

    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;

    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByClassName('form-control required');

    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            jQuery(y[i]).removeClass('invalid');
            y[i].className += " invalid";
            jQuery(y[i]).next('.invalid-feedback').remove();
            jQuery(y[i]).after('<div class="invalid-feedback d-block">Please fill in this field.</div>');
            valid = false;
        }
        else {
            jQuery(y[i]).removeClass('invalid');
            jQuery(y[i]).next('.invalid-feedback').remove();
        }
    }

    return valid;
}