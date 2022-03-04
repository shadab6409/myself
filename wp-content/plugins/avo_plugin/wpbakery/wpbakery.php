<?php
// VC shortcodes 
add_action( 'vc_before_init', 'avo_extra_vc_init_plugin' ); 
function avo_extra_vc_init_plugin() {
	$shortcodes_path = plugin_dir_path( __FILE__ ) . 'shortcodes/';
	$types_path 	= plugin_dir_path( __FILE__ ) . 'types/';
	$elements_path 	= plugin_dir_path( __FILE__ ) . 'elements/';


	// VC param types
	require_once $types_path . 'icon_picker.php'; // Extended icon picker 
	require_once $types_path . 'layout.php'; 

    // VC Elements
    $dh = opendir( $elements_path );
    while ( false !== ( $filename = readdir( $dh ) ) ) {
      if ( substr( $filename, 0, 1) != '_' && strrpos( $filename, '.' ) === false ) {
        include_once $elements_path . $filename . '/' . $filename . '.php';
        include_once $elements_path . $filename . '/' . $filename . '__params.php';
      }
    }

} 

add_action('wp_enqueue_scripts','avo_element_scripts');
function avo_element_scripts(){
  wp_enqueue_script('jquery-swiper', AVO_URL . 'assets/js/swiper.min.js',array('jquery'), null, true  );
  wp_enqueue_script('jquery-slider', AVO_URL . 'widgets/js/slider.js',array('jquery'), null, true  );
  wp_enqueue_script('jquery-slick', AVO_URL . 'widgets/js/slick.min.js',array('jquery'), null, true  );
  wp_enqueue_script('avo-animation', AVO_URL . 'widgets/js/slick-animation.js',array('jquery'), null, true  );
  wp_enqueue_script('avo-testimonial', AVO_URL . 'widgets/js/testimonial.js',array('jquery'), null, true  );
  wp_enqueue_script('avo-post-list',AVO_URL .'widgets/js/post-list.js', array('jquery'), null, true  ); 
  wp_enqueue_script('avo-countdown',AVO_URL . 'widgets/js/jquery.countdown.min.js', array('jquery'), null, true );
  wp_enqueue_script('avo-imgbox-slider',AVO_URL . 'widgets/js/imgbox-slider.js', array('jquery'), null, true );
  wp_enqueue_script('avo-work-process',AVO_URL . 'widgets/js/work-process.js', array('jquery'), null, true );
  wp_enqueue_script('font-awesome-4-shim',AVO_URL . 'assets/lib/font-awesome/js/v4-shims.js', array('jquery'), null, true );
  wp_enqueue_script('font-awesome-kit',AVO_URL . 'assets/lib/font-awesome/js/font-awesome-kit.js', array('jquery'), null, true );
  
  wp_enqueue_script('avo-element-scripts', AVO_URL . 'wpbakery/assets/js/elements.js', array('jquery'), null, true );


  wp_enqueue_style ('font-awesome-4-shim', AVO_URL .'assets/lib/font-awesome/css/v4-shims.css', array(), null, 'all' ); 
  wp_enqueue_style ('swiper-style', AVO_URL .'assets/css/swiper.min.css', array(), null, 'all' ); 
  wp_enqueue_style ('wpbakery-elemests-style', AVO_URL .'wpbakery/elements/css/elements.css', array(), null, 'all' ); 
}


// VC templates
function avo_set_vc_as_theme() {

  // Setup VC to be part of a theme
  if( function_exists('vc_set_as_theme') ){
    vc_set_as_theme( true );
  }

  $child_dir = plugin_dir_path(dirname(__FILE__)) . 'wpbakery/vc_templates';
  // $parent_dir = $template_directory . '/functions/pix-vc/vc_templates';

  // Link your VC elements's folder
  if( function_exists('vc_set_shortcodes_templates_dir') ){
    vc_set_shortcodes_templates_dir( $child_dir );
  }

  // Disable Instructional/Help Pointers
  if( function_exists('vc_pointer_load') ){
    remove_action( 'admin_enqueue_scripts', 'vc_pointer_load' );
  }

}

add_action('vc_before_init', 'avo_set_vc_as_theme');


if ( ! function_exists( 'avo_vc_fonts' ) ) {
  function avo_vc_fonts( $fonts_list ) {
      $barlow_condensed->font_family = 'Barlow Condensed';
      $barlow_condensed->font_types = '300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal';
      $barlow_condensed->font_styles = 'regular';
      $barlow_condensed->font_family_description = esc_html_e( 'Select font family', 'avo_plg' );
      $barlow_condensed->font_style_description = esc_html_e( 'Select font styling', 'avo_plg' );
      $fonts_list[] = $barlow_condensed;
      $cormorant_garamond->font_family = 'Cormorant Garamond';
      $cormorant_garamond->font_types = '300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal';
      $cormorant_garamond->font_styles = 'regular';
      $cormorant_garamond->font_family_description = esc_html_e( 'Select font family', 'avo_plg' );
      $cormorant_garamond->font_style_description = esc_html_e( 'Select font styling', 'avo_plg' );
      $fonts_list[] = $cormorant_garamond;

      return $fonts_list;
  }
}
add_filter('vc_google_fonts_get_fonts_filter', 'avo_vc_fonts');