    <div class="avo-featured style-2">
        <div class="items graphic">
            <div class="item-img">
                <div class="tlinks valign">
                    <div class="full-width">
                        <?php if ( $settings['feature_1'] != '' && $settings['feature_1_link']['url'] != '' ) { ?>
                        <a class="btn1" href="<?php echo esc_url( $settings['feature_1_link']['url']); ?>" <?php if ( $settings['feature_1_link']['is_external'] ) {echo'target="_blank"';} ?>><?php echo $settings['feature_1']; ?></a>
                        <?php } ?>

                        <?php if ( $settings['feature_2'] != '' && $settings['feature_2_link']['url'] != '' ) { ?>
                        <a class="btn2" href="<?php echo esc_url( $settings['feature_2_link']['url']); ?>" <?php if ( $settings['feature_2_link']['is_external'] ) {echo'target="_blank"';} ?>><?php echo $settings['feature_2']; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <img src="<?php echo esc_url ($settings['image']['url']); ?>" alt="image"> 
            </div>
            <div class="cont">
                <h6><?php echo $settings['title']; ?></h6>
            </div>
        </div>
    </div>