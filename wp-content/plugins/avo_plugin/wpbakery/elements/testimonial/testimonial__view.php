<?php 

$testi_list = (array) vc_param_group_parse_atts( $testi_list );

$slide_to_show="data-slick=";
$slide_to_show.="'{";
$slide_to_show.='"slidesToShow":';
if ($testimonial_style == 'style-2'){
    $slide_to_show.=1;
} else {
    $slide_to_show.=$item_num;
}
$slide_to_show.=',"autoplay":';
$slide_to_show.=$item_autoplay;
$slide_to_show.='}'; 
$slide_to_show.="'";

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>

	<?php if(! empty ($title_color) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .testi-text {color: <?php echo $title_color ?>;}
    <?php }
    if(! empty ($title_size) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .testi-text {font-size: <?php echo $title_size ?>px;}
    <?php }
    if(! empty ($name_color) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial h3 {color: <?php echo $name_color ?>;}
    <?php }
    if(! empty ($name_size) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial h3 {font-size: <?php echo $name_size ?>px;}
    <?php }
    if(! empty ($post_color) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .testi-from {color: <?php echo $post_color ?>;}
    <?php }
    if(! empty ($post_size) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?> .testimonial .testi-from {font-size: <?php echo $post_size ?>px;}
    <?php }
    if(! empty ($quote_color) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .quote-icon {color: <?php echo $quote_color ?>;}
    <?php }
    if(! empty ($quotebg_color) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .quote-icon {background-color: <?php echo $quotebg_color ?>;}
    <?php }
    if(! empty ($quote_radius_top) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .fa {border-top-left-radius: <?php echo $quote_radius_top ?>;}
    <?php }
    if(! empty ($quote_radius_right) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .fa {border-top-right-radius: <?php echo $quote_radius_right ?>;}
    <?php }
    if(! empty ($quote_radius_bottom) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .fa {border-bottom-right-radius: <?php echo $quote_radius_bottom ?>;}
    <?php }
    if(! empty ($quote_radius_left) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .fa {border-bottom-left-radius: <?php echo $quote_radius_left ?>;}
    <?php }
    if(! empty ($border_color) ){ ?>
		#avo-testimonial-<?php echo $myuid; ?>.testimonial .slick-slide {border-color: <?php echo $border_color ?>;}
    <?php } ?>

</style>

<?php

if ($testimonial_style == 'style-1') : ?>
<div id="avo-testimonial-<?php echo $myuid; ?>" class="testi-slider testimonial style-1" <?php echo  $slide_to_show; ?>>
    <?php foreach ( $testi_list as $key => $item ) :  ?>

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

        <div>
            
            <h3><?php echo  $item['title']; ?></h3>
            
            <p class="testi-from"><?php echo  $item['position']; ?></p>
            
            <div class="author-img">
                <img src="<?php echo esc_url ( $imgSrc ); ?>" alt="img">
            </div>
            
            <p class="testi-text">
            <?php echo  $item['text']; ?>
            </p>

            <?php
                for($x=1;$x<=$item['rate'];$x++) {
                    echo '<i class="rating-icon fa fa-star" aria-hidden="true"></i>';
                }
                if (strpos($item['rate'],'.')) {
                    echo '<i class="rating-icon fa fa-star-half-o" aria-hidden="true"></i>';
                    $x++;
                }
                while ($x<=5) {
                    echo '<i class="rating-icon fa fa-star-o" aria-hidden="true"></i>';
                    $x++;
                }
            ?>
            
        </div>

    <?php endforeach; ?>
</div><!--/.testimonial-->
<?php endif; ?>

<?php if ($testimonial_style == 'style-2') : ?>
<div id="avo-testimonial-<?php echo $myuid; ?>" class="testi-slider testimonial style-2" <?php echo  $slide_to_show; ?>>
    <?php foreach ( $testi_list as $key => $item ) :  ?>

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

        <div class="item">
            <p><?php echo  $item['text']; ?></p>
            <div class="info">
                <div class="img">
                    <div class="img-box">
                        <img src="<?php echo esc_url ( $imgSrc ); ?>" alt="">
                    </div>
                </div>
                <div class="cont">
                    <div class="author">
                        <h6 class="author-name custom-font"><?php echo  $item['title']; ?></h6>
                        <span class="author-details"><?php echo  $item['position']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    
    <?php endforeach; ?>
</div><!--/.testimonial-->
<?php endif; ?>

<?php if ($testimonial_style == 'style-3') : ?>
<div id="avo-testimonial-<?php echo $myuid; ?>" class="testi-slider testimonial style-3 <?php echo 'mode-'.$avo_mode;?>" <?php echo  $slide_to_show; ?> >
        <?php foreach ( $testi_list as $key => $item ) :  ?>

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
        
        <div class="item">
            <p><?php echo  $item['text']; ?></p>
            <div class="info">
                <div class="cont">
                    <div class="author">
                        <div class="img">
                            <img src="<?php echo esc_url ( $imgSrc ); ?>" alt="img">
                        </div>
                        <h6 class="author-name custom-font"><?php echo  $item['title']; ?></h6>
                        <span class="author-details"><?php echo  $item['position']; ?></span>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div><!--/.testimonial-->
<?php endif; ?>