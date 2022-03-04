<div class="avo-team style-4">
    <div class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 valign">
                    <div class="full-width">
                        <div class="sec-head custom-font mb-0">
                            <h6><?php echo $settings['title']; ?></h6>
                            <h3><?php echo $settings['text']; ?></h3>
                        </div>
                        <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                            <span class="prev cursor-pointer">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            <span class="next cursor-pointer">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-container">
                        <?php foreach ( $settings['team_list'] as $index => $item ) : ?>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="<?php echo esc_url ( $item['image']['url']); ?>" alt="img">
                            </div>
                            <div class="info">
                                <h5><?php echo  $item['title']; ?></h5>
                                <span><?php echo  $item['position']; ?></span>
                                <div class="social">
                                    <?php if ( ! empty( $item['Social_1_link']['url'])):?>
                                        <a href="<?php echo esc_url( $item['Social_1_link']['url']); ?>"><i class="fab fa-facebook-f"></i></a> 
                                    <?php endif; ?>
                                    
                                    <?php if ( ! empty( $item['Social_2_link']['url'])):?>
                                    <a href="<?php echo esc_url( $item['Social_2_link']['url']); ?>"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $item['Social_3_link']['url'])):?>
                                    <a href="<?php echo esc_url( $item['Social_3_link']['url']); ?>"><i class="fab fa-behance"></i></a>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $item['Social_4_link']['url'])):?>
                                    <a href="<?php echo esc_url( $item['Social_4_link']['url']); ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>