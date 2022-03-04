<?php


/* ---------------------------------------------------------------------------
 * Header Search
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_header_search_func' ) )
{
	function avo_header_search_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'avo_search_icons'		                => '',
			'color_icon'				            => '',
			'icon_size'			                    => '',
			'avo_header_border_radius_top'			=> '',
			'avo_header_border_radius_right' 	    => '',
			'avo_header_border_radius_bottom' 		=> '',
			'avo_header_border_radius_left' 		=> '',
			'avo_search_margin_top' 		        => '',
            'avo_search_margin_right' 		        => '',
            'avo_search_margin_bottom' 		        => '',
            'avo_search_margin_left' 		        => '',
            'avo_search_padding_top' 		        => '',
            'avo_search_padding_right' 		        => '',
            'avo_search_padding_bottom' 		    => '',
            'avo_search_padding_left' 		        => '',
            'avo_search_use_height_width' 		    => 'yes',
            'avo_search_width' 		                => '',
            'avo_search_height' 		            => '',
            'avo_search_line_height' 		        => '',
            'avo_search_icon_text_align' 		    => 'left',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'header_search__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_header_search', 'avo_header_search_func' );

?>
