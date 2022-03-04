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
class Avo_Progress_Bar extends Widget_Base {

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
		return 'avo-progress-bar';
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
		return __( 'Avo Progress Bar', 'avo_plg' );
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
			'progress_bar_style',
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
			'progress_bar_mode',
			[
				'label' => __( 'Mode', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Dark colored', 'avo_plg' ),
					'2' => __( 'Light colored', 'avo_plg' ),
					'3' => __( 'Dark BW', 'avo_plg' ),
					'4' => __( 'Light BW', 'avo_plg' ),
				],
				'default' => '1',
				'condition'	=> [
					'progress_bar_style'	=> '1'
				]
			]
		);
        $this->add_control( 
        	'rtl',
            [
                'label' => esc_html__( 'RTL', 'avo_plg' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'return_value' => 'yes',
            ]
        );
		$this->add_control(
			'title',
			[
				'label' => __( 'Title','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'default' => "Title",
			]
		);

		$this->add_control(
			'percentage',
			[
				'label' => __( 'Percentage','avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'default' => array( 'size' => 88 ),
			]
		);

		$this->add_control(
			'progress_bgcolor',
			[
				'label' => __( 'BG Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .avo-progress-bar .skills-box .skill-progress' => 'background-color: {{VALUE}}',
				],
			]
		); 
		$this->add_control(
			'progress_fgcolor',
			[
				'label' => __( 'FG Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .avo-progress-bar .skills-box .skill-progress .progres' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .avo-progress-bar .skills-box .skill-progress .progres:after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .avo-progress-bar .skills-box .skill-progress .progres:before' => 'border-top-color: {{VALUE}}',
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
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$darkmode = $settings['rtl'] ? ' rtl' : '';
				
        // Styles selections.
		$style = $settings['progress_bar_style'];
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


