var container = jQuery('.masonry-container');

jQuery(window).load(function() {
    container.masonry({
        columnWidth: '.masonry-item',
        itemSelector: '.masonry-item',
    });
});


/*ajax eg*/
/*
jQuery.ajax({
    type: "POST",
    url: ajax_url,
    data: ajax_data,
    cache: false,
    success: function (html) {
        if (html.length > 0) {
            jQuery("#content").append(html).masonry('reload');
        }
    });
});
*/