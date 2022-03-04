<?php $slides_arr = (array) vc_param_group_parse_atts( $items ); ?>

<?php if ( $showcase_style == 'style-1' ) : ?> 
	<div class="showcase style-1">
	    <div class="slider showcase-full" >
	        <div class="swiper-container parallax-slider"> 
	            <div class="swiper-wrapper">
	                
	                <?php foreach ($slides_arr as $key => $item) :  ?>


	                	<?php 
	                		// Image
							if(!empty($item['image'])){
								$imgSrcset = '';
								$imgSizes = '';
								if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
									$imgSrc = $item['image'];
								}else{
									
										$img = wp_get_attachment_image_src($item['image'], "full");
										$imgSrcset = wp_get_attachment_image_srcset($item['image']);
										$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
									
									$imgSrc = $img[0];
								}
							}
						?>

	                <div class="swiper-slide">
	                    <div class="bg-img valign" data-background="<?php echo $imgSrc; ?>" data-overlay-dark="4">
	                        <div class="container">
	                            <div class="row">
	                                <div class="col-lg-12 offset-lg-1">
	                                    <div class="caption">
	                                        <h1><a href="<?php echo  $item['link']; ?>">
	                                                <div class="stroke" data-swiper-parallax="-2000"><?php echo $item['title'] ; ?></div> <span
	                                                    data-swiper-parallax="-5000"><?php echo  $item['subtitle']; ?></span>
	                                            </a></h1>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <?php endforeach; ?>
	            </div>

	            <!-- slider setting -->
	            <div class="txt-botm">
	                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
	                    <div>
	                        <span class=" custom-font"><?php echo $nav_next; ?></span>
	                    </div>
	                    <div><i class="fa fa-chevron-right"></i></div>
	                </div>
	                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
	                    <div><i class="fa fa-chevron-left"></i></div>
	                    <div>
	                        <span class=" custom-font"><?php echo $nav_prev; ?></span>
	                    </div>
	                </div>
	            </div>
	            <div class="swiper-pagination steps custom-font"></div>
	        </div>
	    </div>
	</div>

<?php endif; ?>

<?php if ( $showcase_style == 'style-2' ) : ?> 
<div class="showcase style-2">
    <div class="slider showcase-carus" data-carousel="swiper" data-items="2" data-loop="true" data-speed="1000"
        data-space="200" data-mousewheel="<?php echo $mousewheel; ?>" data-center="true">
        <div id="content-carousel-container-unq-1" class="swiper-container" data-swiper="container">
            <div class="swiper-wrapper">
                
	                <?php foreach ($slides_arr as $key => $item) :  ?>


	                	<?php 
	                		// Image
							if(!empty($item['image'])){
								$imgSrcset = '';
								$imgSizes = '';
								if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
									$imgSrc = $item['image'];
								}else{
									
										$img = wp_get_attachment_image_src($item['image'], "full");
										$imgSrcset = wp_get_attachment_image_srcset($item['image']);
										$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
									
									$imgSrc = $img[0];
								}
							}
						?>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo esc_url ( $imgSrc); ?>" data-overlay-dark="1">
                        <div class="caption ontop">
                            <div class="o-hidden">
                                <h1>
                                    <a href="<?php echo  $item['link']; ?>">
                                        <div class="stroke"><?php echo  $item['title']; ?></div> <span><?php echo  $item['subtitle']; ?></span>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="copy-cap valign">
                            <div class="cap">
                                <h1>
                                    <a href="<?php echo  $item['link']; ?>">
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
                        <span class=" custom-font"><?php echo esc_attr( $nav_next); ?></span>
                    </div>
                    <div><i class="fa fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                    <div><i class="fa fa-chevron-left"></i></div>
                    <div>
                        <span class=" custom-font"><?php echo esc_attr( $nav_prev); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ( $showcase_style == 'style-3' ) : ?>
<div class="showcase style-3">
    <div class="slider circle-slide showcase-carus" data-carousel="swiper" data-items="2" data-speed="1000"
        data-loop="true" data-space="200" data-parallax="true" data-mousewheel="<?php echo $mousewheel; ?>" data-center="true">
        <div id="content-carousel-container-unq-1" class="swiper-container" data-swiper="container">
            <div class="swiper-wrapper">
                
	                <?php foreach ($slides_arr as $key => $item) :  ?>


	                	<?php 
	                		// Image
							if(!empty($item['image'])){
								$imgSrcset = '';
								$imgSizes = '';
								if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
									$imgSrc = $item['image'];
								}else{
									
										$img = wp_get_attachment_image_src($item['image'], "full");
										$imgSrcset = wp_get_attachment_image_srcset($item['image']);
										$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
									
									$imgSrc = $img[0];
								}
							}
						?>
                <div class="swiper-slide">
                    <div class="full-width">
                        <div class="bg-img valign" style="background-image:url(<?php echo esc_url ( $imgSrc); ?>);" data-overlay-dark="1">
                            <div class="caption ontop valign">
                                <div class="o-hidden">
                                    <h1 data-swiper-parallax="-2000">
                                        <a href="<?php echo  $item['link']; ?>">
                                            <div class="stroke"><?php echo  $item['title']; ?></div> <span><?php echo  $item['subtitle']; ?></span>
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <div class="copy-cap valign">
                                <div class="cap">
                                    <h1 data-swiper-parallax="-2000">
                                        <a href="<?php echo  $item['link']; ?>">
                                            <div class="stroke"><?php echo  $item['title']; ?></div> <span><?php echo  $item['subtitle']; ?></span>
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- slider setting -->
            <div class="txt-botm">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <div>
                        <span class=" custom-font"><?php echo esc_attr( $nav_next); ?></span>
                    </div>
                    <div><i class="fa fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <div><i class="fa fa-chevron-left"></i></div>
                    <div>
                        <span class=" custom-font"><?php echo esc_attr( $nav_prev); ?></span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination steps custom-font"></div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ( $showcase_style == 'style-4' ) : ?>
<div class="showcase avo-tooltip style-4">
    <div class="slider showcase-grid" data-carousel="swiper" data-items="4" data-loop="true" data-space="30" data-speed="1000"
        data-mousewheel="<?php echo $mousewheel; ?>">
        <div id="content-carousel-container-unq-1" class="swiper-container" data-swiper="container">
            <div class="swiper-wrapper"> 
                
	                <?php foreach ($slides_arr as $key => $item) :  ?>


	                	<?php 
	                		// Image
							if(!empty($item['image'])){
								$imgSrcset = '';
								$imgSizes = '';
								if(is_string($item['image'])&&substr( $item['image'], 0, 4 ) === "http"){
									$imgSrc = $item['image'];
								}else{
									
										$img = wp_get_attachment_image_src($item['image'], "full");
										$imgSrcset = wp_get_attachment_image_srcset($item['image']);
										$imgSizes = wp_get_attachment_image_sizes($item['image'], "full");
									
									$imgSrc = $img[0];
								}
							}
						?>
                <a href="<?php echo  $item['link']; ?>" class="swiper-slide">
                    <div class="bg-img" data-background="<?php echo esc_url ( $imgSrc); ?>" data-tooltip-tit="<?php echo  $item['title']; ?>"
                        data-tooltip-sub="<?php echo  $item['subtitle']; ?>"></div>
                </a>
                <?php endforeach; ?> 
            </div>

        </div>
        <!-- slider setting --> 
        <div class="txt-botm">
            <div id="next" class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                <div>
                    <span class=" custom-font"><?php echo esc_attr( $nav_next); ?></span>
                </div>
                <div><i class="fa fa-chevron-right"></i></div>
            </div>
            <div id="prev" class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                <div><i class="fa fa-chevron-left"></i></div>
                <div>
                    <span class=" custom-font"><?php echo esc_attr( $nav_prev); ?></span>
                </div>
            </div>
        </div>

    </div>
</div>
<?php endif; ?>

