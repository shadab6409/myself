
           <div class="testi-slider testimonial style-3 <?php echo 'mode-'.$settings['avo_mode'];?>" <?php echo  $slide_to_show; ?> >
                        <?php foreach ( $settings['testi_list'] as $index => $item ) :  ?>
                        <div class="item">
                            <p><?php echo  $item['text']; ?></p>
                            <div class="info">
                                <div class="cont">
                                    <div class="author">
                                        <div class="img">
                                            <img src="<?php echo esc_url ( $item['image']['url']); ?>" alt="img">
                                        </div>
                                        <h6 class="author-name custom-font"><?php echo  $item['title']; ?></h6>
                                        <span class="author-details"><?php echo  $item['position']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
            </div><!--/.testimonial-->