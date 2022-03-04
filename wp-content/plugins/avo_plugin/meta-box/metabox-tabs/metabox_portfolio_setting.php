<?php
/**
 * Metabox For Portfolio Setting.
 *
 * @package avo
 */
?>
<?php 
avo_meta_box_dropdown('avo_port_format',
				esc_html__('Choose Portfolio Format Here', 'avo_plg'),
				array('port_standard' => esc_html__('Portfolio Gallery at Top', 'avo_plg'),
					  'port_two' => esc_html__('Portfolio Gallery at Right', 'avo_plg'),
					 )
			);
avo_meta_box_dropdown('avo_top_type',
				esc_html__('Choose Portfolio Format Here', 'avo_plg'),
				array('top_content_slider' => esc_html__('Images Background', 'avo_plg'),
					  'top_content_video' => esc_html__('Video Background', 'avo_plg'),
					  'top_content_youtube' => esc_html__('Youtube Background', 'avo_plg'),
					 )
			);
avo_meta_box_upload('avo_port_slider_setting', 
				esc_html__('Portfolio Top Image', 'avo_plg'),
				esc_html__('Upload Your Top Image here. <br/>You still need to fill this if you choose the video/youtube background. <br/>
		So the image will replace the video/youtube background in touch devices. ', 'avo_plg')
			);

avo_meta_box_text('avo_port_youtube_link',
				esc_html__('Youtube ID', 'avo_plg'),
				esc_html__('Insert Youtube ID here. e.g EMy5krGcoOU', 'avo_plg')
			);
avo_meta_box_text('avo_port_youtube_quality',
				esc_html__('Youtube Quality', 'avo_plg'),
				esc_html__('Insert Youtube video quality here. You can input <b>small, medium, large, hd720, hd1080, highres</b>. Default value is <b>large</b>', 'avo_plg')
			);
avo_meta_box_text('avo_port_video_link',
				esc_html__('Video Link', 'avo_plg'),
				esc_html__('Insert the video directlink here. eg. https://www.quirksmode.org/html5/videos/big_buck_bunny.mp4', 'avo_plg')
			);
avo_meta_box_upload('avo_gallery_port_img', 
				esc_html__('Portfolio Side Image', 'avo_plg'),
				esc_html__('Upload Your Side Image here.', 'avo_plg')
			);


