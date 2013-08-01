                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <a href="<?php the_permalink(); ?>" title="" rel="bookmark">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('category-thumb'); ?>
                            <?php else : ?>
                                <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 380,"..."); ?>
                                
                            <?php endif; ?>
                        </a>
                    </div>

                    <header class="entry-header">
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a>
                        </h1>
                    </header>

                    <footer class="entry-meta">
                        <span class="meta_span date">
                            <span class="month"><?php the_time('M') ?></span>
                            <span class="date"><?php the_time('d') ?></span>
                        </span>
                        <span class="meta_span">Views:<?php
                            if (function_exists(the_views)) {
                                the_views('', true);
                            }
                            ?></span>
                        <span class="meta_span">Category: <?php the_category(', ') ?></span>
                        <span class="meta_span">Comments:<?php comments_popup_link('0', '1', '%'); ?></span>
                        <span class="meta_span">Tags:<?php the_tags('', ', ', ''); ?></span>
                    </footer>
                </article>