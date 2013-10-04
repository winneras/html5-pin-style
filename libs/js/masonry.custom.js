function preload(arrayOfImages, callback){
    jQuery(arrayOfImages).each(function(){
        jQuery('<img/>')[0].src = this;
    });
    callback();
}

jQuery(window).load(function() {
    var container = jQuery('.masonry-container');
    var button = jQuery('#load-more');
    var ajaxurl = '/wp-admin/admin-ajax.php';
    var page = 2;
    
    container.masonry({
        columnWidth: '.masonry-item',
        itemSelector: '.masonry-item'
    });

    jQuery(button).click(function() {
        jQuery.ajax({
            type: 'post',
            url: ajaxurl,
            //dataType: 'json',
            data: {
                action: 'get_content_summary',
                pageNumber: page,
            },
            success: function(html) {
                // This outputs the result of the ajax request
                
                var el = jQuery(html);
                var images = el.find('img').map(function(){return this.src}).get();
                preload(images,function(){
                    container.append(el).masonry('appended', el, true);
                    //console.log(images);
                    page++;
                });                              
                //console.log(page);
                //console.log(el);
                
            },
            error: function(errorThrown) {
                console.log(errorThrown);
            }
        });
    });
});