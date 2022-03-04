<div class="client style-1">
    <div class="brands">
        <div class="item wow fadeIn" data-wow-delay=".8s">
            <div class="img">
                <img class="img1" src="<?php echo esc_url ( $settings['image']['url']); ?>" alt="">
                <img class="img2" src="<?php echo esc_url ( $settings['image2']['url']); ?>" alt="">
                <a href="<?php echo esc_url( $settings['link']['url']); ?>" <?php if ( $settings['link']['is_external'] ) {echo'target="_blank"';} ?> class="link" data-splitting><?php echo wp_kses_post ( $settings['text']); ?></a>
            </div>
        </div>
    </div>
</div>