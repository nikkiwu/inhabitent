(function ($) {
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 800) {
                $('.home .main-navigation a').css('color', '#248A83');
                $('.home .logo-white').css('display', 'none');
                $('.home .logo-green').css('display', 'inline-block');
                $('.home .site-header').css('position', 'fixed');
                $('.home .site-header').css('background', 'rgba(246,246,246,1)');

            } else {
                $('.home .main-navigation a').css('color', 'white');
                $('.home .logo-green').css('display', 'none');
                $('.home .logo-white').css('display', 'inline-block');
                $('.home .site-header').css('border-bottom', 'none');
                $('.home .site-header').css('position', 'absolute');
                $('.home .site-header').css('background', 'none');
            }
        });
    })
})(jQuery);


(function ($) {
    $(document).ready(function () {
        $('.search-button').on('click', function () {
            $('.search-field').addClass('search-show');
            console.log('search toggle clicked');
        });

        $('.search-field').on('blur', function () {
            $('.search-field').removeClass('search-show');
            console.log('blurred');
        });
    });
})(jQuery);


