<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h3>Articles</h3>
<?php
    if (have_posts()): 
        while (have_posts()) : the_post(); ?>
        <h1>
            <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
            <br>
            <small>
            <?php //the_content(); // affiche le contenu complet de l'article?>
            <?php //the_excerpt(); // affiche un résumé de l'article?>
            <?= wp_trim_words(get_the_excerpt(),10," &#10148; ")?>
            </small>
            
        </h1>

        
        <?php endwhile;
    endif;
?>
</main>

<?php get_footer(); ?>