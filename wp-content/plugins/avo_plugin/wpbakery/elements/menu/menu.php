<?php


/* ---------------------------------------------------------------------------
 * Menu
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_menu_func' ) )
{
	function avo_menu_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
			'avo_menu'		            => 'menu-1',
			'menu_style'				=> 'style-1',
			'menu_sticky'			    => 'yes',
			'menu_type'			        => 'left',
			'align' 			        => 'left',
			'align_child' 				=> 'left',
			'desktop_menu' 		        => 'inline-block',
			'mobile_menu' 		        => 'inline-block',
            'menu_sticky_bg' 		    => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'menu__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_menu', 'avo_menu_func' );

?>
