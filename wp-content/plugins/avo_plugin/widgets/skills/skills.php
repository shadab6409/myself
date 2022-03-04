<?php
namespace AvoPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Utils;
use Elementor\Plugin;
use Elementor\Frontend;
use Elementor\Icons_Manager;
use Elementor\Core\Schemes;
use Elementor\Group_Control_Image_Size;
use Elementor\Scheme_Base;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_Skills extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name. 
	 */
	public function get_name() {
		return 'avo-skills';
	}
			//script depend
	public function get_script_depends() { return ['jquery-appear','jquery-knob']; }

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Avo Skills', 'avo_plg' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-skills';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'avo-elements' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
	
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Skills Settings', 'avo_plg' ),
			]
		);

		$this->add_control(
			'skills_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Style 1', 'avo_plg' ),
					'2' => __( 'Style 2', 'avo_plg' ),

				],
				'default' => '1',
			]
		);
		$this->add_control(
			'avo_mode',
			[
				'label' => __( 'Mode', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Dark', 'avo_plg' ),
					'2' => __( 'Light', 'avo_plg' ),
				],
				'default' => '1',
				'condition' => [
					'skills_style' => array( '1','2')
				],
			]
		);

		$this->add_control(
			'progress_num',
			[
				'label' => __( 'Number','avo_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 60,
			]
		);
		$this->add_control(
			'progress_width',
			[
				'label' => __( 'Width','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'default' => 110,

			]
		);
		$this->add_control(
			'progress_height',
			[
				'label' => __( 'Height','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'default' => 110,

			]
		);

		$this->add_control(
			'progress_thickness',
			[
				'label' => __( 'Thickness','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'default' =>0.03,

			]
		);
		$this->add_control(
			'progress_title',
			[
				'label' => __( 'Title','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'default' =>'Feature works',

			]
		);
		$this->add_control(
			'progress_subtitle',
			[
				'label' => __( 'Sub Title','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'default' =>'Feature works',

			]
		);
		$this->add_control(
			'progress_speed',
			[
				'label' => __( 'Animation Speed','avo_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5000,
				'description' => esc_html__( 'The total duration of the count animation in milisecond eg. 5000', 'avo_plg' ),
			]
		);
		$this->add_control(
			'progress_steps',
			[
				'label' => __( 'Animation Steps','avo_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 10,
				'description' => esc_html__( 'Counter steps eg. 10', 'avo_plg' ),
			]
		);
		$this->add_control(
			'progress_bgcolor',
			[
				'label' => __( 'BG Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',		]
		);
		$this->add_control(
			'progress_fgcolor',
			[
				'label' => __( 'FG Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',		]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings();
		
        // Styles selections.
		$style = $settings['skills_style'];
		include( 'style'.$style.'.php' );
	
		
	 
		}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		
		
	}
}


