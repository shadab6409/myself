<?php 

$slider_list = (array) vc_param_group_parse_atts( $slider_list );

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>

	<?php if(! empty ($slider_width) ){ ?>
		#avo-slider-<?php echo $myuid; ?> .slider-box {max-width: <?php echo $slider_width ?>px;}
	<?php }
	if(! empty ($slider_height) ){ ?>
		#avo-slider-<?php echo $myuid; ?> .slider-box {padding-top: <?php echo $slider_height ?>%;}
	<?php }
	if(! empty ($slider_height_bottom) ){ ?>
		#avo-slider-<?php echo $myuid; ?> .slider-box {padding-bottom: <?php echo $slider_height_bottom ?>%;text-align: <?php echo $align ?>;}
	<?php }
	if(! empty ($align) ){ ?>
		#avo-slider-<?php echo $myuid; ?> .slider-box {text-align: <?php echo $align ?>;}
	<?php }
	if(! empty ($slider_content) ){ ?>
		#avo-slider-<?php echo $myuid; ?> .slider-content {max-width: <?php echo $slider_content ?>px;}
	<?php }
	if(! empty ($show_arrows) ){ ?>
		#avo-slider-<?php echo $myuid; ?>.slider .slick-arrow {visibility: <?php echo $show_arrows ?>;}
		#avo-slider-<?php echo $myuid; ?> .swiper-nav-ctrl {visibility: <?php echo $show_arrows ?>;}
		#avo-slider-<?php echo $myuid; ?> .setwo {visibility: <?php echo $show_arrows ?>;}
	<?php }
	if(! empty ($show_dots) ){ ?>
		#avo-slider-<?php echo $myuid; ?>.slider .slick-dots {visibility: <?php echo $show_dots ?>;}
	<?php }
	if(! empty ($show_paging) ){ ?>
		#avo-slider-<?php echo $myuid; ?>.slider .custom-paging {visibility: <?php echo $show_paging ?>;}
		#avo-slider-<?php echo $myuid; ?> .swiper-pagination {visibility: <?php echo $show_paging ?>;}
	<?php }
	if( $show_animate_lines == 'show-animate-lines-off' ){ ?>
		#avo-slider-<?php echo $myuid; ?> .line-item {display: none;}
	<?php }
	if(! empty ($show_paging) ){ ?>
		#avo-slider-<?php echo $myuid; ?> .slider-mask {background: <?php echo $slider_mask ?>;}
		#avo-slider-<?php echo $myuid; ?> .swiper-slide .bg-img:after {background: <?php echo $slider_mask ?> !important;}
	<?php } ?>

</style>

<?php if ($slider_style == 'style-1') : ?>
	<div class="avo-slider style-1">      

		<div id="avo-slider-<?php echo $myuid; ?>" class="slider home-slider  ani-slider  clearfix <?php echo "slider-style-1"; ?>" data-slick='{"autoplaySpeed": <?php echo esc_attr ( $slider_speed )?>,"fade" : <?php echo esc_attr ( $animation_type )?>,"Speed": <?php echo esc_attr ( $animation_speed )?>}'>
				
			<?php foreach ( $slider_list as $key => $item ) : ?> 

				<?php 
					// Image
					if(!empty($item['image'])){
						$imgSrcset = '';
						$imgSizes = '';
						if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
							$imgSrc = $item['image'];
						}else{
							
								$img = wp_get_attachment_image_src($item['image'], "full");
								$imgSrcset = wp_get_attachment_image_srcset($item['image']);
								$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
							
							$imgSrc = $img[0];
						}
					}
				?>

				<div class="item slide clearfix">
						
					<div class="slider-img-bg <?php if ($image_animation == 'image-animation-on'){echo "img-anim";}?> " style="background-image:url(<?php echo esc_url ( $imgSrc ); ?>);" ></div>
							
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
									
									<?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-top' ){?>
									<div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
									<?php } ?>
									
									<div class="slider-hidden">
											<h3 class="slider-title" data-splitting><?php echo wp_kses_post ( $item['title'] ); ?></h3>
									</div><!--/.slider-hidden--> 
									
									<?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-bottom' ){?>
									<div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
									<?php } ?>
									
									<?php if ( !empty($item['text'])){?>
									<p class="slider-text" data-animation="fadeInDown" data-delay="1s">
											<?php echo wp_kses_post ( $item['text']) ; ?>
									</p>
									<?php } ?>
											
									<?php if ( !empty($item['btn_link']) && !empty($item['btn_text'])){ ?>
									<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">

									<?php if ( ! empty( $item['btn_link'] ) ) { ?>

									<a class="slider-btn dsc-btn-style1" href="<?php echo esc_url($item['btn_link']) ?>"><?php
	
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

								<?php if ( !empty($item['btn_link2']) && !empty($item['btn_text2'])){ ?>
								<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
									<?php if ( ! empty( $item['btn_link2'] ) ) { ?>	
	
									<a class="slider-btn dsc-btn-style2" href="<?php echo esc_url($item['btn_link2']) ?>"><?php
									
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
			
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>

<?php if( $slider_style == 'style-2' ) : ?>
	<div id="avo-slider-<?php echo $myuid; ?>" class="slider home-slider  ani-slider  clearfix <?php echo "slider-style-2"; ?>" data-slick='{"autoplaySpeed": <?php echo esc_attr ( $slider_speed )?>,"fade" : <?php echo esc_attr ( $animation_type )?>,"Speed": <?php echo esc_attr ( $animation_speed )?>}'>
	        
		<?php foreach ( $slider_list as $key => $item ) : ?> 

			<?php 
				// Image
				if(!empty($item['image'])){
					$imgSrcset = '';
					$imgSizes = '';
					if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
						$imgSrc = $item['image'];
					}else{
						
							$img = wp_get_attachment_image_src($item['image'], "full");
							$imgSrcset = wp_get_attachment_image_srcset($item['image']);
							$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
						
						$imgSrc = $img[0];
					}
				}
			?>
	        
	        <div class="item slide clearfix">
	        
	          	<div class="slider-img-bg <?php if ($item['image_animation']){echo "img-anim";}?> " style="background-image:url(<?php echo esc_url( $imgSrc ); ?>);" ></div>
	          
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
			                  
			                <?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-top' ){?>
			                <div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
			                <?php } ?>
			                  
			                <div class="slider-hidden">
			                    <h3 class="slider-title" data-splitting><?php echo wp_kses_post ( $item['title'] ); ?></h3>
			                </div><!--/.slider-hidden--> 
			                  
			                <?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-bottom' ){?>
			                <div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
			                <?php } ?>
			                  
			                <?php if ( !empty($item['text'])){?>
			                <p class="slider-text" data-animation="fadeInDown" data-delay="1s">
			                    <?php echo wp_kses_post ( $item['text']) ; ?>
			                </p>
			                <?php } ?>
			                  
			                <?php if ( !empty($item['btn_link']) && !empty($item['btn_text'])){ ?>
			                    <div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
			                      	<?php if ( ! empty( $item['btn_link'] ) ) { ?>

									<a href="<?php echo esc_url($item['btn_link']) ?>"><?php

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
		                  	<?php if ( !empty($item['btn_link2']) && !empty($item['btn_text2'])){ ?>
			                    <div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
			                        <?php if ( ! empty( $item['btn_link2'] ) ) { ?>

									<a href="<?php echo esc_url($item['btn_link2']) ?>"><?php
											
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
<?php endif; ?>

<?php if( $slider_style == 'style-3' ) : ?>
	<div id="avo-slider-<?php echo $myuid; ?>" class="slider home-slider  ani-slider  clearfix <?php echo "slider-style-3"; ?>" data-slick='{"autoplaySpeed": <?php echo esc_attr ( $slider_speed )?>,"fade" : <?php echo esc_attr ( $animation_type )?>,"Speed": <?php echo esc_attr ( $animation_speed )?>}'>
        
		<?php foreach ( $slider_list as $key => $item ) : ?> 

			<?php 
				// Image
				if(!empty($item['image'])){
					$imgSrcset = '';
					$imgSizes = '';
					if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
						$imgSrc = $item['image'];
					}else{
						
							$img = wp_get_attachment_image_src($item['image'], "full");
							$imgSrcset = wp_get_attachment_image_srcset($item['image']);
							$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
						
						$imgSrc = $img[0];
					}
				}
			?>
                
            <div class="item slide clearfix">
                
          	<div class="slider-img-bg <?php if ($item['image_animation']){echo "img-anim";}?> " style="background-image:url(<?php echo esc_url( $imgSrc ); ?>);" ></div>
              
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
		                      
	                      	<?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-top' ){?>
		                      	<div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
	                      	<?php } ?>
		                      
	                      	<div class="slider-hidden">
	                          	<h3 class="slider-title" data-splitting><?php echo wp_kses_post ( $item['title'] ); ?></h3>
	                      	</div><!--/.slider-hidden--> 
		                      
	                      	<?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-bottom' ){?>
		                      	<div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
	                      	<?php } ?>
		                      
	                      	<?php if ( !empty($item['text'])){?>
		                      	<p class="slider-text" data-animation="fadeInDown" data-delay="1s">
		                          	<?php echo wp_kses_post ( $item['text']) ; ?>
		                      	</p>
                      		<?php } ?>
                          
                          	<?php if ( !empty($item['btn_link']) && !empty($item['btn_text'])){ ?>
                              	<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
	                                <?php if ( ! empty( $item['btn_link'] ) ) { ?>
										
									<a href="<?php echo esc_url($item['btn_link']) ?>"><?php
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
                          	<?php if ( !empty($item['btn_link2']) && !empty($item['btn_text2'])){ ?>
                              	<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
                                	<?php if ( ! empty( $item['btn_link2'] ) ) { ?>
										
									<a href="<?php echo esc_url($item['btn_link2']) ?>"><?php
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
<?php endif; ?>

<?php if( $slider_style == 'style-4' ) : ?>
<div id="avo-slider-<?php echo $myuid; ?>" class="slider home-slider  ani-slider  clearfix <?php echo "slider-style-4"; ?>" data-slick='{"autoplaySpeed": <?php echo esc_attr ( $slider_speed )?>,"fade" : <?php echo esc_attr ( $animation_type )?>,"Speed": <?php echo esc_attr ( $animation_speed )?>}'>
        
	<?php foreach ( $slider_list as $key => $item ) : ?> 

		<?php 
			// Image
			if(!empty($item['image'])){
				$imgSrcset = '';
				$imgSizes = '';
				if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
					$imgSrc = $item['image'];
				}else{
					
						$img = wp_get_attachment_image_src($item['image'], "full");
						$imgSrcset = wp_get_attachment_image_srcset($item['image']);
						$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
					
					$imgSrc = $img[0];
				}
			}
		?>
                
        <div class="item slide clearfix">
                
          	<div class="slider-img-bg <?php if ($item['image_animation']){echo "img-anim";}?> " style="background-image:url(<?php echo esc_url ( $imgSrc ); ?>);" ></div>
                  
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
	                          
	                        <?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-top' ){?>
	                        <div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
	                        <?php } ?>
                          
	                        <div class="slider-hidden">
	                            <h3 class="slider-title" data-splitting><?php echo wp_kses_post ( $item['title'] ); ?></h3>
	                        </div><!--/.slider-hidden--> 
                          
	                        <?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-bottom' ){?>
	                        <div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
	                        <?php } ?>
                          
                          	<?php if ( !empty($item['text'])){?>
                          	<p class="slider-text" data-animation="fadeInDown" data-delay="1s">
                              	<?php echo wp_kses_post ( $item['text']) ; ?>
                          	</p>
                          	<?php } ?>
                          
                          	<?php if ( !empty($item['btn_link']) && !empty($item['btn_text'])){ ?>
                              	<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
                                	<?php if ( ! empty( $item['btn_link'] ) ) { ?>
										
									<a href="<?php echo esc_url($item['btn_link']) ?>"><?php
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
                          	<?php if ( !empty($item['btn_link2']) && !empty($item['btn_text2'])){ ?>
                              	<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
                                
                                	<?php if ( ! empty( $item['btn_link2'] ) ) { ?>
									
									<a href="<?php echo esc_url($item['btn_link2']) ?>"><?php
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
<?php endif; ?>

<?php if( $slider_style == 'style-5' ) : ?>
<section id="avo-slider-<?php echo $myuid; ?>" class="slide-full <?php echo "slider-style-5"; ?>" data-slider-settings='{"autoplay": <?php echo esc_attr ( $autoplay )?>,"parallax": <?php echo esc_attr ( $parallax )?>,"loop": <?php echo esc_attr ( $loop )?>,"speed": <?php echo esc_attr ( $slider_speed )?>}'>
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
        	<?php foreach ( $slider_list as $key => $item ) : ?> 

				<?php 
					// Image
					if(!empty($item['image'])){
						$imgSrcset = '';
						$imgSizes = '';
						if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
							$imgSrc = $item['image'];
						}else{
							
								$img = wp_get_attachment_image_src($item['image'], "full");
								$imgSrcset = wp_get_attachment_image_srcset($item['image']);
								$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
							
							$imgSrc = $img[0];
						}
					}
				?>

            	<div class="swiper-slide">
                	<div class="bg-img <?php if ($item['image_animation']){echo "img-anim";}?>" style="background-image:url(<?php echo esc_url ( $imgSrc ); ?>);" data-overlay-dark="4">

                		<div class="item slide clearfix">
                  
		                  	<div class="slider-mask">
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
                          
                      					<?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-top' ){?>
                          					<div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
                          				<?php } ?>
                          
                      					<div class="slider-hidden">
                          					<h3 class="slider-title" data-splitting><?php echo wp_kses_post ( $item['title'] ); ?></h3>
                          				</div><!--/.slider-hidden--> 
                          
                          				<?php if ( $show_line == 'show-line-on' && $pos_line == 'pos-line-bottom' ){?>
                          					<div class="slider-line"  data-animation="swashIn" data-delay="0.5s"></div>
                          				<?php } ?>
                          
                          				<?php if ( !empty($item['text'])){?>
                          					<p class="slider-text" data-animation="fadeInDown" data-delay="1s">
                              					<?php echo wp_kses_post ( $item['text']) ; ?>
                          					</p>
                          				<?php } ?>
                          
                          				<?php if ( !empty($item['btn_link']) && !empty($item['btn_text'])){ ?>
                             				<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
                                				<?php if ( ! empty( $item['btn_link'] ) ) { ?>

												<a href="<?php echo esc_url($item['btn_link']) ?>"><?php
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
                          				<?php if ( !empty($item['btn_link2']) && !empty($item['btn_text2'])){ ?>
                              				<div class="btn-relative" data-animation="swashIn" data-delay="1.8s" data-animation-duration="1s">
                                				<?php if ( ! empty( $item['btn_link2'] ) ) { ?>

												<a href="<?php echo esc_url($item['btn_link2']) ?>"><?php
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
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="slide-controls">
          	<!-- slider setting -->
          	<div class="swiper-button-next swiper-nav-ctrl next-ctrl">
              	<i class="fas fa-caret-right"></i>
          	</div>
          	<div class="swiper-button-prev swiper-nav-ctrl prev-ctrl">
              	<i class="fas fa-caret-left"></i>
          	</div>
          	<div class="swiper-pagination"></div>
       	</div>
    </div>
</section>
<?php endif; ?>

<?php if( $slider_style == 'style-6' ) : ?>
<div id="avo-slider-<?php echo $myuid; ?>" class="slider slider-prlx fixed-slider text-center slide style-6 avo-slider <?php echo $rtl;?>" data-slider-settings='{"autoplay": <?php echo esc_attr ( $autoplay )?>,"parallax": <?php echo esc_attr ( $parallax )?>,"loop": <?php echo esc_attr ( $loop )?>,"speed": <?php echo esc_attr ( $slider_speed )?>}'>
	<div class="swiper-container parallax-slider">
		<div class="swiper-wrapper">
			<?php foreach ( $slider_list as $key => $item ) : ?> 

				<?php 
					// Image
					if(!empty($item['image'])){
						$imgSrcset = '';
						$imgSizes = '';
						if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
							$imgSrc = $item['image'];
						}else{
							
								$img = wp_get_attachment_image_src($item['image'], "full");
								$imgSrcset = wp_get_attachment_image_srcset($item['image']);
								$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
							
							$imgSrc = $img[0];
						}
					}
				?>

				 <div class="swiper-slide">
						<div class="bg-img valign" style="background-image:url(<?php echo esc_url ( $imgSrc ); ?>);">
								<div class="container">
										<div class="row justify-content-center">
												<div>
														<div class="caption center">
																<h1 class="avo-slider-title" <?php echo $splitting;?>><?php echo wp_kses_post ( $item['title'] ); ?></h1>
																<p class="slider-text"><?php echo wp_kses_post ( $item['text']) ; ?></p>
																<?php if ( ! empty( $item['btn_text'] ) ) : ?>
																<a href="<?php echo esc_url ( $item['btn_link'] ) ; ?>" class="btn-curve btn-lit mt-30">
																		<span><?php echo esc_attr ( $item['btn_text'] ) ; ?></span>
																</a>
																<?php endif; ?>
														</div>  
												</div>
										</div>
								</div>
						</div>
				</div>
			<?php endforeach; ?>
		</div>
		
        <!-- slider setting -->
        <?php if( $show_arrows == 'visible' ){?>
        <div class="setone setwo">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <i class="fa fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <i class="fa fa-chevron-left"></i>
            </div>
        </div>
    	<?php } ?>

    	<?php if( $show_paging == 'visible' ){?>
        <div class="swiper-pagination top botm custom-font"></div>
        <?php } ?>

	</div>
</div>
<?php endif; ?>

<?php if( $slider_style == 'style-7' ) : ?>
<div class="avo-slider style-7" data-slider-settings='{"autoplay": <?php echo esc_attr ( $autoplay )?>,"parallax": <?php echo esc_attr ( $parallax )?>,"loop": <?php echo esc_attr ( $loop )?>,"speed": <?php echo esc_attr ( $slider_speed )?>}'>
    <div id="avo-slider-<?php echo $myuid; ?>" class="slider slider-prlx">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">

            	<?php foreach ( $slider_list as $key => $item ) : ?> 

				<?php 
					// Image
					if(!empty($item['image'])){
						$imgSrcset = '';
						$imgSizes = '';
						if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
							$imgSrc = $item['image'];
						}else{
							
								$img = wp_get_attachment_image_src($item['image'], "full");
								$imgSrcset = wp_get_attachment_image_srcset($item['image']);
								$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
							
							$imgSrc = $img[0];
						}
					}
				?>

                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image:url(<?php echo esc_url ( $imgSrc ); ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption dig">
                                        <h1 data-splitting><?php echo wp_kses_post ( $item['title'] ); ?>
                                        </h1>
                                        <?php if ( ! empty( $item['btn_text'] ) ) : ?>
                                        <a href="<?php echo esc_url ( $item['btn_link'] ) ; ?>" class="simple-btn mt-50">
                                            <span><?php echo esc_attr ( $item['btn_text'] ) ; ?></span>
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <!-- slider setting -->
            <?php if( $show_arrows == 'visible' ){?>
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fa fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fa fa-chevron-left"></i>
                </div>
            </div>
            <?php } ?>

            <?php if( $show_paging == 'visible' ){?>
            <div class="swiper-pagination top botm custom-font"></div>
            <?php } ?>
        </div>
    </div>

</div>
<?php endif; ?>

<?php if( $slider_style == 'style-8' ) : ?>
<div id="avo-slider-<?php echo $myuid; ?>" class="avo-slider style-8" data-slider-settings='{"autoplay": <?php echo esc_attr( $autoplay )?>,"parallax": <?php echo esc_attr ( $parallax )?>,"loop": <?php echo esc_attr ( $loop )?>,"speed": <?php echo esc_attr ( $slider_speed )?>}'>
    <div class="slider-bus position-re valign">
        <div class="container ontop">
            <div class="swiper-container swiper-content">
                <div class="swiper-wrapper">

	                <?php foreach ( $slider_list as $key => $item ) : ?> 

	                    <div class="swiper-slide">
	                        <div class="row">
	                                <div class="caption">
	                                    <h1 data-splitting>
	                                        <div class="thin"><?php echo wp_kses_post ( $item['subtitle'] ); ?></div><?php echo wp_kses_post ( $item['title'] ); ?>
	                                    </h1>
	                                    <p><?php echo wp_kses_post ( $item['text'] ); ?></p>
	                                    <?php if ( ! empty( $item['btn_text'] ) ) : ?>
	                                    <a href="<?php echo esc_url ( $item['btn_link'] ) ; ?>" class="btn-curve btn-color btn-radius mt-30">
	                                        <span><?php echo esc_attr ( $item['btn_text'] ) ; ?></span>
	                                    </a>
	                                    <?php endif; ?>
	                                </div>
	                            
	                        </div>
	                    </div>

	                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-img">
            <div class="swiper-wrapper">
                <?php foreach ( $slider_list as $key => $item ) : ?> 

					<?php 
						// Image
						if(!empty($item['image'])){
							$imgSrcset = '';
							$imgSizes = '';
							if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
								$imgSrc = $item['image'];
							}else{
								
									$img = wp_get_attachment_image_src($item['image'], "full");
									$imgSrcset = wp_get_attachment_image_srcset($item['image']);
									$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
								
								$imgSrc = $img[0];
							}
						}
					?>

                	<div class="swiper-slide bg-img" data-background="<?php echo esc_url ( $imgSrc ); ?>" data-overlay-dark="6"></div>
            	
            	<?php endforeach; ?>
            </div>
        </div>
		<?php 
        // Image
		if ( $bg_image ) {
			$bg_image = wp_get_attachment_image_src( $bg_image, 'full' );
			if ( is_array( $bg_image ) ) {
				$bg_image = $bg_image[0];
			}
		} ?>
        <div class="curve-bg bg-img" data-background="<?php echo esc_url ( $bg_image ); ?>"></div>

        <!-- slider setting -->
        <?php if( $show_arrows == 'visible' ){?>
        <div class="setone">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <i class="fa fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <i class="fa fa-chevron-left"></i>
            </div>
        </div>
        <?php } ?>

        <?php if( $show_paging == 'visible' ){?>
        <div class="swiper-pagination custom-font"></div>
        <?php } ?>
    </div>


</div>
<?php endif; ?>

<?php if( $slider_style == 'style-9' ) : ?>
	<div id="avo-slider-<?php echo $myuid; ?>" class="slider slider-prlx fixed-slider text-center slide style-9 avo-slider <?php echo $rtl;?>" data-slider-settings='{"autoplay": <?php echo esc_attr( $autoplay )?>,"parallax": <?php echo esc_attr ( $parallax )?>,"loop": <?php echo esc_attr ( $loop )?>,"speed": <?php echo esc_attr ( $slider_speed )?>}'>
		<div class="swiper-container parallax-slider">
			<div class="swiper-wrapper">
				<?php foreach ( $slider_list as $key => $item ) : ?> 

					<?php 
						// Image
						if(!empty($item['image'])){
							$imgSrcset = '';
							$imgSizes = '';
							if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
								$imgSrc = $item['image'];
							}else{
								
									$img = wp_get_attachment_image_src($item['image'], "full");
									$imgSrcset = wp_get_attachment_image_srcset($item['image']);
									$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
								
								$imgSrc = $img[0];
							}
						}
					?>

					 <div class="swiper-slide">
							<div class="bg-img valign" style="background-image:url(<?php echo esc_url ( $imgSrc ); ?>);">
									<div class="container">
											<div class="row justify-content-center">
													<div>
															<div class="caption center">
																	<h1 class="avo-slider-title" <?php echo $splitting;?>><?php echo wp_kses_post ( $item['title'] ); ?></h1>
																	<p class="slider-text"><?php echo wp_kses_post ( $item['text']) ; ?></p>
																	<a href="<?php echo esc_url ( $item['btn_link'] ) ; ?>" class="btn-curve btn-lit mt-30">
																			<span><?php echo esc_attr ( $item['btn_text'] ) ; ?></span>
																	</a>
															</div>
									                        <div class="bactxt custom-font valign">
									                            <span class="full-width" style="color: transparent;"><?php echo esc_attr ( $item['subtitle'] ) ; ?></span>
									                        </div>
													</div>
											</div>
									</div>
							</div>
					</div>
				<?php endforeach; ?>
			</div>
			
            <!-- slider setting -->
            <?php if($show_arrows == 'visible'){?>
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fa fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fa fa-chevron-left"></i>
                </div>
            </div>
        	<?php } ?>

        	<?php if($show_paging == 'visible'){?>
            <div class="swiper-pagination top botm custom-font"></div>
            <?php } ?>

		</div>
	</div>
<?php endif; ?>

<?php if( $slider_style == 'style-10' ) : ?>
<div class="avo-slider avo-slider-10" data-slider-settings='{"autoplay": <?php echo esc_attr( $autoplay )?>,"parallax": <?php echo esc_attr ( $parallax )?>,"loop": <?php echo esc_attr ( $loop )?>,"speed": <?php echo esc_attr ( $slider_speed )?>}'>
    <div id="avo-slider-<?php echo $myuid; ?>" class="slider slider-prlx fixed-slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
				<?php foreach ( $slider_list as $key => $item ) : ?> 

				<?php 
					// Image
					if(!empty($item['image'])){
						$imgSrcset = '';
						$imgSizes = '';
						if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
							$imgSrc = $item['image'];
						}else{
							
								$img = wp_get_attachment_image_src($item['image'], "full");
								$imgSrcset = wp_get_attachment_image_srcset($item['image']);
								$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
							
							$imgSrc = $img[0];
						}
					}
				?>

                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo esc_url ( $imgSrc ); ?>" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-9 offset-md-1">
                                    <div class="caption">
                                        <h1 data-splitting class="custom-font"><?php echo wp_kses_post ( $item['title'] ); ?></h1>
                                        <p><?php echo wp_kses_post ( $item['text']) ; ?></p>
                                        <a href="<?php echo esc_url ( $item['btn_link'] ) ; ?>" class="btn-dis custom-font mt-30">
                                            <span><?php echo esc_attr ( $item['btn_text'] ) ; ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <!-- slider setting -->
            <?php if($show_arrows == 'visible'){?>
            <div class="control-text custom-font">
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <span class="arrow prv">Prev</span>
                </div>
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <span class="arrow nxt">Next</span>
                </div>
            </div>
            <?php } ?>

            <?php if($show_paging == 'visible'){?>
            <div class="swiper-pagination custom-font"></div>
            <?php } ?>

			<!--<div class="social-icon">
                <a href="#0">Tw</a>
                <a href="#0">Fb</a>
                <a href="#0">Be</a>
            </div>-->
        </div>
    </div>
</div>
<?php endif; ?>