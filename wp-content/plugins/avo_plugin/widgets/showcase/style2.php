<div class="showcase style-2">
    <div class="slider showcase-carus" data-carousel="swiper" data-items="2" data-loop="true" data-speed="1000"
        data-space="200" data-mousewheel="<?php echo $mousewheel; ?>" data-center="true">
        <div id="content-carousel-container-unq-1" class="swiper-container" data-swiper="container">
            <div class="swiper-wrapper">
                <?php foreach ( $settings['showcase_list'] as $index => $item ) : ?>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo esc_url ( $item['image']['url']); ?>" data-overlay-dark="1">
                        <div class="caption ontop">
                            <div class="o-hidden">
                                <h1>
                                    <a href="<?php echo  $item['link']['url']; ?>">
                                        <div class="stroke"><?php echo  $item['title']; ?></div> <span><?php echo  $item['subtitle']; ?></span>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="copy-cap valign">
                            <div class="cap">
                                <h1>
                                    <a href="<?php echo  $item['link']['url']; ?>">
                                        <div class="stroke"><?php echo  $item['title']; ?></div> <span><?php echo  $item['subtitle']; ?></span>
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <!-- slider setting -->
            <div class="txt-botm">
                <div class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                    <div>
                        <span class=" custom-font"><?php echo esc_attr( $settings['nav_next']); ?></span>
                    </div>
                    <div><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                    <div><i class="fas fa-chevron-left"></i></div>
                    <div>
                        <span class=" custom-font"><?php echo esc_attr( $settings['nav_prev']); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>