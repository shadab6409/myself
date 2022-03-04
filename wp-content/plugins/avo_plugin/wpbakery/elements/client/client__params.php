<?php

// Client -----------------------------
vc_map( array (
    'base' 			=> 'avo_client',
    'name' 			=> __('Client', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom client element', 'avo_plg'),
    'params' 		=> array (
        // General

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'client_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
            )
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Text', 'avo_plg'),
            'param_name' => 'text',
            'value'   => __('Insert text here..', 'avo_plg'),
            'dependency' => array(
                'element' => 'client_style',
                'value' => array(
                    'style-1',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Client Link', 'avo_plg'),
            'param_name' => 'link',
            'value'   => '#',
        ),
        array (
            'param_name'    => 'image',
            'type'          => 'attach_image',
            'heading'       => __('Image dark', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
        ),
        array (
            'param_name'    => 'image2',
            'type'          => 'attach_image',
            'heading'       => __('Image light', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
        ),
    )
));

?>
