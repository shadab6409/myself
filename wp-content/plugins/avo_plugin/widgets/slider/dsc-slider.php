<?php
namespace AvoPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Core\Schemes;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Group_Control_Border;



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	
/**
 * @since 1.0.0
 */
class Dsc_Slider extends Widget_Base {

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
		return 'dsc-slider';
	}
	
	//script depend
	public function get_script_depends() { return [ 'jquery-slick','avo-animation','jquery-swiper','slider-swiper','avo-slider-script' ]; }

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
		return __( 'Avo Slider', 'avo_plg' );
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
		return 'eicon-slideshow';
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
				'label' => __( 'Slider Settings', 'avo_plg' ),
			]
		);

		$this->add_control(
			'slider_style',
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
					'8' => __( 'Style 8', 'avo_plg' ),
					'9' => __( 'Style 9', 'avo_plg' ),
					'10' => __( 'Style 10', 'avo_plg' ),



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
					'slider_style' => array('6','9')
				],
            ]
        );
		
		
		
		$this->add_control(
			'slider_list',
			[
				'label' => __( 'Slider List', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'title' => __( 'Slider Heading Title', 'avo_plg' ),
						'subtitle' => __( 'Slider subtitle', 'avo_plg' ),
						'text' => __( 'Slider text', 'avo_plg' ),
					],
					[
						'title' => __( 'Slider Heading Title', 'avo_plg' ),
						'subtitle' => __( 'Slider subtitle', 'avo_plg' ),
						'text' => __( 'Slider text', 'avo_plg' ),
					],
					[
						'title' => __( 'Slider Heading Title', 'avo_plg' ),
						'subtitle' => __( 'Slider subtitle', 'avo_plg' ),
						'text' => __( 'Slider text', 'avo_plg' ),
					],
				],
				'fields' => [
					[
						'name' => 'title',
						'label' => __( 'Slider Heading Title', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Insert your slider heading title here..', 'avo_plg' ),
						'default' => __( 'Slider Heading Title' ,  'avo_plg'  ),
					],
					[
						'name' => 'subtitle',
						'label' => __( 'Slider Subtitle', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Insert your slider subtitle here..', 'avo_plg' ),
						'default' => __( 'Slider Subtitle' ,  'avo_plg'  ),
					],
					[
						'name' => 'text',
						'label' => __( 'Slider Text', 'avo_plg' ),
						'type' => Controls_Manager::TEXTAREA,
						'label_block' => true,
						'default' => __( 'Slider Text' ,  'avo_plg' ),
					],
					[
						'name' => 'btn_text',
						'label' => __( 'Button Text', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
					],
					[
						'name' => 'btn_link',
						'label' => __( 'Button Link', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Leave it blank if you don\'t need this button', 'avo_plg' ),
					],
					[
						'name' => 'btn_text2',
						'label' => __( 'Button Text', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
					],
					[
						'name' => 'btn_link2',
						'label' => __( 'Button Link', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Leave it blank if you don\'t need this button', 'avo_plg' ),

					],
					[
						'name' => 'image',
						'label' => __( 'Slider Image', 'avo_plg' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'image_animation',
						'label' => __( 'Animation Effect', 'avo_plg' ),
						'type' => Controls_Manager::SWITCHER,
						'default' => '',
					],
					[
						'name' => 'zoom_direction',
						'label' => __( 'Zoom Direction', 'avo_plg' ),
						'type' => Controls_Manager::SELECT,
						'default' => 'in',
						'options' => [
							'in' => __( 'In', 'avo_plg' ),
							'out' => __( 'Out', 'avo_plg' ),
						],
						'conditions' => [
							'terms' => [
								[
									'name' => 'image_animation',
									'operator' => '!=',
									'value' => '',
								],
							],
						],
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$this->add_control(
            'bg_image',
            [
                'label' => __( 'BG Image', 'avo_plg' ),
                'type' => Controls_Manager::MEDIA,
				'default' => [
							'url' => Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'slider_style' => array('8')
				],
            ]
        );
		
		$this->add_responsive_control(
			'slider_width',
			[
				'label' => __( 'Slider Container Max Width (px)', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>100,
						'max' => 4000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .slider-box ' => 'max-width: {{SIZE}}px;',
				],
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		
		$this->add_responsive_control(
			'slider_content',
			[
				'label' => __( 'Slider Content Max Width (px)', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>100,
						'max' => 4000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .slider-content ' => 'max-width: {{SIZE}}px;',
				],
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		
		$this->add_responsive_control(
			'slider_height',
			[
				'label' => __( 'Slider Top Padding (%)', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>0,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .slider-box ' => 'padding-top: {{SIZE}}%;',
				],
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		
		$this->add_responsive_control(
			'slider_height_bottom',
			[
				'label' => __( 'Slider Bottom Padding (%)', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>0,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .slider-box ' => 'padding-bottom: {{SIZE}}%;',
				],
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);

        $this->add_control( 'splitting',
            [
                'label' => esc_html__( 'Splitting', 'avo_plg' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
				'condition' => [
					'slider_style' => array('6')
				],
            ]
        );
        $this->add_control( 'parallax',
            [
                'label' => esc_html__( 'Parallax', 'avo_plg' ),
                'type' => Controls_Manager::SWITCHER,
				'condition' => [
					'slider_style' => array('6','7','9','10')
				],
            ]
        );
        $this->add_control( 'autoplay',
            [
                'label' => esc_html__( 'Autoplay', 'avo_plg' ),
                'type' => Controls_Manager::SWITCHER,
            ]
        ); 
        $this->add_control( 'loop',
            [
                'label' => esc_html__( 'Loop', 'avo_plg' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );
		
		$this->add_control(
			'slider_speed',
			[
				'label' => __( 'Slider Speed', 'avo_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 1000,
				
			]
		);
		$this->add_control(
			'animation_speed',
			[
				'label' => __( 'Animation Speed', 'avo_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 1000,
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		
		$this->add_control(
			'show_line',
			[
				'label' => __( 'Show Line','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'show' => __( 'Show','avo_plg' ),
					'hide' => __( 'Hide','avo_plg' ),
				],
				'default' => 'hide',
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		$this->add_control(
			'animation_type',
			[
				'label' => __( 'Animation type','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'true' => __( 'Fade','avo_plg' ),
					'false' => __( 'Slide','avo_plg' ),
				],
				'default' => 'true',
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		
		$this->add_control(
			'pos_line',
			[
				'label' => __( 'Line Position','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'top' => __( 'Top','avo_plg' ),
					'bottom' => __( 'Bottom','avo_plg' ),
				],
				'default' => 'bottom',
				'condition' => [
					'show_line' => 'show',
				],
			]
			
		);
		
		$this->add_control(
			'show_arrows',
			[
				'label' => __( 'Show Arrows','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'visible' => __( 'Show','avo_plg' ),
					'hidden' => __( 'Hide','avo_plg' ),
				],
				'default' => 'visible',
				'selectors' => [
					'{{WRAPPER}} .slider .slick-arrow' => 'visibility: {{VALUE}};', 
					'{{WRAPPER}} .swiper-nav-ctrl' => 'visibility: {{VALUE}};',
					'{{WRAPPER}} .setwo' => 'visibility: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'show_dots',
			[
				'label' => __( 'Show Dots','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'visible' => __( 'Show','avo_plg' ),
					'hidden' => __( 'Hide','avo_plg' ),
				],
				'default' => 'visible',
				'selectors' => [
					'{{WRAPPER}} .slider .slick-dots' => 'visibility: {{VALUE}};',
				],
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		$this->add_control(
			'show_paging',
			[
				'label' => __( 'Show Paging','avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'visible' => __( 'Show','avo_plg' ),
					'hidden' => __( 'Hide','avo_plg' ),
				],
				'default' => 'visible',
				'selectors' => [
					'{{WRAPPER}} .slider .custom-paging' => 'visibility: {{VALUE}};',
					'{{WRAPPER}} .swiper-pagination' => 'visibility: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'animate_lines',
			[
				'label' => __( 'Hide animated lines', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'selectors' => [
					'{{WRAPPER}} .line-item' => 'display: none',
				],
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		
		$this->add_responsive_control(
			'align',
			[
				'label' => __( 'Slider Alignment', 'avo_plg' ),
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
					'{{WRAPPER}} .slider-box' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'slider_style' => array('1','2','3','4','5')
				],
			]
		);
		$this->add_control(
			'slider_mask',
			[
				'label' => __( 'Overlay Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .slider-mask' => 'background: {{VALUE}};',
					'{{WRAPPER}} .swiper-slide .bg-img:after' => 'background: {{VALUE}} !important;',
				],
				'condition' => [
					'slider_style' => array('1','2','3','4','5','6','7','9')
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
		$settings = $this->get_settings_for_display();
		$avo_rtl = $settings['rtl'] ? ' rtl' : '';
        $speed    = $settings['slider_speed'] ? $settings['slider_speed'] : 1000;
        $splitting = 'yes' == $settings['splitting'] ? 'data-splitting' : '';
        $parallax = 'yes' == $settings['parallax'] ? 'true' : 'false';
        $autoplay = 'yes' == $settings['autoplay'] ? 'true' : 'false';
        $loop     = 'yes' == $settings['loop'] ? 'true'     : 'false';
		

		$style = $settings['slider_style'];

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


