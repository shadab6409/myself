<?php

/**
* WPBakery Page Builder Avo image shortcode params  
*/

vc_lean_map( 'avo_image', 'avo_image_sc_map' );

function avo_image_sc_map() {
		return array(
		'name' => __( 'Image', 'avo_plg' ),
		'description' => __( 'image block', 'avo_plg' ),
		'base' => 'avo_image',
		'category' => __( 'Avo', 'avo_plg' ),
		'params' => array(
			// General
			array(
				'type' => 'dropdown',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Style', 'avo_plg' ),
				'param_name' => 'image_Style',
				'value' => array(
					//__( 'Style 1', 'avo_plg' ) => 'Style-1',
					__( 'Style 2', 'avo_plg' ) => 'Style-2',
					//__( 'Style 3', 'avo_plg' ) => 'Style-3', 
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
					'element' => 'image_Style',
					'value' => array(
						//'Style-1', 
						'Style-2',
						//'Style-3',
					)
				),
			), 
			array(
				'type' => 'textfield',
				'holder' => 'em',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'SubTitle', 'avo_plg' ),
				'param_name' => 'subtitle',
				'description' => __( 'Enter block subtitle.', 'avo_plg' ),
				'dependency' => array(
					'element' => 'image_Style',
					'value' => array(
						//'Style-1', 
						'Style-2',
						//'Style-3',
					)
				),
			), 

			array(
				'type' => 'attach_image', 
				'group' => __( 'Image', 'avo_plg' ),
				'heading' => __( 'Icon image', 'avo_plg' ),
				'param_name' => 'icon_as_image',
				'description' => __( 'Choose icon image.', 'avo_plg' ),
				'dependency' => array(
					'element' => 'icon_type',
					'value' => array(
						'user_image'
					)
				)
			),
			array(
				'type' => 'textfield',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Height', 'avo_plg' ),
				'param_name' => 'image_height',
				'description' => __( 'Enter block Height with unit (px, %)', 'avo_plg' ),
				'dependency' => array(
					'element' => 'image_Style',
					'value' => array(
						//'Style-1', 
						'Style-2',
						//'Style-3',
					)
				),
			), 
			array(
				'type' => 'textfield',
				'group' => __( 'General', 'avo_plg' ),
				'heading' => __( 'Width', 'avo_plg' ),
				'param_name' => 'image_width',
				'description' => __( 'Enter block Width with unit (px, %)', 'avo_plg' ),
				'dependency' => array(
					'element' => 'image_Style',
					'value' => array(
						//'Style-1', 
						'Style-2',
						//'Style-3',
					)
				),
			), 
			array(
				'type' => 'css_editor',
				'heading' => __( 'Css', 'avo_content_box' ),
				'param_name' => 'content_styles',
				'group' => __( 'Design options', 'avo_plg' ),
			),


		),
	);
}