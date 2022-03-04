<?php 

$featured_icon = (array) vc_param_group_parse_atts( $featured_icon );

$featured_list = (array) vc_param_group_parse_atts( $featured_list );

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>

	<?php
    if(! empty ($port_content_top) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {margin-top: <?php echo $port_content_top ?>;}
    <?php }
    if(! empty ($port_content_right) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {margin-right: <?php echo $port_content_right ?>;}
    <?php }
    if(! empty ($port_content_bottom) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {margin-bottom: <?php echo $port_content_bottom ?>;}
    <?php }
    if(! empty ($port_content_left) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {margin-left: <?php echo $port_content_left ?>;}
    <?php }
    if(! empty ($port_padding_top) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {padding-top: <?php echo $port_padding_top ?>;}
    <?php }
    if(! empty ($port_padding_right) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {padding-right: <?php echo $port_padding_right ?>;}
    <?php }
    if(! empty ($port_padding_bottom) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {padding-bottom: <?php echo $port_padding_bottom ?>;}
    <?php }
    if(! empty ($port_padding_left) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {padding-left: <?php echo $port_padding_left ?>;}
    <?php }
    if(! empty ($bg_content) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {background-color: <?php echo $bg_content ?>;}
    <?php }
    if(! empty ($content_align) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative {text-align: <?php echo $content_align ?>;}
    <?php }
    if(! empty ($title_cl) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative h3 {color: <?php echo $title_cl ?>;}
    <?php }
    if(! empty ($txt_cl) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .dbox-relative p {color: <?php echo $txt_cl ?>;}
    <?php }
    if(! empty ($icon_color) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {color: <?php echo $icon_color ?>;}
    <?php }
    if(! empty ($icon_bg) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {background-color: <?php echo $icon_bg ?>;}
    <?php }
    if(! empty ($icon_radius_top) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {border-top-left-radius: <?php echo $icon_radius_top ?>;}
    <?php }
    if(! empty ($icon_radius_right) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {border-top-right-radius: <?php echo $icon_radius_right ?>;}
    <?php }
    if(! empty ($icon_radius_bottom) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {border-bottom-right-radius: <?php echo $icon_radius_bottom ?>;}
    <?php }
    if(! empty ($icon_radius_left) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {border-bottom-left-radius: <?php echo $icon_radius_left ?>;}
    <?php }
    if(! empty ($icon_size) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {font-size: <?php echo $icon_size ?>;}
    <?php }
    if(! empty ($icon_padding_top) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {padding-top: <?php echo $icon_padding_top ?>;}
    <?php }
    if(! empty ($icon_padding_right) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {padding-right: <?php echo $icon_padding_right ?>;}
    <?php }
    if(! empty ($icon_padding_bottom) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {padding-bottom: <?php echo $icon_padding_bottom ?>;}
    <?php }
    if(! empty ($icon_padding_left) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {padding-left: <?php echo $icon_padding_left ?>;}
    <?php }
    if(! empty ($icon_margin_top) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {margin-top: <?php echo $icon_margin_top ?>;}
    <?php }
    if(! empty ($icon_margin_right) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {margin-right: <?php echo $icon_margin_right ?>;}
    <?php }
    if(! empty ($icon_margin_bottom) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {margin-bottom: <?php echo $icon_margin_bottom ?>;}
    <?php }
    if(! empty ($icon_margin_left) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .featured-sicon li a {margin-left: <?php echo $icon_margin_left ?>;}
    <?php }
    if(! empty ($mask_color) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .port-inner:hover .port-box {background-color: <?php echo $mask_color ?>;}
    <?php }
    if(! empty ($mask_color_opacity) ){ ?>
		#avo-featured-<?php echo $myuid; ?> .port-inner:hover .port-box {opacity: <?php echo $mask_color_opacity ?>;}
    <?php }

    ?>
</style>

<?php if ($featured_style == 'style-1') {

if ( $image ) {
    $image = wp_get_attachment_image_src( $image, 'full' );
    if ( is_array( $image ) ) {
        $image = $image[0];
    }
}

?>
<div id="avo-featured-<?php echo $myuid; ?>" class="products">
    <div class="item">
        <div class="product-img">
            <img src="<?php echo esc_url ($image); ?>" alt="">
        </div>
        <div class="info">
            <div>
                <h6><?php echo $title; ?></h6>
                <span><?php echo $description; ?></span>
                <div class="links">
                    <?php foreach ( $featured_icon as $key => $item ) :  ?>
                        <a href='<?php echo $item['link']['url'] ?>' class="icon">
                            <i class="<?php echo esc_attr ( $item['icon']); ?>"></i> 
                            <div class="icon-text"><?php echo $item['mention']; ?></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if ($featured_style == 'style-2') {

if ( $image ) {
    $image = wp_get_attachment_image_src( $image, 'full' );
    if ( is_array( $image ) ) {
        $image = $image[0];
    }
}

?>
<div class="avo-featured style-2">
    <div class="items graphic">
        <div class="item-img">
            <div class="tlinks valign">
                <div class="full-width">
                    <?php if ( $feature_1 != '' && $feature_1_link != '' ) { ?>
                    <a href="<?php echo esc_url( $feature_1_link); ?>" ><?php echo $feature_1 ?></a>
                    <?php } ?>

                    <?php if ( $feature_2 != '' && $feature_2_link != '' ) { ?>
                    <a href="<?php echo esc_url( $feature_2_link); ?>" ><?php echo $feature_2 ?></a>
                    <?php } ?>
                </div>
            </div>
            <img src="<?php echo esc_url ($image); ?>" alt="image"> 
        </div>
        <div class="cont">
            <h6><?php echo $title; ?></h6>
        </div>
    </div>
</div>
<?php } ?>

<?php if ($featured_style == 'style-3') { 

if ( $image ) {
    $image = wp_get_attachment_image_src( $image, 'full' );
    if ( is_array( $image ) ) {
        $image = $image[0];
    }
}

?>
<div class="avo-featured style-3">
    <div class="min-area sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img">
                        <img class="thumparallax-down" src="<?php echo esc_url ($image); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="content">
                        <h4 class="wow custom-font" data-splitting><?php echo $title ?></h4>
                        <p class="wow txt" data-splitting><?php echo $description ?></p>
                        <ul class="feat">
                            <?php foreach ( $featured_list as $key => $item ) :?>
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <h6><span><?php echo $item['num']; ?></span><?php echo $item['featured_list_title']; ?></h6>
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
<?php } ?>