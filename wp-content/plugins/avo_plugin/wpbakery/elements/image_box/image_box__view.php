<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>
	<?php
    if(! empty ($image_size) ){ ?>
		#avo-image-box-<?php echo $myuid; ?>.img-box img {width: <?php echo $image_size ?>%;}
	<?php }
    if(! empty ($image_size) ){ ?>
		#avo-image-box-<?php echo $myuid; ?>.box-img .img-title {padding-left: ;: <?php echo $title_text_margin ?>%;}
        #avo-image-box-<?php echo $myuid; ?>.box-img .img-subtitle {padding-left: ;: <?php echo $title_text_margin ?>%;}
	<?php }
    if(! empty ($box_color) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-1 {background-color: <?php echo $box_color ?>;}
	<?php }
	if(! empty ($boxbrd_color) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-1 {border-color: <?php echo $boxbrd_color ?>;}
	<?php }
    if(! empty ($title_color) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .info-box-title {color: <?php echo $title_color ?>;}
	<?php }
	if(! empty ($title_margin_top) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-title {margin-top: <?php echo $title_margin_top ?>;}
	<?php }
	if(! empty ($title_margin_right) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-title {margin-right: <?php echo $title_margin_right ?>;}
	<?php }
	if(! empty ($title_margin_bottom) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-title {margin-bottom: <?php echo $title_margin_bottom ?>;}
	<?php }
	if(! empty ($title_margin_left) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-title {margin-left: <?php echo $title_margin_left ?>;}
	<?php }
	if(! empty ($title_padding_top) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-title {padding-top: <?php echo $title_padding_top ?>;}
	<?php }
	if(! empty ($title_padding_right) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-title {padding-right: <?php echo $title_padding_right ?>;}
	<?php }
	if(! empty ($title_padding_bottom) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-title {padding-bottom: <?php echo $title_padding_bottom ?>;}
	<?php }
	if(! empty ($title_padding_left) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-title {padding-left: <?php echo $title_padding_left ?>;}
	<?php }
	if(! empty ($subtitle_color) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-subtitle {color: <?php echo $subtitle_color ?>;}
	<?php }
	if(! empty ($text_color) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-text {color: <?php echo $text_color ?>;}
	<?php }
	if(! empty ($text_margin_top) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-text {margin-top: <?php echo $text_margin_top ?>;}
	<?php }
	if(! empty ($text_margin_right) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-text {margin-right: <?php echo $text_margin_right ?>;}
	<?php }
	if(! empty ($text_margin_bottom) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-text {margin-bottom: <?php echo $text_margin_bottom ?>;}
	<?php }
	if(! empty ($text_margin_left) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .img-text {margin-left: <?php echo $text_margin_left ?>;}
	<?php }
    if(! empty ($btn_margin_top) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {margin-top: <?php echo $btn_margin_top ?>;}
	<?php }
	if(! empty ($btn_margin_right) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {margin-right: <?php echo $btn_margin_right ?>;}
	<?php }
	if(! empty ($btn_margin_bottom) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {margin-bottom: <?php echo $btn_margin_bottom ?>;}
	<?php }
	if(! empty ($btn_margin_left) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {margin-left: <?php echo $btn_margin_left ?>;}
	<?php }
	if(! empty ($btn_padding_top) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {padding-top: <?php echo $btn_padding_top ?>;}
	<?php }
	if(! empty ($btn_padding_right) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {padding-right: <?php echo $btn_padding_right ?>;}
	<?php }
	if(! empty ($btn_padding_bottom) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {padding-bottom: <?php echo $btn_padding_bottom ?>;}
	<?php }
	if(! empty ($btn_padding_left) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {padding-left: <?php echo $btn_padding_left ?>;}
	<?php }
	if(! empty ($btn_border_radius_top) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-top-left-radius: <?php echo $btn_border_radius_top ?>;}
    <?php }
    if(! empty ($btn_border_radius_right) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-top-right-radius: <?php echo $btn_border_radius_right ?>;}
    <?php }
    if(! empty ($btn_border_radius_bottom) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-bottom-right-radius: <?php echo $btn_border_radius_bottom ?>;}
    <?php }
    if(! empty ($btn_border_radius_left) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-bottom-left-radius: <?php echo $btn_border_radius_left ?>;}
	<?php }
	if(! empty ($btn_color) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {color: <?php echo $btn_color ?>;}
	<?php }
	if(! empty ($btn_color_hover) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn:hover {color: <?php echo $btn_color_hover ?>;}
	<?php }
	if(! empty ($btn_bg) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn:hover {background-color: <?php echo $btn_bg ?>;}
		#avo-image-box-<?php echo $myuid; ?> .feature-btn::after {background-color: <?php echo $btn_bg ?>;}
	<?php }
	if(! empty ($btn_border_top) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-top-width: <?php echo $btn_border_top ?>;}
    <?php }
    if(! empty ($btn_border_right) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-right-width: <?php echo $btn_border_right ?>;}
    <?php }
    if(! empty ($btn_border_bottom) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-bottom-width: <?php echo $btn_border_bottom ?>;}
    <?php }
    if(! empty ($btn_border_left) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-left-width: <?php echo $btn_border_left ?>;}
	<?php }
	if(! empty ($btn_border_hover_top) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn:hover {border-top-width: <?php echo $btn_border_hover_top ?>;}
    <?php }
    if(! empty ($btn_border_hover_right) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn:hover {border-right-width: <?php echo $btn_border_hover_right ?>;}
    <?php }
    if(! empty ($btn_border_hover_bottom) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn:hover {border-bottom-width: <?php echo $btn_border_hover_bottom ?>;}
    <?php }
    if(! empty ($btn_border_hover_left) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn:hover {border-left-width: <?php echo $btn_border_hover_left ?>;}
	<?php }
	if(! empty ($btn_border_color) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn {border-color: <?php echo $btn_border_color ?>;}
	<?php }
	if(! empty ($btn_border_color_hover) ){ ?>
		#avo-image-box-<?php echo $myuid; ?> .feature-btn:hover {border-color: <?php echo $btn_border_color_hover ?>;}
    <?php }
	?>
</style>

<div id="avo-image-box-<?php echo $myuid; ?>" class="img-box">

    <img src="<?php echo esc_url ( $image); ?>" alt="img"> 

    <?php if($title!=''){?>
    <div class="cont">
    <h3 class="img-title"><?php echo $title; ?></h3>
    <?php }?>
        
    <?php if ( $subtitle != '' ) { ?>
    <p class="box-sub-title img-subtitle"><?php echo esc_attr( $subtitle); ?></p>
    <?php } ?>
        
    <div class="img-text"><?php echo wp_kses_post ( $text); ?></div>
        
        
        
        <?php if ( $btn_text != '' && $link != '' ) { ?>
            <a class="feature-btn" href="<?php echo esc_url( $link); ?>">
            
            <?php if ( ! empty( $img_btn ) ) : ?>
                <span class="feature-btn-button-img">
                    <i class="<?php echo esc_attr( $img_btn ); ?>" aria-hidden="true"></i>
                </span>
            <?php endif; ?>
            
            <?php echo esc_attr( $btn_text); ?>
            </a>  
        <?php } ?>
        
        
    </div><!--/.cont-->
</div><!--/.box-Image-->