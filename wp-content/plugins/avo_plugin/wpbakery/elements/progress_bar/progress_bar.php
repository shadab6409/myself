<?php


/* ---------------------------------------------------------------------------
 * Progress Bar
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_progress_bar_func' ) )
{
	function avo_progress_bar_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'progress_bar_style'			=> 'style-1',
            'progress_bar_mode'			    => '1',
            'rtl'			                => 'no',
            'title'			                => '',
            'percentage'			        => '',
            'progress_bgcolor'			    => '',
			'progress_fgcolor'			    => '',
			'css' 							=> '',
		), $attr));

		$classes = array();
		$css_class = '';
		if(function_exists('vc_shortcode_custom_css_class')){
		    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
		}

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'progress_bar__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_progress_bar', 'avo_progress_bar_func' );

?>
