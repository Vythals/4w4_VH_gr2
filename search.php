<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main">
<h2>Résultats de la recherche</h2>
    <?php
    if (have_posts()): 
        while (have_posts()) : the_post(); ?> 
            <?php
            $ma_categorie = "4w4";
            if (in_category('cours')){
                $ma_categorie = "cours";  
            } 
            ?>
            <div class="resultat">
            <?php
            get_template_part('template-parts/search',$ma_categorie); ?>
            <?php /** résumé */?>
            <p><?= wp_trim_words(get_the_excerpt(), 50, " [...] "); ?></p>
            <hr>
            </div>
        <?php endwhile;
    endif;
    ?>

</main>

<?php get_footer(); ?>