<?php if($fancy_style == 'style-1'){
    // Image
	if ( $image_bg ) {
		$image_bg = wp_get_attachment_image_src( $image_bg, 'full' );
		if ( is_array( $image_bg ) ) {
			$image_bg = $image_bg[0];
		}
	} ?>
    <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
        <div class="img bg-img wow imago" style="background-image:url(<?php echo esc_url ($image_bg); ?>);">
            <div class="since custom-font">
                <span><?php echo esc_attr($text1); ?></span>
                <span><?php echo esc_attr($text2); ?></span>
            </div>
            <div class="years custom-font">
                <h2 style="background-image:url(<?php echo esc_url ($image_bg); ?>);">
                    <?php echo esc_attr($title2); ?>   
                </h2>
                <h5><?php echo esc_attr($title1); ?></h5>
            </div>
        </div>
    </div>
<?php }; ?>