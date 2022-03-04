 
<div class="avo-title style-1 <?php echo $avo_rtl;?>">

	<?php if ( ! empty( $settings['title_1'] ) ) { ?>
    <div class="<?php echo  $settings['animation']; ?> sub-title">
        <h6><?php echo  $settings['title_1']; ?></h6>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <?php } ?>

    <?php if ( ! empty( $settings['title'] ) ) { ?>
    <h3 class="main-title " <?php if($avo_rtl==''){echo"data-splitting";} ?>><?php echo  $settings['title']; ?></h3>
    <?php } ?>
    <p class=" txt" <?php if($avo_rtl==''){echo"data-splitting";} ?>><?php echo  $settings['text']; ?></p>
	<?php if ( ! empty( $settings['link']['url'] ) ) { ?>
    <a href="<?php echo $settings['link']['url']; ?>" class="simple-btn custom-font mt-30 " <?php if($avo_rtl==''){echo"data-splitting";} ?>><span><?php echo $settings['btn_text']; ?></span></a>
	<?php } ?>
</div>