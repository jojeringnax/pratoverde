$(document).ready( function() {
    var
        navPoint = $('a.navigation'),
        heightHeader = $('.header_wrapper').height(),
        navigation = $('.flex.wrapper_nav'),
        menuOpener = $('div.menu-small'),
        bookButton = $('.book_room_button');

    window.isOpenedMenu = false;


    navPoint.hover( function() {
       $(this).addClass('inverse');
       $(this).children('span').addClass('inverse');
    }, function() {
        $(this).removeClass('inverse');
        $(this).children('span').removeClass('inverse');
    });

    $(document).scroll( function() {
        if($(this).scrollTop() >= heightHeader) {
            navigation.addClass('fixed');
            menuOpener.addClass('fixed');
            $('.header_wrapper').css('margin-bottom', navigation.height());
            bookButton.css('margin-left', 0);
        } else {
            navigation.removeClass('fixed');
            menuOpener.removeClass('fixed');
            $('.header_wrapper').css('margin-bottom', 0);
            bookButton.css('margin-left', 10);
        }
    });

    $(window).resize( function() {
        heightHeader = $('.header_wrapper').height();
    });

    navPoint.click( function () {
        var target = $(this).attr('href');
        if (target.length !== 0) {
            $('html, body').animate({scrollTop: $(target).offset().top - 42}, 700);
            if(window.isOpenedMenu) {
                navigation.animate({'height': 0}, 500);
                setTimeout(function() {navigation.css('display', 'none');}, 500);
                menuOpener.animate({'top': 53}, 500);
                window.isOpenedMenu = !window.isOpenedMenu;
            }
        }
        return false;
    });
    menuOpener.click( function () {
        var margin = $('.book_room_button').height();
        if (window.isOpenedMenu) {
            navigation.animate({'height': 0}, 500);
            $(this).animate({'top': margin || 0}, 500);
            setTimeout(function() {navigation.css('display', 'none');}, 500);
        } else {
            navigation.css('display', 'flex').animate({'height': '80%'}, 500);
            $(this).animate({'top': $(window).height()*0.8 + (margin || 0)}, 500);
        }
        window.isOpenedMenu = !window.isOpenedMenu;
    });
});