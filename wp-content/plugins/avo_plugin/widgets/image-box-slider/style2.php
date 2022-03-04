
            <div class="img-box-slider imgbox-slider-2" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "autoplay" : false,"arrows" : <?php echo esc_attr ( $settings['show_arrows'] )?>}'>
                <?php foreach ( $settings['imgbox_list'] as $index => $item ) : 
                ?> 
                <div class="item">
                    <a href='<?php echo $item['link']['url'] ?>'>
	                    <div class="box-img">
							<img src="<?php echo esc_url ( $item['image']['url']); ?>" alt="img">
						</div>
					</a>

					<div class="box-cont"> 
                     <?php if ($item['image_icon']) {?>
                        <img src="<?php echo esc_url ( $item['image_icon']['url']); ?>" alt="img">
                    <?php }?>
					 <h3><a href='<?php echo $item['link']['url'] ?>'> <?php echo  $item['title']; ?> </a></h3>                    
                    <p class="imgbox-text">
                   	<?php echo  $item['text']; ?>
                    </p>
                      <?php if ( $item['btn_text'] != '' && $item['link']['url'] != '' ) { ?>
                          <a class="feature-btn" href="<?php echo esc_url( $item['link']['url']); ?>">
                            <?php echo esc_attr( $item['btn_text']); ?>
                          </a>  
                      <?php } ?>
                    </div>
                    
                </div>
                
                <?php endforeach; ?>
            </div><!--/.img-box-->
	