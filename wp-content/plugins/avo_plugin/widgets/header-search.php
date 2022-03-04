<?php
namespace AvoPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Scheme_Typography;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Icons_Manager;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.0.0
 */
class Avo_Header_Search extends Widget_Base {

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
		return 'avo-header-search';
	}
		//script depend
	public function get_script_depends() { return [ 'avo-header-search' ]; }

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
		return __( 'Avo Header search', 'avo_plg' );
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
		return 'eicon-search';
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
				'label' => __( 'Search Settings', 'avo_plg' ),
			]
		);
		
		 

        $this->add_control(
            'avo_search_icons',
            [
                'label' => esc_html__('Select Icon', 'avo_plg'),
                'fa4compatibility' => 'avo_search_icon',
				'default' => [
					'value' => 'fa fa-search',
					'library' => 'fa-solid',
				],
                'label_block' => true,
                'type' => Controls_Manager::ICONS,

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
		
		
		$this->add_control(
			'color_icon',
			[
				'label' => __( 'Content Background', 'avo_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#eee',
				'selectors' => [
					'{{WRAPPER}} .header-search-icon a i' => 'color: {{VALUE}};',
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
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .header-search-icon a.search' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		
		$this->end_controls_section();

        $this->start_controls_section(
            'avo_header_search_section_tab_style',
            [
                'label' => esc_html__('Header Search', 'avo_plg'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        // box shadow
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(), [
                'name'       => 'avo_header_search',
                'selector'   => '{{WRAPPER}} .header-search-icon a.search',

            ]
        );
        // border radius
        $this->add_control(
            'avo_header_border_radius',
            [
                'label' => esc_html__( 'Border radius', 'avo_plg' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '50',
                    'right' => '50',
                    'bottom' => '50' ,
                    'left' => '50',
                    'unit' => '%',
                ],
                'selectors' => [
                    '{{WRAPPER}} .header-search-icon a.search' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'avo_search_margin',
            [
                'label'         => esc_html__('Margin', 'avo_plg'),
                'type'          => Controls_Manager::DIMENSIONS,
                'size_units'    => ['px', 'em'],
                'default' => [
                    'top' => '5',
                    'right' => '5',
                    'bottom' => '5' ,
                    'left' => '5',
                ],
                'selectors' => [
                    '{{WRAPPER}} .header-search-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
			'avo_search_padding',
			[
				'label' => esc_html__( 'Padding', 'avo_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '0',
                    'right' => '0',
                    'bottom' => '0' ,
                    'left' => '0',
                ],
				'selectors' => [
					'{{WRAPPER}} .header-search-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


        $this->add_control(
			'header-search-icon a.search',
			[
				'label' => esc_html__( 'Use Height Width', 'avo_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'avo_plg' ),
				'label_off' => esc_html__( 'Hide', 'avo_plg' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_responsive_control(
            'avo_search_width',
            [
                'label'         => esc_html__('Width', 'avo_plg'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => '40',
                ],
                'selectors' => [
                    '{{WRAPPER}} .header-search-icon a.search' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    '.header-search-icon a.search' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'avo_search_height',
            [
                'label'         => esc_html__('Height', 'avo_plg'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => '40',
                ],
                'selectors' => [
                    '{{WRAPPER}} .header-search-icon a.search' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    '.header-search-icon a.search' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'avo_search_line_height',
            [
                'label'         => esc_html__('Line Height', 'avo_plg'),
                'type'          => Controls_Manager::SLIDER,
                'size_units'    => ['px', 'em', '%'],
                'default' => [
                    'unit' => 'px',
                    'size' => '40',
                ],
                'selectors' => [
                    '{{WRAPPER}} .header-search-icon a.search' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    '.header-search-icon a.search' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'avo_search_icon_text_align',
            [
                'label' => esc_html__( 'Alignment', 'avo_plg' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'avo_plg' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'avo_plg' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'avo_plg' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .header-search-icon' => 'text-align: {{VALUE}};',
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
	
	?>
        

         <!-- ===================================== 
        ==== Start Featured -->

		<div class="header-search-icon hidden-xs hidden-sm">
			<a class="search"  href="#">
				<?php Icons_Manager::render_icon( $settings['avo_search_icons'], [ 'aria-hidden' => 'true' ] );?>
			</a>
			<div class="black-search-block">
				<div class="black-search-table">
					<div class="black-search-table-cell">
						<div>
							<?php $avo_unique_id = avo_unique_id( 'search-form-' ); ?>
							<form role="search" method="get" id="<?php echo esc_attr( $avo_unique_id ); ?>" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="search" class="focus-input" placeholder="<?php echo esc_attr__('Type search keyword...','avo'); ?>" value="<?php get_search_query()?>" name="s">
								<input type="submit" class="searchsubmit" value="">
							</form>
						</div>
					</div>
				</div>
				<div class="close-black-block"><a href="#"><i class="fa fa-times"></i></a></div>
			</div>
		</div>

        <!-- End Featureds ====
        ======================================= -->
             
	<?php 
	
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


