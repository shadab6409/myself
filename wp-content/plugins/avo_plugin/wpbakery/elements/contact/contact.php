<?php


/* ---------------------------------------------------------------------------
 * Contact
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_contact_func' ) )
{
	function avo_contact_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'shortcode'			            => '',
            'contact_style'			        => 'style-1',
            'avo_mode'			            => '1',
            'form_placeholder'			    => '',
            'form_text'					    => '',
            'form_bg'				        => '',
            'form_border_color'				=> '',
            'form_border_color_active'		=> '',
            'btn_typography_size'		    => '',
            'btn_margin_top'				=> '',
            'btn_margin_right'				=> '',
            'btn_margin_bottom'				=> '',
            'btn_margin_left'				=> '',
            'btn_padding_top'				=> '',
            'btn_padding_right'				=> '',
            'btn_padding_bottom'		    => '',
            'btn_padding_left'				=> '',
            'btn_border_radius_top'		    => '',
            'btn_border_radius_right'		=> '',
            'btn_border_radius_bottom'		=> '',
            'btn_border_radius_left'		=> '',
            'btn_color'				        => '',
            'btn_color_hover'				=> '',
            'btn_bg'				        => '',
            'btn_bg_hover'				    => '',
            'btn_border_top'				=> '',
            'btn_border_right'				=> '',
            'btn_border_bottom'				=> '',
            'btn_border_left'				=> '',
            'btn_border_hover_top'			=> '',
            'btn_border_hover_right'		=> '',
            'btn_border_hover_bottom'		=> '',
            'btn_border_hover_left'			=> '',
            'btn_border_hover_top'			=> '',
            'btn_border_hover_top'			=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'contact__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_contact', 'avo_contact_func' );

?>
