<?php

/* ---------------------------------------------------------------------------
 * countdown
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_countdown_func' ) )
{
	function avo_countdown_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'due_date'		                    => '',
			'view'				                => 'block',
			'days'			                    => 'yes',
			'hours'			                    => 'yes',
			'minutes' 			                => 'yes',
			'seconds' 				            => 'yes',
			'labels' 		                    => 'yes',
			'custom_labels' 		            => 'yes',
            'custom_labels_days' 		        => '',
            'custom_labels_hours' 		        => '',
            'custom_labels_minutes' 		    => '',
            'custom_labels_seconds' 	        => '',
            'boxes_container_width'             => '',
            'boxes_background_color'	        => '',
            'boxes_border_type' 		        => 'none',
            'boxes_border_width_top'            => '',
            'boxes_border_width_right' 	        => '',
            'boxes_border_width_bottom'         => '',
            'boxes_border_width_left' 	        => '',
            'boxes_border_color' 		        => '',
            'boxes_border_radius_top'	        => '',
            'boxes_border_radius_right'         => '',
            'boxes_border_radius_bottom'        => '',
            'boxes_border_radius_left' 	        => '',
            'boxes_space_between' 	            => '',
            'boxes_padding_top' 		        => '',
            'boxes_padding_right' 		        => '',
            'boxes_padding_bottom' 		        => '',
            'boxes_padding_left' 		        => '',
            'numbers_size' 		                => '',
            'numbers_weight' 		            => '',
            'numbers_color' 		            => '',
            'labels_size' 		                => '',
            'labels_weight' 		            => '',
            'labels_color' 		                => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'countdown__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_countdown', 'avo_countdown_func' );

?>
