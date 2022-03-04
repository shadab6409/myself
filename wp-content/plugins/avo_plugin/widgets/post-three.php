<?php
namespace AvoPlugin\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Box_Shadow;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_Post_Three extends Widget_Base {

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
		return 'avo-post-three';
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
		return __( 'Avo Post List Style 3', 'avo_plg' );
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
		return 'eicon-post-list';
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
		return [ 'avo-blog-elements' ];
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
				'label' => __( 'Blog Post Settings', 'avo_plg' ),
			]
		);
		
		$this->add_control(
			'blog_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'style1' => __( 'Style One', 'avo_plg' ),
					'style2' => __( 'Style Two', 'avo_plg' ),
				],
				'default' => 'style1',
			]
		);
	
		$this->add_control(
            'blog_post',
            [
                'label' => __( 'Blog Post to show', 'avo_plg' ),
                'type' => Controls_Manager::NUMBER,
				'default' => '6',

            ]
        );
		
		$this->add_control(
			'sort_cat',
			[
				'label' => __( 'Sort post by Category', 'avo_plg' ),
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
				'label'   => __( 'Category', 'avo_plg' ),
				'type'    => Controls_Manager::SELECT2, 'options' => avo_category_choice(),
				'condition' => [
					'sort_cat' => 'yes',
				],
				'multiple'   => 'true',
			]
		);
		
		$this->add_control(
			'paged_on',
			[
				'label' => __( 'Always show the same list on every page(not paged).', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => __( 'Yes', 'avo_plg' ),
				'label_off' => __( 'No', 'avo_plg' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'show_excerpt',
			[
				'label' => __( 'Show Exerpt', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => __( 'Show', 'avo_plg' ),
				'label_off' => __( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
            'excerpt',
            [
                'label' => __( 'Blog Excerpt Length', 'avo_plg' ),
                'type' => Controls_Manager::NUMBER,
				'default' => '150',
				'min' => 10,
				'condition' => [
					'show_excerpt' => 'yes',
				],
            ]
        );

		$this->add_control(
            'excerpt_after',
            [
                'label' => __( 'After Excerpt text/symbol', 'avo_plg' ),
                'type' => Controls_Manager::TEXT,
				'condition' => [
					'show_excerpt' => 'yes',
				],
				'default' => '...',
            ]
        );
		
		$this->add_control(
			'blog_column',
			[
				'label' => __( 'Blog Columns', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'one' => __( 'One Column', 'avo_plg' ),
					'two' => __( 'Two Columns', 'avo_plg' ),
					'three' => __( 'Three Columns', 'avo_plg' ),
					'four' => __( 'Four Columns', 'avo_plg' ),
				],
				'default' => 'three',
			]
		);

		$this->add_control(
			'image',
			[
				'label' => __( 'Show Featured Image', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => __( 'Show', 'avo_plg' ),
				'label_off' => __( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
			]
		);
		$this->add_control(
			'meta_button_show',
			[
				'label' => __( 'Show Meta Button', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => __( 'Show', 'avo_plg' ),
				'label_off' => __( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'button_show',
			[
				'label' => __( 'Show Button', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => __( 'Show', 'avo_plg' ),
				'label_off' => __( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
            'button',
            [
                'label' => __( 'Button Text', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( 'Read More', 'avo_plg' ),
				'label_block' => true,
				'condition' => [
					'button_show' => 'yes',
				],
            ]
        );
		
		$this->add_control(
			'icon',
			[
				'label' => __( 'Button Icon', 'avo_plg' ),
				'type' => Controls_Manager::ICON,
				'label_block' => true,
				'default' => '',
				'condition' => [
					'button_show' => 'yes',
				],
			]
		);

		$this->add_control(
			'icon_align',
			[
				'label' => __( 'Button Icon Position', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => __( 'Before', 'avo_plg' ),
					'right' => __( 'After', 'avo_plg' ),
				],
				'condition' => [
				    'button_show' => 'yes',
					'icon!' => '',
				],
			]
		);

		$this->add_control(
			'icon_indent',
			[
				'label' => __( 'Button Icon Spacing', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'condition' => [
					'button_show' => 'yes',
					'icon!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .content-btn .content-btn-align-icon-right' => 'margin-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .content-btn .content-btn-align-icon-left' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'meta_show',
			[
				'label' => __( 'Show Post Meta', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => __( 'Show', 'avo_plg' ),
				'label_off' => __( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'cat_show',
			[
				'label' => __( 'Show Post Tags', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => __( 'Show', 'avo_plg' ),
				'label_off' => __( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
				'condition' => [
					'image' => 'yes',
				],
			]
		);

		$this->add_control(
			'tag_icon',
			[
				'label' => __( 'Tag Icon', 'avo_plg' ),
				'type' => Controls_Manager::ICON,
				'label_block' => true,
				'default' => 'fa fa-tag',
				'condition' => [
					'cat_show' => 'yes',
				],
			]
		);

		
		$this->add_control(
			'colors_warning',
					[
						'type' =>  Controls_Manager::RAW_HTML,
						'raw' => __( '<b>Note:</b> Try to show pagination only for (single) blog page.', 'avo_plg' ),
						'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
						'condition' => [
							'paged_on' => '',
						],
					]
		);

		$this->add_control(
			'page_show',
			[
				'label' => __( 'Show Pagination', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => __( 'Show', 'avo_plg' ),
				'label_off' => __( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
				'condition' => [
					'paged_on' => '',
				],
			]
		);
		
		
		
		$this->end_controls_section();
		$this->start_controls_section(
			'post_section',
			[
				'label' => __( 'Post Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'post_bg',
			[
				'label' => __( 'Background Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-col-inner' => 'background: {{VALUE}};',
					'{{WRAPPER}} .excerpt-box' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'post_margin',
			[
				'label' => __( 'Post Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .blog-list .excerpt-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'post_box_shadow',
				'selector' => '{{WRAPPER}} .blog-list .excerpt-box',
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
					'{{WRAPPER}} .blog-list .excerpt-box' => 'text-align: {{VALUE}};',
				],
			]
		);


		$this->end_controls_section();
		
		$this->start_controls_section(
			'title_section',
			[
				'label' => __( 'Title Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_responsive_control(
			'title_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .blog-post-list h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'title_typo',
				'label'     => __( 'Title Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .blog-post-list h3',
			]
		);
		
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .blog-post-list h3' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'title_color_hover',
			[
				'label' => __( 'Color on Hover', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .blog-post-list h3:hover' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'text_section',
			[
				'label' => __( 'Text Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_responsive_control(
			'text_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .blog-post-list p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'text_typo',
				'label'     => __( 'Text Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .blog-post-list p',
			]
		);
		
		$this->add_control(
			'text_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .blog-post-list p' => 'color: {{VALUE}};',
				],
			]
		);
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'meta_section',
			[
				'label' => __( 'Post Meta Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'meta_show' => 'yes',
				],
			]
		);
		
		$this->add_responsive_control(
			'meta_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .post-meta' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'meta_typo',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .post-meta',
			]
		);
		
		$this->add_control(
			'meta_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .post-meta' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'meta_link',
			[
				'label' => __( 'Link Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .post-meta a' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'meta_link_hover',
			[
				'label' => __( 'Link Color on Hover', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .post-meta a:hover' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'meta_icon',
			[
				'label' => __( 'Icon Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .post-meta .fa' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'cat_section_setting',
			[
				'label' => __( 'Post Category Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'cat_show' => 'yes',
				],
			]
		);
		
		$this->add_responsive_control(
			'cat_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .cat-post' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'cat_typo',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .cat-post',
			]
		);
		
		$this->add_control(
			'cat_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .cat-post' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'btn_settings',
			[
				'label' => __( 'Button Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'button_show' => 'yes',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'btn_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .content-btn',
			]
		);
		
		$this->add_responsive_control(
			'btn_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .content-btn' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'btn_padding',
			[
				'label' => __( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .content-btn' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'btn_border_radius',
			[
				'label' => __( 'Border Radius', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .content-btn' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'btn_color_section',
			[
				'label' => __( 'Button Color Scheme Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'button_show' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'btn_color',
			[
				'label' => __( 'Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-btn' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'btn_color_hover',
			[
				'label' => __( 'Color on Hover','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'btn_bg',
			[
				'label' => __( 'Background Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-btn' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .content-btn::before' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'btn_bg_hover',
			[
				'label' => __( 'Background Color on Hover','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-btn:hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .content-btn::after' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'btn_border',
			[
				'label' => __( 'Border', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .content-btn' => 'border-width:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'btn_border_hover',
			[
				'label' => __( 'Border on Hover', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .content-btn:hover' => 'border-width:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'btn_border_color',
			[
				'label' => __( 'Border Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-btn' => 'border-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'btn_border_color_hover',
			[
				'label' => __( 'Border Color on  Hover','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .content-btn:hover' => 'border-color: {{VALUE}};',
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
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'content_padding_setting',
			[
				'label' => __( 'Text & Button Content Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'content_bg',
			[
				'label' => __( 'Background','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .excerpt-box' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'excerpt_padding_box',
			[
				'label' => __( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .excerpt-box' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'selector' => '{{WRAPPER}} .blog-col-inner',
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
		if ($settings['paged_on']  != 'yes') {
			$avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		} else {
			$avo_paged = '';
		}
		if ( $settings['sort_cat']  == 'yes' ) {
			$query = new \WP_Query(array(
				'posts_per_page'   => $settings['blog_post'],
				'paged' => $avo_paged,
				'post_type' => 'post',
				'cat'=> $settings['blog_cat']
					
			)); 
		} else { 
			$query = new \WP_Query(array(
				'posts_per_page'   => $settings['blog_post'],
				'paged' => $avo_paged,
				'post_type' => 'post'
			)); 	
			
		}
		$this->add_render_attribute( 'icon-align', 'class', 'content-btn-align-icon-' . $settings['icon_align'] );
		$this->add_render_attribute( 'icon-align', 'class', 'content-btn-button-icon' );
		
		?>
	        			<div class="blog-post-list row clearfix blog-body blog-list <?php if  ($settings['blog_style'] == 'style2') {echo "blog-style-two"; }?>">
	                        <?php $count = 0;
	                        while ($query->have_posts()): $query->the_post(); ?> 
	                        <div class="<?php if  ($settings['blog_column'] == 'one') {echo "col-md-12"; } else if  ($settings['blog_column'] == 'two') {echo "col-md-6"; }
	                        if  ($settings['blog_column'] == 'three') {echo "col-md-4"; } if  ($settings['blog_column'] == 'four') {echo "col-md-3"; } ?>">
	                        	<div class="blog-col-inner">
									<?php if  ($settings['image'] == 'yes' && $count % 2 == 0  || $settings['blog_style'] == 'style2') { 


										?>

	                                <div class="col-lg-6 no-padding"> 
	                                	<div class="blog-link-img">
		                                    <?php if ( has_post_thumbnail() ) {
		                                        the_post_thumbnail(); 
		                                        } else { ?>
		                                        <img alt="blog-image" src="<?php echo AVO_URL ?>images/no-image.jpg" />
		                                    <?php } ?>
	                                            <div class="date-post">
	                                                <?php echo get_the_date(); ?>
	                                            </div>
		                                            
		                                </div>
	                                </div>
	                                <?php } ?>
	                                
	                                <div class="col-lg-6 no-padding order2">
	                                	<div class="excerpt-box <?php if($count % 2 != 0 ) {echo "txt-lft";}?>">

		                                    <?php if  ($settings['cat_show'] == 'yes') { ?>
		                                    <ul class="post-meta tags">
		                                        <li><i class="<?php echo esc_attr( $settings['tag_icon'] ); ?>"></i> <?php the_tags('', ', ');?></li>
		                                    </ul>
		                                    <?php } ?>

		                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		                                    
		                                    
		                                    <?php if  ($settings['show_excerpt'] == 'yes') { ?>
		                                    <p>
		                                        <?php $excerpt = get_the_excerpt();
		                                        $excerpt = substr( $excerpt , 0,$settings['excerpt']); 
		                                        echo $excerpt;echo esc_attr ($settings['excerpt_after'])?>
		                                    </p>
		                                    <?php } ?>

		                                    <?php if  ($settings['meta_show'] == 'yes') { ?>
		                                    <ul class="post-meta post-meta-bootom ">
		                                        <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
		                                        <li><i class="fa fa-clone"></i> <?php the_category(' | ');?></li>
		                                        <li><i class="fa fa-comments-o"></i> <?php echo comments_number();  ?></li>

		                                        <?php if  ($settings['meta_button_show'] == 'yes') { ?>
		                                        <li><i class="<?php echo esc_attr( $settings['icon'] ); ?>"></i> 
			                                        	<a  href="<?php the_permalink(); ?>"><?php echo esc_attr ($settings['button']); ?>
                                        				</a>
		                                        </li>
		                                        <?php } ?>
		                                    </ul>
		                                    <?php } ?>
		                                    
		                                    <?php if  ($settings['show_excerpt'] == 'yes' && $settings['button_show'] != 'yes') { ?>
		                                    
		                                    <?php } ?>
		                                    
		                                    <?php if  ($settings['button_show'] == 'yes') { ?>
		                                        <div class="spc-20 clearboth"></div>
		                                        <a class="content-btn" href="<?php the_permalink(); ?>">
		                                        
		                                        <?php if ( ! empty( $settings['icon'] ) ) : ?>
		                                        <span <?php echo $this->get_render_attribute_string( 'icon-align' ); ?>>
		                                            <i class="<?php echo esc_attr( $settings['icon'] ); ?>" aria-hidden="true"></i>
		                                        </span>
		                                        <?php endif; ?>
		                                        
												<?php echo esc_attr ($settings['button']); ?>
		                                        </a>
		                                    <?php  } ?>
		                                </div>
	                                </div>

									<?php if  ($settings['image'] == 'yes' && $count % 2 != 0  && $settings['blog_style'] != 'style2') { ?>

	                                <div class="col-lg-6 no-padding"> 
	                                	<div class="blog-link-img">
		                                    <?php if ( has_post_thumbnail() ) {
		                                        the_post_thumbnail(); 
		                                        } else { ?>
		                                        <img alt="blog-image" src="<?php echo AVO_URL ?>images/no-image.jpg" />
		                                    <?php } ?>
	                                            <div class="date-post-rtl">
	                                                <?php echo get_the_date(); ?>
	                                            </div>
		                                           
		                                </div>
	                                </div>
	                                <?php } ?>
	                                
	                            </div>
	                        </div>
	                        
	                        <?php $count++; if( $settings['blog_column'] != 'one' && $count==1 ) { $count=2;}
	                        if( $settings['blog_column'] != 'one' && $count==4 ) { $count=5;}
	                         endwhile; wp_reset_postdata();?>
	                   </div>
                   
                   <!--pagination--> 
                   <?php  if ($settings['paged_on']  != 'yes') {
					   if  ($settings['page_show'] == 'yes') { 
					   		avo_pagination($query->max_num_pages); 
					   } 
				   }		   

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
	protected function avo_custom_pagination() {
		
		
	}
}


