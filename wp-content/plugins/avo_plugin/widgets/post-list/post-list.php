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
class Avo_Post_List extends Widget_Base {

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
		return 'avo-post-list';
	}
	//script depend
	public function get_script_depends() { return [ 'jquery-slick','avo-post-list' ]; }

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
		return __( 'Avo Post List', 'avo_plg' );
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
				'label' => __( 'Button Settings', 'avo_plg' ),
			]
		);

		$this->add_control(
			'post_list_style',
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
					'post_list_style' => array( '1','2','3')
				],
			]
		);
        $this->add_control( 
        	'rtl',
            [
                'label' => esc_html__( 'RTL', 'avo_plg' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'return_value' => 'yes',
				'condition' => [
					'post_list_style' => array( '1','')
				],
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
		$avo_rtl = $settings['rtl'] ? ' rtl' : '';
		
        // Styles selections.
		$style = $settings['post_list_style'];
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


