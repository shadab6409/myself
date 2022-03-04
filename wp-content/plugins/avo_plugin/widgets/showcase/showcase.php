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
class Avo_Showcase extends Widget_Base {

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
		return 'avo-showcase';
	}
		//script depend
	public function get_script_depends() { return [ 'avo-animation','jquery-swiper','avo-swiper-slider-script' ]; }

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
		return __( 'Avo Showcase', 'avo_plg' );
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
				'label' => __( 'Showcase Settings', 'avo_plg' ),
			]
		);

		$this->add_control(
			'showcase_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'1' => __( 'Style 1 (Full)', 'avo_plg' ),
					'2' => __( 'Style 2 (Creative)', 'avo_plg' ),
					'3' => __( 'Style 3 (Raduis)', 'avo_plg' ),
					'4' => __( 'Style 4 (Columns)', 'avo_plg' ),

				],
				'default' => '1',
			]
		);
        $this->add_control( 'mousewheel',
            [
                'label' => esc_html__( 'Mouse wheel', 'avo_plg' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
				'condition' => [
					'showcase_style' => array('2','3','4')
				],
            ]
        ); 
	
		$this->add_control(
			'showcase_list',
			[
				'label' => __( 'Showcase List', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'title' => 'Main Title',
						'subtitle' => 'Sub Title',
					],
					[
						'title' => 'Main Title',
						'subtitle' => 'Sub Title',
					],

				],
				'fields' => [
					[
						'name' => 'title',
						'label' => __( 'Title', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Main Title..', 'avo_plg' ),
					],
					[
						'name' => 'subtitle',
						'label' => __( 'Sub Title', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Sub Title..', 'avo_plg' ),
					],
					[
						'name' => 'link',
						'label' => __( 'Link', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Add your link here..', 'avo_plg' ),
					],
					
					[
						'name' => 'image',
						'label' => __( 'Image', 'avo_plg' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],

				],
				'title_field' => '{{ title }}',
			]
		);
		$this->add_control(
			'nav_prev',
			[
				'label' => __( 'Previous','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __( 'Prev Slide', 'avo_plg' ),
				'condition' => [
					'showcase_style' => array('1','2','3','4')
				],
			]
		);
		$this->add_control(
			'nav_next',
			[
				'label' => __( 'Next','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __( 'Next Slide', 'avo_plg' ),
				'condition' => [
					'showcase_style' => array('1','2','3','4')
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
		$mousewheel = 'yes' == $settings['mousewheel'] ? 'true' : 'false';
		
		
        // Styles selections.
		$style = $settings['showcase_style'];
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


