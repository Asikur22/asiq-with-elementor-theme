<?php
function asiq_ele_minimal_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	
	// Register Menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'asiq-ele-minimal' ),
	) );
}

add_action( 'after_setup_theme', 'asiq_ele_minimal_theme_setup' );

function asiq_ele_minimal_theme_scripts() {
	wp_enqueue_style( 'asiq-ele-minimal-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'asiq_ele_minimal_theme_scripts' );
