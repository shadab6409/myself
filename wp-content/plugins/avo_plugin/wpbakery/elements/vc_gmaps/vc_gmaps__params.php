<?php

vc_add_params('vc_gmaps', array(
	array(
		'type' => 'dropdown',
		'group' => __( 'Advanced', 'avo_plg' ),
		'heading' => __('Filter', 'avo_plg'),
		'param_name' => 'filter',
		'value' => array(
			__( 'none', 'avo_plg' ) => 'none',
			__( 'Gray scale', 'avo_plg' ) => 'grayscale(1)', 
		),
	),
));