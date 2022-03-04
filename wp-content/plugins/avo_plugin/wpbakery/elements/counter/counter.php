<?php


/* ---------------------------------------------------------------------------
 * Info box
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_counter_func' ) )
{
	function avo_counter_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'counter_style'			=> 'style-1',
			'dark_mode'				=> 'yes',
			'splitting'				=> 'yes',
			'title'					=> '',
			'number'				=> '',
			'icon_as_icon'			=> '',
			'suffix'				=> '',
			'speed'					=> '',
			'steps' 				=> '',
			'counter_border' 		=> 'yes',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'counter__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_counter', 'avo_counter_func' );

 ?>
