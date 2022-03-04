<?php


/* ---------------------------------------------------------------------------
 * Heading
* --------------------------------------------------------------------------- */
add_shortcode( 'avo_heading', 'avo_heading_func' );

	function avo_heading_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'heading_style'			=> 'style-1',
			'rtl'					=> 'rtl',
			'align_title'			=> 'left',
			'align_header'			=> 'left',
			'parlx'					=> 'parlx',
			'fixed_pos'				=> '',
			'dis_top'				=> '',
			'title_1'				=> '',
			'title_2'				=> '',
			'title'					=> '',
			'text' 					=> '',
			'btn_text' 				=> '',
			'link' 					=> '',
			'animation' 			=> 'animate',
			'image' 				=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'heading__view.php' );
		return ob_get_clean();
	}

 ?>
