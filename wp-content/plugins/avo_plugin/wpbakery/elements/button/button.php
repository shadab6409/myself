<?php


/* ---------------------------------------------------------------------------
 * Button
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_button_func' ) )
{
	function avo_button_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'button_style'			    => 'style-1',
            'avo_mode'			        => '1',
            'btn_text'			        => 'Click now',
            'link'			            => 'Leave Link here',
            'avo_info_icons'			=> '',
			'btn_color'			=> '',
			'btn_border_color'			=> '',
			'btn_txt_color'			=> '',
			'btn_color_hover'			=> '',
			'btn_border_color_hover'			=> '',
			'btn_txt_color_hover'			=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'button__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_button', 'avo_button_func' );

?>
