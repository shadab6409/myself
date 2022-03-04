<?php

// InfoBox -----------------------------
vc_map( array (
    'base' 			=> 'avo_image',
    'name' 			=> __('Image', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom Image element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'image_style',
            'value' => array(
                __( 'Style 1', 'avo_plg' ) => 'style-1',
                __( 'Style 2', 'avo_plg' ) => 'style-2',
                __( 'Style 3', 'avo_plg' ) => 'style-3',
            )
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
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Title', 'avo_plg' ),
            'param_name' => 'title',
            'description' => __( 'Enter block title.', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'SubTitle', 'avo_plg' ),
            'param_name' => 'subtitle',
            'description' => __( 'Enter block subtitle.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'image_style',
                'value' => array(
                    'style-1', 
                    'style-2',
                )
            ),
        ), 
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Link', 'avo_plg' ),
            'param_name' => 'link',
            'description' => __( 'Enter your link.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'image_style',
                'value' => array(
                    'style-3', 
                )
            ),
        ), 
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'avo_plg' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'avo_plg' ),
        ),

        array (
            'param_name'    => 'img_width',
            'type'          => 'textfield',
            'heading'       => __('Image width', 'avo_plg'),
            'description'   => __('Please add the unit (for example: px or %).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
        ),
        array (
            'param_name'    => 'img_height',
            'type'          => 'textfield',
            'heading'       => __('Image height', 'avo_plg'),
            'description'   => __('Please add the unit (for example: px or %).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
        ),
        array (
            'param_name'    => 'img_border_radius',
            'type'          => 'textfield',
            'heading'       => __('Image Border Radius', 'avo_plg'),
            'description'   => __('Please add the unit (for example: px or %).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'image_style',
                'value' => array(
                    'style-1', 
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Custom Class', 'avo_plg' ),
            'param_name' => 'custom_class',
            'description' => __( 'Enter custom class', 'avo_plg' ),
        ), 

    )
));

?>
