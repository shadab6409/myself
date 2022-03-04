<?php


/* ---------------------------------------------------------------------------
 * Info box
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_slider_func' ) )
{
	function avo_slider_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'slider_style'			=> 'style-1',
			'rtl'					=> 'rtl',
			'slider_list'			=> '',
			'title'					=> 'title',
			'subtitle'				=> 'subtitle',
			'text'					=> 'text',
			'btn_text'				=> 'btn text',
			'btn_link'				=> '#',
			'btn_text2'				=> 'btn text',
			'btn_link2'				=> '#',
			'image'					=> '',
			'image_animation'		=> 'image-animation-on',
			'zoom_direction'		=> 'zoom-direction-in',
			'bg_image'				=> '',
			'slider_width'			=> '1000',
			'slider_content'		=> '1000',
			'slider_height'			=> '',
			'slider_height_bottom'	=> '',
			'splitting'				=> 'data-splitting',
			'parallax'				=> 'true',
			'autoplay'				=> 'true',
			'loop'					=> 'true',
			'slider_speed'			=> '1000',
			'animation_speed'		=> '1000',
			'show_line'				=> 'show-line-on',
			'animation_type'		=> 'fade',
			'pos_line'				=> 'pos-line-top',
			'show_arrows'			=> 'visible',
			'show_dots'				=> 'visible',
			'show_paging'			=> 'visible',
			'show_animate_lines'	=> 'show-animate-lines-on',
			'align'					=> 'left',
			'slider_mask'			=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'slider__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_slider', 'avo_slider_func' );

?>
