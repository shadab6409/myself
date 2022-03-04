<?php

// InfoBox -----------------------------
vc_map( array (
    'base' 			=> 'avo_slider',
    'name' 			=> __('Slider', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom slider element', 'avo_plg'),
    'params' 		=> array (
        // General
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'slider_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
                __( 'style 3', 'avo_plg' ) => 'style-3',
                __( 'style 4', 'avo_plg' ) => 'style-4',
                __( 'style 5', 'avo_plg' ) => 'style-5',
                __( 'style 6', 'avo_plg' ) => 'style-6',
                __( 'style 7', 'avo_plg' ) => 'style-7',
                __( 'style 8', 'avo_plg' ) => 'style-8', 
                __( 'style 9', 'avo_plg' ) => 'style-9', 
                __( 'style 10', 'avo_plg' ) => 'style-10', 
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('RTL', 'avo_plg'),
            'param_name' => 'rtl',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'rtl',
                __( 'No', 'avo_plg' ) => 'no-rtl', 
            ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-6',
                    'style-9',
                ),
            ),
        ),
        array(
            'type' => 'param_group',
            'param_name' => 'slider_list',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array(
                  'type' => 'textfield',
                  'name' => 'title',
                  'heading' => __('Title', 'avo_plg'),
                  'value' => __( 'Title', 'avo_plg' ),
                  'param_name' => 'title',
                ),
                array(
                  'type' => 'textfield',
                  'name' => 'subtitle',
                  'heading' => __('Subtitle', 'avo_plg'),
                  'value' => __( 'Subtitle', 'avo_plg' ),
                  'param_name' => 'subtitle',
                ),
                array(
                  'type' => 'textarea',
                  'name' => 'text',
                  'heading' => __('Text', 'avo_plg'),
                  'value' => __( 'Text', 'avo_plg' ),
                  'param_name' => 'text',
                ),
                array(
                  'type' => 'textfield',
                  'name' => 'btn_text',
                  'heading' => __('Button Text', 'avo_plg'),
                  'value' => __( 'Button Text', 'avo_plg' ),
                  'param_name' => 'btn_text',
                ),
                array(
                  'type' => 'textfield',
                  'name' => 'btn_link',
                  'heading' => __('Button Link', 'avo_plg'),
                  'value' => __( '#', 'avo_plg' ),
                  'param_name' => 'btn_link',
                ),
                array(
                  'type' => 'textfield',
                  'name' => 'btn_text2',
                  'heading' => __('Button Text 2', 'avo_plg'),
                  'value' => __( 'Button Text', 'avo_plg' ),
                  'param_name' => 'btn_text2',
                ),
                array(
                  'type' => 'textfield',
                  'name' => 'btn_link2',
                  'heading' => __('Button Link 2', 'avo_plg'),
                  'value' => __( '#', 'avo_plg' ),
                  'param_name' => 'btn_link2',
                ),
                array (
                    'param_name'    => 'image',
                    'type'          => 'attach_image',
                    'heading'       => __('Slider Image', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
                array(
                    'type' => 'dropdown',
                    'name' => 'image_animation',
                    'heading' => __('Image Animation', 'avo_plg'),
                    'param_name' => 'image_animation',
                    'value' => array(
                        __( 'On', 'avo_plg' ) => 'image-animation-on',
                        __( 'Off', 'avo_plg' ) => 'image-animation-off', 
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'name' => 'zoom_direction',
                    'heading' => __('Zoom Direction', 'avo_plg'),
                    'param_name' => 'zoom_direction',
                    'value' => array(
                        __( 'In', 'avo_plg' ) => 'zoom-direction-in',
                        __( 'Out', 'avo_plg' ) => 'zoom-direction-out', 
                    ),
                    'dependency' => array(
                        'element' => 'image_animation',
                        'value' => array(
                            'image-animation-on',
                        ),
                    ),
                ),
            )
        ),
        array (
            'param_name'    => 'bg_image',
            'type'          => 'attach_image',
            'heading'       => __('BG Image', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-8',
                ),
            ),
        ),
        array (
            'param_name'    => 'slider_width',
            'type'          => 'textfield',
            'heading'       => __('Slider Container Max Width', 'avo_plg'),
            'description'   => __('Please do not add the unit (for example: px or %).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array (
            'param_name'    => 'slider_content',
            'type'          => 'textfield',
            'heading'       => __('Slider Content Max Width', 'avo_plg'),
            'description'   => __('Please do not add the unit (for example: px or %).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array (
            'param_name'    => 'slider_height',
            'type'          => 'textfield',
            'heading'       => __('Slider Top Padding (%)', 'avo_plg'),
            'description'   => __('Please do not add the unit (for example: px or %).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array (
            'param_name'    => 'slider_height_bottom',
            'type'          => 'textfield',
            'heading'       => __('Slider Bottom Padding (%)', 'avo_plg'),
            'description'   => __('Please do not add the unit (for example: px or %).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Splitting', 'avo_plg'),
            'param_name' => 'splitting',
            'value' => array(
                __( 'On', 'avo_plg' ) => 'data-splitting',
                __( 'Off', 'avo_plg' ) => 'splitting-off', 
            ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-6',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Parallax', 'avo_plg'),
            'param_name' => 'parallax',
            'value' => array(
                __( 'On', 'avo_plg' ) => 'true',
                __( 'Off', 'avo_plg' ) => 'false', 
            ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-6',
                    'style-7',
                    'style-9',
                    'style-10',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Autoplay', 'avo_plg'),
            'param_name' => 'autoplay',
            'value' => array(
                __( 'On', 'avo_plg' ) => 'true',
                __( 'Off', 'avo_plg' ) => 'false', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Loop', 'avo_plg'),
            'param_name' => 'loop',
            'value' => array(
                __( 'On', 'avo_plg' ) => 'true',
                __( 'Off', 'avo_plg' ) => 'false', 
            ),
        ),
        array (
            'param_name'    => 'slider_speed',
            'type'          => 'textfield',
            'heading'       => __('Slider Speed', 'avo_plg'),
            'description'   => __('Note: 1s = 1000 ( without "s" symbol ).', 'avo_plg'),
            'admin_label'   => false,
            'value' => __( '1000', 'avo_plg' ),
            'group' => __( 'General', 'avo_plg' ),
        ),
        array (
            'param_name'    => 'animation_speed',
            'type'          => 'textfield',
            'heading'       => __('Animation Speed', 'avo_plg'),
            'description'   => __('Note: 1s = 1000 ( without "s" symbol ).', 'avo_plg'),
            'admin_label'   => false,
            'value' => __( '1000', 'avo_plg' ),
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Line', 'avo_plg'),
            'param_name' => 'show_line',
            'value' => array(
                __( 'On', 'avo_plg' ) => 'show-line-on',
                __( 'Off', 'avo_plg' ) => 'show-line-off', 
            ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Animation type', 'avo_plg'),
            'param_name' => 'animation_type',
            'value' => array(
                __( 'Fade', 'avo_plg' ) => 'fade',
                __( 'Slide', 'avo_plg' ) => 'slide', 
            ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Line Position', 'avo_plg'),
            'param_name' => 'pos_line',
            'value' => array(
                __( 'Top', 'avo_plg' ) => 'pos-line-top',
                __( 'Bottom', 'avo_plg' ) => 'pos-line-bottom', 
            ),
            'dependency' => array(
                'element' => 'show_line',
                'value' => array(
                    'show-line-on',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Arrows', 'avo_plg'),
            'param_name' => 'show_arrows',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'visible',
                __( 'Hide', 'avo_plg' ) => 'hidden', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Dots', 'avo_plg'),
            'param_name' => 'show_dots',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'visible',
                __( 'Hide', 'avo_plg' ) => 'hidden', 
            ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Paging', 'avo_plg'),
            'param_name' => 'show_paging',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'visible',
                __( 'Hide', 'avo_plg' ) => 'hidden', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Animate Lines', 'avo_plg'),
            'param_name' => 'show_animate_lines',
            'value' => array(
                __( 'On', 'avo_plg' ) => 'show-animate-lines-on',
                __( 'Off', 'avo_plg' ) => 'show-animate-lines-off', 
            ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Slider Alignment', 'avo_plg'),
            'param_name' => 'align',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center', 
                __( 'Right', 'avo_plg' ) => 'right', 
            ),
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Overlay Color', 'avo_plg'),
            'param_name' => 'slider_mask',
            'dependency' => array(
                'element' => 'slider_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                    'style-6',
                    'style-7',
                    'style-9',
                ),
            ),
        ),
    )
));

?>
