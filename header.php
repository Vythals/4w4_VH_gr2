<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cbea74d857.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<?php 
/*
  $nouvelle_classe = ""
  if (is_front_page()){
    $nouvelle_classe = 'no-aside';
  }
*/
?>
<!-- body class="site  // $nouvelle_classe " -->
<body class="site <?php echo (is_front_page()?'no-aside':'');?>">

   <header class="site__header">
    <section class="site__header__logo">
      <?php the_custom_logo(); ?>
      <div class="menu__recherche">
            <input type="checkbox" id="chkMenu">
            <?php wp_nav_menu(array(
            "menu" => "entete",
            "container" => "nav"
            )) ?>
        
            <?php  get_search_form(); ?>
            <label class="burger" for="chkMenu"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="20" height="20"></label>
           
      </div>  
    </section>
    <div class="titre__header">
      <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
      <h2><?= bloginfo('description') ?></h2>
    </div>
    
   </header>

    <?php 
    if ( ! is_front_page() && ! is_page_template('template-atelier.php')){
    get_template_part("template-parts/aside"); 
    }
    if(is_page_template('template-atelier.php')){
      get_template_part("template-parts/aside-atelier");
    }
    $nouvelle_classe = "";
  if  (is_front_page() || 
      (! in_category("cours") && ! in_category("4w4")) ){
        $nouvelle_classe = 'no-aside';
      }
  if (is_page_template('template-atelier.php')) {
       $nouvelle_classe = 'site__aside-atelier';
  }

    ?>