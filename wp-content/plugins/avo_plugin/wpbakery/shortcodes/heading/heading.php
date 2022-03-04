<?php 

/**
* WPBakery Page Builder Avo Heading shortcode 
*/

add_shortcode( 'avo_heading', 'avo_heading_func' );

function avo_heading_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	$title_1 = isset( $title_1 ) ? rawurldecode( base64_decode( $title_1 ) ) : '';
	$title_2 = isset( $title_2 ) ? rawurldecode( base64_decode( $title_2 ) ) : '';
	$title = isset( $title ) ? rawurldecode( base64_decode( $title ) ) : '';
	$text = isset( $text ) ? rawurldecode( base64_decode( $text ) ) : '';
	$btn_text = isset( $btn_text ) ? rawurldecode( base64_decode( $btn_text ) ) : '';
	$link = isset( $link ) ? rawurldecode( base64_decode( $link ) ) : '';

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'heading__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'heading__view.php' );
	return ob_get_clean();
}