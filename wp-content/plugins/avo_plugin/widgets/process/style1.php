            <div class="work-process style-1" <?php echo  $slide_to_show; ?>>
                <?php foreach ( $settings['work_process_list'] as $index => $item ) : 
                ?>
                <div class="item">
                    
                    <div class="box-img">
	                	<div class="bg-img">
							<img src="<?php echo esc_url ( $item['image']['url']); ?>" alt="img">
						</div>
						<span class="num"><?php echo  $item['text']; ?></span>
					</div>

					<div class="box-cont"> 
					 <h3><?php echo  $item['title']; ?></h3> 
					 <p class="desc"><?php echo  $item['description']; ?></p>                   
                    
                    </div>
                    
                </div>
                
                <?php endforeach; ?>
            </div><!-- .work-process --> 