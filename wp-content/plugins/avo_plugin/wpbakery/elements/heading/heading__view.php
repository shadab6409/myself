
<?php
if ( $heading_style == 'style-1' ) : ?>

	<div class="avo-title style-1 <?php echo $rtl;?>">

		<?php if ( ! empty( $title_1 ) ) { ?>
		<div class="<?php echo  $animation; ?> sub-title">
			<h6><?php echo  $title_1; ?></h6>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<?php } ?>

		<?php if ( ! empty( $title ) ) { ?>
		<h3 class="main-title wow" <?php if($rtl=='no'){echo"data-splitting";} ?>><?php echo  $title; ?></h3>
		<?php } ?>
		<p class="wow txt" <?php if($rtl=='no'){echo"data-splitting";} ?>><?php echo  $text ?></p>
		<?php if ( ! empty( $link ) ) { ?>
		<a href="<?php echo $link; ?>" class="simple-btn custom-font mt-30 wow" <?php if($rtl=='no'){echo"data-splitting";} ?>><span><?php echo $btn_text; ?></span></a>
		<?php } ?>
	</div>
<?php endif; ?>

<?php if ( $heading_style == 'style-2' ) : ?>
<div class="avo-title style-2 <?php echo $rtl;?>">
	<h2 class=" <?php echo  $animation; ?> custom-font" <?php if($rtl=='no'){echo"data-splitting";} ?>><?php echo  $title_1; ?> <b><?php echo  $title_2; ?></b>.</h2>
</div>
<?php endif; ?>

<?php if ( $heading_style == 'style-3' ) : ?>
	<div class="avo-header style-3 <?php echo $rtl;?> <?php if($fixed_pos == 'yes') {echo 'avo-header-fixed';}?> <?php if($dis_top == 'yes') {echo 'avo-header-dis-top';}?>">
    <div class="works-header fixed-slider valign">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 static">
                    <div class="capt mt-50">
                        <div class="<?php echo $parlx;?>">
                            <h2 class="custom-font"><span><?php echo  $title_1; ?></span><?php echo  $title_2; ?></h2>
                            <p><?php echo  $text; ?></p>
                        </div>

                        <div class="bactxt custom-font valign">
                            <span class="full-width"><?php echo  $title; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ( $heading_style == 'style-4' ) :
// Image
if ( $image ) {
	$image = wp_get_attachment_image_src( $image, 'full' );
	if ( is_array( $image ) ) {
		$image = $image[0];
	}
} ?>
<div class="avo-header style-4">
    <div class="pages-header bg-img valign parallaxie" data-background="<?php echo esc_url ($image ); ?>" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1><?php echo  $title; ?></h1>
                        <div class="path">
                            <?php echo avo_breadcrumbs(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ( $heading_style == 'style-5' ) : ?>
<div class="avo-header style-5 <?php echo 'text-'.$align_title;?>">
    <div class="sec-head custom-font">
        <h6 class="custom-font"><?php echo  $title_1; ?></h6>
        <h3 class="custom-font"><?php echo  $title_2; ?></h3>
        <span class="tbg <?php echo 'text-'.$align_header;?>"><?php echo  $title; ?></span>
    </div>
</div>
<?php endif; ?> 



