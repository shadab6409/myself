<?php

// Basic Gallery -----------------------------
vc_map( array (
    'base' 			=> 'avo_basic_gallery',
    'name' 			=> __('Basic Gallery', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom basic gallery element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'param_group',
            'param_name' => 'basic_gallery_list',
            'group' => __( 'General', 'avo_plg' ),
            'params' => array(
                array (
                    'param_name'    => 'image',
                    'type'          => 'attach_image',
                    'heading'       => __('Image', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
                array (
                    'param_name'    => 'img_width',
                    'type'          => 'textfield',
                    'heading'       => __('Image width', 'avo_plg'),
                    'description'   => __('Please add the unit (for example: px or %).', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
                array (
                    'param_name'    => 'img_height',
                    'type'          => 'textfield',
                    'heading'       => __('Image height', 'avo_plg'),
                    'description'   => __('Please add the unit (for example: px or %).', 'avo_plg'),
                    'admin_label'   => false,
                    'group' => __( 'General', 'avo_plg' ),
                ),
            ),
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
