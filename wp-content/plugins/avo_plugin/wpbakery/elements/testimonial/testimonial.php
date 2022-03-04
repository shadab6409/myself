<?php


/* ---------------------------------------------------------------------------
 * Testimonial
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_testimonial_func' ) )
{
	function avo_testimonial_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'testimonial_style'			=> 'style-1',
            'avo_mode'			            => '1',
            'item_num'			            => '1',
            'item_dots'			            => 'true',
            'item_autoplay'		       	=> 'true',
            'testi_list'		    	      => '',
            'title'			            => 'Title',
            'position'		        	      => 'Position',
            'image'		            	=> '',
            'text'		               	=> 'Text',
            'rate'		            	=> '3.5',
            'title_color'		    	      => '',
            'title_size'		    	      => '',
            'name_color'		    	      => '',
            'name_size'		        	      => '',
            'post_color'	    		      => '',
            'post_size'		        	      => '',
            'quote_color'		    	      => '',
            'quotebg_color'		    	      => '',
            'quote_radius_top'			=> '',
            'quote_radius_right'		      => '',
            'quote_radius_bottom'		      => '',
            'quote_radius_left'			=> '',
            'border_color'		    	      => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'testimonial__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_testimonial', 'avo_testimonial_func' );

?>
