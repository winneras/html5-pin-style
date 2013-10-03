jQuery(window).load(function() {
    var container = jQuery('.masonry-container');
    
    var ajaxurl = '/wp-admin/admin-ajax.php';
    
    container.masonry({
        columnWidth: '.masonry-item',
        itemSelector: '.masonry-item'
    });

    jQuery('#load-more').click(function() {
        jQuery.ajax({
            type: 'post',
            url: ajaxurl,
            //dataType: 'json',
            data: {
                action: 'get_content_summary',
                pageNumber: 2,
                numPosts: 3
            },
            success: function(html) {
                // This outputs the result of the ajax request
                var el = jQuery(html);
                container.append(el).masonry('appended', el, true);
                //console.log(html);
            },
            error: function(errorThrown) {
                console.log(errorThrown);
            }
        });
    });
});