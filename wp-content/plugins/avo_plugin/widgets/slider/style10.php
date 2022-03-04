
<div class="avo-slider avo-slider-10" <?php echo 'data-slider-settings=\'{"autoplay":'.$autoplay.',"parallax":'.$parallax.',"loop":'.$loop.',"speed":'.$speed.'}\''; ?>>
    <div class="slider slider-prlx fixed-slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
            	<?php foreach ( $settings['slider_list'] as $index => $item ) : ?>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo esc_url ( $item['image']['url']); ?>" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-9 offset-md-1">
                                    <div class="caption">
                                        <h1 data-splitting class="custom-font"><?php echo wp_kses_post ( $item['title'] ); ?></h1>
                                        <p><?php echo wp_kses_post ( $item['text']) ; ?></p>
                                        <a href="<?php echo esc_url ( $item['btn_link']['url'] ) ; ?>" class="btn-dis custom-font mt-30">
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
            <?php if($settings['show_arrows']=='visible'){?>
            <div class="control-text custom-font">
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <span class="arrow prv">Prev</span>
                </div>
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <span class="arrow nxt">Next</span>
                </div>
            </div>
            <?php } ?>

            <?php if($settings['show_paging']=='visible'){?>
            <div class="swiper-pagination custom-font"></div>
            <?php } ?>

<!--             <div class="social-icon">
                <a href="#0">Tw</a>
                <a href="#0">Fb</a>
                <a href="#0">Be</a>
            </div> -->
        </div>
    </div>
</div>