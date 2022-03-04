<div class="avo-slider style-7" <?php echo 'data-slider-settings=\'{"autoplay":'.$autoplay.',"parallax":'.$parallax.',"loop":'.$loop.',"speed":'.$speed.'}\''; ?>>
    <div class="slider">
        <div class="swiper-container parallax-slider avo-slider7"> 
            <div class="swiper-wrapper">

            	<?php foreach ( $settings['slider_list'] as $index => $item ) : ?>
                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image:url(<?php echo esc_url ( $item['image']['url']); ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="caption dig">
                                        <h1 data-splitting><?php echo wp_kses_post ( $item['title'] ); ?>
                                        </h1>
                                        <?php if ( ! empty( $item['btn_text'] ) ) : ?>
                                        <a href="<?php echo esc_url ( $item['btn_link']['url'] ) ; ?>" class="simple-btn mt-50">
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

</div>
