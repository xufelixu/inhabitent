(function ($) {
    $(function () {

        const $iconSearch = $('.site-header .icon-search');

        $iconSearch.on('click', function (event) {
            event.preventDefault();

            $iconSearch.animate({
                width: 'toggle'
            }).focus();

        });

        $iconSearch.on('focusout', function () {
            $(this).animate({
                width: 'toggle'
            });

        });
    });
})(jQuery);