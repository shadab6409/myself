<?php


/* ---------------------------------------------------------------------------
 * Skills
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_skills_func' ) )
{
	function avo_skills_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'skills_style'			    => 'style-1',
            'avo_mode'			        => '1',
            'progress_num'			    => '60',
            'progress_width'			=> '110',
			'progress_height'			=> '110',
			'progress_thickness'		=> '0.03',
			'progress_title'			=> 'Feature works',
			'progress_subtitle'			=> 'Feature works',
			'progress_speed'			=> '5000',
			'progress_steps'			=> '10',
			'progress_bgcolor'			=> '',
			'progress_fgcolor'			=> '',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'skills__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_skills', 'avo_skills_func' );

?>
