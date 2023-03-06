<?php 
    $titre = get_the_title();
    $sigle = substr($titre,0,7);
    $titre_long = substr($titre,7,-5);
    $duree = "60"
    //strpost($titre, '(')permet de trouver la postion du caractère,'('
    ?>   
<article class="blocflex__article">
    <h2><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h2>
    <h5><?= $titre_long?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h5><?= $duree?></h5>
</article>