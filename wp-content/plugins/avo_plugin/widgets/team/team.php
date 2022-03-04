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
class Avo_Team extends Widget_Base {

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
		return 'avo-team';
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
		return __( 'Avo Team', 'avo_plg' );
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
				'label' => __( 'Team Settings', 'avo_plg' ),
			]
		);
		$this->add_control(
			'team_style',
			[
				'label' => __( 'Style', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'style1' => __( 'Style 1', 'avo_plg' ),
					'style2' => __( 'Style 2', 'avo_plg' ),
					'style3' => __( 'Style 3', 'avo_plg' ),
					'style4' => __( 'Style 4', 'avo_plg' ),
				],
				'default' => 'style1',
			]
		);
		
		$this->add_control(
            'title',
            [
                'label' => __( 'Team Title', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( 'Team Name', 'avo_plg' ),
				'label_block' => true,
				'condition' => [
					'team_style' => array('style1','style2','style3','style4')
				],
            ]
        );
		
		$this->add_control(
            'text',
            [
                'label' => __( 'Team Position', 'avo_plg'),
                'type' => Controls_Manager::TEXT,
				'default' => __( 'Web Designer', 'avo_plg' ),
				'label_block' => true,
				'condition' => [
					'team_style' => array('style1','style2','style3','style4')
				],
            ]
        );
		
		$this->add_control(
            'image',
            [
                'label' => __( 'Team Image', 'avo_plg' ),
                'type' => Controls_Manager::MEDIA,
				'default' => [
							'url' => Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'team_style' => array('style1','style2','style3')
				],
            ]
        );
		
		$this->add_responsive_control(
			'team_height',
			[
				'label' => __( 'Team Image Height', 'avo_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .port-box' => 'padding: {{SIZE}}% 0;',
				],
				'condition' => [
					'team_style' => array('style1','style2','style3')
				],
			]
		);
		
		$this->add_responsive_control(
			'image_position',
			[
				'label' => __( 'Team Image Position', 'avo_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'top center' => __( 'Top', 'avo_plg' ),
					'bottom center' => __( 'Bottom', 'avo_plg' ),
					'center center' => __( 'Center', 'avo_plg' ),
				],
				'default' => 'center center',
				'selectors' => [
					'{{WRAPPER}} .port-img' => 'background-position: {{VALUE}};',
				],
				'condition' => [
					'team_style' => array('style1','style2','style3')
				],
			]
		);
		
		 
		$this->add_control(
			'team_icon',
			[
				'label' => __( 'Team Social Icon', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'condition' => [
					'team_style' => array('style1','style2','style3')
				],
				'default' => [
					[
						'icon' => 'fa fa-facebook',
					],
					[
						'icon' => 'fa fa-twitter',
					],
					[
						'icon' => 'fa fa-instagram',
					],
				],
				'fields' => [
					[
						'name' => 'link',
						'label' => __( 'Social Link', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Your social link..', 'avo_plg' ),
					],
					
					[
						'name' => 'icon',
						'label' => __( 'Icon', 'avo_plg' ),
						'type' => Controls_Manager::ICON,
						'label_block' => true,
						'default' => 'fa fa-facebook',
						'include' => [
							'fa fa-apple',
							'fa fa-behance',
							'fa fa-bitbucket',
							'fa fa-codepen',
							'fa fa-delicious',
							'fa fa-digg',
							'fa fa-dribbble',
							'fa fa-envelope',
							'fa fa-facebook',
							'fa fa-flickr',
							'fa fa-foursquare',
							'fa fa-github',
							'fa fa-google-plus',
							'fa fa-houzz',
							'fa fa-instagram',
							'fa fa-jsfiddle',
							'fa fa-linkedin',
							'fa fa-medium',
							'fa fa-odnoklassniki',
							'fa fa-pinterest',
							'fa fa-product-hunt',
							'fa fa-reddit',
							'fa fa-shopping-cart',
							'fa fa-slideshare',
							'fa fa-snapchat',
							'fa fa-soundcloud',
							'fa fa-spotify',
							'fa fa-stack-overflow',
							'fa fa-telegram',
							'fa fa-tripadvisor',
							'fa fa-tumblr',
							'fa fa-twitch',
							'fa fa-twitter',
							'fa fa-vimeo',
							'fa fa-vk',
							'fa fa-weibo',
							'fa fa-weixin',
							'fa fa-whatsapp',
							'fa fa-wordpress',
							'fa fa-xing',
							'fa fa-yelp',
							'fa fa-youtube',
						],
					],
				],
				'title_field' => '<i class="{{ icon }}"></i> {{{ icon.replace( \'fa fa-\',\'\' ).replace( \'-\',\' \' ).replace( /\b\w/g, function( letter ){ return letter.toUpperCase() } ) }}}',
			]
		);

		

		$this->add_control(
			'team_list',
			[
				'label' => __( 'Team List', 'avo_plg' ),
				'type' => Controls_Manager::REPEATER,
				'condition' => [
					'team_style' => array( 'style4')
				],
				'default' => [
					[
						'title' => 'Name',
						'position' => 'Position',
					],
					[
						'title' => 'Name',
						'position' => 'Position',
					],
					[
						'title' => 'Name',
						'position' => 'Position',
					],
					[
						'title' => 'Name',
						'position' => 'Position',
					],
				],
				'fields' => [
					[
						'name' => 'title',
						'label' => __( 'Testimonial Name', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Testimonial Name..', 'avo_plg' ),
					],
					
					[
						'name' => 'position',
						'label' => __( 'Testimonial Position', 'avo_plg' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Testimonial Position..', 'avo_plg' ),
					],
					[
						'name' => 'image',
						'label' => __( 'Client Image', 'avo_plg' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],

					[
						'name' => 'Social_icons',
						'label' => __( 'Media Type', 'avo_plg' ),
						'type' => Controls_Manager::CHOOSE,
						'options' => [
							'1' => [
								'title' => __( 'None', 'avo_plg' ),
								'icon' => 'fab fa-facebook-f',
							],
							'2' => [
								'title' => __( 'Icon', 'avo_plg' ),
								'icon' => 'fab fa-twitter',
							],
							'3' => [
								'title' => __( 'Image', 'avo_plg' ),
								'icon' => 'fab fa-behance',
							],
							'4' => [
								'title' => __( 'Morph', 'avo_plg' ),
								'icon' => 'fab fa-linkedin-in',
							],

						],
						'default' => '',
					],

					[
						'name' => 'Social_1',
						'label' => __( 'Social 1', 'avo_plg' ),
						'type' => Controls_Manager::ICONS,
						'fa4compatibility' => 'social',
						'label_block' => true,
						'default' => [
							'value' => 'fab fa-wordpress',
							'library' => 'fa-brands',
						],
						'condition'	=> [
							'Social_icons'	=> '1'
						]
					],
					[
						'name' => 'Social_1_link',
						'label' => __( 'Social Link 1', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Your social link..', 'avo_plg' ),
						'condition'	=> [
							'Social_icons'	=> '1'
						]
					],
					[
						'name' => 'Social_2',
						'label' => __( 'Social 2', 'avo_plg' ),
						'type' => Controls_Manager::ICONS,
						'fa4compatibility' => 'avo_btn_icon',
						'label_block' => true,
						'default' => [
							'value' => 'fab fa-twitter',
							'library' => 'fa-brands',
						],
						'condition'	=> [
							'Social_icons'	=> '2'
						]
					],
					[
						'name' => 'Social_2_link',
						'label' => __( 'Social Link 2', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Your social link..', 'avo_plg' ),
						'condition'	=> [
							'Social_icons'	=> '2'
						]
					],
					[
						'name' => 'Social_3',
						'label' => __( 'Social 3', 'avo_plg' ),
						'type' => Controls_Manager::ICONS,
						'fa4compatibility' => 'avo_btn_icon',
						'label_block' => true,
						'default' => [
							'value' => 'fab fa-behance',
							'library' => 'fa-brands',
						],
						'condition'	=> [
							'Social_icons'	=> '3'
						]
					],
					[
						'name' => 'Social_3_link',
						'label' => __( 'Social Link 3', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Your social link..', 'avo_plg' ),
						'condition'	=> [
							'Social_icons'	=> '3'
						]
					],
					[
						'name' => 'Social_4',
						'label' => __( 'Social 4', 'avo_plg' ),
						'type' => Controls_Manager::ICONS,
						'fa4compatibility' => 'avo_btn_icon',
						'label_block' => true,
						'default' => [
							'value' => 'fab fa-linkedin-in',
							'library' => 'fa-brands',
						],
						'condition'	=> [
							'Social_icons'	=> '4'
						]
					],
					[
						'name' => 'Social_4_link',
						'label' => __( 'Social Link 4', 'avo_plg' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'Your social link..', 'avo_plg' ),
						'condition'	=> [
							'Social_icons'	=> '4'
						]
					],

				],
				'title_field' => '{{ title }}',
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
	
		$settings = $this->get_settings();
		
		
		$style = $settings['team_style'];

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


