<?php
namespace AvoPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_Fancy extends Widget_Base {

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
		return 'avo-fancy';
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
		return __( 'Avo Fancy', 'avo_plg' );
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
		return 'eicon-person';
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
				'label' => __( 'Fancy Settings', 'avo_plg' ),
			]
		);
		$this->add_control(
			'fancy_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'style1' => __( 'Style 1', 'avo_plg' ),
				],
				'default' => 'style1',
			]
		);
		
		$this->add_control(
            'title1',
            [
                'label' => __( 'Fancy Title 1', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( 'Years Experience', 'avo_plg' ),
				'label_block' => true,
            ]
        );
		$this->add_control(
            'title2',
            [
                'label' => __( 'Fancy Title 1', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( '21', 'avo_plg' ),
				'label_block' => true,
            ]
        );
		
		$this->add_control(
            'text1',
            [
                'label' => __( 'Fancy subtitle 1', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( 'Since', 'avo_plg' ),
				'label_block' => true,
            ]
        );
		$this->add_control(
            'text2',
            [
                'label' => __( 'Fancy subtitle 2', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( '1999', 'avo_plg' ),
				'label_block' => true,
            ]
        );
		
		$this->add_control(
            'image_bg',
            [
                'label' => __( 'Image Background', 'avo_plg' ),
                'type' => Controls_Manager::MEDIA,
				'default' => [
							'url' => Utils::get_placeholder_image_src(),
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
		
		$style = $settings['fancy_style'];

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


