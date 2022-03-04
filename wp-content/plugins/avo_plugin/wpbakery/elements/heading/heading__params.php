<?php

// Heading -----------------------------
vc_map( array (
    'base' 			=> 'avo_heading',
    'name' 			=> __('Heading', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom Heading element', 'avo_plg'),
    'params' 		=> array (
        // General

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'heading_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
                __( 'style 3', 'avo_plg' ) => 'style-3',
                __( 'style 4', 'avo_plg' ) => 'style-4',
                __( 'style 5', 'avo_plg' ) => 'style-5',
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'RTL', 'avo_plg' ),
            'param_name' => 'rtl',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'rtl',
                __( 'No', 'avo_plg' ) => 'no',
            ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1', 
                    'style-2',
                    'style-3',
                )
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Title parts Alignment', 'avo_plg' ),
            'param_name' => 'align_title',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center',
                __( 'Right', 'avo_plg' ) => 'right',
                __( 'Justified', 'avo_plg' ) => 'justify',
            ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-5', 
                )
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Main title Alignment', 'avo_plg' ),
            'param_name' => 'align_header',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center',
                __( 'Right', 'avo_plg' ) => 'right',
                __( 'Justified', 'avo_plg' ) => 'justify',
            ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-5', 
                )
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Parallax', 'avo_plg' ),
            'param_name' => 'parlx',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'parlx',
                __( 'No', 'avo_plg' ) => 'no',
            ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1', 
                    'style-3',
                )
            ),
        ),
        array(
            'type'          => 'checkbox',
            'admin_label'   => true,
            'weight'        => 10,
            'group' => __( 'General', 'avo_plg' ),
            'std' => '', // default unchecked
            'heading'       => __( 'Fixed Position', 'avo_plg' ),
            'value'         => array('fixed'   => 'yes' ),
            'param_name'    => 'fixed_pos',
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1', 
                    'style-3',
                )
            ),
        ),
        array(
            'type'          => 'checkbox',
            'admin_label'   => true,
            'weight'        => 10,
            'group' => __( 'General', 'avo_plg' ),
            'std' => '', // default unchecked
            'heading'       => __( 'Display on top', 'avo_plg' ),
            'value'         => array('Yes'   => 'yes' ),
            'param_name'    => 'dis_top',
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-3',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Title 1', 'avo_plg' ),
            'param_name' => 'title_1',
            'description' => __( 'Enter block subtitle.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-5',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Title 2', 'avo_plg' ),
            'param_name' => 'title_2',
            'description' => __( 'Enter block subtitle.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-2',
                    'style-3',
                    'style-5',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Title', 'avo_plg' ),
            'param_name' => 'title',
            'description' => __( 'Enter block title.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1',
                    'style-3',
                    'style-4',
                    'style-5',
                )
            ),
        ), 
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Text', 'avo_plg' ),
            'param_name' => 'text',
            'description' => __( 'Enter block subtitle.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1',
                    'style-3',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Btn Text', 'avo_plg' ),
            'param_name' => 'btn_text',
            'description' => __( 'Enter block subtitle.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1',
                    '',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Btn link', 'avo_plg' ),
            'param_name' => 'link',
            'description' => __( 'Enter block subtitle.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1',
                    '',
                )
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Animation Off/On', 'avo_plg' ),
            'param_name' => 'animation',
            'value' => array(
                __( 'On', 'avo_plg' ) => 'animate',
                __( 'Off', 'avo_plg' ) => 'no-animation',
            ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-1', 
                    'style-2',
                )
            ),
        ),
        array (
            'param_name'    => 'image',
            'type'          => 'attach_image',
            'heading'       => __('Image', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style-4', 
                )
            ),
        ),

    )
));

?>
