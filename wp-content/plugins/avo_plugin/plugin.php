<?php
namespace AvoPlugin;

use AvoPlugin\Widgets\Dsc_Slider;
use AvoPlugin\Widgets\Avo_Showcase;
use AvoPlugin\Widgets\Avo_Logo;
use AvoPlugin\Widgets\Avo_Menu;
use AvoPlugin\Widgets\Avo_Image;
use AvoPlugin\Widgets\Avo_Header_Search;
use AvoPlugin\Widgets\Avo_Portfolio;
use AvoPlugin\Widgets\Avo_Product;
use AvoPlugin\Widgets\Avo_Title;
use AvoPlugin\Widgets\Avo_Countdown;
use AvoPlugin\Widgets\Avo_Counter;
use AvoPlugin\Widgets\Avo_Team;
use AvoPlugin\Widgets\Avo_Skills;
use AvoPlugin\Widgets\Avo_Progress_Bar;
use AvoPlugin\Widgets\Avo_Fancy;
use AvoPlugin\Widgets\Avo_Testimonial;
use AvoPlugin\Widgets\Avo_Button;
use AvoPlugin\Widgets\Avo_Client;
use AvoPlugin\Widgets\Avo_Post_List;
use AvoPlugin\Widgets\Avo_InfoBox;
use AvoPlugin\Widgets\Avo_ImageBox;
use AvoPlugin\Widgets\Avo_WorkProcess;
use AvoPlugin\Widgets\Avo_ImageBoxSlider;
use AvoPlugin\Widgets\Avo_ImageComparisonSlider;
use AvoPlugin\Widgets\Avo_Featured;
// use AvoPlugin\Widgets\Avo_Flip_Box;
use AvoPlugin\Widgets\Avo_Post;
use AvoPlugin\Widgets\Avo_Post_Two;
use AvoPlugin\Widgets\Avo_Contact;
use AvoPlugin\Widgets\Avo_Offcanvas;
use AvoPlugin\Widgets\Avo_Related_Portfolios;




if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Main Plugin Class
 *
 * Register new elementor widget.
 *
 * @since 1.0.0
 */
class AvoPlugin {

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {
		$this->init();
		$this->add_actions();
		add_filter( 'elementor/icons_manager/additional_tabs',  [$this, 'additional_tabs'] );
		add_filter( 'elementor/icons_manager/additional_tabs',  [$this, 'peicon_tab']);
	}
	const VERSION = '1.0.0';
	
     public function additional_tabs($tabs)
      {
        $json_url =AVO_URL.'assets/fonts/flaticon/flaticon.json';

        $flaticon = [
          'name'          => 'flaticon',
          'label'         => esc_html__( 'Avo Icons', 'avo_plg' ),
          'url'           => false,
          'enqueue'       => false,
          'prefix'        => '',
          'displayPrefix' => '',
          'labelIcon'     => 'fab fa-font-awesome-alt',
          'ver'           => '1.0.0',
          'fetchJson'     => $json_url,
        ];
        array_push( $tabs, $flaticon);


        return $tabs;
      }
     
     public function peicon_tab($petab)
      {
        $pe_json_url =AVO_URL.'assets/fonts/peicon/peicon.json';

        $peicon = [
          'name'          => 'peicon',
          'label'         => esc_html__( 'Pe Icons', 'avo_plg' ),
          'url'           => false,
          'enqueue'       => false,
          'prefix'        => '',
          'displayPrefix' => '',
          'labelIcon'     => 'fab fa-font-awesome-alt',
          'ver'           => '1.0.0',
          'fetchJson'     => $pe_json_url,
        ];
        array_push( $petab, $peicon);


        return $petab;
      }

	/**
	 * Add Actions
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	public function add_actions() {
		//register all script 
		add_action( 'elementor/widgets/widgets_registered',[ $this, 'on_widgets_registered' ] );
		//blog masonry script 
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-blog-masonry',AVO_URL .'widgets/js/blog-mason.js', array('jquery'), null, true  );} ); 

		//Slick slider script
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('jquery-slick',AVO_URL .'widgets/js/slick.min.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-animation',AVO_URL .'widgets/js/slick-animation.js', array('jquery'), null, true  );} );

		//Swiper slider script
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('jquery-swiper',AVO_URL .'widgets/js/swiper.min.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-slider-script',AVO_URL .'widgets/js/slider.js', array('jquery'), null, true  );} );

		//Animated headline
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('animated-headline',AVO_URL .'widgets/js/animated.headline.js', array('jquery'), null, true  );} );
		
		//WOW Animate
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('wow',AVO_URL .'widgets/js/wow.min.js', array('jquery'), null, true  );} );

		//simpleParallax
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('simpleParallax',AVO_URL .'widgets/js/simpleParallax.min.js', array('jquery'), null, true  );} );

		//simpleParallax
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('splitting',AVO_URL .'widgets/js/splitting.min.js', array('jquery'), null, true  );} );


		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('jquery-waypoints',AVO_URL .'widgets/js/jquery.waypoints.min.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-skills',AVO_URL .'widgets/js/skills.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-imgbox-slider',AVO_URL .'widgets/js/imgbox-slider.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-image-comparison-slider',AVO_URL .'widgets/js/image-comparison-slider.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-work-process',AVO_URL .'widgets/js/work-process.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-blog-slider-script',AVO_URL .'widgets/js/blog-slider.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('prefixfree',AVO_URL .'widgets/js/prefixfree.min.js', array('jquery'), null, true  );} );
		//gallery popup 

		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-gallery-popup',AVO_URL .'widgets/js/popup-gallery.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-post-list',AVO_URL .'widgets/js/post-list.js', array('jquery'), null, true  );} ); 
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-blog-script',AVO_URL .'widgets/js/blog-carousel.js', array('jquery'), null, true  );} ); 
		
		//gallery  masonry
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-masonry-gallery',AVO_URL .'widgets/js/mason-gallery.js', array('jquery'), null, true  );} );
		
		//share script
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-share',AVO_URL .'widgets/js/share.js', array('jquery'), null, true  );} );

		//Portfolio 
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-portfolio',AVO_URL .'widgets/js/portfolio.js', array('jquery'), null, true  );} );
		
		//testmonial
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-testimonial',AVO_URL .'widgets/js/testimonial.js', array('jquery'), null, true  );} );
		//Header search
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-header-search',AVO_URL .'widgets/js/header-search.js', array('jquery'), null, true  );} );
		//Header Offcanvas
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('avo-header-offcanvas',AVO_URL .'widgets/js/header-offcanvas.js', array('jquery'), null, true  );} );

		add_action( 'wp_enqueue_scripts', function() {wp_enqueue_style('avo-plugin-style', AVO_URL . 'widgets/css/style.css', array(), '1.0.0', 'all');} );
          // Slick responsive
		// add_action( 'wp_enqueue_scripts', function() {wp_enqueue_script( 'slick-slider-core' ); wp_enqueue_style( 'slick-slider-core-theme' );}, 11 );
		// add_action( 'wp_enqueue_scripts', function() {wp_deregister_script( 'slick-slider-core' ); wp_deregister_style( 'slick-slider-core-theme' );} , 11); 

		
		// Styles
		add_action( 'elementor/frontend/after_enqueue_styles', function() {  wp_enqueue_style('avo-style-addons',AVO_URL .'assets/fonts/flaticon/flaticon.css', array(), null, 'all'  );} );
		add_action( 'elementor/frontend/after_enqueue_styles', function() {  wp_enqueue_style('peicon-style-addons',AVO_URL .'assets/fonts/peicon/pe-icon-7-stroke.css', array(), null, 'all'  );} );
		
		// Icon fonts
		add_action( 'wp_enqueue_scripts', function() {wp_enqueue_style('linea_arrows', AVO_URL . '/assets/fonts/linea/arrows/css/style.css', array(), '', 'all');} );
		add_action( 'wp_enqueue_scripts', function() {wp_enqueue_style('linea_basic', AVO_URL . '/assets/fonts/linea/basic/css/style.css', array(), '', 'all');} );
		add_action( 'wp_enqueue_scripts', function() {wp_enqueue_style('linea_basic_2', AVO_URL . '/assets/fonts/linea/basic_ela/css/style.css', array(), '', 'all');} );
		add_action( 'wp_enqueue_scripts', function() {wp_enqueue_style('linea_ecommerce', AVO_URL . '/assets/fonts/linea/basic/css/style.css', array(), '', 'all');} );
		add_action( 'wp_enqueue_scripts', function() {wp_enqueue_style('linea_music', AVO_URL . '/assets/fonts/linea/basic/css/style.css', array(), '', 'all');} );
		add_action( 'wp_enqueue_scripts', function() {wp_enqueue_style('linea_software', AVO_URL . '/assets/fonts/linea/software/css/style.css', array(), '', 'all');} );
		add_action( 'wp_enqueue_scripts', function() {wp_enqueue_style('linea_weather', AVO_URL . '/assets/fonts/linea/weather/css/style.css', array(), '', 'all');} );

		
		//add_action( 'wp_enqueue_scripts', function() {wp_enqueue_script('jquery-swiper', AVO_URL . 'widgets/js/swiper.min.js', array(), '', 'all');} );
		



		// //Styles
		// add_action( 'elementor/frontend/after_enqueue_styles', function() {  wp_enqueue_style('avo-frontend',AVO_URL .'assets/css/frontend.css', array(), null, 'all'  );} ); 
		
	}

	public function widget_scripts(){
		// custom-scripts 
        wp_enqueue_script('avo-addons-custom-scripts', AVO_URL.'assets/front/js/custom-scripts.js', [ 'jquery' ], self::VERSION, true );

        wp_enqueue_script('swiper', AVO_URL . 'widgets/js/swiper.min.js', [ 'jquery' ], self::VERSION, true );
        wp_enqueue_script('wow', AVO_URL . 'widgets/js/wow.min.js', [ 'jquery' ], self::VERSION, true );
        wp_enqueue_script('avo-portfolio', AVO_URL . 'widgets/js/portfolio.js', [ 'jquery' ], self::VERSION, true );

	}
	public function init(){
		// Register Widget Scripts
        add_action( 'elementor/frontend/after_enqueue_scripts', [ $this, 'widget_scripts' ] );

        add_action( 'wp_enqueue_scripts', [ $this, 'widget_scripts' ] );
	}

	/**
	 * On Widgets Registered
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function on_widgets_registered() {
		$this->includes();
		$this->register_widget();
	}

	/**
	 * Includes
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function includes() {
		require __DIR__ . '/widgets/slider/dsc-slider.php';
		require __DIR__ . '/widgets/showcase/showcase.php';
		require __DIR__ . '/widgets/logo/logo.php';
		require __DIR__ . '/widgets/menu/menu.php';
		require __DIR__ . '/widgets/image/image.php';
		require __DIR__ . '/widgets/header-search/header-search.php';
		require __DIR__ . '/widgets/portfolio/portfolio.php';
		require __DIR__ . '/widgets/product/product.php';
		require __DIR__ . '/widgets/header/header.php';
		require __DIR__ . '/widgets/countdown/countdown.php';
		require __DIR__ . '/widgets/counter/counter.php';
		require __DIR__ . '/widgets/team/team.php';
		require __DIR__ . '/widgets/skills/skills.php';
		require __DIR__ . '/widgets/progress-bar/progress-bar.php';
		require __DIR__ . '/widgets/fancy/fancy.php';
		require __DIR__ . '/widgets/testimonial/testimonial.php';
		require __DIR__ . '/widgets/button/button.php';
		require __DIR__ . '/widgets/client/client.php';
		require __DIR__ . '/widgets/post-list/post-list.php';
		require __DIR__ . '/widgets/post-list/post-one.php';
		require __DIR__ . '/widgets/post-list/post-two.php';
		require __DIR__ . '/widgets/info-box/info-box.php';
		require __DIR__ . '/widgets/image-box/image-box.php';
		require __DIR__ . '/widgets/process/work-process.php';
		require __DIR__ . '/widgets/image-box-slider/imagebox-slider.php';
		require __DIR__ . '/widgets/image-comparison/image-comparison.php';
		require __DIR__ . '/widgets/featured/featured.php';
		require __DIR__ . '/widgets/contact/contact.php';
		require __DIR__ . '/widgets/offcanvas/offcanvas.php';
		require __DIR__ . '/widgets/related-portfolios/related-portfolios.php';


		
	}
	

	/**
	 * Register Widget
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function register_widget() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Dsc_Slider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Showcase() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Logo() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Menu() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Image() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Header_Search() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Portfolio() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Product() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Title() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Countdown() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Counter() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Team() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Skills() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Progress_Bar() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Fancy() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Testimonial() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Button() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Client() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Post_List() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_InfoBox() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_ImageBox() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_WorkProcess() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_ImageBoxSlider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_ImageComparisonSlider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Featured() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Post() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Post_two() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Contact() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Offcanvas() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Avo_Related_Portfolios() );	
	}

}

new AvoPlugin();



