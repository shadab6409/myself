<?php


/* ---------------------------------------------------------------------------
 * Info box
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_image_box_func' ) )
{
	function avo_image_box_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'image'		                => '',
			'image_size'				=> '',
			'title_text_margin'			=> '',
			'title'				        => '',
			'subtitle' 			        => '',
			'text' 				        => '',
			'btn_text' 		            => '',
			'link' 		                => '',
            'box_color' 		        => '',
            'boxbrd_color' 		        => '',
			'title_color' 			    => '',
			'title_margin_top' 			=> '',
			'title_margin_right' 		=> '',
			'title_margin_bottom' 		=> '',
			'title_margin_left' 		=> '',
			'title_padding_top' 		=> '',
			'title_padding_right' 		=> '',
			'title_padding_bottom' 		=> '',
			'title_padding_left' 		=> '',
			'subtitle_color' 			=> '',
			'text_color' 		    	=> '',
			'text_margin_top' 			=> '',
			'text_margin_right' 		=> '',
			'text_margin_bottom'		=> '',
			'text_margin_left' 			=> '',
			'btn_margin_top' 			=> '',
			'btn_margin_right' 			=> '',
			'btn_margin_bottom' 		=> '',
			'btn_margin_left' 			=> '',
			'btn_padding_top' 			=> '',
			'btn_padding_right' 		=> '',
			'btn_padding_bottom' 		=> '',
			'btn_padding_left' 			=> '',
			'btn_border_radius_top'		=> '',
			'btn_border_radius_right'	=> '',
			'btn_border_radius_bottom'	=> '',
			'btn_border_radius_left' 	=> '',
			'btn_color' 			    => '',
			'btn_color_hover' 			=> '',
			'btn_bg' 			        => '',
			'btn_bg_hover' 			    => '',
			'btn_border_top' 			=> '',
			'btn_border_right' 			=> '',
			'btn_border_bottom' 		=> '',
			'btn_border_left' 			=> '',
			'btn_border_hover_top' 		=> '',
			'btn_border_hover_right'	=> '',
			'btn_border_hover_bottom' 	=> '',
			'btn_border_hover_left'		=> '',
			'btn_border_color' 			=> '',
			'btn_border_color_hover'	=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'image_box__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_image_box', 'avo_image_box_func' );

 ?>
