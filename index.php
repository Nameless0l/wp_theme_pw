<?php get_header(); ?>

    <div class="container">
        <?php
        if (is_front_page()) {
            // Page d'accueil personnalisée
            ?>
            <section class="hero">
                <h1>Bienvenue sur notre boutique</h1>
                <p>Découvrez nos derniers produits</p>
            </section>

            <?php
            // Afficher les produits à la une
            if (class_exists('WooCommerce')) {
                echo do_shortcode('[featured_products limit="4"]');
            }
        } else {
            // Contenu par défaut
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        }
        ?>
    </div>

<?php get_footer(); ?>