<?php

// countdown -----------------------------
vc_map( array (
    'base' 			=> 'avo_countdown',
    'name' 			=> __('Countdown', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom countdown element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Due Date', 'avo_plg' ),
            'param_name' => 'due_date',
            'description' => __( 'For example : 2021-03-24 05:47:33', 'avo_plg' ),
        ), 
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('View', 'avo_plg'),
            'param_name' => 'view',
            'value' => array(
                __( 'Block', 'avo_plg' ) => 'block',
                __( 'Inline', 'avo_plg' ) => 'inline', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Days', 'avo_plg'),
            'param_name' => 'days',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Hours', 'avo_plg'),
            'param_name' => 'hours',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Minutes', 'avo_plg'),
            'param_name' => 'minutes',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Seconds', 'avo_plg'),
            'param_name' => 'seconds',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Labels', 'avo_plg'),
            'param_name' => 'labels',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Custom Labels', 'avo_plg'),
            'param_name' => 'custom_labels',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no', 
            ),
            'dependency' => array(
                'element' => 'labels',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Days', 'avo_plg' ),
            'param_name' => 'custom_labels_days',
            'value' => __( 'Days', 'avo_plg' ),
            'dependency' => array(
                'element' => 'custom_labels',
                'value' => array(
                    'yes',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Hours', 'avo_plg' ),
            'param_name' => 'custom_labels_hours',
            'value' => __( 'Hours', 'avo_plg' ),
            'dependency' => array(
                'element' => 'custom_labels',
                'value' => array(
                    'yes',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Minutes', 'avo_plg' ),
            'param_name' => 'custom_labels_minutes',
            'value' => __( 'Minutes', 'avo_plg' ),
            'dependency' => array(
                'element' => 'custom_labels',
                'value' => array(
                    'yes',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Seconds', 'avo_plg' ),
            'param_name' => 'custom_labels_seconds',
            'value' => __( 'Second', 'avo_plg' ),
            'dependency' => array(
                'element' => 'custom_labels',
                'value' => array(
                    'yes',
                ),
            ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Container Width', 'avo_plg' ),
            'param_name' => 'boxes_container_width',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __('Background Color', 'avo_plg'),
            'param_name' => 'boxes_background_color',
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __('Border Type', 'avo_plg'),
            'param_name' => 'boxes_border_type',
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
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Border Width Top', 'avo_plg' ),
            'param_name' => 'boxes_border_width_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'boxes_border_type',
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
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Border Width Right', 'avo_plg' ),
            'param_name' => 'boxes_border_width_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'boxes_border_type',
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
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Border Width Bottom', 'avo_plg' ),
            'param_name' => 'boxes_border_width_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'boxes_border_type',
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
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Border Width Left', 'avo_plg' ),
            'param_name' => 'boxes_border_width_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'boxes_border_type',
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
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __('Border Color', 'avo_plg'),
            'param_name' => 'boxes_border_color',
            'dependency' => array(
                'element' => 'boxes_border_type',
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
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Left', 'avo_plg' ),
            'param_name' => 'boxes_border_radius_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Border Radius Top Right', 'avo_plg' ),
            'param_name' => 'boxes_border_radius_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Right', 'avo_plg' ),
            'param_name' => 'boxes_border_radius_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Border Radius Bottom Left', 'avo_plg' ),
            'param_name' => 'boxes_border_radius_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Space Between', 'avo_plg' ),
            'param_name' => 'boxes_space_between',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Padding Top', 'avo_plg' ),
            'param_name' => 'boxes_padding_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Padding Right', 'avo_plg' ),
            'param_name' => 'boxes_padding_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Padding Bottom', 'avo_plg' ),
            'param_name' => 'boxes_padding_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Boxes', 'avo_plg' ),
            'heading' => __( 'Padding Left', 'avo_plg' ),
            'param_name' => 'boxes_padding_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content', 'avo_plg' ),
            'heading' => __( 'Numbers Font Size', 'avo_plg' ),
            'param_name' => 'numbers_size',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content', 'avo_plg' ),
            'heading' => __( 'Numbers Font Weight', 'avo_plg' ),
            'param_name' => 'numbers_weight',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'colorpicker',
            'group' => __( 'Content', 'avo_plg' ),
            'heading' => __('Numbers Color', 'avo_plg'),
            'param_name' => 'numbers_color',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Content', 'avo_plg' ),
            'heading' => __( 'Labels Font Size', 'avo_plg' ),
            'param_name' => 'labels_size',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Content', 'avo_plg' ),
            'heading' => __( 'Labels Font Weight', 'avo_plg' ),
            'param_name' => 'labels_weight',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'colorpicker',
            'group' => __( 'Content', 'avo_plg' ),
            'heading' => __('Labels Color', 'avo_plg'),
            'param_name' => 'labels_color',
        ),
    )
));

?>
