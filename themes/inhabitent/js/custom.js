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


    const $mainNav = $('.main-navigation');
    // Blur on search
    $mainNav.find('.search-form').hide();

    $('.search-button').on('click', function () {
        $mainNav.find('.search-form').animate({'width': 'toggle'});
        $mainNav.find('.search-field').focus();
    });

    $mainNav.find('.search-form').on('focusout', function () {
        if (!$(this).find('.search-field').val()) {
            $mainNav.find('.search-form').animate({'width': 'toggle'});
        }
    });

});