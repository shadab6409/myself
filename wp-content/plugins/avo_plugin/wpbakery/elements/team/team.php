<?php


/* ---------------------------------------------------------------------------
 * Button
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_team_func' ) )
{
	function avo_team_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'team_style'			    => 'style-1',
            'title'			            => '',
            'text'			            => '',
            'image'			            => '',
            'team_height'			    => '',
            'image_position'			=> 'top center',
            'team_icon'			        => '',
            'link'			            => '',
            'icon'			            => '',
            'team_list'			        => '',
            'team_list_title'			=> '',
            'position'			        => '',
            'team_list_image'			=> '',
            'Social_icons'			    => '1',
            'Social_1'			        => '',
            'Social_1_link'			    => '',
            'Social_2'			        => '',
            'Social_2_link'			    => '',
            'Social_3'			        => '',
            'Social_3_link'			    => '',
            'Social_4'			        => '',
            'Social_5_link'			    => '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'team__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_team', 'avo_team_func' );

?>
