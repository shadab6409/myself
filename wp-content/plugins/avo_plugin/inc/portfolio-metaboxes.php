<?php
/**
 * Initialize the Portfolio Post Meta Boxes. 
 */
add_action( 'admin_init','avo_portfolio_mb' );
function avo_portfolio_mb() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the reduxoptions Meta Box API Class.
   */
  $portfolio_mb = array(
    'id'          => 'portfolio_meta_box',
    'title'       => esc_html__( 'Portfolio Setting', 'avo_plg' ),
    'desc'        => '',
    'pages'       => array( 'portfolio' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
  
      array(
        'label'       => esc_html__( 'Portfolio Format Setting', 'avo_plg' ),
        'id'          => 'portfolio_format',
        'type'        => 'tab',
      ),
	  array(
        'id'          => 'port_setting_block',
        'label'       => '',
        'desc'        => esc_html__('Recommended size for portfolio featured images is 800x582px or 800x1164px', 'avo_plg' ),
        'std'         => '',
        'type'        => 'textblock-titavo',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	  array(
        'label'       => esc_html__( 'Choose Portfolio Format Here', 'avo_plg' ),
        'id'          => 'port_format',
        'type'        => 'select',
		'std'		 => 'port_standard',
		'choices'     => array( 
			  array(
                'value'       => 'port_standard',
                'label'       => esc_html__( 'Portfolio Gallery at Top', 'avo_plg' )
              ),
			  array(
                'value'       => 'port_two',
                'label'       => esc_html__( 'Portfolio Gallery at Right', 'avo_plg' )
              ),
		)
      ),
	 
	  
	  array(
        'label'       => esc_html__( 'Top Content Format', 'avo_plg' ),
        'id'          => 'top_type',
        'type'        => 'select',
		'condition'   => 'port_format:is(port_two)',
		'std'		 => 'top_content_slider',
		'desc'        => esc_html__( 'Choose the content that will appear on the top of the single portfolio page.', 'avo_plg' ),
		'choices'     => array( 
			  array(
                'value'       => 'top_content_slider',
                'label'       => esc_html__( 'Images Background', 'avo_plg' )
              ),
			  array(
                'value'       => 'top_content_video',
                'label'       => esc_html__( 'Video Background', 'avo_plg' )
              ),
			  array(
                'value'       => 'top_content_youtube',
                'label'       => esc_html__( 'Youtube Background', 'avo_plg' )
              )
		)
      ),
	  
	  array(
        'label'       => esc_html__( 'Portfolio Top Image', 'avo_plg' ),
        'id'          => 'port_slider_setting',
        'type'        => 'upload',
        'desc'        => esc_html__( 'Upload Your Top Image here. <br/>You still need to fill this if you choose the video/youtube background. <br/>
		So the image will replace the video/youtube background in touch devices. ', 'avo_plg' ),
        'condition'   => 'port_format:is(port_two)'
      ),
	  array(
        'label'       => esc_html__( 'Youtube ID', 'avo_plg' ),
        'id'          => 'port_youtube_link',
        'type'        => 'text',
        'desc'        => esc_html__( 'Insert Youtube ID here. e.g EMy5krGcoOU', 'avo_plg' ),
        'condition'   => 'port_format:is(port_two),top_type:is(top_content_youtube)'
      ),
	  array(
        'label'       => esc_html__( 'Youtube Quality', 'avo_plg' ),
        'id'          => 'port_youtube_quality',
        'type'        => 'text',
        'desc'        => esc_html__( 'Insert Youtube video quality here. You can input <b>small, medium, large, hd720, hd1080, highres</b>. Default value is <b>large</b>', 'avo_plg' ),
        'condition'   => 'port_format:is(port_two),top_type:is(top_content_youtube)'
      ),
	  array(
        'label'       => esc_html__( 'Video Link', 'avo_plg' ),
        'id'          => 'port_video_link',
        'type'        => 'text',
        'desc'        => esc_html__( 'Insert the video directlink here. eg. https://www.quirksmode.org/html5/videos/big_buck_bunny.mp4', 'avo_plg' ),
        'condition'   => 'port_format:is(port_two),top_type:is(top_content_video)'
      ),


	  array(
        'id'          => 'gallery_list',
        'label'       => esc_html__('Portfolio Gallery Images', 'avo_plg' ),
        'desc'        => esc_html__('Create your gallery here.', 'avo_plg' ),
        'type'        => 'list-item',
        'operator'    => 'and',
        'settings'    => array( 

          array(
            'id'          => 'gallery_port_img',
            'label'       => esc_html__('Image', 'avo_plg' ),
            'desc'        => esc_html__('Upload your gallery image here.', 'avo_plg' ),
            'type'        => 'upload',
          ),
		  array(
            'id'          => 'gallery_size',
            'label'       => esc_html__('Image Gallery Size', 'avo_plg' ),
            'desc'        => esc_html__('Choose your image size here.', 'avo_plg' ),
			'type'        => 'select',
			'std'		 => 'gallery_size_standard',
			'choices'     => array( 
				  array(
					'value'       => 'gallery_size_standard',
					'label'       => esc_html__( 'Default Size', 'avo_plg' )
				  ),
				  array(
					'value'       => 'gallery_size_big',
					'label'       => esc_html__( 'Big Size', 'avo_plg' )
				  ),
			)
          ),
		  
        )
      ),
	  
	  array(
        'label'       => esc_html__( 'Portfolio Detail Setting', 'avo_plg' ),
        'id'          => 'port_detail_tab',
        'type'        => 'tab',
      ),
	  
	  array(
        'label'       => esc_html__( 'Portfolio Button Link', 'avo_plg' ),
        'id'          => 'port_item_btn_link',
        'type'        => 'text',
        'desc'        => esc_html__( 'Insert your button link here. Leave it blank if you dont want it.', 'avo_plg' ),
      ),
	  array(
        'label'       => esc_html__( 'Portfolio Button Text', 'avo_plg' ),
        'id'          => 'port_item_btn_text',
        'type'        => 'text',
        'desc'        => esc_html__( 'Insert your button text here. Leave it blank if you dont want it.', 'avo_plg' ),
      ),
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $portfolio_mb );

}

