<?php get_header(); ?>

<div id="main" class="wrapper">

    <div id="primary" class="site-content">

        <div id="content" role="main" class="single">


            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1>
                    <?php the_title(); ?>
                </h1>
                <div>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>

            <?php ph_content_nav('nav-below'); ?>
        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main .wrapper -->

<?php get_footer(); ?>