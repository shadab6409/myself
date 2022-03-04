<?php

// Logo -----------------------------
vc_map( array (
    'base' 			=> 'avo_logo',
    'name' 			=> __('Logo', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom logo element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Alignment', 'avo_plg'),
            'param_name' => 'align',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center', 
                __( 'Right', 'avo_plg' ) => 'right', 
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Logo Settings', 'avo_plg' ),
            'heading' => __( 'Padding Top', 'avo_plg' ),
            'param_name' => 'logo_padding_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Logo Settings', 'avo_plg' ),
            'heading' => __( 'Padding Right', 'avo_plg' ),
            'param_name' => 'logo_padding_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Logo Settings', 'avo_plg' ),
            'heading' => __( 'Padding Bottom', 'avo_plg' ),
            'param_name' => 'logo_padding_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Logo Settings', 'avo_plg' ),
            'heading' => __( 'Padding Left', 'avo_plg' ),
            'param_name' => 'logo_padding_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Logo Settings', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'logo_margin_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Logo Settings', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'logo_margin_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Logo Settings', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'logo_margin_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Logo Settings', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'logo_margin_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 

    )
));

?>
