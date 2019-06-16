<?php
/* *
 * Enqueue Styles and Scripts
 */
function jed_skeleton_scripts() {
	wp_enqueue_style(
		'normalize',
		get_template_directory_uri() . '/css/normalize.css'
	);
	wp_enqueue_style(
		'skeleton-core',
		get_template_directory_uri() . '/css/skeleton.css'
	);
	wp_enqueue_style(
		'skeleton-theme',
		get_stylesheet_uri()
	);

}
add_action( 'wp_enqueue_scripts', 'jed_skeleton_scripts' );

/* *
 * Enable Menus
 */
function jed_skeleton_register_nav_menus() {

	register_nav_menus( array(
		'sidebar_menu' => 'Sidebar',
		'footer_menu' => 'Footer',
	) );
}
add_action( 'after_setup_theme', 'jed_skeleton_register_nav_menus' );

/* *
 * Enqueue Block Assets
 */
function jed_skeleton_enqueue_block_assets() {
	wp_enqueue_style(
		'blocks-css',
		get_stylesheet_directory_uri() . '/css/blocks.css',
		time(), //change to filemtime for production
		true
	);
	wp_enqueue_style(
		'raleway-google-font',
		'https://fonts.googleapis.com/css?family=Raleway&display=swap'
	);
}
add_action( 'enqueue_block_assets', 'jed_skeleton_enqueue_block_assets' );
