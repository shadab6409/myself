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
				'type' => 'dropdown',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Style', 'avo_plg' ),
				'param_name' => 'header_Style',
				'value' => array(
					__( 'Style 1', 'avo_plg' ) => 'Style-1',
					__( 'Style 2', 'avo_plg' ) => 'Style-2',
					__( 'Style 3', 'avo_plg' ) => 'Style-3',
					__( 'Style 4', 'avo_plg' ) => 'Style-4',
					__( 'Style 5', 'avo_plg' ) => 'Style-5',
				)
			),
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div class="avo_heading_VC_gap"',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Title 1', 'avo_plg' ),
				'param_name' => 'title_1',
				'description' => __( 'Enter block title (<b>HTML allowed</b>).', 'avo_plg' ),
			), 
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div class="avo_heading_VC_gap"',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Title 2', 'avo_plg' ),
				'param_name' => 'title_2',
				'description' => __( 'Enter block title (<b>HTML allowed</b>).', 'avo_plg' ),
			),
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div class="avo_heading_VC_gap"',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Title', 'avo_plg' ),
				'param_name' => 'title',
				'description' => __( 'Enter block title (<b>HTML allowed</b>).', 'avo_plg' ),
			),
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div class="avo_heading_VC_gap"',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Text', 'avo_plg' ),
				'param_name' => 'text',
				'description' => __( 'Enter block title (<b>HTML allowed</b>).', 'avo_plg' ),
			),
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div class="avo_heading_VC_gap"',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'btn text', 'avo_plg' ),
				'param_name' => 'btn_text',
				'description' => __( 'Enter block title (<b>HTML allowed</b>).', 'avo_plg' ),
			),
			array(
				'type' => 'textarea_raw_html',
				'holder' => 'div class="avo_heading_VC_gap"',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'link', 'avo_plg' ),
				'param_name' => 'link',
				'description' => __( 'Enter block title (<b>HTML allowed</b>).', 'avo_plg' ),
			),

		),
	);
}