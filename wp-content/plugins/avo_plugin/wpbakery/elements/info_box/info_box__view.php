<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>
	<?php

	if(! empty ($icon_indent) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn .feature-btn-align-icon-right {margin-left: <?php echo $icon_indent ?>;}
		#avo-info-box-<?php echo $myuid; ?> .feature-btn .feature-btn-align-icon-left {margin-right: <?php echo $icon_indent ?>;}
	<?php }
	if(! empty ($box_opacity) ){ ?>
		#avo-info-box-<?php echo $myuid; ?>.box-with-icon {opacity: <?php echo $box_opacity ?>;}
	<?php }
	if(! empty ($box_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?>.box-with-icon {background-color: <?php echo $box_color ?>;}
		#avo-info-box-<?php echo $myuid; ?>.info-box {background-color: <?php echo $box_color ?>;}
	<?php }
	if(! empty ($boxbrd_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .box-with-icon {border-color: <?php echo $boxbrd_color ?>;}
	<?php }
	if(! empty ($box_padding_all_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .box-with-icon {padding-top: <?php echo $box_padding_all_top ?>;}
	<?php }
	if(! empty ($box_padding_all_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .box-with-icon {padding-right: <?php echo $box_padding_all_right ?>;}
	<?php }
	if(! empty ($box_padding_all_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .box-with-icon {padding-bottom: <?php echo $box_padding_all_bottom ?>;}
	<?php }
	if(! empty ($box_padding_all_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .box-with-icon {padding-left: <?php echo $box_padding_all_left ?>;}
	<?php }
	if(! empty ($hover_box_opacity) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .box-with-icon:hover {opacity: <?php echo $hover_box_opacity ?>;}
	<?php }
	if(! empty ($title_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .info-box-title {color: <?php echo $title_color ?>;}
	<?php }
	if(! empty ($title_margin_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-title {margin-top: <?php echo $title_margin_top ?>;}
	<?php }
	if(! empty ($title_margin_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-title {margin-right: <?php echo $title_margin_right ?>;}
	<?php }
	if(! empty ($title_margin_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-title {margin-bottom: <?php echo $title_margin_bottom ?>;}
	<?php }
	if(! empty ($title_margin_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-title {margin-left: <?php echo $title_margin_left ?>;}
	<?php }
	if(! empty ($title_padding_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-title {padding-top: <?php echo $title_padding_top ?>;}
	<?php }
	if(! empty ($title_padding_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-title {padding-right: <?php echo $title_padding_right ?>;}
	<?php }
	if(! empty ($title_padding_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-title {padding-bottom: <?php echo $title_padding_bottom ?>;}
	<?php }
	if(! empty ($title_padding_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-title {padding-left: <?php echo $title_padding_left ?>;}
	<?php }
	if(! empty ($subtitle_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .info-box-subtitle {color: <?php echo $subtitle_color ?>;}
	<?php }
	if(! empty ($text_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .info-box-text {color: <?php echo $text_color ?>;}
	<?php }
	if(! empty ($text_margin_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-top: <?php echo $text_margin_top ?>;}
	<?php }
	if(! empty ($text_margin_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-right: <?php echo $text_margin_right ?>;}
	<?php }
	if(! empty ($text_margin_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-bottom: <?php echo $text_margin_bottom ?>;}
	<?php }
	if(! empty ($text_margin_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-left: <?php echo $text_margin_left ?>;}
	<?php }
	if(! empty ($icon_size) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {font-size: <?php echo $icon_size ?>;}
	<?php }
	if(! empty ($icon_height) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {width: <?php echo $icon_height ?>;height: <?php echo $icon_height ?>;line-height: <?php echo $icon_height ?>;}
	<?php }
	if(! empty ($icon_bg_size) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {width: <?php echo $icon_bg_size ?>;height: <?php echo $icon_bg_size ?>;line-height: <?php echo $icon_bg_size ?>;}
	<?php }
	if(! empty ($icon_border_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-top-left-radius: <?php echo $icon_border_top ?>;}
    <?php }
    if(! empty ($icon_border_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-top-right-radius: <?php echo $icon_border_right ?>;}
    <?php }
    if(! empty ($icon_border_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-bottom-right-radius: <?php echo $icon_border_bottom ?>;}
    <?php }
    if(! empty ($icon_border_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-bottom-left-radius: <?php echo $icon_border_left ?>;}
	<?php }
	if(! empty ($icon_margin_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-top: <?php echo $icon_margin_top ?>;}
	<?php }
	if(! empty ($icon_margin_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-right: <?php echo $icon_margin_right ?>;}
	<?php }
	if(! empty ($icon_margin_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-bottom: <?php echo $icon_margin_bottom ?>;}
	<?php }
	if(! empty ($icon_margin_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-left: <?php echo $icon_margin_left ?>;}
	<?php }
	if(! empty ($icon_margin_left_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-top: <?php echo $icon_margin_left_top ?>;}
	<?php }
	if(! empty ($icon_margin_left_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-right: <?php echo $icon_margin_left_right ?>;}
	<?php }
	if(! empty ($icon_margin_left_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-bottom: <?php echo $icon_margin_left_bottom ?>;}
	<?php }
	if(! empty ($icon_margin_left_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .icon-text {margin-left: <?php echo $icon_margin_left_left ?>;}
	<?php }
	if(! empty ($icon_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .info-box-icon {color: <?php echo $icon_color ?>;}
	<?php }
	if(! empty ($iconbg_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {background-color: <?php echo $iconbg_color ?>;}
	<?php }
	if(! empty ($icon_bordering_type) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-style: <?php echo $icon_bordering_type ?>;}
    <?php }
    if(! empty ($icon_bordering_width_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-top-width: <?php echo $icon_bordering_width_top ?>;}
    <?php }
    if(! empty ($icon_bordering_width_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-right-width: <?php echo $icon_bordering_width_right ?>;}
    <?php }
    if(! empty ($icon_bordering_width_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-bottom-width: <?php echo $icon_bordering_width_bottom ?>;}
    <?php }
    if(! empty ($icon_bordering_width_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-left-width: <?php echo $icon_bordering_width_left ?>;}
    <?php }
    if(! empty ($icon_bordering_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .avo-icon {border-color: <?php echo $icon_bordering_color ?>;}
	<?php }
	if(! empty ($hover_iconbg_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?>.box-with-icon:hover .avo-icon {background: <?php echo $hover_iconbg_color ?>;}
	<?php }
	if(! empty ($btn_margin_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {margin-top: <?php echo $btn_margin_top ?>;}
	<?php }
	if(! empty ($btn_margin_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {margin-right: <?php echo $btn_margin_right ?>;}
	<?php }
	if(! empty ($btn_margin_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {margin-bottom: <?php echo $btn_margin_bottom ?>;}
	<?php }
	if(! empty ($btn_margin_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {margin-left: <?php echo $btn_margin_left ?>;}
	<?php }
	if(! empty ($btn_padding_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {padding-top: <?php echo $btn_padding_top ?>;}
	<?php }
	if(! empty ($btn_padding_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {padding-right: <?php echo $btn_padding_right ?>;}
	<?php }
	if(! empty ($btn_padding_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {padding-bottom: <?php echo $btn_padding_bottom ?>;}
	<?php }
	if(! empty ($btn_padding_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {padding-left: <?php echo $btn_padding_left ?>;}
	<?php }
	if(! empty ($btn_border_radius_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-top-left-radius: <?php echo $btn_border_radius_top ?>;}
    <?php }
    if(! empty ($btn_border_radius_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-top-right-radius: <?php echo $btn_border_radius_right ?>;}
    <?php }
    if(! empty ($btn_border_radius_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-bottom-right-radius: <?php echo $btn_border_radius_bottom ?>;}
    <?php }
    if(! empty ($btn_border_radius_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-bottom-left-radius: <?php echo $btn_border_radius_left ?>;}
	<?php }
	if(! empty ($btn_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {color: <?php echo $btn_color ?>;}
	<?php }
	if(! empty ($btn_color_hover) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn:hover {color: <?php echo $btn_color_hover ?>;}
	<?php }
	if(! empty ($btn_bg) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn:hover {background-color: <?php echo $btn_bg ?>;}
		#avo-info-box-<?php echo $myuid; ?> .feature-btn::after {background-color: <?php echo $btn_bg ?>;}
	<?php }
	if(! empty ($btn_border_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-top-width: <?php echo $btn_border_top ?>;}
    <?php }
    if(! empty ($btn_border_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-right-width: <?php echo $btn_border_right ?>;}
    <?php }
    if(! empty ($btn_border_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-bottom-width: <?php echo $btn_border_bottom ?>;}
    <?php }
    if(! empty ($btn_border_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-left-width: <?php echo $btn_border_left ?>;}
	<?php }
	if(! empty ($btn_border_hover_top) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn:hover {border-top-width: <?php echo $btn_border_hover_top ?>;}
    <?php }
    if(! empty ($btn_border_hover_right) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn:hover {border-right-width: <?php echo $btn_border_hover_right ?>;}
    <?php }
    if(! empty ($btn_border_hover_bottom) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn:hover {border-bottom-width: <?php echo $btn_border_hover_bottom ?>;}
    <?php }
    if(! empty ($btn_border_hover_left) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn:hover {border-left-width: <?php echo $btn_border_hover_left ?>;}
	<?php }
	if(! empty ($btn_border_color) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn {border-color: <?php echo $btn_border_color ?>;}
	<?php }
	if(! empty ($btn_border_color_hover) ){ ?>
		#avo-info-box-<?php echo $myuid; ?> .feature-btn:hover {border-color: <?php echo $btn_border_color_hover ?>;}
    <?php }

	?>
</style>

<?php if ( $info_box_style == 'style-1' ) { ?>
<div id="avo-info-box-<?php echo $myuid; ?>" class="box-with-icon feature-4 <?php echo $css_class; ?>">

	<i class="avo-icon fa <?php echo esc_attr( $icon_as_icon ); ?>"></i>

	<?php if($title!=''){?>
	<div class="cont">
		<h3><?php echo $title; ?></h3>
	<?php }?>

	<?php if ( $subtitle != '' ) { ?>
		<p><?php echo esc_attr( $subtitle ); ?></p>
	<?php } ?>

	<div><?php echo wp_kses_post ( $text ); ?></div>



	<?php if ( $btn_text != '' && $btn_url != '' ) { ?>
		<a class="feature-btn" href="<?php echo esc_url( $btn_url ); ?>">
		
			<?php if ( ! empty( $btn_icon_as_icon ) ) : ?>
			<span class="feature-btn-align-icon-<?php $icon_align ?> feature-btn-button-icon">
				<i class="<?php echo esc_attr( $btn_icon_as_icon ); ?>" aria-hidden="true"></i>
			</span>
		<?php endif; ?>
		
			<?php echo esc_attr( $btn_text ); ?>
		</a>  
	<?php } ?>


	</div><!--/.cont-->
</div><!--/.box-icon-->
<?php }; ?>

<?php if ( $info_box_style == 'style-2' ) { ?>
<div id="avo-info-box-<?php echo $myuid; ?>" class="box-with-icon feature-4 <?php echo $css_class; ?>">

	<i class="avo-icon fa <?php echo esc_attr( $icon_as_icon); ?>"></i>

	<?php if($title!=''){?>
	<div class="cont">
		<h3><?php echo $title; ?></h3>
	<?php }?>

	<?php if ( $subtitle != '' ) { ?>
		<p><?php echo esc_attr( $subtitle ); ?></p>
	<?php } ?>

	<div><?php echo wp_kses_post ( $text ); ?></div>



	<?php if ( $btn_text != '' && $btn_url != '' ) { ?>
		<a class="feature-btn" href="<?php echo esc_url( $btn_url ); ?>">
		
			<?php if ( ! empty( $btn_icon_as_icon ) ) : ?>
			<span class="feature-btn-align-icon-<?php $icon_align ?> feature-btn-button-icon">
				<i class="<?php echo esc_attr( $btn_icon_as_icon ); ?>" aria-hidden="true"></i>
			</span>
		<?php endif; ?>
		
			<?php echo esc_attr( $btn_text ); ?>
		</a>  
	<?php } ?>


	</div><!--/.cont-->
</div><!--/.box-icon-->
<?php }; ?>

<?php if ( $info_box_style == 'style-3' ) { ?>
<div id="avo-info-box-<?php echo $myuid; ?>" class="box-with-icon feature-4 <?php echo $css_class; ?>">

	<i class="avo-icon fa <?php echo esc_attr( $icon_as_icon ); ?>"></i>

	<?php if($title!=''){?>
	<div class="cont">
		<h3><?php echo $title; ?></h3>
	<?php }?>

	<?php if ( $subtitle != '' ) { ?>
		<p><?php echo esc_attr( $subtitle ); ?></p>
	<?php } ?>

	<div><?php echo wp_kses_post ( $text ); ?></div>



	<?php if ( $btn_text != '' && $btn_url != '' ) { ?>
		<a class="feature-btn" href="<?php echo esc_url( $btn_url ); ?>">
		
			<?php if ( ! empty( $btn_icon_as_icon ) ) : ?>
			<span class="feature-btn-align-icon-<?php $icon_align ?> feature-btn-button-icon">
				<i class="<?php echo esc_attr( $btn_icon_as_icon ); ?>" aria-hidden="true"></i>
			</span>
		<?php endif; ?>
		
			<?php echo esc_attr( $btn_text ); ?>
		</a>  
	<?php } ?>


	</div><!--/.cont-->
</div><!--/.box-icon-->
<?php }; ?>

<?php if ( $info_box_style == 'style-4' ) { ?>
<div id="avo-info-box-<?php echo $myuid; ?>" class="box-with-icon <?php echo $css_class; ?> feature-4">

	<i class="avo-icon fa <?php echo esc_attr( $icon_as_icon); ?>"></i>

	<?php if($title!=''){?>
	<div class="cont">
		<h3><?php echo $title; ?></h3>
	<?php }?>

	<?php if ( $subtitle != '' ) { ?>
		<p><?php echo esc_attr( $subtitle ); ?></p>
	<?php } ?>

	<div><?php echo wp_kses_post ( $text ); ?></div>



	<?php if ( $btn_text != '' && $btn_url != '' ) { ?>
		<a class="feature-btn" href="<?php echo esc_url( $btn_url ); ?>">
		
			<?php if ( ! empty( $btn_icon_as_icon ) ) : ?>
			<span class="feature-btn-align-icon-<?php $icon_align ?> feature-btn-button-icon">
				<i class="<?php echo esc_attr( $btn_icon_as_icon ); ?>" aria-hidden="true"></i>
			</span>
		<?php endif; ?>
		
			<?php echo esc_attr( $btn_text ); ?>
		</a>  
	<?php } ?>


	</div><!--/.cont-->
</div><!--/.box-icon-->
<?php }; ?>

<?php if ( $info_box_style == 'style-5' ) { 
	
	// Image
	if ( $image ) {
		$image = wp_get_attachment_image_src( $image, 'full' );
		if ( is_array( $image ) ) {
			$image = $image[0];
		}
	} ?>

	<div id="avo-info-box-<?php echo $myuid; ?>" class="info-box style-5 <?php echo 'mode-'.$info_box_bg;?> <?php echo $css_class; ?>">
	    <div class="item-box">
			<?php if ($box_image_icon=='image'){ ?>
				<img src="<?php echo $image ?>"> 
			<?php }
			elseif($box_image_icon=='icon'){ ?>
				<div class="icon info-box-icon">
					<i class="<?php echo $icon_as_icon; ?>"></i>
				</div>
			<?php } ?>
	        <h6 class="info-box-title"><?php echo  $title; ?></h6>
	        <p class="info-box-text" ><?php echo  $text; ?></p>
	    </div>
	</div>
<?php }; ?>

<?php if ( $info_box_style == 'style-6' ) {

	// Image
	if ( $image ) {
		$image = wp_get_attachment_image_src( $image, 'full' );
		if ( is_array( $image ) ) {
			$image = $image[0];
		}
	} ?>

	<div id="avo-info-box-<?php echo $myuid; ?>" class="info-box style-6 <?php echo $css_class; ?>">
		<div>
			<?php if ($box_image_icon=='image'){ ?>
				<img src="<?php echo $image ?>"> 
			<?php }
			if($box_image_icon=='icon'){ ?>
				<div class="icon">
					<i class="<?php echo $icon_as_icon; ?>"></i>
				</div>
			<?php } ?>
		</div>
		<h6 class="custom-font"><?php echo  $title; ?></h6>
		<div class="dots">
			<span></span>
			<span></span>
			<span></span>
		</div> 
	</div>
<?php }; ?>

<?php if ( $info_box_style == 'style-7' ) {

// Image
if ( $image ) {
	$image = wp_get_attachment_image_src( $image, 'full' );
	if ( is_array( $image ) ) {
		$image = $image[0];
	}
}

?>

<div id="avo-info-box-<?php echo $myuid; ?>" class="info-box style-7 info-box">
	<div class="mas-item">
    	<?php if ($box_image_icon=='image'){ ?>
			<img src="<?php echo $image ?>"> 
		<?php }
    	if($box_image_icon=='icon'){ ?>
    		<div class="icon">
    			<i class="<?php echo $icon_as_icon; ?>"></i>
    		</div>
    	<?php } ?>
    	
		<h6><?php echo $title; ?></h6>

		<?php if ( ! empty( $btn_url ) ) { ?>
		<div class="text-right">
			<a href="<?php echo esc_url( $btn_url ); ?>" class="more">
				<i class="<?php echo esc_attr( $btn_icon_as_icon ); ?>" aria-hidden="true"></i>
			</a>
		</div>
		<?php } ?> 
		<div class="bg-color"></div>
	</div> 
</div>
<?php } ?>

<?php if ( $info_box_style == 'style-8' ) {
// Image
if ( $image ) {
	$image = wp_get_attachment_image_src( $image, 'full' );
	if ( is_array( $image ) ) {
		$image = $image[0];
	}
}

?>

<div id="avo-info-box-<?php echo $myuid; ?>" class="tcf-info-box style-8 <?php echo $css_class; ?>">
	<div class="item-box bg-img" data-background="<?php echo $image; ?>">
		<h4 class="custom-font <?php echo 'text-'.$align_title;?>"><?php echo  $title; ?></h4>
		<?php if ( ! empty( $btn_url ) ) : ?>
		<a href="<?php echo $btn_url; ?>" class="btn-curve btn-bord btn-lit mt-40"><span><?php echo $btn_text; ?></span></a>
		<?php endif; ?> 
	</div>
</div>
<?php }; ?>