<!doctype html>
<html lang="ru">
<head>

<link rel="icon" href="https://craftradio.ru/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="https://craftradio.ru/favicon.ico" type="image/x-icon" />

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="yandex-verification" content="b5100b1e355cea76" /> 
<meta name="google-site-verification" content="5-r9P586LFH_rDWvBUouKLo3460befrHi47o4aYDnFw" />


<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
</head>
<body id="main">
<?php wp_head(); ?>

<?php
// подключит файл header__mobile.php из каталога текущей темы
get_template_part( 'header__mobile' ); 

// подключит файл nav.php из каталога текущей темы
get_template_part( 'nav' ); 

// подключит файл header.php из каталога текущей темы
get_template_part( 'header-com' ); 
?>
	<style>#popmake-225{
		
		z-index:9999999;
		}</style>	