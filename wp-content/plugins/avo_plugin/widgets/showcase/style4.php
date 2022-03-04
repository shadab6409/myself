<div class="showcase avo-tooltip style-4">
    <div class="slider showcase-grid" data-carousel="swiper" data-items="4" data-loop="true" data-space="30" data-speed="1000"
        data-mousewheel="<?php echo $mousewheel; ?>">
        <div id="content-carousel-container-unq-1" class="swiper-container" data-swiper="container">
            <div class="swiper-wrapper"> 
                <?php foreach ( $settings['showcase_list'] as $index => $item ) : ?>
                <a href="<?php echo  $item['link']['url']; ?>" class="swiper-slide">
                    <div class="bg-img" data-background="<?php echo esc_url ( $item['image']['url']); ?>" data-tooltip-tit="<?php echo  $item['title']; ?>"
                        data-tooltip-sub="<?php echo  $item['subtitle']; ?>"></div>
                </a>
                <?php endforeach; ?> 
            </div>

        </div>
        <!-- slider setting --> 
        <div class="txt-botm">
            <div id="next" class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                <div>
                    <span class=" custom-font"><?php echo esc_attr( $settings['nav_next']); ?></span>
                </div>
                <div><i class="fas fa-chevron-right"></i></div>
            </div>
            <div id="prev" class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                <div><i class="fas fa-chevron-left"></i></div>
                <div>
                    <span class=" custom-font"><?php echo esc_attr( $settings['nav_prev']); ?></span>
                </div>
            </div>
        </div>

    </div>
</div>