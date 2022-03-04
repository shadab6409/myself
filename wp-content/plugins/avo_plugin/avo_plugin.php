<?php
/**
 * Plugin Name: Avo Theme Addons
 * Plugin URI: http://themeforest.net/user/themes_story
 * Description: This is plugin bundle for Avo WordPress Theme.
 * Author: themesCamp
 * Author URI: http://themeforest.net/user/themes_story
 * Version: 1.1.8
 */


function avo_mime_types( $mimes ) {
	
        // New allowed mime types.
        $mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
        $mimes['doc'] = 'application/msword'; 

        // Optional. Remove a mime type.
        unset( $mimes['exe'] );

	return $mimes;
}
add_filter( 'upload_mimes', 'avo_mime_types' );



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'AVO__FILE__', __FILE__ );
define( 'AVO_URL', plugins_url( '/', AVO__FILE__ ) );
define( 'AVO_PLUGIN_BASE', plugin_basename( AVO__FILE__ ) );


/**
 * Load Hello World
 *
 * Load the plugin after Elementor (and other plugins) are loaded.
 *
 * @since 1.0.0
 */
function avo_plg_load() {
	// Load localization file
	load_plugin_textdomain( 'avo_plg' );

	// Require the main plugin file 
	require( __DIR__ . '/plugin.php' );
	// require __DIR__ . '/modules/plugin.php';
	//require __DIR__ . '/control/animation.php';


}
add_action( 'plugins_loaded','avo_plg_load' );


function avo_plg_fail_load_out_of_date() {
	if ( ! current_user_can( 'update_plugins' ) ) {
		return;
	}

	$file_path = 'elementor/elementor.php';

	$upgrade_link = wp_nonce_url( self_admin_url( 'update.php?action=upgrade-plugin&plugin=' ) . $file_path, 'upgrade-plugin_' . $file_path );
	$message = '<p>' . __( 'Avo Plugin is not working because you are using an old version of Elementor.', 'avo_plg' ) . '</p>';
	$message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $upgrade_link, __( 'Update Elementor Now', 'avo_plg' ) ) . '</p>';

	echo '<div class="error">' . $message . '</div>';
}


//adding reduxoptions into themes
/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );
	/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );



//include elementor addon
include('inc/elementor-addon.php');

//include portfolio custom post type,metaboxes & single portfolio script
include('inc/portfolio.php');
include('inc/portfolio-metaboxes.php');

//include page metabox
include('inc/page-metaboxes.php');

//include post metabox
include('inc/post-metaboxes.php');
include('meta-box/meta-box.php');

//include custom footer
include('inc/footer.php');

//include custom header
include('inc/header.php');

//include side panel
include('inc/side-panel.php');

//include admin custom script 
include('inc/admin-script.php');

//include single portfolio function
include('inc/single-portfolio.php');



//included custom widget
include('inc/about-us.php');

//included recent posts widget
include('inc/recent-posts.php');

//included sharing
include('inc/sharebox.php');

//included one click importer
include('inc/one-click.php');

//included shortcode importer
include('inc/shortcode.php');

//included breadcrumbs
include('inc/breadcrumbs.php');

//included WPBakery Builder
include('wpbakery/wpbakery.php');

function avo_admin_styles() {
  wp_enqueue_style('admin-styles', AVO_URL.'inc/css/admin.css');
  wp_enqueue_style('avo-admin-wpbakery-styles', AVO_URL.'wpbakery/assets/css/wpbakery.css');
}
add_action('admin_enqueue_scripts', 'avo_admin_styles');


//plugin translation
function avo_textdomain_translation() {
    load_plugin_textdomain('avo_plg', false, dirname(plugin_basename(__FILE__)) . '/lang/');
} // end custom_theme_setup
add_action('after_setup_theme', 'avo_textdomain_translation');
