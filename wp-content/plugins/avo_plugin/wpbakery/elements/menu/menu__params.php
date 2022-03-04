<?php

// Logo -----------------------------
vc_map( array (
    'base' 			=> 'avo_menu',
    'name' 			=> __('Menu', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom menu element', 'avo_plg'),
    'params' 		=> array (
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Select Menu', 'avo_plg'),
            'param_name' => 'avo_menu',
            'value' => avo_navmenu_navbar_menu_choices()
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Style', 'avo_plg'),
            'param_name' => 'menu_style',
            'value' => array(
                __( 'Style 1', 'avo_plg' ) => 'style-1',
                __( 'Style 2', 'avo_plg' ) => 'style-2', 
                __( 'Style 3', 'avo_plg' ) => 'style-3', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Menu Sticky', 'avo_plg'),
            'param_name' => 'menu_sticky',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'yes',
                __( 'No', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Menu Sticky', 'avo_plg'),
            'param_name' => 'menu_type',
            'value' => array(
                __( 'From Left', 'avo_plg' ) => 'left',
                __( 'From Right', 'avo_plg' ) => 'right', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Parent Menu Align', 'avo_plg'),
            'param_name' => 'align',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center', 
                __( 'Right', 'avo_plg' ) => 'right', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Child Menu Align', 'avo_plg'),
            'param_name' => 'align_child',
            'value' => array(
                __( 'Left', 'avo_plg' ) => 'left',
                __( 'Center', 'avo_plg' ) => 'center', 
                __( 'Right', 'avo_plg' ) => 'right', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Desktop Menu', 'avo_plg'),
            'param_name' => 'desktop_menu',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'inline-block',
                __( 'Hide', 'avo_plg' ) => 'none', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Mobile Menu', 'avo_plg'),
            'param_name' => 'mobile_menu',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'inline-block',
                __( 'Hide', 'avo_plg' ) => 'none', 
            ),
        ),
        array(
            'type' => 'colorpicker',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Sticky Background', 'avo_plg'),
            'param_name' => 'menu_sticky_bg',
        ),

    )
));

?>
