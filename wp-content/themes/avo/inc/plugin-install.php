<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detaiavo documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.5.2
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once  (get_template_directory()  . '/inc/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'avo_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function avo_theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository
		array(
			'name'      => esc_html__( 'Elementor Page Builder', 'avo' ),
			'slug'      => 'elementor',
			'required'  => true,
		),
		array(
			'name'               => esc_html__( 'Revolution Slider', 'avo' ),
			'slug'               => 'revslider', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/inc/plugins/revslider.zip',
			'version'            => '6.5.11',
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false
		),
		array(
			'name'               => esc_html__( 'WPBakery Visual Composer', 'avo' ),
			'slug'               => 'js_composer', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/inc/plugins/js_composer.zip',
			'version'            => '6.7.0',
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false
		),
		array(
			'name'      => esc_html__( 'Redux framework', 'avo' ), 
			'slug'      => 'redux-framework',
			'required'  => true,
		),

		array(
			'name'      => esc_html__( 'Better Elementor Addons', 'avo' ), 
			'slug'      => 'better-elementor-addons',
			'required'  => true, 
		),
		array(
			'name'      => esc_html__( 'Contact Form 7', 'avo' ),
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
		array(
			'name'      => esc_html__( 'MailChimp for WordPress', 'avo' ),
			'slug'      => 'mailchimp-for-wp',
			'required'  => false,
		), 
		array(
			'name'      => esc_html__( 'WooCommerce', 'avo' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => esc_html__( 'One Click Demo Import', 'avo' ),
			'slug'      => 'one-click-demo-import',
			'required'  => true,
		),
		array(
			'name'               => esc_html__( 'Avo Theme Core', 'avo' ),
			'slug'               => 'avo_plugin',
			'source'             => get_template_directory() . '/inc/plugins/avo_plugin.zip',
			'version'            => '1.1.8', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'required'           => true,
			'force_activation'   => false,// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false,// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

			'external_url'          => '', // If set, overrides default API URL and points to an external URL
		),
		array(
			'name'     => esc_html__( 'Envato Market','avo'),
			'slug'     => 'envato-market',
			'source'   => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
			'required' => false
		)

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundavo plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.	
	);

	tgmpa( $plugins, $config );
}
