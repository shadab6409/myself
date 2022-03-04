<?php


/* ---------------------------------------------------------------------------
 * Image box slider
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_image_box_slider_func' ) )
{
	function avo_image_box_slider_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'box_style'		        => 'style-1',
			'imgbox_list'			=> '',
			'image_icon'			=> '',
			'title'			    	=> '',
			'text' 			        => '',
			'btn_text' 				=> '',
			'link' 		            => '',
			'show_arrows' 		    => 'true',
            'title_color'            => '',
			'name_color'            => '',
			'post_color' 		    => '',
            'border_color' 		    => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'image_box_slider__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_image_box_slider', 'avo_image_box_slider_func' );

 ?>
