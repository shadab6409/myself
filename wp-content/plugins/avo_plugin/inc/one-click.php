<?php

//oneclick importer
function ocdi_import_files() { 
	return array(
		array(
			'import_file_name'           => '1-Agency Elementor',
			'categories'                  => array( 'Demos', 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo1/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo1/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo1/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo1/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo1/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com',
		),

		array(
			'import_file_name'           => '1-Agency WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo1/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo1/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo1/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo1/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo1/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo1-wpbakery/',
		),

		// --------------Demo2-----------
		array(
			'import_file_name'           => '2-Creative Elementor',
			'categories'                  => array( 'Demos', 'Elementor'  ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo2/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo2/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo2/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo2/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo2/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avo.smartinnovates.com/demo2',
		),
		array(
			'import_file_name'           => '2-Creative WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo2/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo2/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo2/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo2/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo2/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo2-wpbakery/',
		),

		// --------------Demo3-----------
		array(
			'import_file_name'           => '3-Business Elementor',
			'categories'                  => array( 'Demos' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo3/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo3/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo3/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo3/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo3/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo3',
		),
		array(
			'import_file_name'           => '3-Business WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo3/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo3/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo3/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo3/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo3/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the WPBakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo3-wpbakery/',
		),

		// --------------Demo4-----------
		array(
			'import_file_name'           => '4-Onepage Elementor',
			'categories'                  => array( 'Demos' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo4/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo4/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo4/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo4/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo4/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo4',
		),
		array(
			'import_file_name'           => '4-Onepage WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo4/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo4/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo4/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo4/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo4/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo4-wpbakery/',
		),

		// --------------Demo5-----------
		array(
			'import_file_name'           => '5-Personal Elementor',
			'categories'                  => array( 'Demos' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo5/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo5/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo5/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo5/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo5/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo5',
		),	
		array(
			'import_file_name'           => '5-Personal WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo5/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo5/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo5/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo5/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo5/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo5-wpbakery/',
		),

		// --------------Demo6-----------
		array(
			'import_file_name'           => '6-Shop Elementor',
			'categories'                  => array( 'Demos', 'Elementor'  ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo6/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo6/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo6/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo6/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo6/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo6',
		),	
		array(
			'import_file_name'           => '6-Shop WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo6/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo6/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo6/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo6/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo6/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo6-wpbakery/',
		),

		// --------------Demo7-----------
		array(
			'import_file_name'           => '7-Fullscreen Elementor',
			'categories'                  => array( 'Demos', 'Elementor'  ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo7/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo7/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo7/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo7/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo7/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo7',
		),	
		array(
			'import_file_name'           => '7-Fullscreen WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo7/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo7/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo7/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo7/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo7/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo7-wpbakery/',
		),

		// --------------Demo8-----------
		array(
			'import_file_name'           => '8-Carousal Elementor',
			'categories'                  => array( 'Demos' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo8/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo8/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo8/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo8/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo8/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo8',
		),	
		array(
			'import_file_name'           => '8-Carousal WPBakery',
			'categories'                  => array( 'Demos', 'WPBakery' ),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo8/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo8/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo8/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo8/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo8/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo8-wpbakery/',
		),

		// --------------Demo9-----------	
		array(
			'import_file_name'           => '9-ColumnsSlider Elementor',
			'categories'                  => array( 'Demos', 'Elementor'  ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo9/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo9/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo9/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo9/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo9/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo9',
		),	
		array(
			'import_file_name'           => '9-ColumnsSlider WPBakery',
			'categories'                  => array( 'Demos', 'WPBakery' ),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo9/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo9/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo9/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo9/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo9/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo9-wpbakery/',
		),	

		// --------------Demo10-----------
		array(
			'import_file_name'           => '10-Radiusslider Elementor',
			'categories'                  => array( 'Demos' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo10/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo10/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo10/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo10/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo10/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo10',
		),	
		array(
			'import_file_name'           => '10-Radiusslider WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo10/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo10/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo10/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo10/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo10/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo10-wpbakery/',
		),

		// --------------Demo11-----------
		array(
			'import_file_name'           => '11-Video Elementor',
			'categories'                  => array( 'Demos', 'Elementor'  ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo11/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo11/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo11/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo11/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo11/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo11',
		),
		array(
			'import_file_name'           => '11-Video WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo11/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo11/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo11/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo11/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo11/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo11-wpbakery/',
		),

		// --------------Demo12-----------
		array(
			'import_file_name'           => '12-Maintenance Elementor',
			'categories'                  => array( 'Demos' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo12/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo12/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo12/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo12/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo12/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo12',
		),
		array(
			'import_file_name'           => '12-Maintenance WPBakery',
			'categories'                  => array( 'Demos', 'WPBakery' ),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo12/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo12/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo12/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo12/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo12/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo12-wpbakery/',
		),

		// --------------Demo13-----------
		array(
			'import_file_name'           => '13-InnerPages Elementor',
			'categories'                   => array( 'Miscellaneous' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo13/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo13/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo13/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo13/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo13/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo13',
		),	
		array(
			'import_file_name'           => '13-InnerPages WPBakery',
			'categories'                   => array( 'Miscellaneous', 'WPBakery' ),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo13/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo13/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo13/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo13/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo13/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo13-wpbakery/',
		),	

		// --------------Demo14-----------
		array(
			'import_file_name'           => '14-Elements Elementor',
			'categories'                   => array( 'Miscellaneous', 'Elementor'  ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo14/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo14/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo14/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo14/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo14/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo14',
		),	
		array(
			'import_file_name'           => '14-Elements WPBakery',
			'categories'                   => array( 'Miscellaneous', 'WPBakery' ),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo14/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo14/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo14/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo14/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo14/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo14-wpbakery/',
		),

		// --------------Demo15-----------
		array(
			'import_file_name'           => '15-Blogs Elementor',
			'categories'                   => array( 'Miscellaneous' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo15/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo15/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo15/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo15/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo15/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo15',
		),
		array(
			'import_file_name'           => '15-Blogs WPBakery',
			'categories'                   => array( 'Miscellaneous', 'WPBakery' ),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo15/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo15/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo15/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo15/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo15/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo15-wpbakery/',
		),

		// --------------Demo16-----------	
		array(
			'import_file_name'           => '16-corporate Elementor',
			'categories'                  => array( 'Demos' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo16/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo16/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo16/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo16/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo16/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo16',
		),
		array(
			'import_file_name'           => '16-corporate WPBakery',
			'categories'                  => array( 'Demos' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo16/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo16/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo16/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo16/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo16/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo16-wpbakery/',
		),

		// --------------Demo17-----------	
		array(
			'import_file_name'           => '17-Portfolios Elementor',
			'categories'                   => array( 'Miscellaneous' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo17/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo17/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo17/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo17/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo17/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo17',
		),	
		array(
			'import_file_name'           => '17-Portfolios WPBakery',
			'categories'                   => array( 'Miscellaneous' , 'WPBakery'),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo17/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo17/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo17/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo17/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo17/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo17-wpbakery/',
		),

		// --------------Demo18-----------	
		array(
			'import_file_name'           => '18-RTL Elementor',
			'categories'                  => array( 'Demos' , 'Elementor' ),
			'import_file_url'            => plugins_url( '/demo-data/elementor/demo18/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/elementor/demo18/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/elementor/demo18/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/elementor/demo18/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/elementor/demo18/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the elementor page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo18',
		),
		array(
			'import_file_name'           => '18-RTL WPBakery',
			'categories'                  => array( 'Demos', 'WPBakery' ),
			'import_file_url'            => plugins_url( '/demo-data/wpbakery/demo18/content.xml' , __FILE__ ),
			'import_widget_file_url'     => plugins_url( '/demo-data/wpbakery/demo18/widgets.wie' , __FILE__ ),
			'import_customizer_file_url'  => plugins_url( '/demo-data/wpbakery/demo18/customizer.dat' , __FILE__ ),
			'import_redux'           => array(
				array(
					'file_url'   => plugins_url( '/demo-data/wpbakery/demo18/redux.json' , __FILE__ ),
					'option_name' => 'avo_theme_setting',
				),
			),
			'import_preview_image_url'   => plugins_url( '/demo-data/wpbakery/demo18/preview.jpg' , __FILE__ ),
			'import_notice'                => __( '<p>To prevent any error, please use the clean wordpress site to import the demo data. </p><p>Or you can use this plugin 
			<a href="https://wordpress.org/plugins/wordpress-database-reset/" target="_blank">WordPress Database Reset</a> to reset/clear the database first.</p><p>After you import this demo, you will have to setup the wpbakery page builder .</p>', 'avo_plg' ),
			'preview_url'                => 'https://avotheme.smartinnovates.com/demo18-wpbakery/',
		)
	);
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

/*-----------automatically assign "Front page", "Posts page" and menu locations ---------------------------*/



function ocdi_after_import( $selected_import ) {


	if ( '1-Agency Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '1-Agency WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home1 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '2-Creative Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home02 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '2-Creative WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home2 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '3-Business Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home03 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '3-Business WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home3 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '4-OnePage Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home04 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '4-OnePage WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home4 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '5-Personal Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home05 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '5-Personal WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home5 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '6-Shop Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home06 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '6-Shop WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home6 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '7-Fullscreen Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home07 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '7-Fullscreen WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home7 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '8-Carousal Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home08 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '8-Carousal WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home8 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '9-ColumnsSlider Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home09 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '9-ColumnsSlider WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home9 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '10-RadiusSlider Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home10 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '10-RadiusSlider WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home10 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '11-Video Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home11 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '11-Video WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home11 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '12-Maintenance Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home12 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '12-Maintenance WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home12 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	/*
	elseif ( '13-Personal' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home13 dark' );
	}
	elseif ( '14-Personal' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home14 dark' );
	}
	elseif ( '15-Personal' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home15 dark' );
	}
	*/
	elseif ( '16-corporate Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home16 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '16-corporate WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home16 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '17-Portfolios Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home17 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
	elseif ( '17-Portfolios WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home17 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	elseif ( '18-RTL Elementor' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home18 dark' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}
		elseif ( '18-RTL WPBakery' === $selected_import['import_file_name'] ) {
		// Assign front page.
		$front_page_id = get_page_by_title( 'Home18 Wpbakery' );
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	}

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	set_theme_mod( 'nav_menu_locations', array('primary_menu' => $main_menu->term_id, ));

	update_option( 'elementor_disable_color_schemes', 'yes' ); 
	update_option( 'elementor_disable_typography_schemes', 'yes' ); 
	update_option( 'elementor_load_fa4_shim', 'yes' ); 
	update_option( 'elementor_container_width', 1200 );
	$cpt_support = [ 'page', 'post','product','portfolio','footer','header','sidepanel' ];
	update_option( 'elementor_cpt_support', $cpt_support ); //update 'Costom post type'
}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import' );

/*------------------disable the ProteusThemes branding notice -----------------------------------*/

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/*------------------Adding notes -----------------------------------*/

function ocdi_plugin_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi__intro-text"><strong>Server requirements:</strong></div>';
	$default_text .= '<div class="ocdi__intro-text"><ul>
		<li>max_execution_time 3000</li>
		<li>memory_limit 128M</li>
		<li>post_max_size 64M</li>
		<li>upload_max_filesize 64M</li>
		<li>max_input_time 180</li>
	</ul></div><hr>';

	return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' );
