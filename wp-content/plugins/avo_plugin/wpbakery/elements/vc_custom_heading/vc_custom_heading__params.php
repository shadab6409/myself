<?php

// vc_add_param( "vc_custom_heading", "css" );
vc_add_params('vc_custom_heading', array(
    array(
        'type' => 'textfield',
        'holder' => 'em',
        'group' => __( 'Advanced', 'avo_plg' ),
        'heading' => __( 'Letter spacing (px)', 'avo_plg' ),
        'param_name' => 'letter_spacing',
    ),
    array(
        'type' => 'textfield',
        'holder' => 'em',
        'group' => __( 'Advanced', 'avo_plg' ),
        'heading' => __( 'Font weight', 'avo_plg' ),
        'param_name' => 'custom_font_weight',
    ),
    array(
		'type'          => 'checkbox',
		'group' => __( 'Advanced', 'avo_plg' ),
		'std' => '', // default unchecked
		'heading'       => __( 'Position Relative', 'avo_plg' ),
		'value'         => array('Relative'   => 'yes' ),
		'param_name'    => 'position_relative',
	),
    array(
		'type'          => 'checkbox',
		'group' => __( 'Advanced', 'avo_plg' ),
		'std' => '', // default unchecked
		'heading'       => __( 'Splitting Animation', 'avo_plg' ),
		'value'         => array('Splitting'   => 'yes' ),
		'param_name'    => 'splitting_animation',
	),

));