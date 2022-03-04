<?php 

/**
* WPBakery Page Builder Avo image shortcode  
*/

add_shortcode( 'avo_image', 'avo_image_func' );

function avo_image_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	$image_Style = isset( $image_Style ) ? NorExtraFilter::string( $image_Style, 'string', 'Style-2' ) : 'Style-2';
	$title = isset( $title ) ? NorExtraFilter::string( $title ) : false;
	$subtitle = isset( $subtitle ) ? NorExtraFilter::string( $subtitle ) : false;
	$icon_as_image = ( isset( $icon_as_image ) ) ? NorExtraFilter::string( wp_get_attachment_url( NorExtraFilter::string( $icon_as_image ) ), 'attr' ) : false;
	$image_height = isset( $image_height ) ? NorExtraFilter::string( $image_height, 'string', '') : '';
	$image_width = isset( $image_width ) ? NorExtraFilter::string( $image_width, 'string', '') : '';
	

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'image__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'image__view.php' );
	return ob_get_clean();
}