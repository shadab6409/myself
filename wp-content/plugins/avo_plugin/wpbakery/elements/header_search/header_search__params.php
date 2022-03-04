<?php

// Logo -----------------------------
vc_map( array (
    'base' 			=> 'avo_header_search',
    'name' 			=> __('Header Search', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom header search element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'avo_icon_picker', 
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Select Icon', 'avo_plg' ),
            'param_name' => 'avo_search_icons',
            'description' => __( 'Choose icon.', 'avo_plg' ),
            'settings' => array(),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __('Content Background', 'avo_plg'),
            'param_name' => 'color_icon',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Size', 'avo_plg' ),
            'param_name' => 'icon_size',
            'description' => __( 'Please add value start from 6 to 300 (px)', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Left', 'avo_plg' ),
            'param_name' => 'avo_header_border_radius_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Right', 'avo_plg' ),
            'param_name' => 'avo_header_border_radius_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Right', 'avo_plg' ),
            'param_name' => 'avo_header_border_radius_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Left', 'avo_plg' ),
            'param_name' => 'avo_header_border_radius_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'avo_search_margin_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'avo_search_margin_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'avo_search_margin_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'avo_search_margin_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Padding Top', 'avo_plg' ),
            'param_name' => 'avo_search_padding_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Padding Right', 'avo_plg' ),
            'param_name' => 'avo_search_padding_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Padding Bottom', 'avo_plg' ),
            'param_name' => 'avo_search_padding_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Padding Left', 'avo_plg' ),
            'param_name' => 'avo_search_padding_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __('Use Height Width', 'avo_plg'),
            'param_name' => 'avo_search_use_height_width',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no',
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Width', 'avo_plg' ),
            'param_name' => 'avo_search_width',
            'description' => __( 'Please add value start from 6 to 300 (for example: px or %)', 'avo_plg' ),
            'dependency' => array(
                'element' => 'avo_search_use_height_width',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Height', 'avo_plg' ),
            'param_name' => 'avo_search_height',
            'description' => __( 'Please add value start from 6 to 300 (for example: px or %)', 'avo_plg' ),
            'dependency' => array(
                'element' => 'avo_search_use_height_width',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __( 'Line Height', 'avo_plg' ),
            'param_name' => 'avo_search_line_height',
            'description' => __( 'Please add value start from 6 to 300 (for example: px or %)', 'avo_plg' ),
            'dependency' => array(
                'element' => 'avo_search_use_height_width',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'Header Search', 'avo_plg' ),
            'heading' => __('Alignment', 'avo_plg'),
            'param_name' => 'avo_search_icon_text_align',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center', 
                __( 'Right', 'avo_plg' ) => 'right', 
            ),
        ),

    )
));

?>
