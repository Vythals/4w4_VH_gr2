<footer class="site__footer">
  <div class="container-logo-footer">
    <?php the_custom_logo(); ?>
  </div>
  <div class="container-footer">
    <div class="liens-footer">
      <h3>Liens</h3>
      <?php wp_nav_menu(array(
            "menu" => "pied",
            "container" => "nav"
            )) ?>
    </div>
    <div class="informations-footer">
      <h3>Informations</h3>
      <p>123 Rue Principale</p>
      <p>Ville, Pays</p>
      <p>(555) 555-1234</p>
      <p>info@example.com</p>
    </div>
    <div class="reseaux-sociaux-footer">
      <h3>Réseaux sociaux</h3>
      <ul>
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
