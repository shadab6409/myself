<?php

/**
* WPBakery Page Builder Avo image shortcode view 
*/

?> 

<?php 

if ( $image_Style == 'Style-2' ) : ?>
	<div class="avo-image style-2 <?php if ( ! empty( $title ) ) { echo 'avo-tooltip';}?>  ">
		    <div class="img2 imago wow" data-tooltip-tit="<?php echo $title; ?>" data-tooltip-sub="<?php echo  $subtitle; ?>">
		        <img src="<?php echo esc_url( $icon_as_image ); ?>" alt="<?php echo  $title; ?>" class="imago wow" style="height:<?php echo  $image_height; ?>;width:<?php echo  $image_width; ?>;">
		    </div> 
		    <div class="div-tooltip-tit"><?php echo  $title; ?></div>
	</div>
<?php endif; ?>