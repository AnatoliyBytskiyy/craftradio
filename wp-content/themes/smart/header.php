<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
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
</head>
<body <?php body_class(); // все классы для body ?>>
<?/*
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
*/?>

<div class="wrapper">
    <header class="container">
        <div class="row">
            <div class="col-lg-2 d-none d-lg-block">
                <?if (!is_front_page()):?>
                    <a class="link-arrow-lg" href="/">Вернутся на главную</a>
                <?endif;?>
            </div>
            <div class="col-7 col-sm-8 col-lg-8">
                <a href="/" class="logo">
                    <div class="logo_title">SMART MEDIA DEVICE</div>
                    <div class="logo_subtitle">THE NEW WAY OF BROADCASTING</div>
                </a>
            </div>
            <div class="col-5 col-sm-4 col-lg-2">
                <a href="#" class="btn btn-white btn-auth">Войти</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="header_addr">
                    +7(495) 228-17-27<br>
                    115419, г. Москва, ул. Шаболовка, д. 34, стр. 2, 3&nbsp;подъезд, 1 этаж
                </div>
            </div>
        </div>
    </header>
