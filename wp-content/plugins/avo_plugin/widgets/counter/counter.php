<?php
namespace AvoPlugin\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.0.0
 */
class Avo_Counter extends Widget_Base {

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
		return 'avo-counter';
	}

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
		return __('Avo Counter', 'avo_plg');
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
		return 'eicon-counter';
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
		return ['avo-elements'];
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
				'label' => __( 'Counter Settings', 'avo_plg' ),
			]
		);

		$this->add_control(
			'counter_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Style 1', 'avo_plg' ),
				],
				'default' => '1',
			]
		);
			
		$this->add_control(
			'icon_class',
			[
				'type'    => Controls_Manager::ICONS,
				'label'   => esc_html__( 'Icon', 'avo_plg' ),
				'default' => array(
			      'value' => 'flaticon-award',
			      'library' => 'fa-solid',
				),
			]
		);

		$this->add_control(
			'title',
			[
				'type'    => Controls_Manager::TEXT,
				'label'   => esc_html__( 'Title', 'avo_plg' ),
				'default' => esc_html__( 'Happy Clients', 'avo_plg' ),
			]
		);

		$this->add_control(
			'number',
			[
				'type'    => Controls_Manager::NUMBER,
				'label'   => esc_html__( 'Counter Number', 'avo_plg' ),
				'default' => 1400,
			]
		);
		$this->add_control(
			'suffix',
			[
				'label' => __( 'Number Suffix', 'avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => '',
				'placeholder' => __( 'Plus', 'avo_plg' ),
			]
		);

		$this->add_control(
			'speed',
			[
				'type'    => Controls_Manager::NUMBER,
				'label'   => esc_html__( 'Animation Speed', 'avo_plg' ),
				'default' => 2000,
				'description' => esc_html__( 'The total duration of the count animation in milisecond eg. 5000', 'avo_plg' ),
			]
		);

		$this->add_control(
			'steps',
			[
				'type'    => Controls_Manager::NUMBER,
				'label'   => esc_html__( 'Animation Steps', 'avo_plg' ),
				'default' => 50,
				'description' => esc_html__( 'Counter steps eg. 10', 'avo_plg' ),
			]
		);
		$this->add_control(
			'border_left',
			[
				'label' => __( 'Border Left', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'no' => __( 'Off', 'avo_plg' ),
					'yes' => __( 'On', 'avo_plg' ),
				],
				'default' => 'on',
			]
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
        $settings = $this->get_settings_for_display();
    		
        // Styles selections.
		$style = $settings['counter_style'];
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