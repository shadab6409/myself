<?php
/**
 * Metabox For sidepanel.
 *
 * @package Avo 
 */
?>
<?php 
avo_meta_box_dropdown('avo_sidepanel_format',
	esc_html__('sidepanel Format.', 'avo_plg'),
	array('default' => esc_html__('Default', 'avo_plg'),
		  'global' => esc_html__( 'Use Global Settings (in Theme Options)', 'avo_plg' ),
		  'custom_sidepanel' => esc_html__( 'Use Custom sidepanel', 'avo_plg' ),
		  'no_sidepanel' => esc_html__( 'No sidepanel', 'avo_plg' )
	)
);

avo_meta_box_dropdown_custom_sidepanels('avo_sidepanel_list',
	esc_html__('Choose Custom sidepanel.', 'avo_plg'),
	'',
	esc_html__('Only if used "Custom sidepanel" format', 'avo_plg')
);


