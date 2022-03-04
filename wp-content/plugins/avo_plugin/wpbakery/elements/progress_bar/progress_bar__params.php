<?php

// Progress Bar -----------------------------
vc_map( array (
    'base' 			=> 'avo_progress_bar',
    'name' 			=> __('Progress Bar', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom progress bar element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'progress_bar_style',
            'value' => array(
                __( 'Style 1', 'avo_plg' ) => 'style-1',
                __( 'Style 2', 'avo_plg' ) => 'style-2',
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Mode', 'avo_plg' ),
            'param_name' => 'progress_bar_mode',
            'value' => array(
                __( 'Dark colored', 'avo_plg' ) => '1',
                __( 'Light colored', 'avo_plg' ) => '2',
                __( 'Dark BW', 'avo_plg' ) => '3',
                __( 'Light BW', 'avo_plg' ) => '4',
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'RTL', 'avo_plg' ),
            'param_name' => 'rtl',
            'value' => array(
                __( 'No', 'avo_plg' ) => 'no',
                __( 'Yes', 'avo_plg' ) => 'yes',
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Title', 'avo_plg' ),
            'param_name' => 'title',
        ), 
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Percentage', 'avo_plg' ),
            'param_name' => 'percentage',
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
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'avo_plg' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'avo_plg' ),
        ),
    )
));

?>
