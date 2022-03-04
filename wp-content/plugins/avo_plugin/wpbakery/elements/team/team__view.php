<?php

$team_icon = (array) vc_param_group_parse_atts( $team_icon );
$team_list = (array) vc_param_group_parse_atts( $team_list );

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>

<style>

    <?php if(! empty ($team_height) ){ ?>
		#avo-team-<?php echo $myuid; ?> .port-box {padding: <?php echo $team_height ?>px 0;}
	<?php } ?>

</style>

<?php if ($team_style == 'style-1') { 

// Image
if ( $image ) {
    $image = wp_get_attachment_image_src( $image, 'full' );
    if ( is_array( $image ) ) {
        $image = $image[0];
    }
} ?>

<div id="avo-team-<?php echo $myuid; ?>" class="clearfix team-1">
    <div class="port-inner">
        <div class="port-box"></div>
        <div class="port-img width-img img-bg" style="background-image:url(<?php echo esc_url ($image); ?>);"></div>
        <div class="img-mask"></div>
        <div class="port-dbox">
            <div class="dbox-relative">
                
                <ul class="team-sicon">
                    <?php foreach ( $team_icon as $key => $item ) : ?>
                    <li>
                        <a href="<?php echo esc_html($item['link']) ?>">
                            <i class="<?php echo esc_attr ( $item['icon']); ?>"></i>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    
                </ul>
                
            </div>
        </div>
    </div>
    <div class="team-info">
        <h5><?php echo $title; ?></h5>
        <p><?php echo $text; ?></p>
    </div>
</div>
<?php }; ?>

<?php if ($team_style == 'style-2') { 
    
// Image
if ( $image ) {
    $image = wp_get_attachment_image_src( $image, 'full' );
    if ( is_array( $image ) ) {
        $image = $image[0];
    }
} ?>

<div id="avo-team-<?php echo $myuid; ?>" class="clearfix team-2">
    <div class="port-inner">
        <div class="port-box"></div>
        <div class="port-img width-img img-bg" style="background-image:url(<?php echo esc_url ($image); ?>);"></div>
        <div class="img-mask"></div>
        <div class="port-dbox">
            <div class="dbox-relative">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $text; ?></p>
                <ul class="team-sicon">
                    <?php foreach ( $team_icon as $key => $item ) : ?>
                    <li>
                        <a href="<?php echo esc_html($item['link']) ?>">
                            <i class="<?php echo esc_attr ( $item['icon']); ?>"></i>
                        </a>
                    </li>
                    <?php endforeach; ?>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<?php }; ?>

<?php if ($team_style == 'style-3') {  
    
// Image
if ( $image ) {
    $image = wp_get_attachment_image_src( $image, 'full' );
    if ( is_array( $image ) ) {
        $image = $image[0];
    }
} ?>

<div id="avo-team-<?php echo $myuid; ?>" class="clearfix team-3">
    <div class="port-inner">
        <div class="port-box"></div>
        <div class="port-img width-img img-bg" style="background-image:url(<?php echo esc_url ($image); ?>);"></div>
        <div class="img-mask"></div>
    </div>
    <div class="team-info">
        <h5><?php echo $title; ?></h5>
        <p><?php echo $text; ?></p>
        <ul class="team-sicon">
            <?php foreach ( $team_icon as $key => $item ) : ?>
            <li>
                <a href="<?php echo esc_html($item['link']) ?>">
                    <i class="<?php echo esc_attr ( $item['icon']); ?>"></i>
                </a>
            </li>
            <?php endforeach; ?>
            
        </ul>
    </div>
</div>
<?php }; ?>

<?php if ($team_style == 'style-4') { ?>
<div id="avo-team-<?php echo $myuid; ?>" class="avo-team style-4">
    <div class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 valign">
                    <div class="full-width">
                        <div class="sec-head custom-font mb-0">
                            <h6><?php echo $title; ?></h6>
                            <h3><?php echo $text; ?></h3>
                        </div>
                        <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                            <span class="prev cursor-pointer">
                                <i class="fa fa-chevron-left"></i>
                            </span>
                            <span class="next cursor-pointer">
                                <i class="fa fa-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-container">
                        <?php foreach ( $team_list as $key => $item ) : ?>
                        <?php 
                            // Image
                            if(!empty($item['team_list_image'])){
                                $imgSrcset = '';
                                $imgSizes = '';
                                if(is_string($item['team_list_image'])&&substr( $item['team_list_image'], 0, 4 ) === "http"){
                                    $imgSrc = $item['team_list_image'];
                                }else{
                                    
                                        $img = wp_get_attachment_image_src($item['team_list_image'], "full");
                                        $imgSrcset = wp_get_attachment_image_srcset($item['team_list_image']);
                                        $imgSizes = wp_get_attachment_image_sizes($item['team_list_image'], "full");
                                    
                                    $imgSrc = $img[0];
                                }
                            }
                        ?>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="<?php echo esc_url ( $imgSrc ); ?>" alt="img">
                            </div>
                            <div class="info">
                                <h5><?php echo  $item['team_list_title']; ?></h5>
                                <span><?php echo  $item['position']; ?></span>
                                <div class="social">
                                    <?php if ( ! empty( $item['Social_1_link'])):?>
                                        <a href="<?php echo esc_url( $item['Social_1_link']); ?>"><i class="<?php echo $item['Social_1'] ?>"></i></a> 
                                    <?php endif; ?>
                                    
                                    <?php if ( ! empty( $item['Social_2_link'])):?>
                                    <a href="<?php echo esc_url( $item['Social_2_link']); ?>"><i class="<?php echo $item['Social_2'] ?>"></i></a>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $item['Social_3_link'])):?>
                                    <a href="<?php echo esc_url( $item['Social_3_link']); ?>"><i class="<?php echo $item['Social_3'] ?>"></i></a>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $item['Social_4_link'])):?>
                                    <a href="<?php echo esc_url( $item['Social_4_link']); ?>"><i class="<?php echo $item['Social_4'] ?>"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }; ?>