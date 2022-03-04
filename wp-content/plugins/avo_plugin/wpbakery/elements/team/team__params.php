<?php

// team -----------------------------
vc_map( array (
    'base' 			=> 'avo_team',
    'name' 			=> __('Team', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom team element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'team_style',
            'value' => array(
                __( 'Style 1', 'avo_plg' ) => 'style-1',
                __( 'Style 2', 'avo_plg' ) => 'style-2',
                __( 'Style 3', 'avo_plg' ) => 'style-3',
                __( 'Style 4', 'avo_plg' ) => 'style-4',
            )
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Team Title', 'avo_plg' ),
            'param_name' => 'title',
        ), 
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Team Position', 'avo_plg' ),
            'param_name' => 'text',
        ), 
        array (
            'param_name'    => 'image',
            'type'          => 'attach_image',
            'heading'       => __('Team Image', 'avo_plg'),
            'admin_label'   => false,
            'group' => __( 'General', 'avo_plg' ),
            'dependency' => array(
                'element' => 'team_style',
                'value' => array(
                    'style-1', 
                    'style-2',
                    'style-3',
                )
            ),
        ),
        array(
            'type' => 'textfield',
            'holder' => 'em',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Team Image Height', 'avo_plg' ),
            'param_name' => 'team_height',
            'dependency' => array(
                'element' => 'team_style',
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
            'heading' => __( 'Team Image Position', 'avo_plg' ),
            'param_name' => 'image_position',
            'value' => array(
                __( 'Top', 'avo_plg' ) => 'top center',
                __( 'Bottom', 'avo_plg' ) => 'bottom center',
                __( 'Center', 'avo_plg' ) => 'center center',
            ),
            'dependency' => array(
                'element' => 'team_style',
                'value' => array(
                    'Style-1', 
                    'Style-2',
                    'Style-3',
                )
            ),
        ),
        array(
            'type' => 'param_group',
            'param_name' => 'team_icon',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social Link', 'avo_plg' ),
                    'param_name' => 'link',
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
                'element' => 'team_style',
                'value' => array(
                    'style-1', 
                    'style-2',
                    'style-3',
                )
            ),
        ),
        array(
            'type' => 'param_group',
            'param_name' => 'team_list',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Team Title', 'avo_plg' ),
                    'param_name' => 'team_list_title',
                ), 
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Team Position', 'avo_plg' ),
                    'param_name' => 'position',
                ), 
                array (
                    'param_name'    => 'team_list_image',
                    'type'          => 'attach_image',
                    'heading'       => __('Client Image', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
                array(
                    'type' => 'dropdown',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Team Image Position', 'avo_plg' ),
                    'param_name' => 'Social_icons',
                    'value' => array(
                        __( 'Icon 1', 'avo_plg' ) => '1',
                        __( 'Icon 2', 'avo_plg' ) => '2',
                        __( 'Icon 3', 'avo_plg' ) => '3',
                        __( 'Icon 4', 'avo_plg' ) => '4',
                    ),
                ),
                array(
                    'type' => 'avo_icon_picker', 
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social 1', 'avo_plg' ),
                    'param_name' => 'Social_1',
                    'description' => __( 'Choose icon.', 'avo_plg' ),
                    'settings' => array(),
                    'dependency' => array(
                        'element' => 'Social_icons',
                        'value' => array(
                            '1',
                        )
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social Link 1', 'avo_plg' ),
                    'param_name' => 'Social_1_link',
                    'dependency' => array(
                        'element' => 'Social_icons',
                        'value' => array(
                            '1',
                        )
                    ),
                ), 
                array(
                    'type' => 'avo_icon_picker', 
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social 2', 'avo_plg' ),
                    'param_name' => 'Social_2',
                    'description' => __( 'Choose icon.', 'avo_plg' ),
                    'settings' => array(),
                    'dependency' => array(
                        'element' => 'Social_icons',
                        'value' => array(
                            '2',
                        )
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social Link 2', 'avo_plg' ),
                    'param_name' => 'Social_2_link',
                    'dependency' => array(
                        'element' => 'Social_icons',
                        'value' => array(
                            '2',
                        )
                    ),
                ), 
                array(
                    'type' => 'avo_icon_picker', 
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social 3', 'avo_plg' ),
                    'param_name' => 'Social_3',
                    'description' => __( 'Choose icon.', 'avo_plg' ),
                    'settings' => array(),
                    'dependency' => array(
                        'element' => 'Social_icons',
                        'value' => array(
                            '3',
                        )
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social Link 3', 'avo_plg' ),
                    'param_name' => 'Social_3_link',
                    'dependency' => array(
                        'element' => 'Social_icons',
                        'value' => array(
                            '3',
                        )
                    ),
                ), 
                array(
                    'type' => 'avo_icon_picker', 
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social 4', 'avo_plg' ),
                    'param_name' => 'Social_4',
                    'description' => __( 'Choose icon.', 'avo_plg' ),
                    'settings' => array(),
                    'dependency' => array(
                        'element' => 'Social_icons',
                        'value' => array(
                            '4',
                        )
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'holder' => 'em',
                    'group' => __( 'General', 'avo_plg' ),
                    'heading' => __( 'Social Link 4', 'avo_plg' ),
                    'param_name' => 'Social_4_link',
                    'dependency' => array(
                        'element' => 'Social_icons',
                        'value' => array(
                            '4',
                        )
                    ),
                ), 
            ),
            'dependency' => array(
                'element' => 'team_style',
                'value' => array(
                    'style-4',
                )
            ),
        ),
    )
));

?>
