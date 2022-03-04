	<div class="slider slider-prlx fixed-slider text-center slide style-9 avo-slider <?php echo $avo_rtl;?>" 
	<?php echo 'data-slider-settings=\'{"autoplay":'.$autoplay.',"parallax":'.$parallax.',"loop":'.$loop.',"speed":'.$speed.'}\''; ?> >
		<div class="swiper-container parallax-slider">
			<div class="swiper-wrapper">
				<?php foreach ( $settings['slider_list'] as $index => $item ) : ?> 
					 <div class="swiper-slide">
							<div class="bg-img valign" style="background-image:url(<?php echo esc_url ( $item['image']['url']); ?>);">
									<div class="container">
											<div class="row justify-content-center">
													<div>
															<div class="caption center">
																	<h1 class="avo-slider-title" <?php echo $splitting;?>><?php echo wp_kses_post ( $item['title'] ); ?></h1>
																	<p class="slider-text"><?php echo wp_kses_post ( $item['text']) ; ?></p>
																	<a href="<?php echo esc_url ( $item['btn_link']['url'] ) ; ?>" class="btn-curve btn-lit mt-30">
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
            <?php if($settings['show_arrows']=='visible'){?>
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
        	<?php } ?>

        	<?php if($settings['show_paging']=='visible'){?>
            <div class="swiper-pagination top botm custom-font"></div>
            <?php } ?>

		</div>
	</div>
