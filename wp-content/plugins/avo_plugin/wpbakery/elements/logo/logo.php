<?php


/* ---------------------------------------------------------------------------
 * Logo
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_logo_func' ) )
{
	function avo_logo_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'align'		                    => 'left',
			'logo_padding_top'				=> '',
			'logo_padding_right'			=> '',
			'logo_padding_bottom'			=> '',
			'logo_padding_left' 			=> '',
			'logo_margin_top' 				=> '',
			'logo_margin_right' 		    => '',
			'logo_margin_bottom' 		    => '',
			'logo_margin_left' 		        => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'logo__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_logo', 'avo_logo_func' );

?>
