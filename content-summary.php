<article id="post-<?php the_ID(); ?>" <?php post_class("pin"); ?>>
    <div class="entry-content">
        <a href="<?php the_permalink(); ?>" title="" rel="bookmark">
            <?php if (has_post_thumbnail()): ?>
                <div class="post-thumb">
                    <?php the_post_thumbnail('category-thumb'); ?>
                </div>
                <div class="post-content nodisplay">
                <?php else : ?>
                    <div class="post-content">
                <?php endif; ?>

                    <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 380, "..."); ?>
                </div>
        </a>
    </div>

    <header class="entry-header">
        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
        </h1>
        <div class="meta-date">
            <span class="meta_span date">
                <span class="month"><?php the_time('M') ?></span>
                <span class="date"><?php the_time('d') ?></span>
                <span class="year"><?php the_time('Y') ?></span>
            </span>
        </div>
    </header>

    <footer class="entry-meta">

        <div class="meta-info">
            <span class="meta_span">Views:<?php
                if (function_exists(the_views)) {
                    the_views('???', true);
                }
                ?></span>
            <span class="meta_span">Category: <?php the_category(', ') ?></span>
            <span class="meta_span">Comments:<?php comments_popup_link('0', '1', '%'); ?></span>
            <span class="meta_span">Tags:<?php the_tags('', ', ', ''); ?></span>
        </div>
    </footer>
</article>