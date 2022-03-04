<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>
	<?php

    if(! empty ($content_align) ){ ?>
        #avo-offcanvas-<?php echo $myuid; ?>.avo-offcanvas {text-align: <?php echo $content_align ?>;}
    <?php }
    if(! empty ($image_size) ){ ?>
        #avo-offcanvas-<?php echo $myuid; ?> .elementor .img-box img {width: <?php echo $image_size ?>%;}
    <?php }

    ?>
</style>

<?php if ($offcanvas_style == 'style-1') { ?>
    <div id="avo-offcanvas-<?php echo $myuid; ?>" class="header-offcanvas-icon hidden-xs hidden-sm">
        <a class="offcanvas"  href="#">
            <i class="<?php echo $avo_offcanvas_icons ?>"></i>
        </a>
    </div>
<?php }; ?>

<?php if ($offcanvas_style == 'style-2') { ?>
    <div id="avo-offcanvas-<?php echo $myuid; ?>" class="avo-offcanvas style-2">
        <div class="menu-icon">
            <span class="icon">
                <i></i>
                <i></i> 
            </span>
            <span class="text o" data-splitting><?php echo $title; ?></span>
            <span class="text c" data-splitting><?php echo $subtitle; ?></span>
        </div>
    </div>
<?php }; ?>