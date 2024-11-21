<footer>
    <div class="container">
        <div class="footer-widgets">
            <?php dynamic_sidebar('footer-sidebar'); ?>
        </div>

        <div class="footer-menu">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false
            ]);
            ?>
        </div>

        <div class="copyright">
            © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Tous droits réservés.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>