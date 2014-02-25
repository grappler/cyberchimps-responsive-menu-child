<?php

// Dequeue parent theme responsive style and enqueue in the child theme
function cyberchimps_child_responsive_style() {
	$directory_uri = get_stylesheet_directory_uri();
	if( cyberchimps_get_option( 'responsive_design', 'checked' ) ) {
		wp_dequeue_style( 'cyberchimps_responsive' );
		wp_enqueue_style( 'cyberchimps_responsive', $directory_uri . '/cyberchimps-responsive.css', array( 'bootstrap-responsive-style', 'bootstrap-style' ), '1.0' );
	}
	else {
		wp_dequeue_style( 'cyberchimps_responsive' );
	}
}
add_action( 'wp_enqueue_scripts', 'cyberchimps_child_responsive_style' );