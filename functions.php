<?php
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

add_filter('the_generator', 'ph_wp_generator');
add_action('widgets_init', 'ph_widgets');

//change wordpress default menu li class to bootstrap default
add_filter('nav_menu_css_class', 'ph_nav_class', 10, 2);

function ph_nav_class($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

//load bootstrap and other js
add_action('wp_enqueue_scripts', 'ph_enqueue_scripts');

function ph_enqueue_scripts() {
    wp_enqueue_script('jquery', '', '', '', TRUE);
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/libs/js/bootstrap.min.js', '', '', TRUE);
    if (!is_single()) {
        wp_enqueue_script('masonry', get_stylesheet_directory_uri() . '/libs/js/masonry.pkgd.min.js', '', '', TRUE);
        wp_enqueue_script('masonry-custom', get_stylesheet_directory_uri() . '/libs/js/masonry.custom.js', '', '', TRUE);
    }
}

register_nav_menu('top_menu', 'Top Menu');

function ph_wp_generator() {
    echo '<meta name="generator" content="" />';
}

if (function_exists('add_image_size')) {
    add_image_size('category-thumb', 300, 9999); //300 pixels wide (and unlimited height)
}

function ph_widgets() {
    register_sidebar(
            array(
                'name' => 'NavBarRight',
                'id' => 'widget-nav-right',
                'class' => '',
                'before_widget' => '<div id="%1$s" class="widget %2$s nav navbar-nav navbar-right">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );
    register_sidebar(
            array(
                'name' => 'Inline',
                'id' => 'widget-inline',
                'class' => '',
                'before_widget' => '<div id="%1$s" class="widget %2$s masonry-item col-md-4 col-lg-3"><div class="thumbnail">',
                'after_widget' => '</div></div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );

    register_sidebar(
            array(
                'name' => 'Footer',
                'id' => 'widget-footer',
                'class' => '',
                'before_widget' => '<div id="%1$s" class="widget %2$s col-md-4 col-lg-3">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );
}

function ph_content_nav($html_id) {
    global $wp_query;

    $html_id = esc_attr($html_id);

    if ($wp_query->max_num_pages > 1) :
        ?>
        <nav id="<?php echo $html_id; ?>" class="col-md-12 clearfix" role="navigation">
            <div class="nav-previous pull-left"><?php next_posts_link(__('<span class="glyphicon glyphicon-chevron-left"></span> Older posts', 'twentytwelve')); ?></div>
            <div class="nav-next pull-right"><?php previous_posts_link(__('Newer posts <span class="glyphicon glyphicon-chevron-right"></span>', 'twentytwelve')); ?></div>
        </nav><!-- #<?php echo $html_id; ?> .navigation -->
    <?php elseif (is_single()) : ?>

        <nav id="<?php echo $html_id; ?>" class="col-md-12 clearfix" role="navigation">
            <div class="nav-previous alignleft"><?php previous_post_link('&larr; %link') ?></div>
            <div class="nav-next alignright"><?php next_post_link('%link &rarr;') ?></div>
        </nav><!-- #<?php echo $html_id; ?> .navigation -->
        <?php
    endif;
}

function ph_get_thumbnail_height($post) {
    $tn_id = get_post_thumbnail_id($post->ID);
    $img = wp_get_attachment_image_src($tn_id, 'category-thumb');
    return $img[2];
}

function ph_is_show_text($post) {
    $img_height = ph_get_thumbnail_height($post);
    return ($img_height >= 320) ? TRUE : FALSE;
}

/*
 * 
 *  Give up Ajax because very hard to make masonry work for unknow width and height of image  */
/*
add_action('wp_ajax_get_content_summary', 'ph_ajax_get_content_summary');
add_action('wp_ajax_nopriv_get_content_summary', 'ph_ajax_get_content_summary');

function ph_ajax_get_content_summary() {
    $posts_per_load = get_option('posts_per_page',TRUE);
    $postType = (isset($_REQUEST['postType'])) ? $_REQUEST['postType'] : 'post';
    $category = (isset($_REQUEST['category'])) ? $_REQUEST['category'] : '';
    $author_id = (isset($_REQUEST['author'])) ? $_REQUEST['author'] : '';
    $taxonomy = (isset($_REQUEST['taxonomy'])) ? $_REQUEST['taxonomy'] : '';
    $tag = (isset($_REQUEST['tag'])) ? $_REQUEST['tag'] : '';
    $exclude = (isset($_REQUEST['postNotIn'])) ? $_REQUEST['postNotIn'] : '';
    $numPosts = (isset($_REQUEST['numPosts'])) ? $_REQUEST['numPosts'] : $posts_per_load;
    $page = (isset($_REQUEST['pageNumber'])) ? $_REQUEST['pageNumber'] : 0;


    $args = array(
        'post_type' => $postType,
        'category_name' => $category,
        'author' => $author_id,
        'posts_per_page' => $numPosts,
        'paged' => $page,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
    );
    query_posts($args);
    // our loop  
    while (have_posts()): the_post();
        ?> 
        <?php get_template_part('content', 'summary'); ?>
    <?php
    endwhile;

    wp_reset_query();
    die();
}*/
/*
 * 
 * data-post-type="post" data-category="" data-taxonomy="" data-tag="" data-author="" data-display-posts="6"
 * 
 
function ph_load_more_button($html_id = '', $query_array = array()) {
    ?>
    <nav id="<?php echo $html_id; ?>" class="col-md-12 text-center" role="navigation">
        <button type="button" id="load-more" class="btn btn-danger" <?php ph_echo_query_array($query_array); ?>>Load More</button>
    </nav>
    <?php
}

function ph_echo_query_array($query_array = array()){
        foreach ($query_array as $key => $value) {
        echo ' date-'.$key.'="'.$value.'" ';
    }
}
 * 
 */
?>

