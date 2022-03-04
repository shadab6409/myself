<?php 

$imgbox_list = (array) vc_param_group_parse_atts( $imgbox_list );

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>

	<?php
    if(! empty ($title_color) ){ ?>
		#avo-image-box-slider-<?php echo $myuid; ?>.img-box-slider .imgbox-text {color: <?php echo $title_color ?>;}
	<?php }
    if(! empty ($name_color) ){ ?>
		#avo-image-box-slider-<?php echo $myuid; ?>.img-box-slider h3 {color: <?php echo $name_color ?>;}
	<?php }
    if(! empty ($post_color) ){ ?>
		#avo-image-box-slider-<?php echo $myuid; ?>.img-box-slider .imgbox-from {color: <?php echo $post_color ?>;}
	<?php }
    if(! empty ($border_color) ){ ?>
		#avo-image-box-slider-<?php echo $myuid; ?>.img-box-slider .slick-slide {border-color: <?php echo $border_color ?>;}
	<?php }
    ?>

</style>

<?php
if ( $box_style == 'style-1' ) { ?>
<div id="avo-image-box-slider-<?php echo $myuid; ?>" class="img-box-slider imgbox-slider-1" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "autoplay" : false}'>
    <?php foreach ( $imgbox_list as $key => $item ) {

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
        <a href='<?php echo $item['link'] ?>'>
            <div class="box-img">
                <img src="<?php echo esc_url ( $imgSrc ); ?>" alt="img">
            </div>
        </a>

        <div class="box-cont"> 
            <h3><a href='<?php echo $item['link'] ?>'> <?php echo  $item['title']; ?> </a></h3>                    
        <p class="imgbox-text">
        <?php echo  $item['text']; ?>
        </p>
        </div>
        
    </div>
    
    <?php }; ?>
</div><!--/.img-box-->
<?php }; ?>

<?php
if ( $box_style == 'style-2' ) {?>
<div id="avo-image-box-slider-<?php echo $myuid; ?>" class="img-box-slider imgbox-slider-2" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "autoplay" : false,"arrows" : <?php echo esc_attr ( $show_arrows )?>}'>
    <?php foreach ( $imgbox_list as $key => $item ) {

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

        if(!empty($item['image_icon'])){
            $imgSrcset_icon = '';
            $imgSizes_icon = '';
            if(is_string($item['image_icon'])&&substr( $item['image_icon'], 0, 4 ) === "http"){
                $imgSrc_icon = $item['image_icon'];
            }else{
                
                    $img_icon = wp_get_attachment_image_src($item['image_icon'], "full");
                    $imgSrcset_icon = wp_get_attachment_image_srcset($item['image_icon']);
                    $imgSizes_icon = wp_get_attachment_image_sizes($item['image_icon'], "full");
                
                $imgSrc_icon = $img_icon[0];
            }
        }
        
    ?> 
    <div class="item">
        <a href='<?php echo $item['link'] ?>'>
            <div class="box-img">
                <img src="<?php echo esc_url ( $imgSrc ); ?>" alt="img">
            </div>
        </a>

        <div class="box-cont"> 
            <?php if ($item['image_icon']) {?>
            <img src="<?php echo esc_url ( $imgSrc_icon ); ?>" alt="img">
        <?php }?>
            <h3><a href='<?php echo $item['link'] ?>'> <?php echo  $item['title']; ?> </a></h3>                    
        <p class="imgbox-text">
        <?php echo  $item['text']; ?>
        </p>
            <?php if ( $item['btn_text'] != '' && $item['link'] != '' ) { ?>
                <a class="feature-btn" href="<?php echo esc_url( $item['link']); ?>">
                <?php echo esc_attr( $item['btn_text']); ?>
                </a>  
            <?php } ?>
        </div>
        
    </div>
    
    <?php }; ?>
</div><!--/.img-box-->
<?php }; ?>