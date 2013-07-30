<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <hgroup>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                </hgroup>

                <nav id="site-navigation" class="main-navigation" role="navigation">
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="main" class="wrapper">

                <div id="primary" class="site-content">
                    <div id="content" role="main">


                        <?php /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <div>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>


                    </div><!-- #content -->
                </div><!-- #primary -->
            </div><!-- #main .wrapper -->
            <footer id="colophon" role="contentinfo">
                <div class="site-info">


                </div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div><!-- #page -->

        <?php wp_footer(); ?>
    </body>
</html>