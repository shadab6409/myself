<?PHP

// process -----------------------------
vc_map( array (
    'base' 			=> 'avo_process',
    'name' 			=> __('Work Process', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom work process element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'process_style',
            'value' => array(
                __( 'Style 1', 'avo_plg' ) => 'style-1',
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Style', 'avo_plg' ),
            'param_name' => 'item_num',
            'value' => array(
                __( '1', 'avo_plg' ) => '1',
                __( '2', 'avo_plg' ) => '2',
                __( '3', 'avo_plg' ) => '3',
                __( '4', 'avo_plg' ) => '4',
                __( '5', 'avo_plg' ) => '5',
            )
        ),
        array(
            'type' => 'param_group',
            'group' => __( 'General', 'avo_plg' ),
            'param_name' => 'work_process_list',
            'params' => array(
                array(
                    'type' => 'textfield',
                    'name' => 'title',
                    'heading' => __('Image-box Title', 'avo_plg'),
                    'param_name' => 'title',
                ),
                array (
                    'param_name'    => 'image',
                    'type'          => 'attach_image',
                    'heading'       => __('Image', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
                array(
                    'type' => 'textfield',
                    'name' => 'text',
                    'heading' => __('Image-box Text', 'avo_plg'),
                    'param_name' => 'text',
                ),
                array(
                    'type' => 'textfield',
                    'name' => 'description',
                    'heading' => __('Image-box Description', 'avo_plg'),
                    'param_name' => 'description',
                ),
            )
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Margin Top', 'avo_plg' ),
            'param_name' => 'box_margin_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Margin Right', 'avo_plg' ),
            'param_name' => 'box_margin_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Margin Bottom', 'avo_plg' ),
            'param_name' => 'box_margin_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Margin Left', 'avo_plg' ),
            'param_name' => 'box_margin_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
        array(
            'type' => 'textfield',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __('Size', 'avo_plg'),
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'param_name' => 'size',
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __('Border Type', 'avo_plg'),
            'param_name' => 'box_border_type',
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
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Top', 'avo_plg' ),
            'param_name' => 'box_border_width_top',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'box_border_type',
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
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Right', 'avo_plg' ),
            'param_name' => 'box_border_width_right',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'box_border_type',
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
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Bottom', 'avo_plg' ),
            'param_name' => 'box_border_width_bottom',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'box_border_type',
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
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __( 'Border Width Left', 'avo_plg' ),
            'param_name' => 'box_border_width_left',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
            'dependency' => array(
                'element' => 'box_border_type',
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
            'group' => __( 'Box Setting', 'avo_plg' ),
            'heading' => __('Border Color', 'avo_plg'),
            'param_name' => 'box_border_color',
            'dependency' => array(
                'element' => 'box_border_type',
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
            'group' => __( 'Content Setting', 'avo_plg' ),
            'heading' => __('Number color', 'avo_plg'),
            'param_name' => 'num_bg',
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'Content Setting', 'avo_plg' ),
            'heading' => __('Number color Stroke', 'avo_plg'),
            'param_name' => 'num_bg_stroke',
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'Content Setting', 'avo_plg' ),
            'heading' => __( 'Number stroke width', 'avo_plg' ),
            'param_name' => 'num_width_stroke',
            'description' => __( 'Please add the unit (for example: px or %).', 'avo_plg' ),
        ), 
    )
));