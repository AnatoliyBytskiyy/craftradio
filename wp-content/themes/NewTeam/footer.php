<?php
// подключит файл header__mobile.php из каталога текущей темы
get_template_part( 'footer-max' ); 
?>

<?php wp_footer(); ?>
  <!-- Scripts -->

 


 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
  <script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>
  <script src="<?php bloginfo( 'template_url' ); ?>/js/slider.js"></script>
  
</body>
</html>