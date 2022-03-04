<div class="showcase style-1">
    <div class="slider showcase-full" >
        <div class="swiper-container parallax-slider"> 
            <div class="swiper-wrapper">
                <?php foreach ( $settings['showcase_list'] as $index => $item ) : ?>

                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo esc_url ( $item['image']['url']); ?>" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 offset-lg-1">
                                    <div class="caption">
                                        <h1><a href="<?php echo  $item['link']['url']; ?>">
                                                <div class="stroke" data-swiper-parallax="-2000"><?php echo  $item['title']; ?></div> <span
                                                    data-swiper-parallax="-5000"><?php echo  $item['subtitle']; ?></span>
                                            </a></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- slider setting -->
            <div class="txt-botm">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <div>
                        <span class=" custom-font"><?php echo esc_attr( $settings['nav_next']); ?></span>
                    </div>
                    <div><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <div><i class="fas fa-chevron-left"></i></div>
                    <div>
                        <span class=" custom-font"><?php echo esc_attr( $settings['nav_prev']); ?></span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination steps custom-font"></div>
        </div>
    </div>
</div>