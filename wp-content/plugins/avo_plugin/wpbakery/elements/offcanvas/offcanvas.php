<?php


/* ---------------------------------------------------------------------------
 * offcanvas
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_offcanvas_func' ) )
{
	function avo_offcanvas_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'offcanvas_style'		    => 'style-1',
			'avo_side_panel'			=> '',
			'avo_offcanvas_icons'		=> '',
			'image'			            => '',
			'image_size' 			    => '',
			'title' 				    => '',
			'subtitle' 		            => '',
			'text' 		                => '',
            'btn_text' 		            => '',
            'link' 		                => '',
            'content_align' 		    => 'left',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'offcanvas__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_offcanvas', 'avo_offcanvas_func' );

?>
