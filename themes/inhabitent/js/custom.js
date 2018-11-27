jQuery(document).ready(function ($) {

    // Responsive Navbar
    const heroHeight = $('.hero-image').height();

    if ($('div').hasClass('hero-image') && $(window).scrollTop() <= heroHeight) {
        $('header').addClass('header-two');
    }

    $(window).scroll(function () {
        const scroll = $(window).scrollTop();

        if (scroll >= heroHeight) {
            $('header').removeClass('header-two');
        } else {
            $('header').addClass('header-two');
        }
    });


    // Blur on search
    $('.main-navigation').find('.search-form').hide();

    $('.search-button').on('click', function () {
        $('.main-navigation').find('.search-form').animate({'width': 'toggle'});
        $('.main-navigation').find('.search-field').focus();
    });

    $('.main-navigation').find('.search-form').on('focusout', function () {
        if (!$(this).find('.search-field').val()) {
            $('.main-navigation').find('.search-form').animate({'width': 'toggle'});
        }
    });

    //404 page
    $('.archive-select').change(function () {
        const url = $(this).val();
        if (url) {
            window.location = url;
        }
        return false;
    });

});