<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h2 class="titre__centre">Évenements</h2>
    <section class="blocflex">
        <?php 
        
        wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav"

        ));?>
        </section>
        <h2 class="titre__centre">Atelier</h2>
    <section class="blocflex">
        <?php 
        
        wp_nav_menu(array(
            "menu"=>"atelier",
            "container"=>"nav"

        ));?>
        </section>
        <h2 class="titre__centre">Archive</h2>
        <section class="blocflex">
        <?php
        wp_nav_menu(array(
            "menu"=>"bloc-archive",
            "container"=>"nav"

        ));

       
        ?>
    </section>
    <section class="blocflex">
        <?php
        get_template_part( "template-parts/articles-recent" );
        ?>
    </section>
    <section class="blocflex">
    <?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
                    $ma_categorie = "4w4";
                    if (in_category('galerie')){
                        $ma_categorie = "galerie";  
                    }    
                 get_template_part("template-parts/categorie", $ma_categorie);
             endwhile;
        endif;    
    ?>
    </section>
</main>

<?php get_footer(); ?>