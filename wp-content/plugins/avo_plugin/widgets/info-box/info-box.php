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
class Avo_InfoBox extends Widget_Base {

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
		return 'avo-infobox';
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
		return __( 'Avo Info Box','avo_plg' );
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
		return 'fa fa-sun-o';
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
			'icon_box_style',
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

				],
				'default' => '5',
			]
		);
 
		$this->add_control(
			'box_image_icon',
			[
				'label' => __( 'Media Type', 'avo_plg' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'none' => [
						'title' => __( 'None', 'avo_plg' ),
						'icon' => 'fa fa-ban',
					],
					'icon' => [
						'title' => __( 'Icon', 'avo_plg' ),
						'icon' => 'fa fa-smile-o',
					],
					'image' => [
						'title' => __( 'Image', 'avo_plg' ),
						'icon' => 'fa fa-image',
					],
					'morph' => [
						'title' => __( 'Morph', 'avo_plg' ),
						'icon' => 'fa fa-superpowers',
					],

				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .box-with-icon' => 'text-align: {{VALUE}};',
				],
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
                    'value' => '',
				],
				'condition'	=> [
					'box_image_icon'	=> 'icon'
				]
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
				'condition'	=> [
					'box_image_icon'	=> 'image'
				]
            ]
        );
		
		$this->add_control(
			'info_box_bg',
			[
				'label' => __( 'Color level', 'avo_plg' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'cl0' => [
						'title' => __( 'First', 'avo_plg' ),
						'icon' => 'fa fa-battery-empty',
					],
					'cl1' => [
						'title' => __( 'First', 'avo_plg' ),
						'icon' => 'fa fa-battery-quarter',
					],
					'cl2' => [
						'title' => __( 'Two', 'avo_plg' ),
						'icon' => 'fa fa-battery-half',
					],
					'cl3' => [
						'title' => __( 'Three', 'avo_plg' ),
						'icon' => 'fa fa-battery-three-quarters',
					],

				],
				'default' => 'cl1',
				'condition' => [
					'icon_box_style' => array( '5','6')
				],

			]
		);
		
		$this->add_control(
			'title',
			[
				'label' => __( 'Title','avo_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => __( 'This is the heading', 'avo_plg' ),
				'condition' => [
					'icon_box_style' => array( '1', '2', '3', '4', '5', '6', '7','8' )
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
					'icon_box_style' => array( '1', '2', '3', '4' )
				],
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
								'condition' => [
					'icon_box_style' => array( '1', '2', '3', '4', '5' )
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
				'condition' => [
					'icon_box_style' => array( '1', '2', '3', '4','8' )
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
					'icon_box_style' => array( '1', '2', '3', '4', '5', '7','8' )
				],
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
                'default' => 'center',
				'condition' => [
					'icon_box_style' => array( '8' )
				],
            ]
        );

		$this->add_control(
			'icon_btn',
			[
				'label' =>esc_html__( 'Button Icon', 'avo_plg' ),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'avo_btn_icon',
				'label_block' => true,
				'default' => [
                    'value' => '',
				],
				'condition' => [
					'icon_box_style' => array( '1', '2', '3', '4', '5','7' )
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
					'icon_box_style' => array( '1', '2', '3', '4', '5' )
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
					'icon_box_style' => array( '1', '2', '3', '4', '5' )
				],
				'selectors' => [
					'{{WRAPPER}} .feature-btn .feature-btn-align-icon-right' => 'margin-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .feature-btn .feature-btn-align-icon-left' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		
		$this->end_controls_section();

		$this->start_controls_section(
			'box_settings',
			[
				'label' => __( 'Box Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs( 'tabs_box_style' );

		$this->start_controls_tab(
			'tab_box_normal',
			[
				'label' => __( 'Normal', 'avo_plg' ),
			]
		);

		$this->add_control(
			'box_opacity',
			[
				'label' => __( 'Opacity', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 1,
						'min' => 0.10,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .box-with-icon' => 'opacity: {{SIZE}};',
				],
			]
		);
		
		$this->add_control(
			'box_color',
			[
				'label' => __( 'Background Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .box-with-icon' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .info-box' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'boxbrd_color',
			[
				'label' => __( 'Border Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .box-with-icon' => 'border-color: {{VALUE}};',

				],
			]
		);

		$this->add_responsive_control(
			'box_padding_all',
			[
				'label' => __( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'condition' => [
					'icon_style' => 'left',
				],
				'selectors' => [
					'{{WRAPPER}} .box-with-icon' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_box_hover',
			[
				'label' => __( 'Hover', 'avo_plg' ),
			]
		);
		$this->add_control(
			'hover_box_opacity',
			[
				'label' => __( 'Opacity', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 1,
						'min' => 0.10,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .box-with-icon:hover' => 'opacity: {{SIZE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		
		$this->start_controls_section(
			'title_settings',
			[
				'label' => __( 'Title Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'title_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .icon-title',
			]
		);
		
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .info-box-title' => 'color: {{VALUE}};', 
				],
			]
		);
		
		$this->add_responsive_control(
			'title_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'condition' => [
					'icon_style' => 'left',
				],
				'selectors' => [
					'{{WRAPPER}} .icon-title' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'title_padding',
			[
				'label' => __( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'condition' => [
					'icon_style' => 'left',
				],
				'selectors' => [
					'{{WRAPPER}} .icon-title' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'subtitle_settings',
			[
				'label' => __( 'Subtitle Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'subtitle_typography',
				'label'     => __( 'Subtitle Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .icon-subtitle',
			]
		);
		
		$this->add_control(
			'subtitle_color',
			[
				'label' => __( 'Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .info-box-subtitle' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'text_settings',
			[
				'label' => __( 'Text Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'text_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .item-box p.info-box-text, .icon-text',
			]
		);
		
		$this->add_control(
			'text_color',
			[
				'label' => __( 'Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .info-box-text' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'text_margin',
			[
				'label' => __( 'Margin)', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .icon-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'icon_settings',
			[
				'label' => __( 'Icon Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs( 'tabs_icon_style' );

		$this->start_controls_tab(
			'tab_icon_normal',
			[
				'label' => __( 'Normal', 'avo_plg' ),
			]
		);
		
		$this->add_responsive_control(
			'icon_size',
			[
				'label' => __( 'Size','avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .avo-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'icon_height',
			[
				'label' => __( 'Icon height','avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .avo-icon' => 'width: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}};line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'icon_bg_size',
			[
				'label' => __( 'Background Size','avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .avo-icon' => 'width: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}};line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'icon_border',
			[
				'label' => __( 'Border Radius', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .avo-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'icon_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'allowed_dimensions' => 'vertical',
				'condition' => [
					'icon_style' => 'center',
				],
				'placeholder' => [
					'top' => '',
					'right' => 'auto',
					'bottom' => '',
					'left' => 'auto',
				],
				'selectors' => [
					'{{WRAPPER}} .avo-icon' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'icon_margin_left',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'condition' => [
					'icon_style' => 'left',
				],
				'selectors' => [
					'{{WRAPPER}} .avo-icon' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		
		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .info-box-icon' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'iconbg_color',
			[
				'label' => __( 'Background Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .avo-icon' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'icon_bordering',
				'placeholder' => '1px',
				'default' => '',
				'selector' => '{{WRAPPER}} .avo-icon',
				'separator' => 'before',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_icon_hover',
			[
				'label' => __( 'Hover', 'avo_plg' ),
			]
		);
		$this->add_control(
			'hover_iconbg_color',
			[
				'label' => __( 'Background Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .box-with-icon:hover .avo-icon' => 'background: {{VALUE}};',
				],
			]
		);



		$this->end_controls_tab();
		$this->end_controls_tabs();


		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'btn_settings',
			[
				'label' => __( 'Button Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'btn_typography',
				'label'     => __( 'Typography', 'avo_plg' ),
				'selector'  => '{{WRAPPER}} .feature-btn',
			]
		);
		
		$this->add_responsive_control(
			'btn_margin',
			[
				'label' => __( 'Margin', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .feature-btn' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .feature-btn' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .feature-btn' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'btn_color_section',
			[
				'label' => __( 'Button Color Scheme Setting','avo_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'btn_color',
			[
				'label' => __( 'Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .feature-btn' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'btn_color_hover',
			[
				'label' => __( 'Color on Hover','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .feature-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'btn_bg',
			[
				'label' => __( 'Background Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .feature-btn' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .feature-btn::before' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'btn_bg_hover',
			[
				'label' => __( 'Background Color on Hover','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .feature-btn:hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .feature-btn::after' => 'background-color: {{VALUE}};',
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
					'{{WRAPPER}} .feature-btn' => 'border-width:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .feature-btn:hover' => 'border-width:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'btn_border_color',
			[
				'label' => __( 'Border Color','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .feature-btn' => 'border-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'btn_border_color_hover',
			[
				'label' => __( 'Border Color on  Hover','avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .feature-btn:hover' => 'border-color: {{VALUE}};',
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

		$this->add_render_attribute( 'subtitle','class','box-sub-title' );
		$this->add_inline_editing_attributes( 'title' , 'basic');
		$this->add_inline_editing_attributes( 'subtitle','basic' );
		$this->add_inline_editing_attributes( 'text','basic' );
		$this->add_render_attribute( 'title','class','icon-title' );
		$this->add_render_attribute( 'subtitle','class','icon-subtitle' );
		$this->add_render_attribute( 'text','class','icon-text' );
		$this->add_render_attribute( 'icon-align', 'class', 'feature-btn-align-icon-' . $settings['icon_align'] );
		$this->add_render_attribute( 'icon-align', 'class', 'feature-btn-button-icon' );
		$this->add_render_attribute( 'icon');
		// Icons_Manager::render_icon( $settings['icon'] );

       // Styles selections.
		$style = $settings['icon_box_style'];
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


