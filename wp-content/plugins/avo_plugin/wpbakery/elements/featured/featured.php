<?php


/* ---------------------------------------------------------------------------
 * Featured
* --------------------------------------------------------------------------- */
add_shortcode( 'avo_featured', 'avo_featured_func' );

	function avo_featured_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'featured_style'			        => 'style-1',
			'title'					            => '',
			'feature_1'			                => '',
			'feature_1_link'			        => '',
			'feature_2'					        => '',
			'feature_2_link'				    => '',
			'description'				        => '',
			'image'					            => '',
			'featured_icon' 					=> '',
			'link' 				                => '',
			'mention' 					        => '',
			'icon' 			                    => '',
            'featured_list' 				    => '',
            'featured_list_title' 				=> '',
            'text' 				                => '',
            'num' 				                => '',
            'port_content_top' 				    => '',
            'port_content_right' 				=> '',
            'port_content_bottom' 				=> '',
            'port_content_left' 				=> '',
            'port_padding_top' 				    => '',
            'port_padding_right' 				=> '',
            'port_padding_bottom' 				=> '',
            'port_padding_left' 				=> '',
            'bg_content' 				        => '',
            'content_align' 				    => 'left',
            'title_cl' 				            => '',
            'txt_cl' 				            => '',
            'icon_color' 				        => '',
            'icon_bg' 				            => '',
            'icon_radius_top' 				    => '',
            'icon_radius_right' 				=> '',
            'icon_radius_bottom' 				=> '',
            'icon_radius_left' 				    => '',
            'icon_size' 				        => '',
            'icon_padding_top' 				    => '',
            'icon_padding_right' 				=> '',
            'icon_padding_bottom' 				=> '',
            'icon_padding_left' 				=> '',
            'icon_margin_top' 				    => '',
            'icon_margin_right' 				=> '',
            'icon_margin_bottom' 				=> '',
            'icon_margin_left' 				    => '',
            'mask_color' 				        => '',
            'mask_color_opacity' 				=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'featured__view.php' );
		return ob_get_clean();
	}

 ?>
