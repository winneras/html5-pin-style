
<footer id="colophon" role="contentinfo">
    <div class="wrapper">
        <?php if (is_active_sidebar('widget-footer')) : ?>
            <div id="footer-wedgits" class="row clearfix">

                <?php dynamic_sidebar('Footer'); ?>

            </div>
        <?php endif; ?>
        <div class="site-info">


        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>