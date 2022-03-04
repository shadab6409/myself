<?php
/**
 * Metabox For General.
 *
 * @package Avo 
 */
?>
<?php 

avo_meta_box_dropdown('avo_theme_mode', 
	esc_html__('Webpage Dark/Light Mode', 'avo_plg'),
	array('default' => esc_html__( 'Use Global Settings (in Theme Options)', 'avo_plg' ),
		  'light_mode' => esc_html__( 'Light', 'avo_plg' ),
		  'auto_mode' => esc_html__( 'Auto','avo_plg'),
		  'dark_mode' => esc_html__( 'Dark', 'avo_plg' )
	)
);
avo_meta_box_dropdown('avo_mode_switcher', 
	esc_html__('Color mode switcher', 'avo_plg'),
	array('default' => esc_html__( 'Use Global Settings (in Theme Options)', 'avo_plg' ),
		  'on' => esc_html__( 'On', 'avo_plg' ),
		  'off' => esc_html__( 'Off','avo_plg'),
		  
	)
);

avo_meta_box_dropdown('avo_sidebar_format', 
	esc_html__('Sidebar Format', 'avo_plg'),
	array('default' => esc_html__( 'Use Global Settings (in Theme Options)', 'avo_plg' ),
		  'right_sidebar' => esc_html__( 'Right Sidebar', 'avo_plg' ),
		  'left_sidebar' => esc_html__( 'Left Sidebar','avo_plg'),
		  'no_sidebar' => esc_html__( 'No Sidebar', 'avo_plg' )
	)
);


avo_meta_box_colorpicker( 'avo_color_general',
	esc_html__( 'General scheme color ', 'avo_plg' )
); 

avo_meta_box_colorpicker( 'avo_custom_hovers',
	esc_html__( 'Custom hovers', 'avo_plg' )
);

avo_meta_box_colorpicker( 'avo_color_scheme',
	esc_html__( 'Color scheme', 'avo_plg' )
);
avo_meta_box_colorpicker( 'general_color',
	esc_html__( 'General color', 'avo_plg' )
);

