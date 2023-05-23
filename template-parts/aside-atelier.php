<aside class="site__aside">
    <div class="image_top">
    <?php 
    if (function_exists('the_post_thumbnail') && has_post_thumbnail()) {
        the_post_thumbnail();
    }
    ?>
    </div>
    <h3>Nos atelier en 2023</h3>
    <?php 
    wp_nav_menu(array(
        "menu" => "atelier",
        "container" => "nav"  
    )); ?>
</aside>