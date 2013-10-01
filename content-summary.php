<article id="post-<?php the_ID(); ?>" <?php post_class(array('col-md-4', 'col-lg-3', 'masonry-item')); ?>>
    <div class="thumbnail">
        <div class="entry-content">
            <a href="<?php the_permalink(); ?>" title="" rel="bookmark">
                <?php if (has_post_thumbnail()): ?>
                    <div class="post-thumb">
                        <?php the_post_thumbnail('category-thumb', array('class' => 'img-responsive')); ?>
                    </div>
                <?php endif; ?>
                <div class="post-content <?php if (has_post_thumbnail()): ?>mask<?php endif; ?>">
                    <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 380, "..."); ?></p>
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
                <span class="meta_span">
                    <?php if (function_exists(the_views)) : ?>
                        <span class="glyphicon glyphicon-book"></span><?php the_views('???', true); ?>
                    <?php endif; ?>
                </span>
                <span class="meta_span"><span class="glyphicon glyphicon-comment"></span><?php comments_popup_link('0', '1', '%'); ?></span>
                <span class="meta_span"><span class="glyphicon glyphicon-th-large"></span><?php the_category(', ') ?></span>
                <span class="meta_span"><span class="glyphicon glyphicon-tags"></span><?php the_tags('', ', ', ''); ?></span>
            </div>
        </footer>
    </div>
</article>