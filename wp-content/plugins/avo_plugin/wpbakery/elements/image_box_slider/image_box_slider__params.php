<?php

// Image box slider -----------------------------
vc_map( array (
    'base' 			=> 'avo_image_box_slider',
    'name' 			=> __('Image Box Slider', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom Image box slider element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'box_style',
            'value' => array(
                __( 'Style 1', 'avo_plg' ) => 'style-1',
                __( 'Style 2', 'avo_plg' ) => 'style-2',
            )
        ),
        array(
            'type' => 'param_group',
            'param_name' => 'imgbox_list',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array (
                    'param_name'    => 'image_icon',
                    'type'          => 'attach_image',
                    'heading'       => __('Image Icon', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
                array(
                  'type' => 'textfield',
                  'heading' => __('Image-box Title', 'avo_plg'),
                  'value' => __( 'Title', 'avo_plg' ),
                  'param_name' => 'title',
                ),
                array (
                    'param_name'    => 'image',
                    'type'          => 'attach_image',
                    'heading'       => __('Image', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => __('Image-box Text', 'avo_plg'),
                    'value' => __( 'Text', 'avo_plg' ),
                    'param_name' => 'text',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => __('btn text', 'avo_plg'),
                    'value' => __( 'btn text', 'avo_plg' ),
                    'param_name' => 'btn_text',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => __('Image-box Link', 'avo_plg'),
                    'value' => __( '#', 'avo_plg' ),
                    'param_name' => 'link',
                ),
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Arrows', 'avo_plg' ),
            'param_name' => 'show_arrows',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'true',
                __( 'Hide', 'avo_plg' ) => 'false',
            ),
            'dependency' => array(
                'element' => 'box_style',
                'value' => array(
                    'style-2',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'title_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Name Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'name_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Position Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'post_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Border Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'border_color',
        ),
    )
));