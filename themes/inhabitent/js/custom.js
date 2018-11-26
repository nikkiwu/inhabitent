jQuery(document).ready(function ($) {

    const heroHeight = $('.hero-image').height();

    // add inverse header class to pages with hero image
    if ($('div').hasClass('hero-image') && $(window).scrollTop() <= heroHeight) {
        $('header').addClass('header-inverse');
    }

    // remove inverse header class on scroll
    $(window).scroll(function () {
        const scroll = $(window).scrollTop();

        if (scroll >= heroHeight) {
            $('header').removeClass('header-inverse');
        } else {
            $('header').addClass('header-inverse');
        }
    });

    // expand search bar in navigation
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

    $('.archive-select').change(function () {
        const url = $(this).val();
        if (url) {
            window.location = url;
        }
        return false;
    });

});