<?php get_header(); ?>

<div id="main" class="wrapper">

    <div id="primary" class="site-content columns">
        <?php if (is_active_sidebar('widget-inline')) : ?>
            <div id="inline-wedgits">

                <?php dynamic_sidebar('Inline'); ?>

            </div>
        <?php endif; ?>

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

<?php get_footer(); ?>