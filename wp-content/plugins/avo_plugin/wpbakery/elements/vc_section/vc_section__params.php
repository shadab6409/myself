<?php

// vc_add_param( "vc_section", "css" );
vc_add_params('vc_section', array(
	array(
        'type' => 'textfield',
        'holder' => 'em',
        'group' => __( 'Advanced', 'avo_plg' ),
        'heading' => __( 'Section max height (vh)', 'avo_plg' ),
        'param_name' => 'custom_section_max_height',
	),
	array(
		'type' => 'colorpicker',
		'group' => __( 'Advanced', 'avo_plg' ),
		'heading' => __('Overlay Color', 'avo_plg'),
		'param_name' => 'background_overlay_color',
	),
    array (
		'param_name'    => 'background_overlay_image',
		'type'          => 'attach_image',
		'heading'       => __('background overlay', 'avo_plg'),
		'group' => __( 'Advanced', 'avo_plg' ),
	),
	array(
		'type'          => 'checkbox',
		'group' => __( 'Advanced', 'avo_plg' ),
		'std' => '', // default unchecked
		'heading'       => __( 'Relative Position', 'avo_plg' ),
		'value'         => array('relative'   => 'yes' ),
		'param_name'    => 'section_pos_relative',
	),
	array(
		'type'          => 'checkbox',
		'group' => __( 'Advanced', 'avo_plg' ),
		'std' => '', // default unchecked
		'heading'       => __( 'Overflow Unset', 'avo_plg' ),
		'value'         => array('overflow unset'   => 'yes' ),
		'param_name'    => 'section_overflow_unset',
	),

));