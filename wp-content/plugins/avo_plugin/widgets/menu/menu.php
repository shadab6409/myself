<?php
namespace AvoPlugin\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.1.0
 */
class Avo_Menu extends Widget_Base {

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
		return 'avo-menu';
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
		return __( 'Avo Menu', 'avo_plg' );
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
		return 'fa fa-th-large';
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
				'label' => __( 'Menu to Display', 'avo_plg' ),
			]
		);

		$this->add_control(
			'avo_menu',
			[
				'label'   => __( 'Select Menu', 'avo_plg' ),
				'type'    => Controls_Manager::SELECT, 'options' => avo_navmenu_navbar_menu_choices(),
				'default' => '',
			]
		);

		$this->add_control(
			'menu_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Style 1', 'avo_plg' ),
					'2' => __( 'Style 2', 'avo_plg' ),
					'3' => __( 'Style 3', 'avo_plg' ),
					'4' => __( 'Style 4', 'avo_plg' ),
				],
				'default' => '1',
			]
		);
		
		
		$this->add_control(
			'menu_sticky',
			[
				'label' => __( 'Menu Sticky', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'yes' => __( 'Yes', 'avo_plg' ),
					'no' => __( 'No', 'avo_plg' ),
				],
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'menu_type',
			[
				'label' => __( 'Drop Down Type', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'left' => __( 'From Left', 'avo_plg' ),
					'right' => __( 'From Right', 'avo_plg' ),
				],
				'default' => 'left',
			]
		);
		
		$this->add_responsive_control(
			'align',
			[
				'label' => __( 'Parent Menu Align', 'avo_plg' ),
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
						'title' => __( 'Right', 'avo_plg'),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .white-header, .custom-sticky' => 'text-align: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'align_child',
			[
				'label' => __( 'Child Menu Align', 'avo_plg' ),
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
						'title' => __( 'Right', 'avo_plg'),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .menu-box ul li ul' => 'text-align: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'desktop_menu',
			[
				'label' => __( 'Desktop Menu', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'inline-block' => __( 'Show', 'avo_plg' ),
					'none' => __( 'Hide', 'avo_plg' ),
				],
				'default' => 'inline-block',
				'label_block' => true,
				'selectors' => [
					'{{WRAPPER}} .menu-box' => 'display: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'mobile_menu',
			[
				'label' => __( 'Mobile Menu', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'inline-block' => __( 'Show', 'avo_plg' ),
					'none' => __( 'Hide', 'avo_plg' ),
				],
				'default' => 'inline-block',
				'label_block' => true,
				'selectors' => [
					'{{WRAPPER}} .box-mobile' => 'display: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'menu_sticky_bg',
			[
				'label' => __( 'Sticky Background', 'bim_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .is-sticky .stuck-nav' => 'background-color: {{VALUE}};',
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


                        
        // Styles selections.
		$style = $settings['menu_style'];
		include( 'style'.$style.'.php' );                    
                            
     
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function _content_template() { 
		
	}
}


