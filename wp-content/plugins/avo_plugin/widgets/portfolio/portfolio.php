<?php
namespace AvoPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_Portfolio extends Widget_Base { 

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
		return 'avo-portfolio';
	}
	
	//script depend
	public function get_script_depends() { return [ 'jquery-isotope','jquery-swiper','wow','avo-portfolio']; }
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
		return __( 'Avo Portfolio', 'avo_plg' );
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
		return 'fa fa-clone';
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
				'label' => __( 'Portfolio Settings.', 'avo_plg' ),
			]
		);
		
		$this->add_control(
			'port_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Style 1', 'avo_plg' ),
					'2' => __( 'Style 2', 'avo_plg' ),
					'3' => __( 'Style 3', 'avo_plg' ),
					'4' => __( 'Style 4', 'avo_plg' ),
					'5' => __( 'Style 5', 'avo_plg' ),
					'6' => __( 'Style 6', 'avo_plg' ),
					'7' => __( 'Style 7', 'avo_plg' ),


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
					'port_style' => array( '4','5', '6')
				],
			]
		);
		
		$this->add_responsive_control( 
			'filter',
			[
				'label' => __( 'Filter', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'block' => __( 'Show', 'avo_plg' ),
					'none' => __( 'Hide', 'avo_plg' ),
				],
				'default' => 'block',
				'selectors' => [
					'{{WRAPPER}} .filter-tab' => 'display: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'filter_align',
			[
				'label' => __( 'Filter Alignment', 'avo_plg' ),
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
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .filter-tab' => 'text-align: {{VALUE}};',
				],
			]
		);
		
		
		$this->add_control(
			'portfolio_item',
			[
				'label' => __( 'Item to display', 'avo_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '8',
			]
		);
		$this->add_control(
			'port_masonry',
			[
				'label' => __( 'Portfolio masonry', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'no',
				'label_on' => __( 'Yes', 'avo_plg' ),
				'label_off' => __( 'No', 'avo_plg' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'sort_cat',
			[
				'label' => __( 'Sort Portfolio by Portfolio Category', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'no',
				'label_on' => __( 'Yes', 'avo_plg' ),
				'label_off' => __( 'No', 'avo_plg' ),
				'return_value' => 'yes',
			]
		);

		
		$this->add_control(
			'blog_cat',
			[
				'label'   => __( 'Category to Show', 'avo_plg' ),
				'type'    => Controls_Manager::SELECT2, 'options' => avo_tax_choice(),
				'condition' => [
					'sort_cat' => 'yes',
				],
				'multiple'   => 'true',
			]
		);
		
		$this->add_control(
			'port_order',
			[
				'label' => __( 'Orders', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'DESC' => __( 'Descending', 'avo_plg' ),
					'ASC' => __( 'Ascending', 'avo_plg' ),
					'rand' => __( 'Random', 'avo_plg' ),
				],
				'default' => 'DESC',
			]
		);
		
		
		$this->add_control(
			'port_column',
			[
				'label' => __( 'Columns', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'2' => __( 'Two Columns', 'avo_plg' ),
					'3' => __( 'Three Columns', 'avo_plg' ),
					'4' => __( 'Four Columns', 'avo_plg' ),
				],
				'default' => '3',
			]
		);
		
		$this->add_control(
			'page_show',
			[
				'label' => __( 'Show Pagination:', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => __( 'Show', 'avo_plg' ),
				'label_off' => __( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
				'condition' => [
					'sort_cat!' => 'yes',
				],
			]
		);
		$this->add_control(
			'nav_prev',
			[
				'label' => __( 'Previous','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __( 'Prev', 'avo_plg' ),
				'condition' => [
					'port_style' => array('','4')
				],
			]
		);
		$this->add_control(
			'nav_next',
			[
				'label' => __( 'Next','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __( 'Next', 'avo_plg' ),
				'condition' => [
					'port_style' => array('','4')
				],
			]
		);
		
		$this->add_responsive_control(
			'page_align',
			[
				'label' => __( 'Pagination Alignment', 'avo_plg' ),
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
				'condition' => [
					'page_show' => 'yes',
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .pagi-box' => 'text-align: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		
		$this->start_controls_section(
			'portfolio_styling',
			[
				'label' => __( '<div style="padding:10px 0;">Portfolio Item Settings.  <br/><small style="font-weight:normal;">You can click the (All) filter to refresh the layout when you change the Height settings.</small></div>', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_responsive_control(
			'portfolio_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .port-inner' => 'margin: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .portfolio-body' => 'margin: -{{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'portfolio_height',
			[
				'label' => __( 'Height', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .port-box' => 'padding: {{SIZE}}% 0;',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_content_style',
			[
				'label' => __( 'Content Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		
		
		$this->add_responsive_control(
			'port_content',
			[
				'label' => __( 'Content Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .dbox-relative' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'port_padding',
			[
				'label' => __( 'Content Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .dbox-relative' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'bg_content',
			[
				'label' => __( 'Content Background', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'condition' => [
					'port_style' => '1',
				],
				'selectors' => [
					'{{WRAPPER}} .dbox-relative' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'content_align',
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
					'{{WRAPPER}} .dbox-relative' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'section_img_style',
			[
				'label' => __( 'Image Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs( 'img_style' );
				$this->start_controls_tab(
			'img_normal',
			[
				'label' => __( 'Normal', 'avo_plg' ),
			]
		);

		$this->add_control(
			'img_filter_normal',
			[
				'label' => __( 'Image filter','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'grayscale(100%)' => __( 'Gray','avo_plg' ),
					'initial' => __( 'Colored','avo_plg' ),
				],
				'default' => 'initial',
				'selectors' => [
					'{{WRAPPER}} .portfolio .port-inner img' => 'filter: {{VALUE}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'img_hover',
			[
				'label' => __( 'Hover', 'avo_plg' ),
			]
		);
		$this->add_control(
			'img_filter_hover',
			[
				'label' => __( 'Image filter','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'grayscale(100%)' => __( 'Gray','avo_plg' ),
					'initial' => __( 'Colored','avo_plg' ),
				],
				'default' => 'initial',
				'selectors' => [
					'{{WRAPPER}} .portfolio .port-inner:hover img' => 'filter: {{VALUE}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();

		
		$this->start_controls_section(
			'title_typo',
			[
				'label' => __( 'Title Content Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'cport_typography',
				'label'     => __( 'Title Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .dbox-relative h3',
			]
		);
		
		$this->add_control(
			'title_type',
			[
				'label' => __( 'Title Display','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'block' => __( 'Block','avo_plg' ),
					'inline-block' => __( 'Inline Block','avo_plg' ),
				],
				'default' => 'block',
				'selectors' => [
					'{{WRAPPER}} .dbox-relative h3' => 'display: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'title_cl',
			[
				'label' => __( 'Title Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dbox-relative h3 a' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'title_clh',
			[
				'label' => __( 'Title Color (Hover)', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dbox-relative h3 a:hover' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'title_bgl',
			[
				'label' => __( 'Title Background Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dbox-relative h3' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'titlep_padding',
			[
				'label' => __( 'Title Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .dbox-relative h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'titlep_margin',
			[
				'label' => __( 'Title Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .dbox-relative h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'sub_typo',
			[
				'label' => __( 'Category/Text Content Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'ctext_typography',
				'label'     => __( 'Text Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .dbox-relative p',
			]
		);
		
		$this->add_control(
			'text_type',
			[
				'label' => __( 'Text Display','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'block' => __( 'Block','avo_plg' ),
					'inline-block' => __( 'Inline Block','avo_plg' ),
				],
				'default' => 'block',
				'selectors' => [
					'{{WRAPPER}} .dbox-relative p' => 'display: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'txt_cl',
			[
				'label' => __( 'Text Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dbox-relative p' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'txt_bg',
			[
				'label' => __( 'Text Background Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dbox-relative p' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'tx_padding',
			[
				'label' => __( 'Text Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .dbox-relative p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'tx_margin',
			[
				'label' => __( 'Text Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .dbox-relative p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		
		$this->end_controls_section();
		
		
		$this->start_controls_section(
			'section_title_style',
			[
				'label' => __( 'Filter Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'filter_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .port-filter a',
			]
		);
		
		$this->add_responsive_control(
			'filter_margin',
			[
				'label' => __( 'Filter Container Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .port-filter' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'filter_padding',
			[
				'label' => __( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .port-filter a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		
		$this->add_responsive_control(
			'filter_linkmargin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .port-filter a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'filter_border_radius',
			[
				'label' => __( 'Border Radius', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .port-filter a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'color_def',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .port-filter a' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'color_bgdef',
			[
				'label' => __( 'Background Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .port-filter a' => 'background: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'color_hov',
			[
				'label' => __( 'Color on Hover & Active', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .port-filter a.active' => 'color: {{VALUE}};',
					'{{WRAPPER}} .port-filter a:hover' => 'color: {{VALUE}};'
				],
			]
		);
		
		$this->add_control(
			'color_bgdefhover',
			[
				'label' => __( 'Background Color on Hover & Active', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .port-filter a.active' => 'background: {{VALUE}};',
					'{{WRAPPER}} .port-filter a::before' => 'background: {{VALUE}};',
					'{{WRAPPER}} .port-filter a::after' => 'background: {{VALUE}};',
					'{{WRAPPER}} .port-filter a:hover' => 'background: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'placeholder' => '1px',
				'default' => '1px',
				'selector' => '{{WRAPPER}} .port-filter a',
				'separator' => 'before',
			]
		);
		
		
		
		$this->add_control(
			'color_borderhover',
			[
				'label' => __( 'Border Color on Hover & Active', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .port-filter a:hover' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .port-filter a.active' => 'border-color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'port_mask',
			[
				'label' => __( 'Portfolio Mask Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		
		$this->add_control(
			'mask_color',
			[
				'label' => __( 'Mask Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .port-inner:hover .port-box' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'mask_color2',
			[
				'label' => __( 'Second Mask Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .port-inner:hover .port-box::after' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'mask_post2',
			[
				'label' => __( 'Second Mask Top Posisition (on hover)', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>-200,
						'max' => 200,
						'step' =>1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .port-inner:hover .port-box::after' => 'top: {{SIZE}}%;',
				],
			]
		);
		
		$this->add_control(
			'mask_color_opacity',
			[
				'label' => __( 'Mask Color Opacity (on hover)', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>0,
						'max' => 1,
						'step' =>0.1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .port-inner:hover .port-box' => 'opacity: {{SIZE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'pagination_setting',
			[
				'label' => __( 'Pagination Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'page_color',
			[
				'label' => __( 'Pagination Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pagination > li > a' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'page_color_hover',
			[
				'label' => __( 'Pagination Color on Hover','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pagination > li > a:hover' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'page_color_bg',
			[
				'label' => __( 'Pagination Background Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pagination > li > a' => 'background-color: {{VALUE}};border-color:{{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'page_color_hover_bg',
			[
				'label' => __( 'Pagination Background Color on Hover','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pagination > li > a:hover' => 'background-color: {{VALUE}};border-color:{{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'page_color_active',
			[
				'label' => __( 'Pagination Color on Active','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pagination > .active > a' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'page_color_hover_bg_active',
			[
				'label' => __( 'Pagination Background Color on Active','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pagination > .active > a' => 'background-color: {{VALUE}};border-color:{{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'pagi_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .pagination' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
       // Styles selections.
		$style = $settings['port_style'];
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



