
<footer id="colophon" role="contentinfo" class="navbar navbar-default">
    <div class="container">
        <?php if (is_active_sidebar('widget-footer')) : ?>
            <div id="footer-wedgits" class="row clearfix">

                <?php dynamic_sidebar('Footer'); ?>

            </div>
        <?php endif; ?>
        <div class="site-info">
            <a href="#" id="load-more">Load More</a>

        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php wp_enqueue_scripts(); ?>
</body>
</html>