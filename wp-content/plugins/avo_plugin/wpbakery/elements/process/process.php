<?php


/* ---------------------------------------------------------------------------
 * process
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_process_func' ) )
{
	function avo_process_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'process_style'		        => 'style-1',
			'item_num'			        => '1',
			'work_process_list'			=> '',
			'title'	        			=> '',
			'image' 			        => '',
			'text' 				        => '',
			'description' 		        => '',
			'box_margin_top' 	    	=> '',
			'box_margin_right'          => '',
			'box_margin_bottom' 		=> '',
            'box_margin_left' 		    => '',
            'size' 	                	=> '',
            'box_border_type' 	    	=> 'none',
            'box_border_width_top' 		=> '',
            'box_border_width_right' 	=> '',
            'box_border_width_bottom' 	=> '',
            'box_border_width_left'		=> '',
            'box_border_color' 		    => '',
            'num_bg' 		            => '',
            'num_bg_stroke'             => '',
            'num_width_stroke' 	        => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'process__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_process', 'avo_process_func' );

 ?>
