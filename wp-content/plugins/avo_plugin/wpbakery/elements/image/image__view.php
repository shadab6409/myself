<?php
if ( $image_style == 'style-1' ) : 
	
	// Image
	if ( $image ) {
		$image = wp_get_attachment_image_src( $image, 'full' );
		if ( is_array( $image ) ) {
			$image = $image[0];
		}
	}

	?>

	<div class="avo-image <?php if ( ! empty( $title ) ) { echo 'avo-tooltip';}?> style-1 <?php echo $custom_class ?> <?php echo $css_class; ?>">
		<div class="img sizxl mb-30" data-tooltip-tit="<?php echo  $title; ?>" data-tooltip-sub="<?php echo  $subtitle; ?>">
				<img src="<?php echo esc_url ( $image ); ?>" style="border-radius:<?php echo $img_border_radius; ?>;width:<?php echo $img_width; ?>; height:<?php echo $img_height; ?>" alt="img" class="imago wow">
		</div> 
		<div class="div-tooltip-tit"><?php echo  $title; ?></div>
	</div>
<?php endif; 

if ( $image_style == 'style-2' ) : 
	
	// Image
	if ( $image ) {
		$image = wp_get_attachment_image_src( $image, 'full' );
		if ( is_array( $image ) ) {
			$image = $image[0];
		}
	}

	?>

	<div class="avo-image style-2 <?php echo $custom_class ?> <?php echo $css_class; ?> <?php if ( ! empty( $title ) ) { echo 'avo-tooltip';}?>  ">
		    <div class="img2 imago wow" data-tooltip-tit="<?php echo $title; ?>" data-tooltip-sub="<?php echo  $subtitle; ?>">
		        <img src="<?php echo esc_url ( $image ); ?>" style="width:<?php echo $img_width; ?>; height:<?php echo $img_height; ?>" alt="img" class="imago wow">
		    </div> 
		    <div class="div-tooltip-tit"><?php echo $title; ?></div>
	</div>
<?php endif; 

if ( $image_style == 'style-3' ) : 
	
	// Image
	if ( $image ) {
		$image = wp_get_attachment_image_src( $image, 'full' );
		if ( is_array( $image ) ) {
			$image = $image[0];
		}
	}

	?>

	<div class="avo-image style-3 <?php echo $custom_class ?> <?php echo $css_class; ?>">
		<div class="video-box">
			<div class="tit-text">
				<h3 class="wow" data-splitting><?php echo  $title; ?></h3>
			</div>
			<div class="wow imago">
				<div class="img">
					<img src="<?php echo esc_url ( $image ); ?>" alt="img">
				</div>
				<div class="vid-icon">
					<a class="vid" href="<?php echo esc_url( $link ); ?>">
						<div class="vid-butn">
							<span class="icon">
								<i class="fa fa-play"></i>
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php endif; 

?>



