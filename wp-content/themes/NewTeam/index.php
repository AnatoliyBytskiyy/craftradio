<?php get_header(); ?>
<!-- Marquiz script start -->
<script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  Marquiz.init({ 
    id: '5dd2b129fd8dac004486319d', 
    autoOpen: false, 
    autoOpenFreq: 'once', 
    openOnExit: false 
  });
});
</script>
<!-- Marquiz script end -->

  <main class="main">
    <div class="container">
      <div class="main__body">
        <div>
          <img src="http://craftradio.ru/wp-content/uploads/2020/01/Bez_imeni-1.png" class="main__image">
          <img src="http://craftradio.ru/wp-content/uploads/2020/01/123.png" alt="Radio" class="main__mobile">
        </div>
        <div>
          <p class="main__text">Более 20 лет мы работаем в радио<br> 
            индустрии, и решаем проблемы компаний<br> 
            которые занимаются радиовещанием.<br> 
            Расскажите нам детали своего проекта,<br>
            и мы поможем сэкономить время на<br>
            подбор оборудования, и предложим<br> 
            интересные условия</p>
          <button class="main__btn"><a href="#popup:marquiz_5dd2b129fd8dac004486319d">заполнить опросник</a></button>
        </div>
      </div>
    </div>
  </main>

  <div class="slider">
    <div class="container">
      <div class="slider__body">
        
        
        <?php
// параметры по умолчанию
$posts = get_posts( array(
'numberposts' => 100,
'category_name' => 'tovar',
'order' => 'ASC',
'post_type' => 'post',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
// формат вывода the_title() ...
?>
<div class="slider__item slider__fade">
          <a href="<?php echo get_permalink(); ?>"><h2 class="slider__mobile"><?php the_title(); ?></h2></a>
          <?php the_post_thumbnail(); ?>
          <div class="slider__mobile-arrows">
            <a class="slider__prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="slider__next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <div class="slider__block">
            <a href="<?php echo get_permalink(); ?>"><h2 class="slider__heading"><?php the_title(); ?></h2></a>
            <p class="slider__text"><?php the_content(); ?></p>
            <div class="slider__footer">
              <div>
                <span class="slider__price"><?php the_field('cena'); ?></span>
                <span class="slider__currency">руб.</span>
              </div>
              <a href="#" class="<?php the_field('kup'); ?>"><button class="slider__btn">купить</button></a>
            </div>
          </div>
        </div>
<?php 
}

wp_reset_postdata(); // сброс
?>
        <div class="slider__arrows">
          <a class="slider__prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="slider__next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>