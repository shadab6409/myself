<?php


/* ---------------------------------------------------------------------------
 * Info box
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_showcase_func' ) )
{
	function avo_showcase_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'showcase_style'	   => 'style-1',
            'mousewheel'	       => 'true',
			'items'				   => '',
			'image' 			   => '',
			'link' 			       => '',
			'title'			       => '',
			'subtitle'			   => '',
			'nav_next'			   => '',
			'nav_prev'			   => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'showcase__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_showcase', 'avo_showcase_func' );

 ?>
