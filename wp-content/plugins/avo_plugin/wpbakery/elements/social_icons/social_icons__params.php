<?php

// InfoBox -----------------------------
vc_map( array (
    'base' 			=> 'avo_social_icons',
    'name' 			=> __('Social Icons', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom social icons element', 'avo_plg'),
    'params' 		=> array (
        
        array(
            'type' => 'param_group',
            'param_name' => 'social_icon_list',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array(
                    'type' => 'avo_icon_picker', 
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Icon', 'avo_plg' ),
                    'param_name' => 'avo_social_icon',
                    'description' => __( 'Choose icon.', 'avo_plg' ),
                    'settings' => array(),
                ),
                array(
                  'type' => 'textfield',
                  'name' => 'link',
                  'heading' => __('Link', 'avo_plg'),
                  'value' => __( '#', 'avo_plg' ),
                  'param_name' => 'link',
                ),
                
            )
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Icon Color', 'avo_plg'),
            'param_name' => 'icon_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Icon Color Hover', 'avo_plg'),
            'param_name' => 'icon_color_hover',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Background Color', 'avo_plg'),
            'param_name' => 'icon_background_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Background Color Hover', 'avo_plg'),
            'param_name' => 'icon_background_color_hover',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Icon Border Color', 'avo_plg'),
            'param_name' => 'icon_border_color',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Icon Border Color Hover', 'avo_plg'),
            'param_name' => 'icon_border_color_hover',
        ),
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'avo_plg' ),
            'param_name' => 'css',
            'group' => __( 'Design options', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'Design options', 'avo_plg' ),
            'heading' => __( 'Left', 'avo_plg' ),
            'param_name' => 'left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'Design options', 'avo_plg' ),
            'heading' => __( 'Bottom', 'avo_plg' ),
            'param_name' => 'bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'Design options', 'avo_plg' ),
            'heading' => __( 'z-index', 'avo_plg' ),
            'param_name' => 'icon_index',
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'icon_pos',
            'value' => array(
                __( 'Relative', 'avo_plg' ) => 'relative',
                __( 'Fixed', 'avo_plg' ) => 'fixed',
                __( 'Absolute', 'avo_plg' ) => 'absolute',
            )
        ),
    )
));

?>
