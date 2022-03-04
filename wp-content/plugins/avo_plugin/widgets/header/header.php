<?php
namespace AvoPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_Title extends Widget_Base {

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
		return 'avo-title';
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
		return __( 'Avo Header', 'avo_plg' );
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
		return 'fa fa-text-height';
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
			'section_title',
			[
				'label' => __( 'Title', 'avo_plg' ),
			]
		);

		$this->add_control(
			'title_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Style 1', 'avo_plg' ),
					'2' => __( 'Style 2', 'avo_plg' ),
					'3' => __( 'Style 3', 'avo_plg' ),
					'4' => __( 'Style 4', 'avo_plg' ),
					'5' => __( 'Style 5', 'avo_plg' ),

				],
				'default' => '1',
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
					'title_style' => array( '1','2','3')
				],
            ]
        );
		$this->add_responsive_control(
			'align_title',
			[
				'label' => __( 'Title parts Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justified', 'elementor' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'left', 
				'condition'   => array( 'title_style' => array( '5' ) ),
			]
		);
		$this->add_responsive_control(
			'align_header',
			[
				'label' => __( 'Main title Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __( 'Justified', 'elementor' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'default' => 'right', 
				'condition'   => array( 'title_style' => array( '5' ) ),
			]
		);
        $this->add_control( 
        	'parlx',
            [
                'label' => esc_html__( 'Parallax', 'avo_plg' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'return_value' => 'yes',
                				'condition' => [
					'title_style' => array('1','3')
				],
            ]
        );

		$this->add_control(
			'title_1',
			[
				'label' => __( 'Title part 1','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'label_block' => true,
				'default' => 'Title part1',
				'condition'   => array( 'title_style' => array( '1', '2','3','5' ) ),
			]
		);
		$this->add_control(
			'title_2',
			[
				'label' => __( 'Title part 2','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'label_block' => true,
				'default' => 'Title part2',
				'condition'   => array( 'title_style' => array( '2', '3','5' ) ),
			]
		);
		$this->add_control(
			'title',
			[
				'label' => __( 'Main Title','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'label_block' => true,
				'default' => 'Main Title',
				'condition'   => array( 
					'title_style' => array( '1', '3','4','5' ) 
				),
			]
		);
		$this->add_control( 
			'text',
			[
				'label' => __( 'Text','avo_plg' ),
				'type' => Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => 'Insert your text..',
				'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'avo_plg' ),
				'condition'   => array( 'title_style' => array( '1', '3' ) ),
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
				'condition' => [
					'title_style' => array( '1', '')
				],
			]
		);
		
		$this->add_control(
			'link',
			[
				'label' => __( 'Button Link','avo_plg' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'Leave it blank if you don\'t want to use this button',
								'condition' => [
					'title_style' => array( '1', '')
				],
			]
		);
		$this->add_control(
			'animation',
			[
				'label' => __( 'Animation Off/On', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'animate' => __( 'On', 'avo_plg' ),
					'no-animation' => __( 'Off', 'avo_plg' ),

				],
				'condition'   => array( 'title_style' => array( '1', '2' ) ),
				'default' => 'animate',
			]
		);

		$this->add_control(
            'image',
            [
                'label' => __( 'Image', 'avo_plg' ),
                'type' => Controls_Manager::MEDIA,
				'default' => [
				'url' => Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'title_style' => array('4')
				],
            ]
        );

		$this->end_controls_section();


		$this->start_controls_section(
			'header_settings',
			[
				'label' => __( 'Settings','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
 		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'title_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} h3, {{WRAPPER}} .avo-header h1, {{WRAPPER}} .avo-title h2, {{WRAPPER}} .avo-title h3',
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
		$avo_rtl = $settings['rtl'] ? ' rtl' : '';
		$avo_parlx = $settings['parlx'] ? ' parlx' : '';

		
        // Styles selections.
		$style = $settings['title_style'];
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
	protected function _content_template() { }
}


