<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" lang="en-US">
<![endif]-->
<!--[if (gte IE 9) | !(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<title>
		<?php
		wp_title( '&mdash;', true, 'right' );
		bloginfo( 'name' );
		?>
	</title>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body id="page" <?php body_class(); ?>>
	<!--[if lt IE 9]>
		<div class="chromeframe">Your browser is out of date. Please <a href="http://browsehappy.com/">upgrade your browser </a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>.</div>
	<![endif]-->
<div id="page" class="">
	<header id="main-header" role="banner" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
		<hgroup id="site-title-description" class="navbar-header">
			<a href="<?php echo home_url(); ?>" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
		</hgroup>

            
		<nav id="top-navigation" class="main-navigation navbar-collapse collapse" role="navigation">
			
				<?php wp_nav_menu( array( 'theme_location' => 'top_menu', 'container' => false, 'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>', ) ); ?>
			
		</nav>
            </div>
	</header>
