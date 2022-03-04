<?php

/**
* WPBakery Page Builder Avo info_box shortcode view 
*/

?> 

<?php 

if ( $info_box_Style == 'Style-6' ) : ?>
	<div class="info-box style-6">
		<div>
			<div class="icon">
	    		<i class="<?php echo $icon_as_icon; ?>"></i>
	    	</div>
		</div>
		<h6 class="custom-font"><?php echo  $title; ?></h6>
		<div class="dots">
			<span></span>
			<span></span>
			<span></span>
		</div> 
	</div>
<?php endif; ?>