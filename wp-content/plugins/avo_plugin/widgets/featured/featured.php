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
class Avo_Featured extends Widget_Base {

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
		return 'avo-featured';
	}
	//script depend
	public function get_script_depends() { return [ 'jquery-hover3d']; }

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
		return __( 'Avo Featured', 'avo_plg' );
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
				'label' => __( 'Featured Settings', 'avo_plg' ),
			]
		);

		$this->add_control(
			'featured_style',
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
            'title',
            [
                'label' => __( 'Name', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( 'Featured Name', 'avo_plg' ),
				'label_block' => true,
				'condition' => [
					'featured_style' => array( '1', '2','3')
				],
            ]
        );
		$this->add_control(
            'feature_1',
            [
                'label' => __( 'Feature 1', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( 'Featured 1', 'avo_plg' ),
				'label_block' => true,
				'condition' => [
					'featured_style' => array( '2')
				],
            ]
        );
		$this->add_control(
			'feature_1_link',
			[
				'label' => __( 'Feature 1 Link','avo_plg' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'Leave it blank if you don\'t want to use this button',
								'condition' => [
					'featured_style' => array( '2' )
				],
			]
		);
		$this->add_control(
            'feature_2',
            [
                'label' => __( 'feature 2', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( 'Featured 2', 'avo_plg' ),
				'label_block' => true,
				'condition' => [
					'featured_style' => array( '2')
				],
            ]
        );
		$this->add_control(
			'feature_2_link',
			[
				'label' => __( 'Feature 2 Link','avo_plg' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'Leave it blank if you don\'t want to use this button',
								'condition' => [
					'featured_style' => array( '2' )
				],
			]
		);

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'condition' => [
					'featured_style' => array( '1','3')
				],
            ]
        );
		
		
		$this->add_control(
            'image',
            [
                'label' => __( 'Featured Image', 'avo_plg' ),
                'type' => Controls_Manager::MEDIA,
				'default' => [
							'url' => Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'featured_style' => array('1','2','3')
				],
            ]
        );
		
		
		
		 
		$this->add_control(
			'featured_icon',
			[
				'label' => __( 'Featured Social Icon', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'condition' => [
					'featured_style' => array('1')
				],
				'default' => [
					[
						'icon' => 'fa fa-download',
					],
					[
						'icon' => 'fa fa-book',
					],
					[
						'icon' => 'fa fa-angle-double-right',
					],
				],
				'fields' => [
					[
						'name' => 'link',
						'label' => __( 'Icon link', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Your icon link..', 'avo_plg' ),
					],
					[
						'name' => 'mention',
						'label' => __( 'Mention', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'default' => __( 'Mention', 'avo_plg' ),
						'label_block' => true,
					],
					
					[
						'name' => 'icon',
						'label' => __( 'Icon', 'avo_plg' ),
						'type' => Controls_Manager::ICON,
						'label_block' => true,
						'default' => 'fa fa-download',
					],
				],
				'title_field' => '<i class="{{ icon }}"></i> {{{ icon.replace( \'fa fa-\',\'\' ).replace( \'-\',\' \' ).replace( /\b\w/g, function( letter ){ return letter.toUpperCase() } ) }}}',
			]
		);

		$this->add_control(
			'featured_list', 
			[
				'label' => __( 'List items', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'condition' => [
					'featured_style' => array('3')
				],
				'default' => [
					[
						'title' => 'fa fa-download',
					],
					[
						'title' => 'fa fa-book',
					],
					[
						'title' => 'fa fa-angle-double-right',
					],
				],
				'fields' => [
					[
						'name' => 'title',
						'label' => __( 'Title', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'default' => __( 'Title', 'avo_plg' ),
						'label_block' => true,
					],
					[
						'name' => 'text',
						'label' => __( 'Text', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'default' => __( 'Text', 'avo_plg' ),
						'label_block' => true,
					],
					[
						'name' => 'num',
						'label' => __( 'Number', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'default' => __( 'Number', 'avo_plg' ),
						'label_block' => true,
					],
				],
				'title_field' => '{{ title }}',
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
				'label' => __( 'Content Margin (on hover)', 'avo_plg' ),
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
				'label' => __( 'Content Padding (on hover)', 'avo_plg' ),
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
			'title_cl',
			[
				'label' => __( 'Title Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dbox-relative h3' => 'color: {{VALUE}};',
				],
			]
		);
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'sub_typo',
			[
				'label' => __( 'Text Content Settings', 'avo_plg' ),
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
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'icon_section_setting',
			[
				'label' => __( 'Icon Settings', 'avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Color', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .featured-sicon li a' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'icon_bg',
			[
				'label' => __( 'Background', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .featured-sicon li a' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'icon_radius',
			[
				'label' => __( 'Border Radius', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .featured-sicon li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'icon_size',
			[
				'label' => __( 'Size', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .featured-sicon li a' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'icon_padding',
			[
				'label' => __( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .featured-sicon li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'icon_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .featured-sicon li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'port_mask',
			[
				'label' => __( 'Mask Settings', 'avo_plg' ),
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
			'mask_color_opacity',
			[
				'label' => __( 'Mask Color Opacity(on hover)', 'avo_plg' ),
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
				'btn_color',
				[
					'label' => __( 'Button Settings', 'avo_plg' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'featured_style' => array('2')
					],
				]
			);
			
			
			$this->add_control(
				'btn1_bg',
				[
					'label' => __( 'Button 1 BG', 'avo_plg' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .avo-featured.style-2 .items .item-img .tlinks a.btn1' => 'background: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'btn1_color',
				[
					'label' => __( 'Button 1 color', 'avo_plg' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .avo-featured.style-2 .items .item-img .tlinks a.btn1' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'btn2_bg',
				[
					'label' => __( 'Button 2 BG', 'avo_plg' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .avo-featured.style-2 .items .item-img .tlinks a.btn2' => 'background: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'btn2_color',
				[
					'label' => __( 'Button 2 color', 'avo_plg' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .avo-featured.style-2 .items .item-img .tlinks a.btn2' => 'color: {{VALUE}};',
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
		$style = $settings['featured_style'];
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


