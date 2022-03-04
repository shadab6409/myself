<?php

// InfoBox -----------------------------
vc_map( array (
    'base' 			=> 'avo_info_box',
    'name' 			=> __('InfoBox', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom InfoBox element', 'avo_plg'),
    'params' 		=> array (
        // General
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'info_box_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
                __( 'style 3', 'avo_plg' ) => 'style-3',
                __( 'style 4', 'avo_plg' ) => 'style-4',
                __( 'style 5', 'avo_plg' ) => 'style-5',
                __( 'style 6', 'avo_plg' ) => 'style-6',
                __( 'style 7', 'avo_plg' ) => 'style-7',
                __( 'style 8', 'avo_plg' ) => 'style-8', 
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Title Alignment', 'avo_plg' ),
            'param_name' => 'align_title',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center',
                __( 'Right', 'avo_plg' ) => 'right',
                __( 'Justified', 'avo_plg' ) => 'justify',
            ),
            'dependency' => array(
                'element' => 'info_box_style',
                'value' => array(
                    'style-8', 
                )
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Color Level', 'avo_plg' ),
            'param_name' => 'box_image_icon',
            'value' => array(
                __( 'Icon', 'avo_plg' ) => 'icon',
                __( 'Image', 'avo_plg' ) => 'image',
            ),
            'dependency' => array(
                'element' => 'info_box_style',
                'value' => array(
                    'style-5',
                    'style-6',
                    'style-7',
                    'style-8',
                )
            ),
        ),
        array(
            'type' => 'avo_icon_picker', 
            'group' => __( 'Icon', 'avo_plg' ),
            'heading' => __( 'Icon', 'avo_plg' ),
            'param_name' => 'icon_as_icon',
            'description' => __( 'Choose icon.', 'avo_plg' ),
            'settings' => array(),
            'dependency' => array(
                'element' => 'box_image_icon',
                'value' => array(
                    'icon',
                    '',
                )
            ),
        ),
        array (
            'param_name'    => 'image',
            'type'          => 'attach_image',
            'heading'       => __('Image', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Color Level', 'avo_plg' ),
            'param_name' => 'info_box_bg',
            'value' => array(
                __( 'color 0', 'avo_plg' ) => 'cl0',
                __( 'color 1', 'avo_plg' ) => 'cl1',
                __( 'color 2', 'avo_plg' ) => 'cl2',
                __( 'color 3', 'avo_plg' ) => 'cl3',
            ),
            'dependency' => array(
                'element' => 'info_box_style',
                'value' => array(
                    'style-5',
                    'style-6',
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
        ), 
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Sub-Title', 'avo_plg' ),
            'param_name' => 'subtitle',
            'description' => __( 'Enter block sub-title.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'info_box_style',
                'value' => array(
                    'style-1', 
                    'style-2',
                    'style-3',
                    'style-4',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Text', 'avo_plg' ),
            'param_name' => 'text',
            'description' => __( 'Enter block title.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'info_box_style',
                'value' => array(
                    'style-1', 
                    'style-2',
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
            'heading' => __( 'Btn Text', 'avo_plg' ),
            'param_name' => 'btn_text',
            'description' => __( 'Enter block subtitle.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'info_box_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-8'
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Btn link', 'avo_plg' ),
            'param_name' => 'btn_url',
            'description' => __( 'Enter block subtitle.', 'avo_plg' ),
            'dependency' => array(
                'element' => 'info_box_style',
                'value' => array(
                    'style-1', 
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                    'style-7',
                    'style-8'
                )
            ),
        ),
        array(
            'type' => 'avo_icon_picker', 
            'group' => __( 'Icon', 'avo_plg' ),
            'heading' => __( 'Button Icon', 'avo_plg' ),
            'param_name' => 'btn_icon_as_icon',
            'description' => __( 'Choose icon.', 'avo_plg' ),
            'settings' => array(),
            'dependency' => array(
                'element' => 'info_box_style',
                'value' => array(
                    'style-1', 
                    'style-2',
                    'style-3',
                    'style-4',
                    'style-5',
                    'style-7',
                )
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Button Icon Position', 'avo_plg' ),
            'param_name' => 'icon_align',
            'value' => array(
                __( 'Before', 'avo_plg' ) => 'left',
                __( 'After', 'avo_plg' ) => 'right',
            ),
            'dependency' => array(
                'element' => 'info_box_style',
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
            'param_name'    => 'icon_indent',
            'type'          => 'textfield',
            'heading'       => __('Button Icon Spacing', 'avo_plg'),
            'description'   => __('Please add the unit (for example: px or %).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'info_box_style',
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
            'param_name'    => 'box_opacity',
            'type'          => 'textfield',
            'heading'       => __('Opacity', 'avo_plg'),
            'description'   => __('Please add value from 0.1 to 1 (for example: 0.5).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'Box Setting', 'avo_plg' ),
        ),
        array (
            'param_name'    => 'hover_box_opacity',
            'type'          => 'textfield',
            'heading'       => __('Opacity On Hover', 'avo_plg'),
            'description'   => __('Please add value from 0.1 to 1 (for example: 0.5).', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'Box Setting', 'avo_plg' ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __('Background Color', 'avo_plg'),
            'param_name' => 'box_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __('Border Color', 'avo_plg'),
            'param_name' => 'boxbrd_color',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Padding Top', 'avo_plg' ),
            'param_name' => 'box_padding_all_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Padding Right', 'avo_plg' ),
            'param_name' => 'box_padding_all_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Padding Bottom', 'avo_plg' ),
            'param_name' => 'box_padding_all_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Padding Left', 'avo_plg' ),
            'param_name' => 'box_padding_all_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
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
            'type' => 'textfield',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'title_margin_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'title_margin_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'title_margin_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'title_margin_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __( 'Padding Top', 'avo_plg' ),
            'param_name' => 'title_padding_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __( 'Padding Right', 'avo_plg' ),
            'param_name' => 'title_padding_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __( 'Padding Bottom', 'avo_plg' ),
            'param_name' => 'title_padding_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Title Setting', 'avo_plg' ),
            'heading' => __( 'Padding Left', 'avo_plg' ),
            'param_name' => 'title_padding_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'colorpicker',
            'group' => __( 'Subtitle Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'subtitle_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Text Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'text_color',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Text Setting', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'text_margin_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Text Setting', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'text_margin_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Text Setting', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'text_margin_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Text Setting', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'text_margin_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Size', 'avo_plg' ),
            'param_name' => 'icon_size',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Icon height', 'avo_plg' ),
            'param_name' => 'icon_height',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Background Size', 'avo_plg' ),
            'param_name' => 'icon_bg_size',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Left', 'avo_plg' ),
            'param_name' => 'icon_border_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Right', 'avo_plg' ),
            'param_name' => 'icon_border_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Right', 'avo_plg' ),
            'param_name' => 'icon_border_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Left', 'avo_plg' ),
            'param_name' => 'icon_border_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'icon_margin_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'center',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'icon_margin_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'center',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'icon_margin_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'center',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'icon_margin_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'center',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'icon_margin_left_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'icon_margin_left_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'icon_margin_left_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'icon_margin_left_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_style',
                'value' => array(
                    'left',
                ),
            ),
        ), 
        array(
            'type' => 'colorpicker',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'icon_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __('Background Color', 'avo_plg'),
            'param_name' => 'iconbg_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __('Background Color On Hover', 'avo_plg'),
            'param_name' => 'hover_iconbg_color',
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __('Border Type', 'avo_plg'),
            'param_name' => 'icon_bordering_type',
            'value' => array(
                __( 'None', 'avo_plg' ) => 'none',
                __( 'Solid', 'avo_plg' ) => 'solid',
                __( 'Double', 'avo_plg' ) => 'double',
                __( 'Dotted', 'avo_plg' ) => 'dotted',
                __( 'Dashed', 'avo_plg' ) => 'dashed',
                __( 'Groove', 'avo_plg' ) => 'groove',
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Top', 'avo_plg' ),
            'param_name' => 'icon_bordering_width_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_bordering_type',
                'value' => array(
                    'solid',
                    'double',
                    'dotted',
                    'dashed',
                    'groove',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Right', 'avo_plg' ),
            'param_name' => 'icon_bordering_width_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_bordering_type',
                'value' => array(
                    'solid',
                    'double',
                    'dotted',
                    'dashed',
                    'groove',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Bottom', 'avo_plg' ),
            'param_name' => 'icon_bordering_width_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_bordering_type',
                'value' => array(
                    'solid',
                    'double',
                    'dotted',
                    'dashed',
                    'groove',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Left', 'avo_plg' ),
            'param_name' => 'icon_bordering_width_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'icon_bordering_type',
                'value' => array(
                    'solid',
                    'double',
                    'dotted',
                    'dashed',
                    'groove',
                ),
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Icon Setting', 'avo_plg' ),
            'heading' => __('Border Color', 'avo_plg'),
            'param_name' => 'icon_bordering_color',
            'dependency' => array(
                'element' => 'icon_bordering_type',
                'value' => array(
                    'solid',
                    'double',
                    'dotted',
                    'dashed',
                    'groove',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'btn_margin_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'btn_margin_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'btn_margin_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'btn_margin_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Padding Top', 'avo_plg' ),
            'param_name' => 'btn_padding_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Padding Right', 'avo_plg' ),
            'param_name' => 'btn_padding_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Padding Bottom', 'avo_plg' ),
            'param_name' => 'btn_padding_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Padding Left', 'avo_plg' ),
            'param_name' => 'btn_padding_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Left', 'avo_plg' ),
            'param_name' => 'btn_border_radius_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Right', 'avo_plg' ),
            'param_name' => 'btn_border_radius_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Right', 'avo_plg' ),
            'param_name' => 'btn_border_radius_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Setting', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Left', 'avo_plg' ),
            'param_name' => 'btn_border_radius_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'btn_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __('Color On Hover', 'avo_plg'),
            'param_name' => 'btn_color_hover',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __('Background Color', 'avo_plg'),
            'param_name' => 'btn_bg',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __('Background Color On Hover', 'avo_plg'),
            'param_name' => 'btn_bg_hover',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Top', 'avo_plg' ),
            'param_name' => 'btn_border_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Right', 'avo_plg' ),
            'param_name' => 'btn_border_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Bottom', 'avo_plg' ),
            'param_name' => 'btn_border_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Left', 'avo_plg' ),
            'param_name' => 'btn_border_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Top on Hover', 'avo_plg' ),
            'param_name' => 'btn_border_hover_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Right on Hover', 'avo_plg' ),
            'param_name' => 'btn_border_hover_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Bottom on Hover', 'avo_plg' ),
            'param_name' => 'btn_border_hover_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Left on Hover', 'avo_plg' ),
            'param_name' => 'btn_border_hover_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __('Border Color', 'avo_plg'),
            'param_name' => 'btn_border_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Button Color Scheme Setting', 'avo_plg' ),
            'heading' => __('Border Color on Hover', 'avo_plg'),
            'param_name' => 'btn_border_color_hover',
        ),
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'avo_plg' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'avo_plg' ),
        ),
    )
));

?>
