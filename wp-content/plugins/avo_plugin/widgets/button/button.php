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
class Avo_Button extends Widget_Base {

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
		return 'avo-button';
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
		return __( 'Avo Button', 'avo_plg' );
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
		return 'eicon-button';
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
			'button_style',
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
					'button_style' => array( '1','2')
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
				'default' => 'Click now',
				'condition'	=> [
					'button_style!'	=> '2'
				],
			]
		);
		
		$this->add_control(
			'link',
			[
				'label' => __( 'Button Link','avo_plg' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'Leave Link here',
			]
		);


		$this->add_control(
			'avo_info_icons',
			[
				'label' =>esc_html__( 'Icon', 'avo_plg' ),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'avo_btn_icon',
				'label_block' => true,
				'default' => [
                    'value' => 'fas fa-play',
					'library' => 'fa-brands',
				]
			]
		);

		$this->add_control(
            'button_alignment',
            [
                'label' => __( 'Button Text Alignment', 'avo_plg' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
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
                    ],
                ],
                'default' => 'left',
				'condition' => [
					'button_style' => array( '1' )
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
		$style = $settings['button_style'];
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


