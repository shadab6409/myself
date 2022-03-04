<?php


/* ---------------------------------------------------------------------------
 * Product
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_product_func' ) )
{
	function avo_product_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'port_style'						=> 'style-1',
			'filter'							=> 'block',
			'filter_align'						=> 'left',
			'product_item'						=> '',
			'port_masonry'						=> 'yes',
			'sort_cat'							=> 'yes',
			'blog_cat'							=> '',
			'port_order'						=> 'DESC',
			'port_column'						=> '1',
			'page_show'							=> 'yes',
			'page_align'						=> 'left',
			'product_margin'					=> '',
			'product_height'					=> '',
			'port_content_top'					=> '',
			'port_content_right'				=> '',
			'port_content_bottom'				=> '',
			'port_content_left'					=> '',
			'port_padding_top'					=> '',
			'port_padding_right'				=> '',
			'port_padding_bottom'				=> '',
			'port_padding_left'					=> '',
			'bg_content'						=> '',
			'content_align'						=> 'left',
			'title_type'						=> 'block',
			'title_cl'							=> '',
			'title_bgl'							=> '',
			'titlep_padding_top'				=> '',
			'titlep_padding_right'				=> '',
			'titlep_padding_bottom'				=> '',
			'titlep_padding_left'				=> '',
			'titlep_margin_top'					=> '',
			'titlep_margin_right'				=> '',
			'titlep_margin_bottom'				=> '',
			'titlep_margin_left'				=> '',
			'text_type'							=> 'block',
			'txt_cl'							=> '',
			'txt_bg'							=> '',
			'tx_padding_top'					=> '',
			'tx_padding_right'					=> '',
			'tx_padding_bottom'					=> '',
			'tx_padding_left'					=> '',
			'tx_margin_top'						=> '',
			'tx_margin_right'					=> '',
			'tx_margin_bottom'					=> '',
			'tx_margin_left'					=> '',
			'filter_margin_top'					=> '',
			'filter_margin_right'				=> '',
			'filter_margin_bottom'				=> '',
			'filter_margin_left'				=> '',
			'filter_padding_top'				=> '',
			'filter_padding_right'				=> '',
			'filter_padding_bottom'				=> '',
			'filter_padding_left'				=> '',
			'filter_linkmargin_top'				=> '',
			'filter_linkmargin_right'			=> '',
			'filter_linkmargin_bottom'			=> '',
			'filter_linkmargin_left'			=> '',
			'filter_border_radius_top'			=> '',
			'filter_border_radius_right'		=> '',
			'filter_border_radius_bottom'		=> '',
			'filter_border_radius_left'			=> '',
			'color_def'							=> '',
			'color_bgdef'						=> '',
			'color_hov'							=> '',
			'color_bgdefhover'					=> '',
			'border_type'						=> 'none',
			'border_width_top'					=> '',
			'border_width_right'				=> '',
			'border_width_bottom'				=> '',
			'border_width_left'					=> '',
			'color_border'						=> '',
			'color_borderhover'					=> '',
			'mask_color'						=> '',
			'mask_color2'						=> '',
			'mask_post2'						=> '',
			'mask_color_opacity'				=> '',
			'page_color'						=> '',
			'page_color_hover'					=> '',
			'page_color_bg'						=> '',
			'page_color_hover_bg'				=> '',
			'page_color_active'					=> '',
			'page_color_hover_bg_active'		=> '',
			'pagi_margin_top'					=> '',
			'pagi_margin_right'					=> '',
			'pagi_margin_bottom'				=> '',
			'pagi_margin_left'					=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'product__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_product', 'avo_product_func' );

?>
