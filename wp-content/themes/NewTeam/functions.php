<?php

if (function_exists('add_theme_support')) {
add_theme_support('menus');
}

register_nav_menus( array(
	'top_menu' => 'Меню сверху',
	'footer_menu' => 'Меню в подвале'
) );

add_theme_support( 'post-thumbnails' );

//mod content
function hatom_mod_post_content ($content) {
  if ( in_the_loop() && !is_page() ) {
    $content = '<span class="entry-content">'.$content.'</span>';
  }
  return $content;
}
add_filter( 'the_content', 'hatom_mod_post_content');

//add hatom data
function add_mod_hatom_data($content) {
    
    $title = get_the_title();
    if ( is_single() || is_page()) {
        $content .= '<div class="hatom-extra"><span class="entry-title">'.$title.'</span> обновлено: <span class="updated"> '.$t.'</span> автором: <span class="author vcard"><span class="fn">'.$author.'</span></span></div>';
    }
    return $content;
    }
add_filter('the_content', 'add_mod_hatom_data');



function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

 

function crea_load_styles()
{
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('home', get_template_directory_uri() . '/css/home.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('style', get_stylesheet_uri());
}
 
add_action('wp_enqueue_scripts', 'crea_load_styles', 20);

add_action( 'wp_footer', 'mycustom_wp_footer' );
 
function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga( 'send', 'event', 'Contact Form', 'submit' );
}, false );
</script>
<?php
}
?>
