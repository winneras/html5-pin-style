var container = jQuery('.masonry-container');

jQuery(window).load(function() {
    container.masonry({
        columnWidth: '.masonry-item',
        itemSelector: '.masonry-item',
    });
});