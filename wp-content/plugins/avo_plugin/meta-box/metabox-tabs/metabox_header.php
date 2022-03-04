<?php
/**
 * Metabox For Header.
 *
 * @package Avo
 */
?>
<?php 
avo_meta_box_dropdown('avo_header_format', 
	esc_html__('Header Position/Format', 'avo_plg'),
	array('default' => esc_html__( 'Global Settings (in Theme Options)', 'avo_plg' ),
		  'standard_header' => esc_html__( 'Standard Header', 'avo_plg' ),
		  'custom_header' => esc_html__( 'Custom Header', 'avo_plg' ),
		  'no_header' => esc_html__( 'No Header', 'avo_plg' )
	)
);

avo_meta_box_dropdown_custom_headers('avo_header_list',
	esc_html__('Choose Custom Header', 'avo_plg'),
	'',
	esc_html__('Only if (Header Position/Format= "Custom Header")', 'avo_plg') 
);

avo_meta_box_dropdown('avo_header_position',
	esc_html__('Header Position/Format', 'avo_plg'),
	array(
		'default' => esc_html__( 'Global Settings (in Theme Options)', 'avo_plg' ),
		'head_white' => esc_html__( 'Relative Position with Background, ', 'avo_plg' ),
		'head_trans' => esc_html__( 'Absolute Position, Transperant','avo_plg'),
	)
);


avo_meta_box_dropdown_menu('avo_header_menu',
	esc_html__('Select Menu', 'avo_plg'), 
	'',
	esc_html__('You can manage menu using Appearance > Menus', 'avo_plg')
);
avo_meta_box_dropdown('avo_menu_position',
	esc_html__('Menu Alignment', 'avo_plg'),
	array('default' => esc_html__('Global Settings (in Theme Options)', 'avo_plg'),
		  'right' => esc_html__( 'Right', 'avo_plg' ),
		  'center' => esc_html__( 'Center', 'avo_plg' ),
	)
);

avo_meta_box_dropdown('avo_header_enable_social',
	esc_html__('Show Social', 'avo_plg'),
	array('default' => esc_html__('Global Settings (in Theme Options)', 'avo_plg'),
		  'on' => esc_html__( 'On', 'avo_plg' ),
		  'off' => esc_html__( 'Off', 'avo_plg' ),
	)
);

avo_meta_box_dropdown('avo_header_search',
	esc_html__('Show Search icon', 'avo_plg'),
	array('default' => esc_html__('Global Settings (in Theme Options)', 'avo_plg'),
		  'on' => esc_html__( 'On', 'avo_plg' ),
		  'off' => esc_html__( 'Off', 'avo_plg' ),
	)
);
avo_meta_box_dropdown('avo_header_cart',
	esc_html__('Show Cart', 'avo_plg'),
	array('default' => esc_html__('Global Settings (in Theme Options)', 'avo_plg'),
		  'on' => esc_html__( 'On', 'avo_plg' ),
		  'off' => esc_html__( 'Off', 'avo_plg' ),
	)
);
avo_meta_box_dropdown('avo_header_btn',
	esc_html__('Show Button', 'avo_plg'),
	array('default' => esc_html__('Global Settings (in Theme Options)', 'avo_plg'),
		  'on' => esc_html__( 'On', 'avo_plg' ),
		  'off' => esc_html__( 'Off', 'avo_plg' ),
	)
);

avo_meta_box_upload('avo_header_logo_white', 
				esc_html__('Light Logo', 'avo_plg'),
				esc_html__('Upload Dark logo in the header', 'avo_plg'),
				'',
				esc_html__( 'Menu Logo', 'avo_plg' ),
				esc_html__( 'Set Menu Logo', 'avo_plg' ) 
			);
avo_meta_box_upload('avo_header_logo_dark', 
				esc_html__('Dark Logo', 'avo_plg'),
				esc_html__('Upload lihgt logo in the header', 'avo_plg'),
				'',
				esc_html__( 'Menu Logo', 'avo_plg' ),
				esc_html__( 'Set Menu Logo', 'avo_plg' ) 
			);


