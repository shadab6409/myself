<?php if ($skills_style == 'style-1') : ?>
<div class="skills style-1 progress-circular-layout circle-light <?php echo 'mode-'.$avo_mode;?>">
    <div class="item">
        <div class="skill progress-circular">
            <div ><input type="text" class="knob knob-percent dial custom-font" value="0" data-max="100" data-rel="<?php echo  $progress_num; ?>" data-linecap="solid" data-width="<?php echo  $progress_width; ?>" data-height="<?php echo  $progress_height; ?>" data-bgcolor="<?php echo  $progress_bgcolor; ?>" data-fgcolor="<?php echo  $progress_fgcolor; ?>" data-thickness="<?php echo  $progress_thickness; ?>" data-readonly="true" data-speed="<?php echo  $progress_speed; ?>" data-steps="<?php echo  $progress_steps; ?>" disabled></div>
        </div>
        <div class="cont">
            <span><?php echo  $progress_title ?></span>
            <h6><?php echo  $progress_subtitle ?></h6>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ($skills_style == 'style-2') : ?>

<?php endif; ?>