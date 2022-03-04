<?php
/**
 * Metabox For Footer.
 *
 * @package Avo
 */
?>
<?php 
avo_meta_box_dropdown('avo_footer_format',
	esc_html__('Footer Format', 'avo_plg'),
	array('global' => esc_html__( 'Use Global Settings (in Theme Options)', 'avo_plg' ),
		  'custom_footer' => esc_html__( 'Use Custom Footer', 'avo_plg' ),
		  'no_footer' => esc_html__( 'No Footer', 'avo_plg' )
	)
);

avo_meta_box_dropdown_custom_footers('avo_footer_list',
	esc_html__('Choose Custom Footer', 'avo_plg'),
	'',
	esc_html__('Only if used "Custom Footer" format', 'avo_plg')
);

avo_meta_box_colorpicker( 'avo_footer_color',
	esc_html__( 'Footer color', 'avo_plg' )
);


