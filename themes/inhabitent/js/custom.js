(function ($) {




    $('.site-header .icon-search').on('click', function (event) {
        event.preventDefault();

        $('.site-header .search-field').animate({
            width: 'toggle'
        }).focus();

    });

    $('.site-header .search-field').on('focusout', function () {
        $(this).animate({
            width: 'toggle'
        });

    });

})(jQuery);