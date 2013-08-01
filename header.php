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
<div id="page" class="container">
	<header id="main-header" role="banner">
            <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                <div>
                    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
                    
                    <button type="submit" id="searchsubmit"><i class="iconfont">Search</i></button>
                </div>
            </form>
		<hgroup id="site-title-description">
			<h1 id="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

            
		<nav id="top-navigation" class="main-navigation" role="navigation">
			
				<?php wp_nav_menu( array( 'theme_location' => 'top_menu', 'container' => false ) ); ?>
			
		</nav>
	</header>
