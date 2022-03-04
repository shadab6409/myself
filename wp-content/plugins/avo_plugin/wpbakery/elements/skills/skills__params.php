<?php

// Skills -----------------------------
vc_map( array (
    'base' 			=> 'avo_skills',
    'name' 			=> __('Skills', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom skills element', 'avo_plg'),
    'params' 		=> array (
        // General

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'skills_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Mode', 'avo_plg'),
            'param_name' => 'avo_mode',
            'value' => array(
                __( 'Dark', 'avo_plg' ) => '1',
                __( 'Light', 'avo_plg' ) => '2', 
            ),
            'dependency' => array(
                'element' => 'port_style',
                'value' => array(
                    'style-1',
                    'style-2',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Number', 'avo_plg'),
            'param_name' => 'progress_num',
            'value'   => __('60', 'avo_plg'),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Width', 'avo_plg'),
            'param_name' => 'progress_width',
            'value'   => __('110', 'avo_plg'),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Height', 'avo_plg'),
            'param_name' => 'progress_height',
            'value'   => __('110', 'avo_plg'),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Thickness', 'avo_plg'),
            'param_name' => 'progress_thickness',
            'value'   => __('0.03', 'avo_plg'),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Title', 'avo_plg'),
            'param_name' => 'progress_title',
            'value'   => __('Feature works', 'avo_plg'),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Sub Title', 'avo_plg'),
            'param_name' => 'progress_subtitle',
            'value'   => __('Feature works', 'avo_plg'),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Animation Speed', 'avo_plg'),
            'param_name' => 'progress_speed',
            'value'   => __('5000', 'avo_plg'),
            'description' => __( 'The total duration of the count animation in milisecond eg. 5000', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Animation Steps', 'avo_plg'),
            'param_name' => 'progress_steps',
            'value'   => __('10', 'avo_plg'),
            'description' => __( 'Counter steps eg. 10', 'avo_plg' ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('BG Color', 'avo_plg'),
            'param_name' => 'progress_bgcolor',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('FG Color', 'avo_plg'),
            'param_name' => 'progress_fgcolor',
        ),
    )
));

?>
