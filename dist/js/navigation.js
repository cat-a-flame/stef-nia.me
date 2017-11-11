$(document).ready(function() {
    // Animate navigation
    $('.navigation_wrapper_list_item_link').on('click', function(event) {
        $('.navigation_wrapper_list_item_link').removeClass('stateActive');
        $('.navigation_wrapper_list').removeClass('open');
        $(this).addClass('stateActive');
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 57
            }, 500);
        }
    });

    // Toggle mobile menu
    $('[data-toggle="navigation"]').on('click', function() {
        $('.navigation_wrapper_list').toggleClass('open');
    });
});
