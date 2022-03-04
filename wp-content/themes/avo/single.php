<?php

get_header(); 

/*--Start custom header--*/
if ( class_exists('ReduxFrameworkPlugin') ) { 
	do_action('avo-custom-header','avo_header_start') ;        
} else { ?>

	<div class="default-header clearfix">
		<?php get_template_part( 'inc/menu','normal'); ?>
	</div><!--  End home  -->

<?php } 

//custom post

	if ( class_exists('ReduxFrameworkPlugin')) { 
		$style = avo_option( 'avo_single_type_layout' );
		get_template_part('templates/post/post', $style);
	} else {
		//Fall back if no reduxoptions instalavo 
		get_template_part('templates/post/post','2'); 
	}  

//custom footer
	if ( class_exists('ReduxFrameworkPlugin') ) { 
		do_action('avo-custom-footer','avo_footer_start');
	} else {
		//Fall back if no reduxoptions instalavo 
		get_template_part( 'inc/bottom','footer'); 
	}  

get_footer(); ?>