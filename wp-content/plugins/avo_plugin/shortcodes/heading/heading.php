<?php 

/**
* WPBakery Page Builder Avo Heading shortcode 
*/

add_shortcode( 'avo_heading', 'avo_heading_func' );

function avo_heading_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	$title = isset( $title ) ? rawurldecode( base64_decode( $title ) ) : '';

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'heading__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'heading__view.php' );
	return ob_get_clean();
}