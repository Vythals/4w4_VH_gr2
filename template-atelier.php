<?php
/**
 * Template name: atelier
 *
 */
?>
<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
    <section>
        <p><?php the_field('formateur'); ?></p>
        <p><?php the_field('date'); ?></p>
        <p><?php the_field('heure'); ?></p>
        <p><?php the_field('duree'); ?></p>
        <p><?php the_field('local'); ?></p>
    </section>
    <?php endif;?>
</main><!-- #main -->
<?php
get_footer();