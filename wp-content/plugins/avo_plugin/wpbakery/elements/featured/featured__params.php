<?php

// Featured -----------------------------
vc_map( array (
    'base' 			=> 'avo_featured',
    'name' 			=> __('Featured', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom featured element', 'avo_plg'),
    'params' 		=> array (
        // General

        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'featured_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
                __( 'style 3', 'avo_plg' ) => 'style-3',
            )
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Name', 'avo_plg' ),
            'param_name' => 'title',
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Feature 1', 'avo_plg' ),
            'param_name' => 'feature_1',
            'dependency' => array(
                'element' => 'featured_style',
                'value' => array(
                    'style-2',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Feature 1 Link', 'avo_plg' ),
            'param_name' => 'feature_1_link',
            'dependency' => array(
                'element' => 'featured_style',
                'value' => array(
                    'style-2',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Feature 2', 'avo_plg' ),
            'param_name' => 'feature_2',
            'dependency' => array(
                'element' => 'featured_style',
                'value' => array(
                    'style-2',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Feature 2 Link', 'avo_plg' ),
            'param_name' => 'feature_2_link',
            'dependency' => array(
                'element' => 'featured_style',
                'value' => array(
                    'style-2',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Description', 'avo_plg' ),
            'param_name' => 'description',
            'dependency' => array(
                'element' => 'featured_style',
                'value' => array(
                    'style-1',
                    'style-3',
                )
            ),
        ),
        array (
            'param_name'    => 'image',
            'type'          => 'attach_image',
            'heading'       => __('Featured Image', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'featured_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                )
            ),
        ),
        array(
            'type' => 'param_group',
            'param_name' => 'featured_icon',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Icon link', 'avo_plg' ),
                    'param_name' => 'link',
                ), 
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Mention', 'avo_plg' ),
                    'value' => __( 'Mention', 'avo_plg' ),
                    'param_name' => 'mention',
                ),
                array(
                    'type' => 'avo_icon_picker', 
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Icon', 'avo_plg' ),
                    'param_name' => 'icon',
                    'description' => __( 'Choose icon.', 'avo_plg' ),
                    'settings' => array(),
                ),
            ),
            'dependency' => array(
                'element' => 'featured_style',
                'value' => array(
                    'style-1',
                )
            ),
        ),
        array(
            'type' => 'param_group',
            'param_name' => 'featured_list',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Title', 'avo_plg' ),
                    'param_name' => 'featured_list_title',
                ), 
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Text', 'avo_plg' ),
                    'value' => __( 'Text', 'avo_plg' ),
                    'param_name' => 'text',
                ),
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Number', 'avo_plg' ),
                    'value' => __( 'Number', 'avo_plg' ),
                    'param_name' => 'num',
                ),
            ),
            'dependency' => array(
                'element' => 'featured_style',
                'value' => array(
                    'style-3',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Content Margin Top', 'avo_plg' ),
            'param_name' => 'port_content_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Content Margin Right', 'avo_plg' ),
            'param_name' => 'port_content_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Content Margin Bottom', 'avo_plg' ),
            'param_name' => 'port_content_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Content Margin Left', 'avo_plg' ),
            'param_name' => 'port_content_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Content Padding Top', 'avo_plg' ),
            'param_name' => 'port_padding_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Content Padding Right', 'avo_plg' ),
            'param_name' => 'port_padding_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Content Padding Bottom', 'avo_plg' ),
            'param_name' => 'port_padding_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __( 'Content Padding Left', 'avo_plg' ),
            'param_name' => 'port_padding_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'colorpicker',
            'group' => __( 'Content Settings', 'avo_plg' ),
            'heading' => __('Content Background', 'avo_plg'),
            'param_name' => 'bg_content',
            'dependency' => array(
                'element' => 'port_style',
                'value' => array(
                    'style-1',
                ),
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
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Title Content Settings', 'avo_plg' ),
            'heading' => __('Title Color', 'avo_plg'),
            'param_name' => 'title_cl',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Category/Text Content Settings', 'avo_plg' ),
            'heading' => __('Text Color', 'avo_plg'),
            'param_name' => 'txt_cl',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __('Color', 'avo_plg'),
            'param_name' => 'icon_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __('Background', 'avo_plg'),
            'param_name' => 'icon_bg',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Left', 'avo_plg' ),
            'param_name' => 'icon_radius_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Right', 'avo_plg' ),
            'param_name' => 'icon_radius_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Right', 'avo_plg' ),
            'param_name' => 'icon_radius_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Left', 'avo_plg' ),
            'param_name' => 'icon_radius_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Size', 'avo_plg' ),
            'param_name' => 'icon_size',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Padding Top', 'avo_plg' ),
            'param_name' => 'icon_padding_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Padding Right', 'avo_plg' ),
            'param_name' => 'icon_padding_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Padding Bottom', 'avo_plg' ),
            'param_name' => 'icon_padding_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Padding Left', 'avo_plg' ),
            'param_name' => 'icon_padding_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'icon_margin_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'icon_margin_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'icon_margin_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Icon Settings', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'icon_margin_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Product Mask Settings', 'avo_plg' ),
            'heading' => __('Mask Color', 'avo_plg'),
            'param_name' => 'mask_color',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Product Mask Settings', 'avo_plg' ),
            'heading' => __( 'Mask Color Opacity (on hover)', 'avo_plg' ),
            'param_name' => 'mask_color_opacity',
            'description' => __( 'Please add value from 0 to 1 (for example: 0.1).', 'avo_plg' ),
        ),
    )
));

?>
