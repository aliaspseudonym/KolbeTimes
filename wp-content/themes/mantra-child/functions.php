<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}	

function mycustom_scripts_method() {
    global $wp_query;
	wp_enqueue_script(
		'cycle2',
		get_stylesheet_directory_uri() . '/js/jquery.cycle2.min.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'mycustom_scripts_method' );
?>