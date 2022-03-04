<?php 

$shortcode =  rawurldecode( base64_decode( $shortcode ) );

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>

<style>
    <?php if(! empty ($form_placeholder) ){ ?>
        #avo-contact-<?php echo $myuid; ?> ::-webkit-input-placeholder {color: <?php echo $form_placeholder ?>;}
        #avo-contact-<?php echo $myuid; ?> ::-moz-placeholder {color: <?php echo $form_placeholder ?>;}
        #avo-contact-<?php echo $myuid; ?> :-ms-input-placeholder {color: <?php echo $form_placeholder ?>;}
        #avo-contact-<?php echo $myuid; ?> :-moz-placeholder {color: <?php echo $form_placeholder ?>;}
    <?php } ?>
    <?php if(! empty ($form_text) ){ ?>
        #avo-contact-<?php echo $myuid; ?> input:not(.wpcf7-submit) {color: <?php echo $form_text ?>;}
        #avo-contact-<?php echo $myuid; ?> textarea {color: <?php echo $form_text ?>;}
    <?php } ?>
    <?php if(! empty ($form_bg) ){ ?>
        #avo-contact-<?php echo $myuid; ?> input {background-color: <?php echo $form_bg ?>;}
        #avo-contact-<?php echo $myuid; ?> textarea {background-color: <?php echo $form_bg ?>;}
    <?php } ?>
    <?php if(! empty ($form_border_color) ){ ?>
        #avo-contact-<?php echo $myuid; ?> input {border-color: <?php echo $form_border_color ?>;}
        #avo-contact-<?php echo $myuid; ?> textarea {border-color: <?php echo $form_border_color ?>;}
    <?php } ?>
    <?php if(! empty ($form_border_color_active) ){ ?>
        #avo-contact-<?php echo $myuid; ?> input:focus {border-color: <?php echo $form_border_color_active ?>;}
        #avo-contact-<?php echo $myuid; ?> textarea:focus {border-color: <?php echo $form_border_color_active ?>;}
    <?php } ?>
    <?php if(! empty ($btn_typography_size) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {font-size: <?php echo $btn_typography_size ?>px;}
    <?php } ?>
    <?php if(! empty ($btn_margin_top) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {margin-top: <?php echo $btn_margin_top ?>;}
    <?php } ?>
    <?php if(! empty ($btn_margin_right) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {margin-right: <?php echo $btn_margin_right ?>;}
    <?php } ?>
    <?php if(! empty ($btn_margin_bottom) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {margin-bottom: <?php echo $btn_margin_bottom ?>;}
    <?php } ?>
    <?php if(! empty ($btn_margin_left) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {margin-left: <?php echo $btn_margin_left ?>;}
    <?php } ?>
    <?php if(! empty ($btn_padding_top) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {padding-top: <?php echo $btn_padding_top ?>;}
    <?php } ?>
    <?php if(! empty ($btn_padding_right) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {padding-right: <?php echo $btn_padding_right ?>;}
    <?php } ?>
    <?php if(! empty ($btn_padding_bottom) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {padding-bottom: <?php echo $btn_padding_bottom ?>;}
    <?php } ?>
    <?php if(! empty ($btn_padding_left) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {padding-left: <?php echo $btn_padding_left ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_radius_top) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-top-left-radius: <?php echo $btn_border_radius_top ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_radius_right) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-top-right-radius: <?php echo $btn_border_radius_right ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_radius_bottom) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-bottom-right-radius: <?php echo $btn_border_radius_bottom ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_radius_left) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-bottom-left-radius: <?php echo $btn_border_radius_left ?>;}
    <?php } ?>
    <?php if(! empty ($btn_color) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {color: <?php echo $btn_color ?>;}
    <?php } ?>
    <?php if(! empty ($btn_color_hover) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit:hover {color: <?php echo $btn_color_hover ?>;}
    <?php } ?>
    <?php if(! empty ($btn_bg) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {background-color: <?php echo $btn_bg ?>;}
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit::before {background-color: <?php echo $btn_bg ?>;}
    <?php } ?>
    <?php if(! empty ($btn_bg_hover) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit:hover {background-color: <?php echo $btn_bg_hover ?>;}
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit::after {background-color: <?php echo $btn_bg_hover ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_top) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-top-width: <?php echo $btn_border_top ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_right) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-right-width: <?php echo $btn_border_right ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_bottom) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-bottom-width: <?php echo $btn_border_bottom ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_left) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-left-width: <?php echo $btn_border_left ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_hover_top) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-top-width: <?php echo $btn_border_hover_top ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_hover_right) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-right-width: <?php echo $btn_bobtn_border_hover_rightrder_right ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_hover_bottom) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-bottom-width: <?php echo $btn_border_hover_bottom ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_hover_left) ){ ?>
		#avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-left-width: <?php echo $btn_border_hover_left ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_color) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit {border-color: <?php echo $btn_border_color ?>;}
    <?php } ?>
    <?php if(! empty ($btn_border_color_hover) ){ ?>
        #avo-contact-<?php echo $myuid; ?> .wpcf7-submit:hover {border-color: <?php echo $btn_border_color_hover ?>;}
    <?php } ?>
</style>

<?php if ($contact_style == 'style-1') { ?>
    <div class="avo-contact-shortcode style-1 "><?php echo do_shortcode( $shortcode );  ?></div>
<?php }; ?>

<?php if ($contact_style == 'style-2') { ?>
    <div class="avo-contact-shortcode style-2 <?php echo 'mode-'.$avo_mode;?>"><?php echo do_shortcode( $shortcode ); ?></div>
<?php }; ?>