
            <div class="img-box-slider imgbox-slider-1" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "autoplay" : false}'>
                <?php foreach ( $settings['imgbox_list'] as $index => $item ) : 
                ?>
                <div class="item">
                    <a href='<?php echo $item['link']['url'] ?>'>
	                    <div class="box-img">
							<img src="<?php echo esc_url ( $item['image']['url']); ?>" alt="img">
						</div>
					</a>

					<div class="box-cont"> 
					 <h3><a href='<?php echo $item['link']['url'] ?>'> <?php echo  $item['title']; ?> </a></h3>                    
                    <p class="imgbox-text">
                   	<?php echo  $item['text']; ?>
                    </p>
                    </div>
                    
                </div>
                
                <?php endforeach; ?>
            </div><!--/.img-box-->
	



