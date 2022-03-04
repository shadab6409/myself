<?php

// fancy -----------------------------
vc_map( array (
    'base' 			=> 'avo_fancy',
    'name' 			=> __('Fancy', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom fancy element', 'avo_plg'),
    'params' 		=> array (
        // General

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'fancy_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
            )
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Fancy Title 1', 'avo_plg' ),
            'param_name' => 'title1',
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Fancy Title 2', 'avo_plg' ),
            'param_name' => 'title2',
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Fancy Subtitle 1', 'avo_plg' ),
            'param_name' => 'text1',
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Fancy Subtitle 2', 'avo_plg' ),
            'param_name' => 'text2',
        ),
        array (
            'param_name'    => 'image_bg',
            'type'          => 'attach_image',
            'heading'       => __('Image Background', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
        ),
    )
));