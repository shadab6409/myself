		<div class="box-with-icon <?php if  ($settings['feature_style'] == '1') {echo "feature-1"; }elseif  ($settings['feature_style'] == '2') {echo "feature-2"; }elseif  ($settings['feature_style'] == '3') {echo "feature-3"; }else{echo "feature-4"; }?>">

		  <i class="avo-icon fa <?php echo esc_attr( $settings['icon']); ?>"></i>

		  <?php if($settings['title']!=''){?>
		  <div class="cont">
		  <h3 <?php echo $this->get_render_attribute_string( 'title' ); ?>><?php echo $settings['title']; ?></h3>
		  <?php }?>
		  
		  <?php if ( $settings['subtitle'] != '' ) { ?>
		  <p <?php echo $this->get_render_attribute_string( 'subtitle' ); ?>><?php echo esc_attr( $settings['subtitle']); ?></p>
		  <?php } ?>
          
		  <div <?php echo $this->get_render_attribute_string( 'text' ); ?>><?php echo wp_kses_post ( $settings['text']); ?></div>
		  
		  
		  
		  <?php if ( $settings['btn_text'] != '' && $settings['link']['url'] != '' ) { ?>
			  <a class="feature-btn" href="<?php echo esc_url( $settings['link']['url']); ?>">
              
			  	<?php if ( ! empty( $settings['icon_btn'] ) ) : ?>
                    <span <?php echo $this->get_render_attribute_string( 'icon-align' ); ?>>
                        <i class="<?php echo esc_attr( $settings['icon_btn'] ); ?>" aria-hidden="true"></i>
                    </span>
                <?php endif; ?>
                
			  	<?php echo esc_attr( $settings['btn_text']); ?>
              </a>  
		  <?php } ?>
		  
          
	  </div><!--/.cont-->
	  </div><!--/.box-icon-->