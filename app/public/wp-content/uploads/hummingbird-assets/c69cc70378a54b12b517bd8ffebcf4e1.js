/**handles:custom-js**/
var lastScroll = 0;
var max = 0;

jQuery(document).on('ready', function() {
    
    max = jQuery('.vetical_slider .slide').length + 1;
    jQuery.each(jQuery('.slide .slide_header'), function() {
        if (jQuery(window).scrollTop() >= jQuery(this).offset().top) {
            var num = parseInt(jQuery(this).closest('.slide').attr('id'));
            console.log(num)
            if (num != max) {
                console.log('hi');
                jQuery('.slide_active').removeClass('slide_active');
                jQuery('.tab_active').removeClass('tab_active');
                jQuery('#' + num + 'slide').addClass('slide_active');
                jQuery('#slick-slide0' + (num - 1)).addClass('tab_active');
            }
        }
    });
});

jQuery(window).on("scroll resize", function () {
    var currentScroll = jQuery(this).scrollTop();
    if (currentScroll > lastScroll) {
        
        if (jQuery(window).scrollTop() >= jQuery('.vertical_slider').offset().top && jQuery(window).scrollTop() + jQuery(window).height() <= jQuery('.vertical_slider').offset().top + jQuery('.vertical_slider').height() + 20) {
            jQuery('.vertical_slider').addClass('fixed');
        } else {
            jQuery('.vertical_slider').removeClass('fixed');
        }

        if (jQuery('.slide_active').next('.slide').length > 0 && jQuery(window).scrollTop() + jQuery(window).height() >= jQuery('.slide_active').next('.slide').find('.slide_header').offset().top) {
            var num = parseInt(jQuery('.slide_active').attr('id')) + 1;
            if (num != max) {
                jQuery('.slide_active').removeClass('slide_active');
                jQuery('.tab_active').removeClass('tab_active');
                jQuery('#' + num + 'slide').addClass('slide_active');
                jQuery('#slick-slide0' + (num - 1)).addClass('tab_active');
            }
        }
    } else {
        if (jQuery('.vertical_slider').offset().top <= jQuery(window).scrollTop() + 20 && jQuery(window).scrollTop() + jQuery(window).height() <= jQuery('.vertical_slider').offset().top + jQuery('.vertical_slider').height()) {
            jQuery('.vertical_slider').addClass('fixed');
        } else {
            jQuery('.vertical_slider').removeClass('fixed');
        }

        if (jQuery(window).scrollTop() + jQuery(window).height() < jQuery('.slide_active .slide_header').offset().top) {
            var num = parseInt(jQuery('.slide_active').attr('id')) - 1;
            if (num != 0) {
                jQuery('.slide_active').removeClass('slide_active');
                jQuery('.tab_active').removeClass('tab_active');
                jQuery('#' + num + 'slide').addClass('slide_active');
                jQuery('#slick-slide0' + (num - 1)).addClass('tab_active');
            }
        }
    }
    lastScroll = currentScroll
});

jQuery('.slide_indicators li').on('click', function() {
    num = parseInt(jQuery(this).attr('id').substr(jQuery(this).attr('id').length - 1)) + 1;
    jQuery('html, body').animate({
        scrollTop: (jQuery('#' + num + 'slide').offset().top)
    }, 500);
});



jQuery(document).ready(function () {
    //initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },

    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    }
    });
});