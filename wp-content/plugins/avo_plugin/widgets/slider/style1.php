<div class="avo-slider style-1">      

				<div class="slider home-slider  ani-slider  clearfix <?php echo "slider-style-1"; ?>" data-slick='{"autoplaySpeed": <?php echo esc_attr ( $settings['slider_speed'] )?>,"fade" : <?php echo esc_attr ( $settings['animation_type'] )?>,"Speed": <?php echo esc_attr ( $settings['animation_speed'] )?>}'>
				
			<?php foreach ( $settings['slider_list'] as $index => $item ) : ?> 
								
								<div class="item slide clearfix">
								
									<div class="slider-img-bg <?php if ($item['image_animation']){echo "img-anim";}?> "  
									style="background-image:url(<?php echo esc_url ( $item['image']['url']); ?>);" ></div>
									
									<div class="slider-mask" data-animation="slideUpReturn" data-delay="0.2s">
										<div class="line-item"></div> 
										<div class="line-item"></div>
										<div class="line-item"></div>
										<div class="line-item"></div>
									</div>
									
									<div class="caption-box clearfix"> 
											
											<div class="slider-box container">
											<div class="slider-content">
											
													<?php if ( $item['subtitle']){?>
													<p class="slider-subtitle" data-animation="fadeIn" data-delay="1.5s">
															<?php echo wp_kses_post ( $item['subtitle']) ; ?>
													</p>
													<?php } ?>
													
													<?php if ( $settings['show_line'] == 'show' && $settings['pos_line'] == 'top' ){?>
													<div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
													<?php } ?>
													
													<div class="slider-hidden">
															<h3 class="slider-title" data-splitting><?php echo wp_kses_post ( $item['title'] ); ?></h3>
													</div><!--/.slider-hidden--> 
													
													<?php if ( $settings['show_line'] == 'show' && $settings['pos_line'] == 'bottom' ){?>
													<div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
													<?php } ?>
													
													<?php if ( $item['text']){?>
													<p class="slider-text" data-animation="fadeInDown" data-delay="1s">
															<?php echo wp_kses_post ( $item['text']) ; ?>
													</p>
													<?php } ?>
													
													<?php if ( $item['btn_link'] && $item['btn_text']){ ?>
															<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
																<?php if ( ! empty( $item['btn_link']['url'] ) ) {
									$link_key = 'link_' . $index;
			
									$this->add_render_attribute( $link_key, 'href', $item['btn_link']['url'] );
			
									if ( $item['btn_link']['is_external'] ) {
										$this->add_render_attribute( $link_key, 'target','_blank' );
									}
			
									if ( $item['btn_link']['nofollow'] ) {
										$this->add_render_attribute( $link_key, 'rel', 'nofollow' );
									}
			
									echo '<a class="slider-btn dsc-btn-style1" ' . $this->get_render_attribute_string( $link_key ) . '>';
								} ?>
																	<?php if ( ! empty( $settings['icon'] ) ) : ?>
																				<span <?php echo $this->get_render_attribute_string( 'icon-align' ); ?>>
																						<i class="<?php echo esc_attr( $settings['icon'] ); ?>" aria-hidden="true"></i>
																				</span>
																		<?php endif; ?>
																				
																	<?php echo esc_attr ( $item['btn_text'] ) ; ?>
																 </a> 
															</div><!--/.btn-relative-->
													<?php } ?>
													<?php if ( $item['btn_link2'] && $item['btn_text2']){ ?>
															<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
																<?php if ( ! empty( $item['btn_link2']['url'] ) ) {
									$link_key2 = 'link_' . $index;
			
			
									if ( $item['btn_link2']['is_external'] ) {
										$this->add_render_attribute( $link_key, 'target','_blank' );
									}
			
									if ( $item['btn_link2']['nofollow'] ) {
										$this->add_render_attribute( $link_key, 'rel', 'nofollow' );
									}
			
									echo '<a class="slider-btn dsc-btn-style2" ' . $this->get_render_attribute_string( $link_key ) . '>';
								} ?>
																	<?php if ( ! empty( $settings['icon'] ) ) : ?>
																				<span <?php echo $this->get_render_attribute_string( 'icon-align' ); ?>>
																						<i class="<?php echo esc_attr( $settings['icon'] ); ?>" aria-hidden="true"></i>
																				</span>
																		<?php endif; ?> 
																				
																	<?php echo esc_attr ( $item['btn_text2'] ) ; ?>
																 </a> 
															</div><!--/.btn-relative--> 
													<?php } ?>
															
											</div><!--/.slider-content-->
									</div><!--/.slider-box-->
									
										 
											
									</div><!--/.caption-box-->
								</div><!--/.slide-->
				
				<?php
				
			endforeach; 
			
			?>
		</div>
	</div>