<?php

// Showcase -----------------------------
vc_map( array (
    'base' 			=> 'avo_showcase',
    'name' 			=> __('Showcase', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom Showcase element', 'avo_plg'),
    'params' 		=> array (
        // General
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'showcase_style',
            'value' => array(
                __( 'style 1 (Full)', 'avo_plg' ) => 'style-1',
                __( 'style 2 (Creative)', 'avo_plg' ) => 'style-2',
                __( 'style 3 (Raduis)', 'avo_plg' ) => 'style-3',
                __( 'style 4 (Columns)', 'avo_plg' ) => 'style-4',
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Mouse wheel', 'avo_plg' ),
            'param_name' => 'mousewheel',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'true',
                __( 'No', 'avo_plg' ) => 'false',
            ),
            'dependency' => array(
                'element' => 'showcase_style',
                'value' => array(
                    'style-2', 
                    'style-3',
                    'style-4',
                )
            ),
        ),
        array(
              'type' => 'param_group',
              'group' => __( 'General', 'avo_plg' ),
              'param_name' => 'items',
              'heading'         => __('Images', 'avo_plg'),
              'params' => array(

                  array (
                      'param_name'  => 'image',
                      'type'            => 'attach_image',
                      'heading'         => __('Image', 'avo_plg'),
                      'admin_label' => false,
                  ),
                  array (
                      'param_name'  => 'title',
                      'type'            => 'textfield',
                      'heading' => __( 'Enter block title.', 'avo_plg' ),
                      'admin_label' => true,
                  ),
                  array (
                      'param_name'  => 'subtitle',
                      'type'            => 'textfield',
                      'heading' => __( 'Enter block Subtitle.', 'avo_plg' ),
                      'admin_label' => true,
                  ),
                  array (
                      'param_name'  => 'link',
                      'type'            => 'textfield',
                      'heading'         => __('Link', 'avo_plg'),
                      'admin_label' => true,
                  ),


              )
        ),

        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Next', 'avo_plg' ),
            'param_name' => 'nav_next',
            'description' => __( 'Enter block title.', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Prev.', 'avo_plg' ),
            'param_name' => 'nav_prev',
            'description' => __( 'Enter block title.', 'avo_plg' ),
        ),

    )
));

?>
