<?php

/**
* WPBakery Page Builder Avo Heading shortcode params
*/

vc_lean_map( 'avo_heading', 'avo_heading_sc_map' );

function avo_heading_sc_map() {
		return array(
		'name' => __( 'Heading', 'avo_plg' ),
		'description' => __( 'Headnig block', 'avo_plg' ),
		'base' => 'avo_heading',
		'category' => __( 'Avo', 'avo_plg' ),
		'params' => array(
			// General
			array(
				'type' => 'avo_choose_box',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Heading layout', 'avo_plg' ),
				'param_name' => 'subtitle_type_layout',
				'value' => array(
					array(
						'key' => 'bottom_subtitle',
						'title' => __( 'Bottom Subtitle', 'avo_plg' ),
					),
					array(
						'key' => 'top_subtitle',
						'title' => __( 'Top Subtitle', 'avo_plg' ),
					),
					array(
						'key' => 'without_subtitle',
						'title' => __( 'Without Subtitle', 'avo_plg' ),
					)
				)
			),
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div class="avo_heading_VC_gap"',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Title', 'avo_plg' ),
				'param_name' => 'title',
				'description' => __( 'Enter block title (<b>HTML allowed</b>).', 'avo_plg' ),
			),

		),
	);
}