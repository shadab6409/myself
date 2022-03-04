<?php
namespace AvoPlugin\Widgets;

use Elementor\Widget_Base; 
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_ImageBoxSlider extends Widget_Base {

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
		return 'avo-image-box-slider';
	}
		//script depend
	public function get_script_depends() { return [ 'jquery-slick','avo-imgbox-slider' ]; }

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
		return __( 'Avo image slider', 'avo_plg' );
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
		return 'eicon-image-box';
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
				'label' => __( 'Image-box Settings', 'avo_plg' ),
			]
		);
		
		$this->add_control(
			'box_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'style1' => __( 'Style 1', 'avo_plg' ),
					'style2' => __( 'Style 2', 'avo_plg' ),
				],
				'default' => 'style1',
			]
		);
	
		$this->add_control(
			'imgbox_list',
			[
				'label' => __( 'Image-box List', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'title' => 'Image-box Title',
						'text' => 'Image-box Text',
					],
					[
						'title' => 'Image-box Title',
						'text' => 'Image-box Text',
					],
					[
						'title' => 'Image-box Title',
						'text' => 'Image-box Text',
					],
				],
				'fields' => [
					[
						'name' => 'image_icon',
						'label' => __( 'Image Icon', 'avo_plg' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'title',
						'label' => __( 'Image-box Title', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Image-box Title', 'avo_plg' ),
					],
					
					[
						'name' => 'image',
						'label' => __( 'Image', 'avo_plg' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'text',
						'label' => __( 'Image-box Text', 'avo_plg' ),
						'type' => Controls_Manager::TEXTAREA,
						'label_block' => true,
						'placeholder' => __( 'Image-box Text', 'avo_plg' ),
					],
					[
						'name' => 'btn_text',
						'label' => __( 'btn text', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Text', 'avo_plg' ),
					],
					[
						'name' => 'link',
						'label' => __( 'Image-box Link', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Link', 'avo_plg' ),
					],

				],
				'title_field' => '{{ title }}',
			]
		);
		$this->add_control(
			'show_arrows',
			[
				'label' => __( 'Arrows','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'true' => __( 'Show','avo_plg' ),
					'false' => __( 'Hide','avo_plg' ),
				],
				'default' => 'false',
				'condition' => [
					'box_style' => array('style2')
				],
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'title_settting',
			[
				'label' => __( 'Text Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .img-box-slider .imgbox-text' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'title_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .img-box-slider .imgbox-text',
			]
		);
		
		$this->end_controls_section();
		
		
		$this->start_controls_section(
			'name_settings',
			[
				'label' => __( 'Name Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'name_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .img-box-slider h3' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'name_typography',
				'label'     => __( 'Name Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .img-box-slider h3',
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'post_settting',
			[
				'label' => __( 'Position Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'post_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .img-box-slider .imgbox-from' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'post_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .img-box-slider .imgbox-from',
			]
		);
		
		$this->end_controls_section();
		

		$this->start_controls_section(
			'border_settting',
			[
				'label' => __( 'Border Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'border_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .img-box-slider .slick-slide' => 'border-color: {{VALUE}};',
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
		$settings = $this->get_settings();
		
		
		$style = $settings['box_style'];

		require( $style.'.php' ); 
	
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


