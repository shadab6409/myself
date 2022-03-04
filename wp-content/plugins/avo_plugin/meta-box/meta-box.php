<?php
/**
 * Metabox Class Fill.
 *
 * @package Avo
 */
?>
<?php
/**
 * Calls the class on the post edit screen.
 */
defined('AVO_ADDONS_ROOT') or define('AVO_ADDONS_ROOT', dirname(__FILE__));
defined('AVO_ADDONS_CUSTOM_POST_TYPE') or define('AVO_ADDONS_CUSTOM_POST_TYPE', dirname(__FILE__).'/custom-post-type');
defined('AVO_ADDONS_ROOT_DIR') or define('AVO_ADDONS_ROOT_DIR', plugins_url().'/avo_plugin');


function Avo_Meta_Boxes() 
{
    new avoMetaboxes();
}

	if ( is_admin() ) {
	    add_action( 'load-post.php', 'Avo_Meta_Boxes' );
	    add_action( 'load-post-new.php', 'Avo_Meta_Boxes' );
	}


/** 
 * The avoMetaboxes Class.
 */
class avoMetaboxes {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		$this->avo_metabox_addons();
		add_action( 'add_meta_boxes', array( $this, 'avo_add_meta_boxs' ) );
		add_action( 'save_post', array( $this, 'avo_save_meta_box' ) );
		add_action('admin_enqueue_scripts', array($this, 'admin_script_loader'));

		/* Portfolio */
		add_action( 'add_meta_boxes', array( $this, 'avo_add_meta_boxs_portfolios' ) );
	}

	/**
	 * Adds the meta box functions container.
	 */
	public function avo_metabox_addons(){
		include('meta-box-maps.php'); 
	}

	/**
	 * Adds the meta box container.
	 */
	public function avo_add_meta_boxs( $avo_post_type ) {
		$avo_post_types = array('post', 'page', 'portfolio','product');    //limit meta box to certain post types
		$flag = false;
        if ( in_array( $avo_post_type, $avo_post_types )){
           	$flag = true;
        }
        if($flag == true){
	        $this->avo_add_meta_box('avo_admin_options', 'Avo '.ucfirst($avo_post_type).' Settings', $avo_post_type);
	    }

	}

	public function avo_add_meta_box($avo_id, $avo_label_name, $avo_post_type)
	{
		add_meta_box(
			$avo_id
			,$avo_label_name
			,array( $this, $avo_id )
			,$avo_post_type
			
		);
	}

	public function avo_admin_options()
	{
		global $post;
		if($post->post_type == 'post' || $post->post_type == 'portfolio' || $post->post_type == 'product'){
			$avo_tabs_title = array('General Settings', 'Header Settings', 'Footer','Sidepanel');
			$avo_tabs_sub_title = array('General configuration settings', 'Header section configuration settings', 'Enable/Disable comments in '.$post->post_type, 'Footer section configuration settings', 'Sidepanel section configuration settings');
			$avo_page_tabs = array('General Settings', 'Header Settings', 'Footer','Sidepanel');
			$avo_page_tab_content = array('general','header', 'footer','sidepanel');
		}else{
			$avo_tabs_title = array('General Settings','Header Settings', 'Footer Settings','Sidepanel Settings');
			$avo_tabs_sub_title = array( 'General configuration settings','Header section configuration settings', 'Enable/Disable comments in page', 'Footer section configuration settings', 'Sidepanel section configuration settings');
			$avo_page_tabs = array( 'General Settings','Header Settings', 'Footer Settings','Sidepanel Settings');
			$avo_page_tab_content = array('general','header','footer','sidepanel');
		}

		$avo_icon_class = array('icon-gears','fa fa-header', 'el-icon-website', 'fa fa-align-left', 'fa fa-server', 'el-icon-website icon-rotate', 'fa fa-list-alt');
		echo '<ul class="avo_meta_box_tabs">';
		$avo_icon = 0;
		$avo_showicon = '';
			foreach( $avo_page_tabs as $tab_key => $tab_name ) {
				if($avo_icon_class){
					$avo_showicon = '<i class="'.esc_attr($avo_icon_class[$avo_icon]).'"></i>';
				}
				echo '<li class="avo_tab_'.$avo_page_tab_content[$tab_key].'"><a href="'.esc_url($tab_name).'">'.$avo_showicon.'<span class="group_title">'.esc_attr($tab_name).'</span></a></li>';
				$avo_icon++;
			}
		echo '</ul>';

		echo '<div class="avo_meta_box_tab_content">';
		foreach( $avo_page_tab_content as $tab_content_key => $tab_content_name ) {
			echo '<div class="avo_meta_box_tab" id="avo_tab_'.esc_attr($tab_content_name).'">';
				echo "<div class='main_tab_title'>";
					echo "<h3>".$avo_tabs_title[$tab_content_key]."</h3>";
					echo "<span class='description'>".$avo_tabs_sub_title[$tab_content_key]."</span>";
				echo "</div>";
				include('metabox-tabs/metabox_'.$tab_content_name.'.php'); 
			echo '</div>';
		}
		echo '</div>';
		echo '<div class="clear"></div>';
	}


	/**
	 * Adds the meta box for Portfolio. 
	 */
	public function avo_add_meta_boxs_portfolios( $avo_post_type ) 
	{
		$avo_post_types = array('portfolio','post');     //limit meta box to certain post types
		$flag = false;
        if ( in_array( $avo_post_type, $avo_post_types )){
           	$flag = true;
        }
        if($flag == true){
	        $this->avo_add_meta_box('avo_admin_options_single', 'Avo '.ucfirst($avo_post_type).' Format Settings', $avo_post_type);
	    }

	}

	public function avo_add_meta_boxs_portfolio($avo_id, $avo_label_name, $avo_post_type)
	{
		add_meta_box(
			$avo_id
			,$avo_label_name
			,array( $this, $avo_id )
			,$avo_post_type
			,'advanced'
			,'high'
		);
	}

	public function avo_admin_options_single()
	{
        global $post;
		echo '<div class="avo_meta_box_tab_content_single">';
			echo '<div class="avo_meta_box_tab" id="avo_tab_single">';
		
		echo '</div>';
		if($post->post_type == 'portfolio'):
                include('metabox-tabs/metabox_portfolio_setting.php' );
                endif;
		echo '</div>';
		echo '<div class="clear"></div>';
	}

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function avo_save_meta_box( $avo_post_id ) {
	
		// If this is an autosave, our form has not been submitted,
        // so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
			return $avo_post_id;

		/* OK, its safe for us to save the data now. */
		$avo_data = array();
		foreach ( $_POST as $key => $value ) {
			if ( strstr( $key, 'avo_') ) {
				// Sanitize the user input.
				$avo_data = sanitize_text_field( $_POST[$key] );
				// Update the meta field.
				update_post_meta( $avo_post_id, $key, $avo_data );
			}
		}
	}

	function admin_script_loader() {
		
		global $pagenow;
		if( is_admin() && ( $pagenow=='post-new.php' || $pagenow=='post.php' ) ) {
			wp_enqueue_script('media-upload'); 
			wp_enqueue_script('thickbox');
	   		wp_enqueue_style('thickbox');
	   		wp_enqueue_style( 'wp-color-picker' );
    		wp_enqueue_script( 'wp-color-picker');
    		wp_register_script('alpha-color-picker', AVO_ADDONS_ROOT_DIR.'/meta-box/js/alpha-color-picker.js', array('jquery', 'wp-color-picker'), '1.0' );
		   	wp_enqueue_script('alpha-color-picker');
		   	wp_register_style('alpha-color-picker', AVO_ADDONS_ROOT_DIR.'/meta-box/css/alpha-color-picker.css', array('wp-color-picker'), '1.0' );
		   	wp_enqueue_style('alpha-color-picker');
	   		wp_register_script('avo-admin-metabox-cookie-js', AVO_ADDONS_ROOT_DIR.'/meta-box/js/metabox-cookie.js', array('jquery'), '1.0' );
	   		wp_enqueue_script('avo-admin-metabox-cookie-js');
	   		wp_register_script('avo-admin-metabox-js', AVO_ADDONS_ROOT_DIR.'/meta-box/js/meta-box.js', array('jquery'), '1.0' );
			wp_enqueue_script('avo-admin-metabox-js');
	   		wp_register_style('avo-admin-metabox-css', AVO_ADDONS_ROOT_DIR.'/meta-box/css/meta-box.css',null, '1.0' );
	   		wp_enqueue_style('avo-admin-metabox-css');
		}
	}
}