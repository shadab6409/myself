<?php
namespace AvoPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Scheme_Typography;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Icons_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Image_Size;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_Offcanvas extends Widget_Base {

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
		return 'avo-offcanvas';
	}
		//script depend
	public function get_script_depends() { return [ 'avo-header-offcanvas' ]; }

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
		return __( 'Avo Offcanvas', 'avo_plg' );
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
		return 'eicon-apps';
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
				'label' => __( 'Settings','avo_plg' ),
			]
		);
		$this->add_control(
			'offcanvas_style',
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
			'avo_side_panel',
			[
				'label'   => __( 'Select Side Panel', 'avo_plg' ),
				'type'    => Controls_Manager::SELECT, 'options' => avo_side_panel_choices(),
				'default' => '',
				'condition'	=> [
					'offcanvas_style'	=> '0'
				],
			]
		);
		       $this->add_control(
            'avo_offcanvas_icons',
            [
                'label' => esc_html__('Select Icon', 'avo_plg'),
                'fa4compatibility' => 'avo_offcanvas_icon',
				'default' => [
					'value' => 'fas fa-th',
					'library' => 'fa-solid',
				],
				'condition'	=> [
					'offcanvas_style'	=> '1'
				],
                'label_block' => true,
                'type' => Controls_Manager::ICONS,

            ]
        );

		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'avo_plg' ),
				'type' => Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
				'condition'	=> [
					'offcanvas_style'	=> '1'
				],
			]
		);
		$this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'default' => 'full',
				'separator' => 'none',
				'condition'	=> [
					'offcanvas_style'	=> '1'
				],
			]
		);
		$this->add_responsive_control(
			'image_size',
			[
				'label' => __( 'Width', 'avo_plg' ) . ' (%)',
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 30,
					'unit' => '%',
				],
				'tablet_default' => [
					'unit' => '%',
				],
				'mobile_default' => [
					'unit' => '%',
				],
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 5,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor .img-box img' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition'	=> [
					'offcanvas_style'	=> '1'
				],
			]
		);

		$this->add_control(
			'hover_animation',
			[
				'label' => __( 'Hover Animation', 'elementor' ),
				'type' => Controls_Manager::HOVER_ANIMATION,
				'condition'	=> [
					'offcanvas_style'	=> '1'
				],
			]
		);
		
		
		$this->add_control(
			'title',
			[
				'label' => __( 'Title','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => 'Insert your title..',
				'condition' => [
					'offcanvas_style' => array( '1', '2')
				],
			]
		);
		
		$this->add_control(
			'subtitle',
			[
				'label' => __( 'Subtitle','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => 'Leave it blank if you don\'t want to use this subtitle',
				'condition' => [
					'offcanvas_style' => array( '1', '2')
				],
			]
		);
		
		$this->add_control(
			'text',
			[
				'label' => __( 'Text','avo_plg' ),
				'type' => Controls_Manager::WYSIWYG,
				'label_block' => true,
				'placeholder' => 'Insert your text..',
				'condition'	=> [
					'offcanvas_style'	=> '1'
				],
			]
		);
		
		$this->add_control(
			'btn_text',
			[
				'label' => __( 'Button Text','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'label_block' => true,
				'placeholder' => 'Insert your button text here..',
				'condition'	=> [
					'offcanvas_style'	=> '1'
				],
			]
		);
		
		$this->add_control(
			'link',
			[
				'label' => __( 'Button Link','avo_plg' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'Leave it blank if you don\'t want to use this button',
				'condition'	=> [
					'offcanvas_style'	=> '1'
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
					'{{WRAPPER}} .avo-offcanvas' => 'text-align: {{VALUE}};',
				],
				'condition'	=> [
					'offcanvas_style'	=> '2'
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
	$this->add_inline_editing_attributes( 'title' );
	$this->add_inline_editing_attributes( 'text' );
	  

		// Styles selections.
		$style = $settings['offcanvas_style'];
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


