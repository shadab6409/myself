<?php

// post list -----------------------------
vc_map( array (
    'base' 			=> 'avo_post_list',
    'name' 			=> __('Post List', 'avo_plg'),
    'category' 		=> __('Avo', 'avo_plg'),
    'description' 	=> __('Create custom post list element', 'avo_plg'),
    'params' 		=> array (
        // General
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'style', 'avo_plg' ),
            'param_name' => 'post_list_style',
            'value' => array(
                __( 'style 1', 'avo_plg' ) => 'style-1',
                __( 'style 2', 'avo_plg' ) => 'style-2',
                __( 'style 3', 'avo_plg' ) => 'style-3',
                __( 'style 4', 'avo_plg' ) => 'style-4',
            )
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Mode', 'avo_plg'),
            'param_name' => 'avo_mode',
            'value' => array(
                __( 'Dark', 'avo_plg' ) => '1',
                __( 'Light', 'avo_plg' ) => '2', 
            ),
            'dependency' => array(
                'element' => 'port_style',
                'value' => array(
                    'style-1',
                    'style-2',
                    'style-3',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('RTL', 'avo_plg'),
            'param_name' => 'rtl',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'yes',
                __( 'No', 'avo_plg' ) => 'no', 
            ),
            'dependency' => array(
                'element' => 'port_style',
                'value' => array(
                    'style-1',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Blog Post to show', 'avo_plg'),
            'param_name' => 'blog_post',
            'value'   => __('6', 'avo_plg'),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Sort post by Category', 'avo_plg'),
            'param_name' => 'sort_cat',
            'value' => array(
                __( 'Yes', 'avo_plg' ) => 'yes',
                __( 'No', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Category', 'avo_plg'),
            'param_name' => 'blog_cat',
            'value' => avo_category_choice(),
            'dependency' => array(
                'element' => 'sort_cat',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Always show the same list on every page(not paged).', 'avo_plg'),
            'param_name' => 'paged_on',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Exerpt', 'avo_plg'),
            'param_name' => 'show_excerpt',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no', 
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Blog Excerpt Length', 'avo_plg'),
            'param_name' => 'avo_excerpt',
            'value'   => __('150', 'avo_plg'),
            'dependency' => array(
                'element' => 'show_excerpt',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('After Excerpt text/symbol', 'avo_plg'),
            'param_name' => 'excerpt_after',
            'value'   => __('...', 'avo_plg'),
            'dependency' => array(
                'element' => 'show_excerpt',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Blog Columns', 'avo_plg'),
            'param_name' => 'blog_column',
            'value' => array(
                __( 'One Column', 'avo_plg' ) => 'one',
                __( 'Two Columns', 'avo_plg' ) => 'two',
                __( 'Three Columns', 'avo_plg' ) => 'three',
                __( 'Four Columns', 'avo_plg' ) => 'four',
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Featured Image', 'avo_plg'),
            'param_name' => 'image',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no',
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Meta Button', 'avo_plg'),
            'param_name' => 'meta_button_show',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no',
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Button', 'avo_plg'),
            'param_name' => 'button_show',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no',
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Button Text', 'avo_plg'),
            'param_name' => 'button',
            'value'   => __('Read More', 'avo_plg'),
            'dependency' => array(
                'element' => 'button_show',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'iconpicker', 
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Button Icon', 'avo_plg' ),
            'param_name' => 'icon',
            'description' => __( 'Choose icon.', 'avo_plg' ),
            'settings' => array(),
            'dependency' => array(
                'element' => 'button_show',
                'value' => array(
                    'yes', 
                )
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Button Icon Position', 'avo_plg'),
            'param_name' => 'icon_align',
            'value' => array(
                __( 'Before', 'avo_plg' ) => 'left',
                __( 'After', 'avo_plg' ) => 'right',
            ),
            'dependency' => array(
                'element' => 'button_show',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'textfield',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Button Icon Spacing', 'avo_plg'),
            'param_name' => 'icon_indent',
            'description'   => __('Please do not add the unit (for example: px or %), Max value 50.', 'avo_plg'),
            'dependency' => array(
                'element' => 'button_show',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Post Meta', 'avo_plg'),
            'param_name' => 'meta_show',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no',
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Post Tags', 'avo_plg'),
            'param_name' => 'cat_show',
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no',
            ),
            'dependency' => array(
                'element' => 'image',
                'value' => array(
                    'yes',
                ),
            ),
        ),
        array(
            'type' => 'iconpicker', 
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __( 'Tag Icon', 'avo_plg' ),
            'param_name' => 'tag_icon',
            'description' => __( 'Choose icon.', 'avo_plg' ),
            'settings' => array(),
            'dependency' => array(
                'element' => 'cat_show',
                'value' => array(
                    'yes', 
                )
            ),
        ),
        array(
            'type' => 'dropdown',
            'group' => __( 'General', 'avo_plg' ),
            'heading' => __('Show Pagination', 'avo_plg'),
            'param_name' => 'page_show',
            'description' => __( 'Note: Try to show pagination only for (single) blog page.', 'avo_plg' ),
            'value' => array(
                __( 'Show', 'avo_plg' ) => 'yes',
                __( 'Hide', 'avo_plg' ) => 'no',
            ),
        ),
    )
));

?>
