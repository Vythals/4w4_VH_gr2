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
<table class="tableau_atelier">
  <tr>
    <th>Formateur</th>
    <td><?php the_field('formateur'); ?></td>
  </tr>
  <tr>
    <th>Date</th>
    <td><?php the_field('date'); ?></td>
  </tr>
  <tr>
    <th>Heure</th>
    <td><?php the_field('heure'); ?></td>
  </tr>
  <tr>
  <th>Durée</th>
  <td><?php the_field('duree'); ?> Heures</td>
  </tr>
  <tr>
  <th>Local</th>
  <td><?php the_field('local'); ?></td>
  </tr>
</table>
    <?php endif;?>
</main><!-- #main -->
<?php
get_footer();