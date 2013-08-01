<?php

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

add_filter( 'the_generator', 'ph_wp_generator' );
add_action( 'widgets_init', 'ph_widgets' );

register_nav_menu( 'top_menu', 'Top Menu' );

function ph_wp_generator(){
    echo '<meta name="generator" content="" />';
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}

function ph_widgets() {
	register_sidebar(
		array(
			'name'      		=> 'Inline',
			'id'      			=> 'widget-inline',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'      		=> 'Footer',
			'id'     	 			=> 'widget-footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			)
	);
}

?>