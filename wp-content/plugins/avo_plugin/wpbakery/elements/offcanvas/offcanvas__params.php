<?php

// Offcanvas -----------------------------
vc_map( array (
    'base' 			=> 'avo_offcanvas',
    'name' 			=> __('Offcanvas', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom offcanvas element', 'avo_plg'),
    'params' 		=> array (
        // General

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'offcanvas_style',
            'value' => array(
                __( 'Style 1', 'avo_plg' ) => 'style-1',
                __( 'Style 2', 'avo_plg' ) => 'style-2',
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Select Side Panel', 'avo_plg' ),
            'param_name' => 'avo_side_panel',
            'value' => array(
                avo_side_panel_choices(),
            ),
            'dependency' => array(
                'element' => 'offcanvas_style',
                'value' => array(
                    'style-0',
                ),
            ),
        ),
        array(
            'type' => 'avo_icon_picker', 
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Select Icon', 'avo_plg' ),
            'param_name' => 'avo_offcanvas_icons',
            'description' => __( 'Choose icon.', 'avo_plg' ),
            'settings' => array(),
            'dependency' => array(
                'element' => 'offcanvas_style',
                'value' => array(
                    'style-1',
                ),
            ),
        ),
        array (
            'param_name'    => 'image',
            'type'          => 'attach_image',
            'heading'       => __('Choose Image', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'offcanvas_style',
                'value' => array(
                    'style-1',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Width', 'avo_plg' ),
            'param_name' => 'image_size',
            'description' => __( 'Plaese set image size from 5 to 100 (without value)', 'avo_plg' ),
            'dependency' => array(
                'element' => 'offcanvas_style',
                'value' => array(
                    'style-1',
                )
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'title', 'avo_plg' ),
            'param_name' => 'Title',
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'subtitle', 'avo_plg' ),
            'param_name' => 'subtitle',
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Text', 'avo_plg' ),
            'param_name' => 'text',
            'dependency' => array(
                'element' => 'offcanvas_style',
                'value' => array(
                    'style-1',
                )
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Button Text', 'avo_plg' ),
            'param_name' => 'btn_text',
            'dependency' => array(
                'element' => 'offcanvas_style',
                'value' => array(
                    'style-1',
                )
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Button Link', 'avo_plg' ),
            'param_name' => 'link',
            'dependency' => array(
                'element' => 'offcanvas_style',
                'value' => array(
                    'style-1',
                )
            ),
        ), 
        array(
            'type' => 'dropdown',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __('Alignment', 'avo_plg'),
            'param_name' => 'content_align',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center', 
                __( 'Right', 'avo_plg' ) => 'right', 
            ),
            'dependency' => array(
                'element' => 'offcanvas_style',
                'value' => array(
                    'style-2',
                )
            ),
        ),
    )
));