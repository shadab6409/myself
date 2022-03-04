<?php


/* ---------------------------------------------------------------------------
 * Info box
* --------------------------------------------------------------------------- */
add_shortcode( 'avo_basic_gallery', 'avo_basic_gallery_func' );

	function avo_basic_gallery_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'basic_gallery_list' 		=> '',
			'image' 					=> '',
			'img_width' 				=> '',
			'img_height' 				=> '',
			'css' 				=> '',
		), $attr));

		$classes = array();
		$css_class = '';
		if(function_exists('vc_shortcode_custom_css_class')){
		    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
		}

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'basic_gallery__view.php' );
		return ob_get_clean();
	}

 ?>
