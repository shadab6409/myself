<?php 

$work_process_list = (array) vc_param_group_parse_atts( $work_process_list );

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

$slide_to_show="data-slick=";
    $slide_to_show.="'{";
    $slide_to_show.='"slidesToShow":';
    $slide_to_show.=$item_num;
    $slide_to_show.=', "slidesToScroll":';
    $slide_to_show.=$item_num;
    $slide_to_show.=', "autoplay" : false}'; 
    $slide_to_show.="'";

?>
<style>

	<?php
    if(! empty ($box_margin_top) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {margin-top: <?php echo $box_margin_top ?>;}
	<?php }
	if(! empty ($box_margin_right) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {margin-right: <?php echo $box_margin_right ?>;}
	<?php }
	if(! empty ($box_margin_bottom) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {margin-bottom: <?php echo $box_margin_bottom ?>;}
	<?php }
	if(! empty ($box_margin_left) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {margin-left: <?php echo $box_margin_left ?>;}
	<?php }
    if(! empty ($size) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {width: <?php echo $size ?>;}
	<?php }
    if(! empty ($box_border_type) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {border-style: <?php echo $box_border_type ?>;}
    <?php }
    if(! empty ($box_border_width_top) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {border-top-width: <?php echo $box_border_width_top ?>;}
    <?php }
    if(! empty ($box_border_width_right) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {border-right-width: <?php echo $box_border_width_right ?>;}
    <?php }
    if(! empty ($box_border_width_bottom) ){ ?>
		#avo-work-process-<?php echo $myuid; ?> .work-process .item .box-img .bg-img {border-bottom-width: <?php echo $box_border_width_bottom ?>;}
    <?php }
    if(! empty ($box_border_width_left) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {border-left-width: <?php echo $box_border_width_left ?>;}
    <?php }
    if(! empty ($box_border_color) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .bg-img {border-color: <?php echo $box_border_color ?>;}
	<?php }
    if(! empty ($num_bg) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .num {color: <?php echo $num_bg ?>;}
	<?php }
    if(! empty ($num_color_stroke) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .num {-webkit-text-stroke-color: <?php echo $num_color_stroke ?>;}
	<?php }
    if(! empty ($num_width_stroke) ){ ?>
		#avo-work-process-<?php echo $myuid; ?>.work-process .item .box-img .num {-webkit-text-stroke-width: <?php echo $num_width_stroke ?>;}
	<?php }
    ?>

</style>

<?php
if ( $process_style == 'style-1' ) { ?>
<div id="avo-work-process-<?php echo $myuid; ?>" class="work-process style-1" <?php echo  $slide_to_show; ?>>
    <?php foreach ( $work_process_list as $key => $item ) {

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
        
        <div class="box-img">
            <div class="bg-img">
                <img src="<?php echo esc_url ( $imgSrc ); ?>" alt="img">
            </div>
            <span class="num"><?php echo  $item['text']; ?></span>
        </div>

        <div class="box-cont"> 
            <h3><?php echo  $item['title']; ?></h3> 
            <p class="desc"><?php echo  $item['description']; ?></p>                   
        
        </div>
        
    </div>
    
    <?php }; ?>
</div><!-- .work-process --> 
<?php }; ?>