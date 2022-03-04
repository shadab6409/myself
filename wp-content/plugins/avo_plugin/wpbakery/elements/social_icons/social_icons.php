<?php


/* ---------------------------------------------------------------------------
 * Info box
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_social_icons_func' ) )
{
	function avo_social_icons_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'social_icon_list'			        => '',
			'avo_social_icon'		         	=> '',
			'link'			                    => '',
			'icon_color'				        => '',
			'icon_color_hover'			        => '',
            'icon_background_color'		        => '',
			'icon_background_color_hover'		=> '',
			'icon_border_color'		        => '',
			'icon_border_color_hover'		=> '',
			'css' 				=> '0',
			'left'		=> '',
			'bottom'		=> '',
			'icon_pos'		=> 'relative',
			'icon_index'		=> '',
		), $attr));

		$classes = array();
		$css_class = '';
		if(function_exists('vc_shortcode_custom_css_class')){
		    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
		}

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'social_icons__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_social_icons', 'avo_social_icons_func' );

?>
