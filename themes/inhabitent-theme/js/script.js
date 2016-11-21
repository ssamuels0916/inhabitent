(function($) {



    $(function() {
        $('.search-submit').on('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $('.search-field').toggle().focus();
        });

        $('.site-content').click(function() {
            $('.search-field').hide();
        });


    });
})(jQuery);