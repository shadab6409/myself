<?php


/* ---------------------------------------------------------------------------
 * Fancy
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_fancy_func' ) )
{
	function avo_fancy_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'fancy_style'			=> 'style-1',
			'title1'				=> '',
			'title2'				=> '',
			'text1'					=> '',
			'text2'				    => '',
			'image_bg'			    => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'fancy__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_fancy', 'avo_fancy_func' );

 ?>
