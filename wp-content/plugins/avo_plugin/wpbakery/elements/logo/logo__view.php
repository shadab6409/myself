<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>
    <?php if(! empty ($logo_padding_top) ){ ?>
		#avo-logo-<?php echo $myuid; ?>.custom-logo a {padding-top: <?php echo $logo_padding_top ?>;}
    <?php }
    if(! empty ($logo_padding_right) ){ ?>
		#avo-logo-<?php echo $myuid; ?>.custom-logo a {padding-right: <?php echo $logo_padding_right ?>;}
    <?php }
    if(! empty ($logo_padding_bottom) ){ ?>
		#avo-logo-<?php echo $myuid; ?>.custom-logo a {padding-bottom: <?php echo $logo_padding_bottom ?>;}
    <?php }
    if(! empty ($logo_padding_left) ){ ?>
		#avo-logo-<?php echo $myuid; ?>.custom-logo a {padding-left: <?php echo $logo_padding_left ?>;}
    <?php }
    if(! empty ($logo_margin_top) ){ ?>
		#avo-logo-<?php echo $myuid; ?>.custom-logo a {margin-top: <?php echo $logo_pmargin_top ?>;}
    <?php }
    if(! empty ($logo_margin_right) ){ ?>
		#avo-logo-<?php echo $myuid; ?>.custom-logo a {margin-right: <?php echo $logo_margin_right ?>;}
    <?php }
    if(! empty ($logo_margin_bottom) ){ ?>
		#avo-logo-<?php echo $myuid; ?>.custom-logo a {margin-bottom: <?php echo $logo_margin_bottom ?>;}
    <?php }
    if(! empty ($logo_margin_left) ){ ?>
		#avo-logo-<?php echo $myuid; ?>.custom-logo a {margin-left: <?php echo $logo_margin_left ?>;}
    <?php }
    if(! empty ($align) ){ ?>
		#avo-logo-<?php echo $myuid; ?> {text-align: <?php echo $align ?>;}
    <?php } ?>
</style>

<?php
global $avo_theme_settings;
global $post;  
if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
    $logo_height= avo_option('avo_logo_dim');
    $logo_height = $logo_height['height'];
    $logo_height_css = 'height:'.$logo_height;
    $logo_height_style = !empty($logo_height_css) ? ' style='.$logo_height_css : ''; 

} else{$logo_height_style ="";}
?> 
    
<div id="avo-logo-<?php echo $myuid; ?>" class="custom-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img alt="<?php esc_attr_e ('Logo','avo'); ?>" class="custom-logo-light" <?php echo esc_html($logo_height_style); ?> src="<?php 
                if (class_exists('ReduxFrameworkPlugin')&& avo_option('avo_header_logo_dark') ) {
                    $avo_header_logo_dark = avo_option('avo_header_logo_dark');
                        if(is_array($avo_header_logo_dark))
                        $avo_header_logo_dark =  $avo_header_logo_dark['url'];
                    echo esc_url ( $avo_header_logo_dark); 
                } else { 
                    echo get_template_directory_uri(); ?>/images/logo.png <?php 
                } ?>"> 

            <img alt="<?php esc_attr_e ('Logo','avo'); ?>" class="custom-logo-dark" <?php echo esc_html($logo_height_style); ?> src="<?php 
                if ( class_exists('ReduxFrameworkPlugin')&& avo_option('avo_header_logo_white') ) {
                    $avo_header_logo_white = avo_option('avo_header_logo_white');
                        if(is_array($avo_header_logo_white))
                        $avo_header_logo_white =  $avo_header_logo_white['url']; 
                    echo esc_url ( $avo_header_logo_white); 
                } else { 
                    echo get_template_directory_uri(); ?>/images/logo-white.png <?php 
                } ?>">
    </a>
</div>