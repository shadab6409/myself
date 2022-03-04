<?php

// Testimonial -----------------------------
vc_map( array (
    'base' 			=> 'avo_testimonial',
    'name' 			=> __('Testimonial', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom testimonial element', 'avo_plg'),
    'params' 		=> array (
        // General

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'testimonial_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
                __( 'style 3', 'avo_plg' ) => 'style-3',
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
                'element' => 'testimonial_style',
                'value' => array(
                    'style-3',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Slides to show', 'avo_plg'),
            'param_name' => 'item_num',
            'value' => array(
                __( '1', 'avo_plg' ) => '1',
                __( '2', 'avo_plg' ) => '2', 
                __( '3', 'avo_plg' ) => '3',
                __( '4', 'avo_plg' ) => '4',
                __( '5', 'avo_plg' ) => '5',
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Autoplay to show', 'avo_plg'),
            'param_name' => 'item_autoplay',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'true',
                __( 'No', 'avo_plg' ) => 'false', 
            ),
        ),
        array(
            'type' => 'param_group',
            'param_name' => 'testi_list',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array(
                  'type' => 'textfield',
                  'name' => 'title',
                  'heading' => __('Testimonial Name', 'avo_plg'),
                  'value' => __( 'Title', 'avo_plg' ),
                  'param_name' => 'title',
                ),
                array(
                  'type' => 'textfield',
                  'name' => 'position',
                  'heading' => __('Testimonial Position', 'avo_plg'),
                  'value' => __( 'position', 'avo_plg' ),
                  'param_name' => 'position',
                ),
                array (
                    'param_name'    => 'image',
                    'type'          => 'attach_image',
                    'heading'       => __('Client Image', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
                array(
                  'type' => 'textarea',
                  'name' => 'text',
                  'heading' => __('Testimonial Text', 'avo_plg'),
                  'value' => __( 'Text', 'avo_plg' ),
                  'param_name' => 'text',
                ),
                array(
                  'type' => 'textfield',
                  'name' => 'rate',
                  'heading' => __('Testimonial Rate', 'avo_plg'),
                  'value' => __( '3.5', 'avo_plg' ),
                  'param_name' => 'rate',
                ),
            )
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Text Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'title_color',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Text Setting', 'avo_plg' ),
            'heading' => __('Size', 'avo_plg'),
            'param_name' => 'title_size',
            'description'   => __('Please do not add the unit (for example: px or %).', 'avo_plg'),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Name Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'name_color',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Name Setting', 'avo_plg' ),
            'heading' => __('Size', 'avo_plg'),
            'param_name' => 'name_size',
            'description'   => __('Please do not add the unit (for example: px or %).', 'avo_plg'),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Position Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'post_color',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Position Setting', 'avo_plg' ),
            'heading' => __('Size', 'avo_plg'),
            'param_name' => 'post_size',
            'description'   => __('Please do not add the unit (for example: px or %).', 'avo_plg'),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Quote Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'quote_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Quote Setting', 'avo_plg' ),
            'heading' => __('Background Color', 'avo_plg'),
            'param_name' => 'quotebg_color',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Quote Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Left', 'avo_plg' ),
            'param_name' => 'quote_radius_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Quote Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Right', 'avo_plg' ),
            'param_name' => 'quote_radius_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Quote Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Right', 'avo_plg' ),
            'param_name' => 'quote_radius_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Quote Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Left', 'avo_plg' ),
            'param_name' => 'quote_radius_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Border Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'border_color',
        ),
    )
));

?>
