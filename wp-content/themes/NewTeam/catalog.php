<?php
/*
Template Name: Каталог
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/catalog.css">
  <main class="catalog">
    <div class="container">
      <div class="catalog__body">
        <div class="text catalog__text">
          <h1 class="heading catalog__heading">оборудование для радиостанции</h1>
          
        </div>
        <div class="catalog__row">
          <div class="">
            
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
?><?php $myfile = get_field('big_images_3'); ?>
<div class="block catalog__block">
              <?php the_post_thumbnail(); ?>
              <div class="text block__text">
                <a href="<?php echo get_permalink(); ?>"><h2 class="heading block__heading"><?php the_title(); ?></h2></a>
                <p class="article block__article"><?php the_content(); ?></p>
              </div>
              <div class="block__footer">
                <div class="block__price">
                  <span class="block__currency">Цена:</span>
                  <span class="block__numbers"><?php the_field('cena'); ?></span>
                  <span class="block__currency">руб.</span>
                </div>
                <a href="#"><button class="block__btn <?php the_field('kup'); ?>">купить</button></a>
              </div>
            </div>
        
<?php 
}

wp_reset_postdata(); // сброс
?>
            
            
  </div>
        </div>
      </div>
    </div>
  </main>
  
  <?php get_footer(); ?>