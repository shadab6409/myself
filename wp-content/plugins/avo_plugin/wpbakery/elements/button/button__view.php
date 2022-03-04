<?php if($button_style == 'style-1') : ?>
<a href="<?php echo esc_url( $link ) ?>" class="button style-1 btn-lit <?php echo 'mode-'.$avo_mode;?>" data-wow-delay=".5s">
    <span><?php echo  $btn_text ?></span>
</a>
<?php endif; ?>

<?php if($button_style == 'style-2') : ?>
<div class="button style-2"> 
    <div class="vid-icon">
        <a class="vid" href="<?php echo esc_url( $link ) ?>">
            <div class="vid-butn">
                <span class="icon">
                    <i class="<?php echo $avo_info_icons; ?>"></i>
                </span>
            </div>
        </a>
    </div>
</div>
<?php endif; ?>

<?php if($button_style == 'style-3') : ?>
<div class="button style-3"> 
    <a target="_blank" class="purchase-theme btn vc_hidden-xs visible" href="<?php echo esc_url( $link ); ?>">
        <i class="icon">
            <img loading="lazy" src="https://colabrio.ams3.cdn.digitaloceanspaces.com/stockie/st__envato.svg" alt="envato icon">
        </i><?php echo  $btn_text ?>
    </a>
</div>
<?php endif; ?>

<?php if($button_style == 'style-4') { $myuid = uniqid('avo'); ?>
    <style>#avo-button4-<?php echo $myuid; ?>.button.style-4 a { color: <?php echo $btn_txt_color ?>; background-color: <?php echo $btn_color ?>; border-color: <?php echo $btn_border_color ?>;}#avo-button4-<?php echo $myuid; ?>.button.style-4 a:hover { color:  <?php echo $btn_txt_color_hover ?>; background-color: <?php echo $btn_color_hover ?>;border-color: <?php echo $btn_border_color_hover ?>;}</style>
    <div id="avo-button4-<?php echo $myuid; ?>" class="button style-4">
        <a href="<?php echo esc_url( $link ) ?>" role="button">
            <span class="elementor-button-content-wrapper">
                <span class="button-text"><?php echo  $btn_text ?></span>
            </span>
        </a>
    </div>
<?php }; ?>