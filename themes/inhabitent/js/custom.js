(function ($) {




    $('.icon-search').on('click', function (event) {
        event.preventDefault();

        $('.search-field').animate({
            width: 'toggle'
        }).focus();

    });

    $('.search-field').on('focusout', function () {
        $(this).animate({
            width: 'toggle'
        });

    });

})(jQuery);