<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/u0862591/data/www/craftradio.ru/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'u0862591_craft' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u0862591_craft' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Q9h3N1s3' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<3}2K;0IDh0j}oVf=B7Ydx~Q5$m/`k|NVun)LRAtBNHXxy >c~w%~Eq-1=4J.diV' );
define( 'SECURE_AUTH_KEY',  'YE-V-MXdxtQ?M6_F8>|#Td4!wg~6@NTssJa%aHeXh@A`IM;TNZrRr qdn{~h~CXq' );
define( 'LOGGED_IN_KEY',    'wmWc)k2t(J,^Bzte/+:=}]hHTXwSQNPf;Q`B)kW`)]Z(XU3|S5+wPsv>ad=C~%xO' );
define( 'NONCE_KEY',        'LJ5oG;8ZzqE6t|3pWT`mB` ?rK(T]lvu1<-%bdQ6j=FCK=AX&p%_Q6;]:iL[GO[^' );
define( 'AUTH_SALT',        '-_]nhp|2HR42$dcKbspPj&ET}lO3`hLIV42=ZlN*LMvg>Un-T+4*}?;~o925`VLV' );
define( 'SECURE_AUTH_SALT', '8AZ}V.#oR5,z3Di7<`fm#+y#$gNBX>j>nM4udVD<VVy;rlh>p]Luyq?N=7Ub2w/]' );
define( 'LOGGED_IN_SALT',   'sRJYWkbm[R^x,5nus:@aSl!Jcob&Q_@`HXehI<XKRTN&pMMLE5dtVp<!DOHSoo-8' );
define( 'NONCE_SALT',       'ZWy#etmIiBuIb||YxY7umFub]Ssg5LWXjUsHqw;4F[x5<ZV*PYaJ*4#Rsd$zo]26' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
ini_set ('display_errors', 'Off');
ini_set ('error_reporting', E_ALL );
define ('WP_DEBUG', false);
define ('WP_DEBUG_DISPLAY', false);


/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );