<div class="avo-featured style-3">
    <div class="min-area sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img">
                        <img class="thumparallax-down" src="<?php echo esc_url ($settings['image']['url']); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="content">
                        <h4 class="wow custom-font" data-splitting><?php echo $settings['title']; ?></h4>
                        <p class="wow txt" data-splitting><?php echo $settings['description']; ?></p>
                        <ul class="feat">
                            <?php foreach ( $settings['featured_list'] as $index => $item ) :?>
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <h6><span><?php echo $item['num']; ?></span><?php echo $item['title']; ?></h6>
                                <p><?php echo $item['text']; ?></p>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>