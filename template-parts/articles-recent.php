<!-- fichier template-part-recent-posts.php -->

<!-- Début du template-part -->
<div class="recent-posts">
    <h2 class="titre__centre">Articles récents</h2>

    <?php
    $args = array(
        'posts_per_page' => 3, // Nombre d'articles à afficher
        'post_status'    => 'publish', // Statut des articles (publiés)
    );

    $recent_posts = new WP_Query( $args );

    if ( $recent_posts->have_posts() ) :
        while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
    ?>
        <article class="blocflex__article">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Aucun article récent trouvé.';
    endif;
    ?>
</div>
<!-- Fin du template-part -->
