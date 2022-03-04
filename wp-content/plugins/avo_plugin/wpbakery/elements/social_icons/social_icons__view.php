<?php 

$social_icon_list = (array) vc_param_group_parse_atts( $social_icon_list ); 

$myuid = uniqid('avo');

?>

<style>
    <?php if(! empty ($icon_background_color) ){ ?>
        #avo-social-<?php echo $myuid; ?>.avo_social_icons .social_icon a {
            background-color: <?php echo ($icon_background_color) ?>;
        }
    <?php }
    if(! empty ($icon_background_color_hover) ){ ?>
        #avo-social-<?php echo $myuid; ?>.avo_social_icons .social_icon a:hover {
            background-color: <?php echo ($icon_background_color_hover) ?>;
        }
    <?php }
    if(! empty ($icon_color) ){ ?>
        #avo-social-<?php echo $myuid; ?>.avo_social_icons .social_icon a i {
            color: <?php echo ($icon_color) ?>;
        }
    <?php }
    if(! empty ($left) ){ ?>
        #avo-social-<?php echo $myuid; ?> {
            left: <?php echo ($left) ?>;
        }
    <?php }
    if(! empty ($bottom) ){ ?>
        #avo-social-<?php echo $myuid; ?> {
            bottom: <?php echo ($bottom) ?>;
        }
    <?php }
    if(! empty ($icon_border_color) ){ ?>
        #avo-social-<?php echo $myuid; ?>.avo_social_icons .social_icon a {
            border: solid 1px <?php echo ($icon_border_color) ?>;
        }
    <?php }
    if(! empty ($icon_border_color_hover) ){ ?>
        #avo-social-<?php echo $myuid; ?>.avo_social_icons .social_icon a:hover {
            border: solid 1px <?php echo ($icon_border_color_hover) ?>;
        }
    <?php }
    if( ! empty ($icon_pos) ){ ?>
        #avo-social-<?php echo $myuid; ?> {
            position: <?php echo $icon_pos ?>;
        }
    <?php }
    if( ! empty ($icon_index) ){ ?>
        #avo-social-<?php echo $myuid; ?> {
            z-index: <?php echo $icon_index ?>;
        }
    <?php }
    if(! empty ($icon_color_hover) ){ ?>
        #avo-social-<?php echo $myuid; ?>.avo_social_icons .social_icon a:hover i:hover {
            color: <?php echo ($icon_color_hover) ?>;
        }
    <?php } ?>
</style>

<div id="avo-social-<?php echo $myuid; ?>" class="avo_social_icons">
    <?php
    foreach ( $social_icon_list as $key => $item ) { ?>
        <div class="social_icon">
            <a class=" <?php echo $css_class; ?>" href="<?php echo esc_url($item['link']) ?>" target="_blank" >
                <i class="<?php echo esc_attr( $item['avo_social_icon'] ); ?>"></i>
            </a>
        </div>
    <?php } ?>
</div>