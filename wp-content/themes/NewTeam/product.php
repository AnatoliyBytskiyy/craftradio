<?php
/*
Template Name: Продукт
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/product.css">
  <main class="product">
    <div class="container">
      <div class="product__body">
        <div class="product__block">
          <div class="product__images">
            <div class="product__image">
              <h1 class="product__heading product__heading_mob"><?php the_title(); ?></h1>
              <img name="image" class="product__img" src="<?php the_field('foto1'); ?>" alt="Image 1">
            </div>
            <div class="product__preview">
              <div class="product__row">
                <a href="javascript:l_image ('<?php the_field('foto2'); ?>')"><img class="product__img-prv" src="<?php the_field('foto2'); ?>" alt="Image 2"></a>
                <a href="javascript:l_image ('<?php the_field('foto3'); ?>')"><img class="product__img-prv" src="<?php the_field('foto3'); ?>" alt="Image 3"></a>
                <a href="javascript:l_image ('<?php the_field('foto4'); ?>')"><img class="product__img-prv" src="<?php the_field('foto4'); ?>" alt="Image 4"></a>
              </div>
              <div class="product__row">
                <a href="javascript:l_image ('<?php the_field('foto5'); ?>')"><img class="product__img-prv" src="<?php the_field('foto5'); ?>" alt="Image 5"></a>
                <a href="javascript:l_image ('<?php the_field('foto5'); ?>')"><img class="product__img-prv product__mob" src="<?php the_field('foto5'); ?>" alt="Image 5"></a>
                
                <?php the_field('fotofonz'); ?>
               
              </div>
            </div>
          </div>
          <div class="product__info">
            <h1 class="product__heading"><?php the_title(); ?></h1>
            <div class="product__featuers">
              <div class="product__icons">
          
                <img class="product__img"src="<?php bloginfo( 'template_url' ); ?>/img/product/icon2.png" alt="Icon 2">
                <img class="product__img" src="<?php bloginfo( 'template_url' ); ?>/img/product/icon3.png" alt="Icon 3">
                <img class="product__img" src="<?php bloginfo( 'template_url' ); ?>/img/product/icon5.png" alt="Icon 4">
              </div>
              <div class="product__features-1">
               <br>
                <p>Гарантия:</p><br>
                <p>Настройка:</p><br>
                <p>Бесплатная поддержка:</p><br>
              </div>
              <div class="product__features-2">
                <br>
                <p class="product__feature_bold">1 год</p><br>
                <p class="product__feature_bold">Бесплатно</p><br>
                <p class="product__feature_bold">1 год</p><br>
              </div>
            </div>
            <div class="product__footer">
              <div>
                <span class="product__feature_bold">Цена:</span>
                <span class="product__number"><?php the_field('cena'); ?></span>
                <span class="product__feature_bold">руб.</span>
              </div>
              <button class="product__btn <?php the_field('kup'); ?>">купить</button>
            </div>
          </div>
        </div>
        <div class="product__tabs">
          <input type="radio" name="odin" checked="checked" id="vkl1"/><label for="vkl1">Описание</label><input type="radio" name="odin" id="vkl2"/><label for="vkl2">Характеристики</label><input type="radio" name="odin" id="vkl3"/><label for="vkl3" style="display:none;">Инструкции</label>
          <div class="product__descript">
            <?php the_field('opis'); ?>
          </div>
          <div class="product__chars">
           <?php the_field('xap'); ?>
          </div>
          <div class="product__instruct">
            <?php the_field('ins'); ?>
          </div>
        </div>
      </div>
    </div>
  </main>
   <script src="<?php bloginfo( 'template_url' ); ?>/js/gallery.js"></script>
<?php get_footer(); ?>