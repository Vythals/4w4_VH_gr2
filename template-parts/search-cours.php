<?php
/**
 * template part pour afficher les article cours dans search
*/
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = substr($titre, strpos($titre, '('));
// strpos($titre, '(') permet de trouver la position dy caractère ,'('
?> 

<article class="search__cours">  
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre_long ?></a></h5>
    <h5>Sigle:<?= $sigle ?></h5>
    <h5>Durée:<?= $duree ?></h5>
    <? // <p><?php the_field('enseignant') ?></p> 
    <? // <p><?php the_field('domaine') ?></p>
</article>