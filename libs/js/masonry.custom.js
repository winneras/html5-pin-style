var container = jQuery('.masonry-container');

jQuery(window).load(function() {
    container.masonry({
        columnWidth: '.masonry-item',
        itemSelector: '.masonry-item',
    });
});


/*ajax eg*/

jQuery(document).ready(function($) {
    var ajaxurl = '/wp-admin/admin-ajax.php';

    jQuery('#load-more').click(function() {
        $.ajax({
            type: 'post',
            url: ajaxurl,
            //dataType: 'json',
            data: {
                action: 'get_content_summary',
                pageNumber: 1,
                numPosts: 3
            },
            success: function(html) {
                // This outputs the result of the ajax request
                jQuery('.site-info').append(html);
                console.log(html);
            },
            error: function(errorThrown) {
                console.log(errorThrown);
            }
        });
    });
});