<?php
namespace AvoPlugin\Widgets;

use Elementor\Widget_Base; 
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_WorkProcess extends Widget_Base {

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
		return 'avo-work-process';
	}
		//script depend
	public function get_script_depends() { return [ 'jquery-slick','avo-work-process' ]; }

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
		return __( 'Avo work procss', 'avo_plg' );
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
			'process_style',
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
			'item_num',
			[
				'label' => __( 'Slides to show', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( '1', 'avo_plg' ),
					'2' => __( '2', 'avo_plg' ),
					'3' => __( '3', 'avo_plg' ),
					'4' => __( '4', 'avo_plg' ),
					'5' => __( '5', 'avo_plg' ),
				],
				'default' => '3',
			]
		);
	
		$this->add_control(
			'work_process_list',
			[
				'label' => __( 'Image-box List', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'title' => 'Concept design',
						'text' => '001',
					],
					[
						'title' => 'Schematic Development',
						'text' => '002',
					],
					[
						'title' => 'Detail Design',
						'text' => '003',
					],
					[
						'title' => 'Tender Design',
						'text' => '004',
					],
					[
						'title' => 'Construction stage',
						'text' => '005',
					],
				],
				'fields' => [
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
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Image-box Text', 'avo_plg' ),
					],
					[
						'name' => 'description',
						'label' => __( 'Description', 'avo_plg' ),
						'type' => Controls_Manager::TEXTAREA,
						'label_block' => true,
						'placeholder' => __( 'Description', 'avo_plg' ),
					],

				],
				'title_field' => '{{ title }}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'box_settings',
			[
				'label' => __( 'Box Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'box_margin',
			[
				'label' => __( 'Box margin','avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .work-process .item .box-img .bg-img' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'size',
			[
				'label' => __( 'Size', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .work-process .item .box-img .bg-img' => 'width: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}};line-height: {{SIZE}}{{UNIT}};',
				],
				
			]
		);


		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'box_border',
				'selector' => '{{WRAPPER}} .work-process .item .box-img .bg-img',
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_box_shadow',
				'selector' => '{{WRAPPER}} .work-process .item .box-img .bg-img',
			]
		);
		$this->end_controls_section();

		
		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Content Style', 'avo_plg' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'num_typography',
				'label' => esc_html__( 'Numbers Typography', 'avo_plg' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .work-process .item .box-img .num',
			]
		);
		$this->add_control(
			'num_bg',
			[
				'label' => __( 'Number color','avo_plg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
				'type' => \Elementor\Scheme_Color::get_type(),
				'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .work-process .item .box-img .num' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'num_color_stroke',
			[
				'label' => __( 'Number color stroke','avo_plg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
				'type' => \Elementor\Scheme_Color::get_type(),
				'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .work-process .item .box-img .num' => '-webkit-text-stroke-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'num_width_stroke',
			[
				'label' => __( 'Number stroke width','avo_plg' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .work-process .item .box-img .num' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Title Typography', 'avo_plg' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .work-process .item .box-cont h3',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'text_typography',
				'label' => esc_html__( 'Text Typography', 'avo_plg' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .work-process .item .box-cont p',
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
		$slide_to_show="data-slick=";
		$slide_to_show.="'{";
		$slide_to_show.='"slidesToShow":';
		$slide_to_show.=$settings['item_num'];
		$slide_to_show.=', "slidesToScroll":';
		$slide_to_show.=$settings['item_num'];
		$slide_to_show.=', "autoplay" : false}'; 
		$slide_to_show.="'";

        // Styles selections.
		$style = $settings['process_style'];
		require( 'style'.$style.'.php' );



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


