<?php

if ( $counter_style == 'style-1' ) : ?>
	<div class="avo-counter style-1 <?php if($dark_mode == 'no') echo 'white-mode' ?>">
	    <div class="item <?php echo $counter_border.'-bord';?>">
	        <span class="icon">
	            <i class="<?php echo $icon_as_icon; ?>"></i>
	        </span>
	        <h3 class="custom-font"><span class="count counter" data-num="<?php echo  $number; ?>" data-avospeed="<?php echo  $speed; ?>" data-avosteps="<?php echo  $steps; ?>"> <?php echo  $number; ?></span><span class="suffix"><?php echo  $suffix; ?></span></h3>
	        <p class="wow txt" <?php if ($splitting == 'yes') echo 'data-splitting'?>><?php echo  $title; ?></p>
	    </div>
	</div>
<?php endif; ?>
