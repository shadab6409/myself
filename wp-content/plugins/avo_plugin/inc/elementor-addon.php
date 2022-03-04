<?php


//display menu list
function avo_navmenu_navbar_menu_choices() {
	$menus = wp_get_nav_menus();
	$items = array();
	$i     = 0;
	foreach ( $menus as $menu ) {
		if ( $i == 0 ) {
			$default = $menu->slug;
			$i ++;
		}
		$items[ $menu->slug ] = $menu->name;
	}

	return $items;
}

//display Side panel list
function avo_side_panel_choices() {
   $avo_custom_sidepanels = new WP_Query( array( 'post_type' => 'sidepanel' ) );
   $posts = $avo_custom_sidepanels->posts; 
   $items = array();
   $i     = 0;
   foreach ( $posts as $sidepanel ) {
      if ( $i == 0 ) {
         $default = $sidepanel->slug;
         $i ++;
      }
      $items[ $sidepanel->slug ] = $sidepanel->post_name;
   }

   return $items;

}

//display category blog list
function avo_category_choice() {
    $categories = get_categories( );
	$blogs = array();
	$i     = 0;
	foreach ( $categories as $category ) {
		if ( $i == 0 ) {
			$default = $category->name ;
			$i ++;
		}
		$blogs[ $category->term_id ] = $category->name;
	}
	return $blogs;
}

//display taxnonomy
function avo_tax_choice() {
    $categories = get_terms('portfolio_category' );
	$blogs = array();
	$i     = 0;
	foreach ( $categories as $category ) {
		if ( $i == 0 ) {
			$default = $category->name ;
			$i ++;
		}
		$blogs[ $category->term_id ] = $category->name;
	}
	return $blogs;
}

//for imagesloaded 
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script( 'imagesloaded'); 
} );

//for isotope
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'jquery-isotope',
   	AVO_URL .'widgets/js/isotope.pkgd.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );

//for slick slider
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'jquery-slick',
   	AVO_URL .'widgets/js/slick.min.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );


add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'prefixfree',
   	AVO_URL .'widgets/js/prefixfree.min.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );

//for slick slider
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'avo-img-box-slider',
   	AVO_URL .'widgets/js/imgbox-slider.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );
//for Animation
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'wow',
   	AVO_URL .'widgets/js/wow.min.js',
   		array('jquery'),
   	null,
   	true // in_footer 
   );
} );
//for Portfolio
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'avo-portfolio',
   	AVO_URL .'widgets/js/portfolio.js',
   		array('jquery'),
   	null,
   	true // in_footer
   );
} );
//for Swiper slider
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'jquery-swiper',
   	AVO_URL .'widgets/js/swiper.min.js',
   		array('jquery'),
   	null,
   	true // in_footer
   );
} );

//for workprocess
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'avo-work-process',
   	AVO_URL .'widgets/js/work-process.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );


//for sticky
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'jquery-sticky',
   	AVO_URL .'widgets/js/jquery.sticky.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );


//for superfish script
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'jquery-superfish',
   	AVO_URL .'widgets/js/superfish.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );

//for fitvids script
add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'jquery-fitvids',
   	AVO_URL .'widgets/js/jquery.fitvids.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );

add_action( 'elementor/editor/after_enqueue_scripts', function() {
   wp_enqueue_script(
   	'dsc-elementor',
   	AVO_URL .'widgets/js/dsc-elementor.js',
   		array('jquery'),
   	'1',
   	true // in_footer
   );
} );

//add new category elementor
add_action( 'elementor/init', function () {
	$elementsManager = Elementor\Plugin::instance()->elements_manager;
	$elementsManager->add_category(
		'avo-elements',
		array(
			'title' => 'Avo General Elements',
			'icon'  => 'font',
		),
		1
	);
} );

//add new category elementor
add_action( 'elementor/init', function () {
	$elementsManager = Elementor\Plugin::instance()->elements_manager;
	$elementsManager->add_category(
		'avo-menu-elements',
		array(
			'title' => 'Avo Custom Menu Elements',
			'icon'  => 'font',
		),
		2
	);
} );

//add new category elementor
add_action( 'elementor/init', function () {
	$elementsManager = Elementor\Plugin::instance()->elements_manager;
	$elementsManager->add_category(
		'avo-portfolio-elements',
		array(
			'title' => 'Avo Single Portfolio Elements',
			'icon'  => 'font',
		),
		3
	);
} );

//add new category elementor
add_action( 'elementor/init', function () {
	$elementsManager = Elementor\Plugin::instance()->elements_manager;
	$elementsManager->add_category(
		'avo-blog-elements',
		array(
			'title' => 'Avo Blog Post Elements',
			'icon'  => 'font',
		),
		4
	);
} );




add_action('elementor/element/before_section_end', function( $section, $section_id, $args ) {
	if( $section->get_name() == 'google_maps' && $section_id == 'section_map' ){
		// we are at the end of the "section_image" area of the "image-box"
		$section->add_control(
			'map_style' ,
			[
				'label'        => 'Map Style',
				'type'         => Elementor\Controls_Manager::SELECT,
				'default'      => 'default',
				'options'      => array( 'default' => 'Default', 'gray' => 'Grayscale Map' ),
				'prefix_class' => 'map-',
				'label_block'  => true,
			]
		);
	}
}, 10, 3 );


add_action( 'elementor/editor/after_register_scripts', function() {  wp_register_script('jquery-swiper',AVO_URL .'widgets/js/swiper.min.js', array('jquery'), null, true  );} );

add_action( 'elementor/editor/after_enqueue_styles', function() {  wp_enqueue_style('avo-style-addons',AVO_URL .'assets/fonts/flaticon/flaticon.css', array(), null, 'all'  );} );
add_action( 'elementor/editor/after_enqueue_styles', function() {  wp_enqueue_style('peicon-style-addons',AVO_URL .'assets/fonts/peicon/pe-icon-7-stroke.css', array(), null, 'all'  );} );

add_action( 'elementor/editor/after_register_scripts', function() {  wp_register_script('avo-post-list',AVO_URL .'widgets/js/post-list.js', array('jquery'), null, true  );} ); 


