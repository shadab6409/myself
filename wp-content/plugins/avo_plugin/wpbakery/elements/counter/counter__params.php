<?php

// Counter -----------------------------
vc_map( array (
    'base' 			=> 'avo_counter',
    'name' 			=> __('Counter', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom Counter element', 'avo_plg'),
    'params' 		=> array (
        // General
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'counter_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',

            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Dark Mode', 'avo_plg' ),
            'param_name' => 'dark_mode',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'yes',
                __( 'No', 'avo_plg' ) => 'no',
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Splitting', 'avo_plg' ),
            'param_name' => 'splitting',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'yes',
                __( 'No', 'avo_plg' ) => 'no',
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Title', 'avo_plg' ),
            'param_name' => 'title',
            'description' => __( 'Enter block title.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'counter_style',
                'value' => array(
                    'style-1', 
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Number', 'avo_plg' ),
            'param_name' => 'number',
            'description' => __( 'Enter block Number.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'counter_style',
                'value' => array(
                    'style-1', 
                )
            ),
        ), 
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'suffix', 'avo_plg' ),
            'param_name' => 'suffix',
            'description' => __( 'Enter block suffix.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'counter_style',
                'value' => array(
                    'style-1', 
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
                'element' => 'counter_style',
                'value' => array(
                    'style-1', 
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'speed', 'avo_plg' ),
            'param_name' => 'speed',
            'description' => __( 'Enter block speed.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'counter_style',
                'value' => array(
                    'style-1', 
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'steps', 'avo_plg' ),
            'param_name' => 'steps',
            'description' => __( 'Enter block steps.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'counter_style',
                'value' => array(
                    'style-1', 
                )
            ),
        ),

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Border', 'avo_plg' ),
            'param_name' => 'counter_border',
            'value' => array(
                __( 'On', 'avo_plg' ) => 'yes',
                __( 'Off', 'avo_plg' ) => 'no',
            ),
            'dependency' => array(
                'element' => 'counter_style',
                'value' => array(
                    'style-1', 
                )
            ),
        ),

    )
));

?>
