<div class="avo-slider style-8" <?php echo 'data-slider-settings=\'{"autoplay":'.$autoplay.',"parallax":'.$parallax.',"loop":'.$loop.',"speed":'.$speed.'}\''; ?>>
    <div class="slider-bus position-re valign">
        <div class="container ontop">
            <div class="swiper-container swiper-content">
                <div class="swiper-wrapper">
                <?php foreach ( $settings['slider_list'] as $index => $item ) : ?>
                    <div class="swiper-slide">
                        <div class="row">
                                <div class="caption">
                                    <h1 data-splitting>
                                        <div class="thin"><?php echo wp_kses_post ( $item['subtitle'] ); ?></div><?php echo wp_kses_post ( $item['title'] ); ?>
                                    </h1>
                                    <p><?php echo wp_kses_post ( $item['text'] ); ?></p>
                                    <?php if ( ! empty( $item['btn_text'] ) ) : ?>
                                    <a href="<?php echo esc_url ( $item['btn_link']['url'] ) ; ?>" class="btn-curve btn-color btn-radius mt-30">
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
                <?php foreach ( $settings['slider_list'] as $index => $item ) : ?>
                <div class="swiper-slide bg-img" data-background="<?php echo esc_url ( $item['image']['url']); ?>" data-overlay-dark="6"></div>
            <?php endforeach; ?>
            </div>
        </div>
        <div class="curve-bg bg-img" data-background="<?php echo esc_url ( $settings['bg_image']['url']); ?>"></div>

        <!-- slider setting -->
        <?php if($settings['show_arrows']=='visible'){?>
        <div class="setone">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
        <?php } ?>

        <?php if($settings['show_paging']=='visible'){?>
        <div class="swiper-pagination custom-font"></div>
        <?php } ?>
    </div>


</div>
