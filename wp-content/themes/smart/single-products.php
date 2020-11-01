<?php get_header(); // подключаем header.php ?>

<?  if ( have_posts() ): the_post(); ?>
<?
    $mods = get_field('acf_prod_mod');
    $col_right = 'col-xl-4';
    $col_center = 'col-xl-5';
    $class_card = 'card-one-prod';
    if (count($mods) == 2) {
        $col_right = 'col-xl-3';
        $col_center = 'col-xl-6';
        $class_card = 'card-two-prod';
    }
?>
<div class="card <?=$class_card; ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-3 order-lg-1 order-2 mt-5 mt-lg-0">
                <div class="card-header">
                    <div class="card-title">Описание</div>
                </div>

                <?if (count($mods) > 0):?>

                    <?foreach ($mods as $key => $product):?>

                        <div class="card-content card-block-descrp"<?if($key > 0 ):?> style="display: none;"<?endif;?>>
                            <div class="card-content__title">
                                <? echo $product['acf_prod_mod_title_brief'];?>
                            </div>
                            <div class="card-content__text">
                                <? echo $product['acf_prod_mod_brief'];?>
                                <br>
                                <a href="#text-all-block-<? echo $key; ?>" class="more-link popup">Читать подробнее</a>
                                <?if($product['acf_prod_mod_youtube']):?>
                                    <br>
                                    <br>
                                    <a href="<? echo $product['acf_prod_mod_youtube'];?>" class="video-link fancybox-youtube">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-video.png" alt="">
                                    <p>Видео о том, как это работает</p>
                                </a>
                                <?endif;?>
                            </div>
                        </div>

                    <?endforeach;?>
                <?endif;?>
            </div>
            <div class="col-12 <?=$col_center; ?> order-lg-2 order-1 mt-0 mt-lg-5  mt-xl-0">

                <?


                    if (count($mods) == 1):

                        $product = $mods[0];
                        $scheme = $product['acf_prod_mod_scheme'];
                ?>

                <div class="card-tabs">
                    <div class="card-header card-tabs-nav">
                        <div class="card-title card-tabs-link active">Внешний вид</div>
                        <? if($scheme): ?><div class="card-title card-tabs-link">Функциональная схема</div><? endif; ?>
                    </div>
                    <div class="card-tab-content active">
                        <?
                            if($product['acf_prod_mod_photos']):
                                $photos = $product['acf_prod_mod_photos'];
                        ?>
                        <div class="card-image-block">
                            <div class="card-image-big">
                                <img src="<? echo $photos[0]['acf_prod_mod_photo']; ?>" alt="">
                            </div>
                            <div class="card-image-thumb">
                                <div class="row">
                                    <? foreach($photos as $photo): ?>
                                    <div class="col-6 col-md-3"><a class="js-thumb-link nolightbox" href="<? echo $photo['acf_prod_mod_photo']; ?>"><img src="<? echo $photo['acf_prod_mod_photo']; ?>" alt=""></a></div>
                                    <? endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <? endif; ?>
                    </div>
                    <?if($scheme):?>
                        <div class="card-tab-content">
                            <div class="card-image-block">
                                <div class="card-image-big">
                                    <img src="<? echo $scheme[0]['acf_prod_mod_scheme_photo']; ?>" alt="">
                                </div>
                                <div class="card-image-thumb">
                                    <div class="row">
                                        <? foreach($scheme as $photo): ?>
                                        <div class="col-6 col-md-3"><a class="js-thumb-link nolightbox" href="<? echo $photo['acf_prod_mod_scheme_photo']; ?>"><img src="<? echo $photo['acf_prod_mod_scheme_photo']; ?>" alt=""></a></div>
                                        <? endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>
                </div>
                <div class="card-label">
                    <div class="row m-0">
                        <div class="col-12 col-sm-8 p-0">
                            <div class="card-label__title">
                                <div class="card-label__name">
                                    <? echo $product['acf_prod_mod_title']; ?>
                                </div>
                                <div class="card-label__cost">
                                    <div class="card-available">В наличии</div>
                                    <? echo smart_get_format_cost($product['acf_prod_mod_cost']); ?>&nbsp;<span class="ruble">₽</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 p-0">
                            <a href="#order-form1" class="card-label__btn popup">Купить</a>
                        </div>
                    </div>
                </div>

                <? elseif(count($mods) == 2): ?>

                <div class="card-header">
                    <div class="card-title"><b>Вы выбрали:</b> <span class="card-mod-title"><? echo $mods[0]['acf_prod_mod_title']; ?></span></div>
                </div>

                <div class="card-content">
                    <div class="row">

                        <? foreach($mods as $key => $product): ?>

                        <div id="card-mod-block-<? echo $key; ?>" class="col-12 col-md-6 js-card-mod<?if($key == 0) echo ' active';?>" data-key="<? echo $key;?>" data-title="<? echo $product['acf_prod_mod_title']; ?>">
                            <?
                            if($product['acf_prod_mod_photos']):
                                $photos = $product['acf_prod_mod_photos'];
                                ?>
                                <div class="card-image-block">
                                    <div class="card-image-big">
                                        <img src="<? echo $photos[0]['acf_prod_mod_photo']; ?>" alt="">
                                    </div>
                                    <div class="card-image-thumb">
                                        <div class="row">
                                            <? foreach($photos as $photo): ?>
                                                <div class="col-6"><a class="js-thumb-link nolightbox" href="<? echo $photo['acf_prod_mod_photo']; ?>"><img src="<? echo $photo['acf_prod_mod_photo']; ?>" alt=""></a></div>
                                            <? endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <? endif; ?>
                            <div class="card-label">
                                <div class="row m-0">
                                    <div class="col-12 p-0">
                                        <div class="card-label__title">
                                            <div class="card-label__name">
                                                <? echo $product['acf_prod_mod_title']; ?>
                                            </div>
                                            <div class="card-label__cost">
                                                <div class="card-available">В наличии</div>
                                                <? echo smart_get_format_cost($product['acf_prod_mod_cost']); ?>&nbsp;<span class="ruble">₽</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 p-0">
                                        <a href="#order-form<? echo ($key + 1); ?>" class="card-label__btn popup">Купить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                </div>
                <? endif;?>
            </div>
            <div class="col-12 <?=$col_right; ?> order-lg-3 order-3 mt-5 mt-xl-0">

                <?
                    $show_prop = false;
                    foreach($mods as $key => $product){
                        $props = $product['act_prod_mod_prop'];
                        if($props) {
                            $show_prop = true;
                            break;
                        }
                    }

                ?>

                <div class="card-tabs">
                    <div class="card-header card-tabs-nav">
                        <div class="card-title card-tabs-link active">Преимущества</div>
                        <? if ($show_prop): ?><div class="card-title card-tabs-link">Характеристики</div><?endif;?>
                    </div>
                    <div class="card-tab-content active">


                        <? foreach($mods as $key => $product): ?>
                        <div class="card-block-adv"<?if($key > 0 ):?> style="display: none;"<?endif;?>>

                            <?
                                $advantage = $product['act_prod_mod_adv'];

                                if($advantage):
                            ?>

                            <ul class="list-table">
                            <? foreach($advantage as $item): ?>
                                <li><?=$item['act_prod_mod_adv_item']; ?></li>
                            <? endforeach; ?>
                            </ul>
                            <? endif; ?>
                        </div>
                        <? endforeach; ?>
                    </div>
                    <div class="card-tab-content">
                        <? foreach($mods as $key => $product): ?>
                        <div class="card-block-props"<?if($key > 0 ):?> style="display: none;"<?endif;?>>

                            <?
                                $props = $product['act_prod_mod_prop'];
                                if($props):
                            ?>
                                <ul class="list-table">
                                    <? foreach($props as $item): ?>
                                        <li><?=$item['act_prod_mod_prop_item']; ?></li>
                                    <? endforeach; ?>
                                </ul>
                                <? endif; ?>

                        </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?
    $mods = get_field('acf_prod_mod');

    if (count($mods) > 0 ):
    ?>

    <script>
        (function($){
            $(document).ready(function(){
                $('body').on('click', '.js-card-mod',function(){
                    if (!$(this).hasClass('active')){
                        var key = $(this).attr('data-key');
                        var title = $(this).attr('data-title');
                        console.log(key);

                        $('.js-card-mod').removeClass('active');
                        $(this).addClass('active');

                        $('.card-mod-title').html(title);

                        $('.card-block-descrp').css('display', 'none');
                        $('.card-block-descrp').eq(key).css('display', 'block');
                        $('.card-block-adv').css('display', 'none');
                        $('.card-block-adv').eq(key).css('display', 'block');
                        $('.card-block-props').css('display', 'none');
                        $('.card-block-props').eq(key).css('display', 'block');
                    }
                });
            });
        })(jQuery);
    </script>

    <div class="hidden">
        <? foreach($mods as $key => $product): ?>
        <div class="modal-form modal-callback-form order-form" id="order-form<? echo ($key + 1); ?>">
            <div class="modal-form-content" data-product-name="<? echo $product['acf_prod_mod_title']; ?>">
                <div class="modal-form-title"><? echo $product['acf_prod_mod_title']; ?>
                </div>
                <div class="modal-cost"><b>Стоимость:</b> <? echo smart_get_format_cost($product['acf_prod_mod_cost']); ?>&nbsp;<span class="ruble">₽</span></div>
                <? echo do_shortcode('[contact-form-7 id="46" title="Форма заказа"]'); ?>
                <?/*<form>
                    <label>
                        <div class="modal-form-label">Ваше имя</div>
                        <input class="modal-form-input" type="text" placeholder="Имя">
                    </label>
                    <label>
                        <div class="modal-form-label">Ваш номер телефона</div>
                        <input class="modal-form-input modal-form-phone" type="text" placeholder="+7 (___) ___-__-__">
                    </label>
                    <input class="modal-form-btn" type="submit" value="Отправить">
                </form>*/?>
            </div>
        </div>
        <div class="modal-form" id="text-all-block-<? echo $key; ?>">
            <div class="modal-form-content">
                <div class="modal-form-title"><? echo $product['acf_prod_mod_title_text'];?>
                </div>
                <p><? echo $product['acf_prod_mod_brief'];?></p>
                <br>
                <? echo $product['acf_prod_mod_text'];?>
            </div>
        </div>
        <? endforeach; ?>
    </div>
    <? endif; ?>


<? endif; ?>

<?php get_footer(); // подключаем footer.php ?>
