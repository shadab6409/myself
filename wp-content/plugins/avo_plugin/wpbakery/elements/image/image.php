<?php


/* ---------------------------------------------------------------------------
 * Info box
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_image_func' ) )
{
	function avo_image_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'image_style'		=> 'style-1',
			'title'				=> '',
			'subtitle'			=> '',
			'link'				=> '',
			'image' 			=> '',
			'css' 				=> '0',
			'img_width' 		=> '',
			'img_height' 		=> '',
			'img_border_radius' => '',
			'custom_class' 		=> '',
		), $attr));

		$classes = array();
		$css_class = '';
		if(function_exists('vc_shortcode_custom_css_class')){
		    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
		}

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'image__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_image', 'avo_image_func' );

 ?>
