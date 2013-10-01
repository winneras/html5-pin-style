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
        <nav id="<?php echo $html_id; ?>" class="navigation clearfix" role="navigation">
            <div class="nav-previous alignleft"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve')); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve')); ?></div>
        </nav><!-- #<?php echo $html_id; ?> .navigation -->
    <?php elseif (is_single()) : ?>

        <nav id="<?php echo $html_id; ?>" class="navigation clearfix" role="navigation">
            <div class="nav-previous alignleft"><?php previous_post_link('&larr; %link') ?></div>
            <div class="nav-next alignright"><?php next_post_link('%link &rarr;') ?></div>
        </nav><!-- #<?php echo $html_id; ?> .navigation -->
        <?php
    endif;
}
?>

