$(document).ready( function() {
    var navPoint = $('a.navigation');

    navPoint.hover( function() {
       $(this).addClass('inverse');
       $(this).children('span').addClass('inverse');
    }, function() {
        $(this).removeClass('inverse');
        $(this).children('span').removeClass('inverse');
    });

    var heightHeader = $('.header_wrapper').height(), navigation = $('.flex.wrapper_nav');
    $(document).scroll( function() {
        if($(this).scrollTop() >= heightHeader) {
            navigation.addClass('fixed');
            $('.header_wrapper').css('margin-bottom', navigation.height());
        } else {
            navigation.removeClass('fixed');
            $('.header_wrapper').css('margin-bottom', 0);
        }
    });
    $(window).resize( function() {
        heightHeader = $('.header_wrapper').height();
    });

    navPoint.click( function () {
        var target = $(this).attr('href');
        if (target.length !== 0) {
            $('html, body').animate({scrollTop: $(target).offset().top - 42}, 700);
        }
        return false;
    });
});