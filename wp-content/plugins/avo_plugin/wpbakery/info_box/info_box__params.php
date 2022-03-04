<?php

/**
* WPBakery Page Builder Avo InfoBox shortcode params  
*/

vc_lean_map( 'avo_info_box', 'avo_info_box_sc_map' );

function avo_info_box_sc_map() {
		return array(
		'name' => __( 'InfoBox', 'avo_plg' ),
		'description' => __( 'Info_box block', 'avo_plg' ),
		'base' => 'avo_info_box',
		'category' => __( 'Avo', 'avo_plg' ),
		'params' => array(
			// General
			array(
				'type' => 'dropdown',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Style', 'avo_plg' ),
				'param_name' => 'info_box_Style',
				'value' => array(
					//__( 'Style 1', 'avo_plg' ) => 'Style-1',
					//__( 'Style 2', 'avo_plg' ) => 'Style-2',
					//__( 'Style 3', 'avo_plg' ) => 'Style-3',
					//__( 'Style 4', 'avo_plg' ) => 'Style-4',
					//__( 'Style 5', 'avo_plg' ) => 'Style-5',
					__( 'Style 6', 'avo_plg' ) => 'Style-6',
					//__( 'Style 7', 'avo_plg' ) => 'Style-7',
					//__( 'Style 8', 'avo_plg' ) => 'Style-8', 
				)
			),
			array(
				'type' => 'textfield',
				'holder' => 'em',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Title', 'avo_plg' ),
				'param_name' => 'title',
				'description' => __( 'Enter block title.', 'avo_plg' ),
				'dependency' => array(
					'element' => 'info_box_Style',
					'value' => array(
						//'Style-6', 
						//'Style-2',
						//'Style-3',
						//'Style-4',
						//'Style-5',
						'Style-6',
						//'Style-7',
						//'Style-8'
					)
				),
			), 

			array(
				'type' => 'avo_icon_picker', 
				'group' => __( 'Icon', 'avo_plg' ),
				'heading' => __( 'Icon', 'avo_plg' ),
				'param_name' => 'icon_as_icon',
				'description' => __( 'Choose icon.', 'avo_plg' ),
				'settings' => array(),
				'dependency' => array(
					'element' => 'icon_type',
					'value' => array(
						'font_icon'
					)
				)
			),
		),
	);
}