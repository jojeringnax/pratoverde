$(document).ready( function() {
    var
        navPoint = $('a.navigation'),
        heightHeader = $('.header_wrapper').height(),
        navigation = $('.flex.wrapper_nav'),
        menuOpener = $('div.menu-small'),
        bookButton = $('.book_room_button'),
        footerTop = $(document).height() - $('footer').height(),
        selectCheckIn = $('select.check_select#checkin'),
        selectCheckOut = $('select.check_select#checkout')
    ;

    window.isOpenedMenu = false;

    window.formsQuantity = 1;


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
        if($(this).scrollTop() >= footerTop - 250) {
            $('.header_right#logo[data-page="book"]').css({'position': 'absolute', 'top': footerTop - 180});
        } else {
            $('.header_right#logo[data-page="book"]').css({'position': 'fixed', 'top': 70});
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

    $('.add_room').click( function() {
        var select_checkout = $('select.check_select#checkout');
        if(select_checkout.length >= 3) {
            return false;
        }
        window.formsQuantity++;
       $(selectCheckIn.clone()).insertAfter(selectCheckIn).addClass('number' + window.formsQuantity).data('number', window.formsQuantity);
       $(selectCheckOut.parent().clone()).insertAfter(selectCheckOut.parent()).addClass('number' + window.formsQuantity).data('number', window.formsQuantity).css('margin-right', -82).children('div.delete').css('display', 'block').data('number', window.formsQuantity);


        $('div.delete').click( function() {
            $('select.check_select#checkin.number'+$(this).data('number')).remove();
            $('div.flex.check_select_wrapper.number'+$(this).data('number')).remove();
        });

        /*$('select.check_select#checkout').change( function() {
            var number = 't_' + $(this).parent().data('number');
            $.ajax({
                url: 'book-ajax',
                data: {number: $(this).val()},
                dataType: 'json'
            });
        });*/
    });/*
    selectCheckOut.change( function() {
        $.ajax({
            url: 'book-ajax',
            data: {'number_1': $(this).val()},
            dataType: 'json'
        })
    })*/
});