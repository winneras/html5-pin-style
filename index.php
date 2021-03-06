<?php get_header(); ?>

<div id="main" class="container">

    <div id="primary" class="site-content columns">


        <div id="content" role="main" class="index masonry-container">
            <?php if (is_active_sidebar('widget-inline')) : ?>
                <!--<div id="inline-wedgits" class="col-md-4 col-lg-3">
                </div>-->

                <?php dynamic_sidebar('Inline'); ?>


            <?php endif; ?>


            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', 'summary'); ?>

            <?php endwhile; ?>


        </div><!-- #content -->
    </div><!-- #primary -->
    <?php 
        //ph_content_nav('nav-below');
        ph_load_more_button('more-below');
    ?>
</div><!-- #main .wrapper -->

<?php get_footer(); ?>