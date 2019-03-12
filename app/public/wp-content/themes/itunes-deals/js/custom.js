var lastScroll = 0;
var max = 0;

jQuery(document).on('ready', function() {
    
    max = jQuery('.vetical_slider .slide').length + 1;
    jQuery.each(jQuery('.vertical_slider .slide .slide_header'), function() {
        if (jQuery(window).scrollTop() >= jQuery(this).offset().top) {
            var num = parseInt(jQuery(this).closest('.slide').attr('id'));
            if (num != max) {
                jQuery('.vertical_slider .slide_active').removeClass('slide_active');
                jQuery('.vertical_slider .tab_active').removeClass('tab_active');
                jQuery('.vertical_slider #' + num + 'slide').addClass('slide_active');
                jQuery('.vertical_slider #slick-slide0' + (num - 1)).addClass('tab_active');
            }
        }
    });
});

jQuery(window).on("scroll resize", function () {
    var currentScroll = jQuery(this).scrollTop();
    if (jQuery('.vertical_slider').length > 0) {
        if (currentScroll > lastScroll) {
            
            if (jQuery(window).scrollTop() >= jQuery('.vertical_slider').offset().top && jQuery(window).scrollTop() + jQuery(window).height() <= jQuery('.vertical_slider').offset().top + jQuery('.vertical_slider').height() + 20) {
                jQuery('.vertical_slider').addClass('fixed');
            } else {
                jQuery('.vertical_slider').removeClass('fixed');
            }

            if (jQuery('.vertical_slider .slide_active').next('.slide').length > 0 && jQuery(window).scrollTop() + jQuery(window).height() >= jQuery('.vertical_slider .slide_active').next('.slide').find('.slide_header').offset().top) {
                var num = parseInt(jQuery('.vertical_slider .slide_active').attr('id')) + 1;
                if (num != max) {
                    jQuery('.vertical_slider .slide_active').removeClass('slide_active');
                    jQuery('.vertical_slider .tab_active').removeClass('tab_active');
                    jQuery('.vertical_slider #' + num + 'slide').addClass('slide_active');
                    jQuery('.vertical_slider #slick-slide0' + (num - 1)).addClass('tab_active');
                }
            }
        } else {
            if (jQuery('.vertical_slider').offset().top <= jQuery(window).scrollTop() + 20 && jQuery(window).scrollTop() + jQuery(window).height() <= jQuery('.vertical_slider').offset().top + jQuery('.vertical_slider').height()) {
                jQuery('.vertical_slider').addClass('fixed');
            } else {
                jQuery('.vertical_slider').removeClass('fixed');
            }

            if (jQuery(window).scrollTop() + jQuery(window).height() < jQuery('.vertical_slider .slide_active .slide_header').offset().top) {
                var num = parseInt(jQuery('.vertical_slider .slide_active').attr('id')) - 1;
                if (num != 0) {
                    jQuery('.vertical_slider .slide_active').removeClass('slide_active');
                    jQuery('.vertical_slider .tab_active').removeClass('tab_active');
                    jQuery('.vertical_slider #' + num + 'slide').addClass('slide_active');
                    jQuery('.vertical_slider #slick-slide0' + (num - 1)).addClass('tab_active');
                }
            }
        }
    }
    lastScroll = currentScroll
});

jQuery('.vertical_slider .slide_indicators li').on('click', function() {
    num = parseInt(jQuery(this).attr('id').substr(jQuery(this).attr('id').length - 1)) + 1;
    jQuery('html, body').animate({
        scrollTop: (jQuery('.vertical_slider #' + num + 'slide').offset().top)
    }, 500);
});



jQuery(document).ready(function () {
    if (jQuery('.boxes_repeater .swiper-container').length > 0) {
    //initialize swiper when document ready
        var mySwiper = new Swiper ('.boxes_repeater .swiper-container', {
        // Optional parameters
        loop: true,

        // If we need pagination
        pagination: {
        el: '.boxes_repeater .swiper-pagination',
        clickable: true,
        },

        // Navigation arrows
        navigation: {
        nextEl: '.boxes_repeater .swiper-button-next',
        prevEl: '.boxes_repeater .swiper-button-prev',
        }
        });
    }
});


jQuery(document).ready(function () {
    if (jQuery('.testimonial_block .swiper-container').length > 0) {
        //initialize swiper when document ready
        var mySwiper = new Swiper ('.testimonial_block .swiper-container', {
        // Optional parameters
        loop: true,

        // If we need pagination
        pagination: {
        el: '.testimonial_block .slide-nav',
        clickable: true,
        },

        // Navigation arrows
        navigation: {
        nextEl: '.testimonial_block .swiper-button-next',
        prevEl: '.testimonial_block .swiper-button-prev',
        }
        });
    }
});

jQuery(window).on("resize load", function () {
    height = 0;
    jQuery('.testimonial_block blockquote').each(function() {
        jQuery(this).css('height', '');
        curr_height = jQuery(this).height();
        if (curr_height > height) {
            height = curr_height;
        }
    });

    jQuery('.testimonial_block blockquote').each(function() {
        jQuery(this).height(height);
    });
});