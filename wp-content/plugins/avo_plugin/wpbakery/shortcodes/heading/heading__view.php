<?php

/**
* WPBakery Page Builder Avo Heading shortcode view 
*/

?> 

<?php 

//if ( $header_Style == 'Style-1' ) : ?>
	<div class="avo-title style-1">

	    <div class="sub-title">
	        <h6><?php echo $title_1; ?></h6>
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
	    <h3 class="main-title wow"><?php echo  $title; ?></h3>
	    <p class="wow txt"><?php echo  $text; ?></p> 
	    <?php if ( ! empty( $btn_text ) ) : ?>
	    <a href="<?php echo $link; ?>" class="simple-btn custom-font mt-30 wow"><span><?php echo $btn_text; ?></span></a>
	    <?php endif; ?>
	</div>
<?php// endif; ?>