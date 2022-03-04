<?php

// Button -----------------------------
vc_map( array (
    'base' 			=> 'avo_button',
    'name' 			=> __('Button', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom button element', 'avo_plg'),
    'params' 		=> array (
        // General

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'button_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
                __( 'style 3', 'avo_plg' ) => 'style-3',
                __( 'style 4', 'avo_plg' ) => 'style-4',
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
                'element' => 'button_style',
                'value' => array(
                    'style-1',
                    'style-2',
                ),
            ),
        ),
        
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Button Text', 'avo_plg'),
            'param_name' => 'btn_text',
            'value'   => __('Click now', 'avo_plg'),
            'dependency' => array(
                'element' => 'button_style',
                'value' => array(
                    'style-1',
                    'style-3',
                    'style-4',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Button Link', 'avo_plg'),
            'param_name' => 'link',
            'value'   => __('Leave Link here', 'avo_plg'),
        ),
        array(
            'type' => 'avo_icon_picker', 
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Icon', 'avo_plg' ),
            'param_name' => 'avo_info_icons',
            'description' => __( 'Choose icon.', 'avo_plg' ),
            'settings' => array(),
            'dependency' => array(
                'element' => 'button_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Background Color', 'avo_plg'),
            'param_name' => 'btn_color',
            'dependency' => array(
                'element' => 'button_style',
                'value' => array(
                    'style-4',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Border Color', 'avo_plg'),
            'param_name' => 'btn_border_color',
            'dependency' => array(
                'element' => 'button_style',
                'value' => array(
                    'style-4',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Text Color', 'avo_plg'),
            'param_name' => 'btn_txt_color',
            'dependency' => array(
                'element' => 'button_style',
                'value' => array(
                    'style-4',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Background Color Hover', 'avo_plg'),
            'param_name' => 'btn_color_hover',
            'dependency' => array(
                'element' => 'button_style',
                'value' => array(
                    'style-4',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Border Color Hover', 'avo_plg'),
            'param_name' => 'btn_border_color_hover',
            'dependency' => array(
                'element' => 'button_style',
                'value' => array(
                    'style-4',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Text Color Hover', 'avo_plg'),
            'param_name' => 'btn_txt_color_hover',
            'dependency' => array(
                'element' => 'button_style',
                'value' => array(
                    'style-4',
                ),
            ),
        ),
    )
));

?>
