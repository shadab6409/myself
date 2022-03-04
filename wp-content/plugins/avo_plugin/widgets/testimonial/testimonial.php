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
class Avo_Testimonial extends Widget_Base {

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
		return 'avo-testimonial';
	}
		//script depend
	public function get_script_depends() { return [ 'jquery-slick','avo-testimonial' ]; }

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
		return __( 'Avo Testimonial', 'avo_plg' );
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
		return 'eicon-blockquote';
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
				'label' => __( 'Testimonial Settings', 'avo_plg' ),
			]
		);

		$this->add_control(
			'testimonial_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Style 1', 'avo_plg' ),
					'2' => __( 'Style 2', 'avo_plg' ),
					'3' => __( 'Style 3', 'avo_plg' ),

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
					'testimonial_style' => array( '3')
				],
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
				'condition' => [
					'testimonial_style!' => ['2'],
				]
			]
		);
		$this->add_control(
			'item_autoplay',
			[
				'label' => __( 'Autoplay to show', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'true' => __( 'Yes', 'avo_plg' ),
					'false' => __( 'No', 'avo_plg' ),
				],
				'default' => 'true',
			]
		);
	
		$this->add_control(
			'testi_list',
			[
				'label' => __( 'Testimonial List', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'title' => 'Testimonial Name',
						'position' => 'Testimonial Position',
						'text' => 'Testimonial Text',
						'rate' => '3.5',
					],
					[
						'title' => 'Testimonial Name',
						'position' => 'Testimonial Position',
						'text' => 'Testimonial Text',
						'rate' => '3.5',
					],
					[
						'title' => 'Testimonial Name',
						'position' => 'Testimonial Position',
						'text' => 'Testimonial Text',
						'rate' => '3.5',
					],
				],
				'fields' => [
					[
						'name' => 'title',
						'label' => __( 'Testimonial Name', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Testimonial Name..', 'avo_plg' ),
					],
					
					[
						'name' => 'position',
						'label' => __( 'Testimonial Position', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Testimonial Position..', 'avo_plg' ),
					],
					[
						'name' => 'image',
						'label' => __( 'Client Image', 'avo_plg' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'text',
						'label' => __( 'Testimonial Text', 'avo_plg' ),
						'type' => Controls_Manager::TEXTAREA,
						'label_block' => true,
						'placeholder' => __( 'Testimonial Text..', 'avo_plg' ),
					],
					[
						'name' => 'rate',
						'label' => __( 'Testimonial Rate', 'avo_plg' ),
						'type' => Controls_Manager::NUMBER,
						'label_block' => true,
					],
				],
				'title_field' => '{{ title }}',
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
					'{{WRAPPER}} .testimonial .testi-text' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'title_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .testimonial .testi-text',
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
					'{{WRAPPER}} .testimonial h3' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'name_typography',
				'label'     => __( 'Name Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .testimonial h3',
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
					'{{WRAPPER}} .testimonial .testi-from' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'post_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .testimonial .testi-from',
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'quote_settting',
			[
				'label' => __( 'Quote Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'quote_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .testimonial .quote-icon' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'quotebg_color',
			[
				'label' => __( 'Background Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .testimonial .quote-icon' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'quote_radius',
			[
				'label' => __( 'Border Radius', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .testimonial .fa' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
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
					'{{WRAPPER}} .testimonial .slick-slide' => 'border-color: {{VALUE}};',
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

		$slide_to_show="data-slick=";
		$slide_to_show.="'{";
		$slide_to_show.='"slidesToShow":';
		if($settings['testimonial_style'] == '2') {
			$slide_to_show.= 1;
		} else {
			$slide_to_show.=$settings['item_num'];
		}
		$slide_to_show.=',"autoplay":';
		$slide_to_show.=$settings['item_autoplay'];
		$slide_to_show.='}'; 
		$slide_to_show.="'";
		
		
        // Styles selections.
		$style = $settings['testimonial_style'];
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


