<?php


/* ---------------------------------------------------------------------------
 * Post List
* --------------------------------------------------------------------------- */
if( ! function_exists( 'avo_post_list_func' ) )
{
	function avo_post_list_func( $attr, $content = null )
	{
		extract(shortcode_atts(array(
            'post_list_style'			      => 'style-1',
            'avo_mode'			            => '1',
            'rtl'			    	            => 'yes',
            'blog_post'					=> '6',
            'sort_cat'				      => 'yes',
            'blog_cat'				      => '',
            'paged_on'				      => 'yes',
            'show_excerpt'				=> 'yes',
            'avo_excerpt'				=> '150',
            'excerpt_after'				=> '...',
            'blog_column'				=> 'one',
            'image'			        	=> 'yes',
            'meta_button_show'			=> 'yes',
            'button_show'				=> 'yes',
            'button'				      => 'Read More',
            'icon'			        	=> '',
            'icon_align'				=> 'left',
            'icon_indent'				=> '',
            'meta_show'			    	      => 'yes',
            'cat_show'			    	      => 'yes',
            'tag_icon'				      => '',
            'page_show'			    	      => 'yes',
		), $attr));

		ob_start();
		include( plugin_dir_path( __FILE__ ) . 'post_list__view.php' );
		return ob_get_clean();
	}
}

add_shortcode( 'avo_post_list', 'avo_post_list_func' );

?>
