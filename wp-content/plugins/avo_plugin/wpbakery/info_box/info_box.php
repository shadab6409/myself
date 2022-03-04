<?php 

/**
* WPBakery Page Builder Avo InfoBox shortcode  
*/

add_shortcode( 'avo_info_box', 'avo_info_box_func' );

function avo_info_box_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	$info_box_Style = isset( $info_box_Style ) ? NorExtraFilter::string( $info_box_Style, 'string', 'Style-6' ) : 'Style-6';
	$title = isset( $title ) ? NorExtraFilter::string( $title ) : false;
	$icon_as_icon = ( isset( $icon_as_icon ) ) ? NorExtraFilter::string( $icon_as_icon, 'attr', '' ) : '';

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'info_box__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'info_box__view.php' );
	return ob_get_clean();
}