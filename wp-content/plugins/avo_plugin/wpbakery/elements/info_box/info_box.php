<?php


/* ---------------------------------------------------------------------------
 * Info box
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_info_box_func' ) )
{
	function avo_info_box_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'info_box_style'		=> 'style-1',
			'align_title'			=> 'left',
			'box_image_icon'		=> 'icon',
			'title'					=> '',
			'subtitle'				=> '',
			'icon_as_icon'			=> '',
			'text'					=> '',
			'info_box_bg'			=> 'cl0',
			'image' 				=> '',
			'btn_text' 				=> '',
			'btn_url' 				=> '',
			'btn_icon_as_icon'			=> '',
			'icon_align' 			=> 'left',
			'icon_indent' 			=> '',
			'box_opacity' 			=> '',
			'hover_box_opacity' 			=> '',
			'box_color' 			=> '',
			'boxbrd_color' 			=> '',
			'box_padding_all_top' 			=> '',
			'box_padding_all_right' 			=> '',
			'box_padding_all_bottom' 			=> '',
			'box_padding_all_left' 			=> '',
			'title_color' 			=> '',
			'title_margin_top' 			=> '',
			'title_margin_right' 			=> '',
			'title_margin_bottom' 			=> '',
			'title_margin_left' 			=> '',
			'title_padding_top' 			=> '',
			'title_padding_right' 			=> '',
			'title_padding_bottom' 			=> '',
			'title_padding_left' 			=> '',
			'subtitle_color' 			=> '',
			'text_color' 			=> '',
			'text_margin_top' 			=> '',
			'text_margin_right' 			=> '',
			'text_margin_bottom' 			=> '',
			'text_margin_left' 			=> '',
			'icon_size' 			=> '',
			'icon_height' 			=> '',
			'icon_bg_size' 			=> '',
			'icon_border_top' 			=> '',
			'icon_border_right' 			=> '',
			'icon_border_bottom' 			=> '',
			'icon_border_left' 			=> '',
			'icon_margin_top' 			=> '',
			'icon_margin_right' 			=> '',
			'icon_margin_bottom' 			=> '',
			'icon_margin_left' 			=> '',
			'icon_margin_left_top' 			=> '',
			'icon_margin_left_right' 			=> '',
			'icon_margin_left_bottom' 			=> '',
			'icon_margin_left_left' 			=> '',
			'icon_color' 			=> '',
			'iconbg_color' 			=> '',
			'hover_iconbg_color' 			=> '',
			'icon_bordering_type' 			=> 'none',
			'icon_bordering_width_top' 			=> '',
			'icon_bordering_width_right' 			=> '',
			'icon_bordering_width_bottom' 			=> '',
			'icon_bordering_width_left' 			=> '',
			'icon_bordering_color' 			=> '',
			'btn_margin_top' 			=> '',
			'btn_margin_right' 			=> '',
			'btn_margin_bottom' 			=> '',
			'btn_margin_left' 			=> '',
			'btn_padding_top' 			=> '',
			'btn_padding_right' 			=> '',
			'btn_padding_bottom' 			=> '',
			'btn_padding_left' 			=> '',
			'btn_border_radius_top' 			=> '',
			'btn_border_radius_right' 			=> '',
			'btn_border_radius_bottom' 			=> '',
			'btn_border_radius_left' 			=> '',
			'btn_color' 			=> '',
			'btn_color_hover' 			=> '',
			'btn_bg' 			=> '',
			'btn_bg_hover' 			=> '',
			'btn_border_top' 			=> '',
			'btn_border_right' 			=> '',
			'btn_border_bottom' 			=> '',
			'btn_border_left' 			=> '',
			'btn_border_hover_top' 			=> '',
			'btn_border_hover_right' 			=> '',
			'btn_border_hover_bottom' 			=> '',
			'btn_border_hover_left' 			=> '',
			'btn_border_color' 			=> '',
			'btn_border_color_hover' 			=> '',
			'css' 					=> '0',
		), $attr));

		$classes = array();
		$css_class = '';
		if(function_exists('vc_shortcode_custom_css_class')){
		    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
		}

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'info_box__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_info_box', 'avo_info_box_func' );

 ?>
