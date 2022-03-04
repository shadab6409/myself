<?php
namespace AvoPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.1.0
 */
class Avo_Logo extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'avo-logo';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Site Logo/Branding', 'avo_plg' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-logo';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'avo-menu-elements' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
	
		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Logo Settings', 'avo_plg' ),
			]
		);
	
		$this->add_responsive_control(
			'align',
			[
				'label' => __( 'Alignment', 'avo_plg' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'avo_plg' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'avo_plg' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'avo_plg' ),
						'icon' => 'fa fa-align-right',
					]
				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'logo_settings',
			[
				'label' => __( 'Logo Setting', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'logo_padding',
			[
				'label' => __( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .custom-logo a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'logo_margin',
			[
				'label' => __( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .custom-logo a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings(); 
		global $avo_theme_settings;
		global $post;  
		if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
			$logo_height= avo_option('avo_logo_dim');
			$logo_height = $logo_height['height'];
			$logo_height_css = 'height:'.$logo_height;
			$logo_height_style = !empty($logo_height_css) ? ' style='.$logo_height_css : ''; 

		} else{$logo_height_style ="";}
		?> 
		 
         <div class="custom-logo">
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
		
	<?php }

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function _content_template() { }
}


