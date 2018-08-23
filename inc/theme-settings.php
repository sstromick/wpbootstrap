<?php
/**
 * Check and setup theme's default settings
 *
 * @package wpbootstrap
 *
 */
if ( ! function_exists ( 'wpbootstrap_setup_theme_default_settings' ) ) {
	function wpbootstrap_setup_theme_default_settings() {
		// Container width.
		$wpbootstrap_container_type = get_theme_mod( 'wpbootstrap_container_type' );
		if ( '' == $wpbootstrap_container_type ) {
			set_theme_mod( 'wpbootstrap_container_type', 'container' );
		}

        // Sidebar position.
		$wpbootstrap_sidebar_position = get_theme_mod( 'wpbootstrap_sidebar_position' );
		if ( '' == $wpbootstrap_sidebar_position ) {
			set_theme_mod( 'wpbootstrap_sidebar_position', 'right' );
		}
	}
}

