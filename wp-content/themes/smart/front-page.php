<?php get_header(); // подключаем header.php ?>

    <div class="titleblock">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="maintitle">
                        Оборудование <br>
                        для&nbsp;профессионального <br>
                        радиовещания
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="maintext">
                        Более 20 лет мы работаем  в радио индустрии, и решаем пробемы компаний которые занимаются радиовещанием. Расскажите нам детали своего проекта,и мы поможем сэкономить время на подбор оборудования, и предложим интересные условия
                    </div>
                    <div class="link-bl">
                        <a href="javascript:;" onclick="Marquiz.showModal('5dd2b129fd8dac004486319d')" class="link-r">Заполнить опросник онлайн</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?
        $posts = get_posts(array(
            'post_type' => 'products',
            'include' => '7,9,11,13',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ));

        if ($posts):
    ?>

        <div class="products">
            <div class="container">
                <div class="row">

                    <? foreach ( $posts as $post ): setup_postdata($post); ?>
                        <div class="col-6 col-md-3">
                            <a class="item" href="<?php the_permalink(); ?>">
                                <div class="item-title">
                                    <? the_title(); ?>
                                    <span class="item-more">Подробнее</span>
                                </div>
                                <div class="item-img">
                                    <img src="<? echo get_the_post_thumbnail_url(false, 'full'); ?>" alt="">
                                  </div>
                            </a>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>

    <?
        endif;
        wp_reset_postdata();
    ?>

    <div class="mobile-block">
        <div class="container">
            <div class="maintext">
                Более 20 лет мы работаем  в радио индустрии, и решаем пробемы компаний которые занимаются радиовещанием. Расскажите нам детали своего проекта,и мы поможем сэкономить время на подбор оборудования, и предложим интересные условия
            </div>
            <div class="link-bl">
                <a href="javascript:;" onclick="Marquiz.showModal('5dd2b129fd8dac004486319d')" class="btn btn-red popup">Заполнить опросник онлайн</a>
            </div>
        </div>
    </div>

<?php get_footer(); // подключаем footer.php ?>