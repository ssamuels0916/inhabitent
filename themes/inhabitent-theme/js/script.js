(function($) {

    $('.search-submit').on('click', function(event) {

        event.preventDefault();
        event.stopPropagation();
        $('.search-field').toggle().blur();
    });

    $('.site-content').click(function() {
        console.log('working?');
        $('.search-field').hide();
    });

})(jQuery);