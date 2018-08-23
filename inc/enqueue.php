<?php
/**
 * wpbootstrap enqueue scripts
 *
 * @package wpbootstrap
 */
if ( ! function_exists( 'wpbootstrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function wpbootstrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		
		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/bootstrap.min.css');
        
		wp_enqueue_style( 'wpbootstrap-styles', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), $css_version );
		wp_enqueue_script( 'jquery');
		
		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/bootstrap.min.js');
		wp_enqueue_script( 'wpbootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array(), $js_version, true );
        
        // Font Awesome
		wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', array(), null, 'all');
		wp_enqueue_style('font-awesome');        
        
	}
} // endif function_exists( 'wpbootstrap_scripts' ).
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts' );