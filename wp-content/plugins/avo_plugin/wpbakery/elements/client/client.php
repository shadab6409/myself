<?php


/* ---------------------------------------------------------------------------
 * Client
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_client_func' ) )
{
	function avo_client_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'client_style'			=> 'style-1',
            'text'			        => 'Insert text here..',
            'link'			    	=> '#',
            'image'					=> '',
			'image2'				=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'client__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_client', 'avo_client_func' );

?>
