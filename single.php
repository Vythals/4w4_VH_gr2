<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="article_flex">
<?php
    if (have_posts()): 
        while (have_posts()) : the_post();?>
            <div class="article_titre_flex">
                <?php the_title('<h1>','</h1>'); ?>
            </div>
            <div class="article_contenu_flex">
                <?php the_content(); ?>
            </div>
            <hr>
        <?php endwhile;
    endif;
?>
</main>

<?php get_footer(); ?>