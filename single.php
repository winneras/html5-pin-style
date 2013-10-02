<?php get_header(); ?>

<div id="main" class="wrapper container">

    <div id="primary" class="site-content">

        <div id="content" role="main" class="single">


            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>



                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                        </h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>


                    <footer class="entry-meta">
                        
                        <span class="meta_span">Author: <?php the_author() ?></span>
                        <span class="meta_span">Category: <?php the_category(', ') ?></span>
                        <span class="meta_span">Post Date: <?php the_time('Y-m-d H:i') ?></span>
                        <span class="meta_span">Views:<?php if (function_exists(the_views)) { the_views('???', true); } ?></span>
                        <span class="meta_span">Comments:<?php comments_popup_link('0', '1', '%'); ?></span>

                    </footer>
                </article>





            <?php endwhile; ?>

            <?php ph_content_nav('nav-below'); ?>
            
            <?php comments_template(); ?>
        </div><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main .wrapper -->

<?php get_footer(); ?>