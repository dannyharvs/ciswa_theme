<?php
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
wp_enqueue_script('jquery', '/js/jquery-2.1.4.min.js', array(), null, false);
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
?>

<?php
function register_my_menu() {
  register_nav_menu('menu-header',__( 'Menu Header' ));
} add_action( 'init', 'register_my_menu' ) 
    ?>

<?php // Register custom navigation walker
   require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
?>

<?php

function tagline() {

	register_sidebar( array(
		'name'          => 'main tagline',
		'id'            => 'main_tag',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'tagline' );
?>