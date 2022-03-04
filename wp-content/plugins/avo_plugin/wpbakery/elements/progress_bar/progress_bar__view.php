<?php 

$myuid = uniqid('avo');

?>

<style>
    <?php if(! empty ($progress_bgcolor) ){ ?>
        #avo-progress-bar-<?php echo $myuid; ?>.avo-progress-bar .skills-box .skill-progress {
            background-color: <?php echo ($progress_bgcolor) ?>;
        }
    <?php }
    if(! empty ($progress_fgcolor) ){ ?>
        #avo-progress-bar-<?php echo $myuid; ?>.avo-progress-bar .skills-box .skill-progress .progres {
            background-color: <?php echo ($progress_fgcolor) ?>;
        }
        #avo-progress-bar-<?php echo $myuid; ?>.avo-progress-bar .skills-box .skill-progress .progres:after {
            background-color: <?php echo ($progress_fgcolor) ?>;
        }
        #avo-progress-bar-<?php echo $myuid; ?>.avo-progress-bar .skills-box .skill-progress .progres:before {
            border-top-color: <?php echo ($progress_fgcolor) ?>;
        }
    <?php } ?>
</style>

<?php if ($progress_bar_style == 'style-1') { ?>

<div id="avo-progress-bar-<?php echo $myuid; ?>" class="avo-progress-bar style-1 <?php echo 'mode-'.$progress_bar_mode;?> <?php if($rtl == 'yes') {echo ' rtl';} ?> <?php echo $css_class; ?>">
	<div class="skills-box full-width">
	    <div class="skill-item">
	        <h6 class="custom-font"><?php echo  $title; ?></h6>
	        <div class="skill-progress">
	            <div class="progres custom-font" data-value="<?php echo esc_attr( $percentage );?>%"></div>
	        </div>
	    </div>
	</div>
</div>
<?php }; ?>

<?php if ($progress_bar_style == 'style-2') { ?>
<div id="avo-progress-bar-<?php echo $myuid; ?>" class="avo-progress-bar style-1 <?php echo $css_class; ?>">
	<div class="skills-box full-width">
	    <div class="skill-item">
	        <h6 class="custom-font"><?php echo  $title; ?></h6>
	        <div class="skill-progress">
	            <div class="progres custom-font" data-value="<?php echo esc_attr( $percentage );?>%"></div>
	        </div>
	    </div>
	</div>
</div>
<?php }; ?>