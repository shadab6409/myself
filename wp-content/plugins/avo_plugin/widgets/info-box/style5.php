<?php 
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

	/*

		// new icon
		$migrated = isset( $settings['__fa4_migrated']['avo_info_icons'] );
		// Check if its a new widget without previously selected icon using the old Icon control
		$is_new = empty( $settings['avo_info_icon'] );
		if ( $is_new || $migrated ) {
			// new icon
			Icons_Manager::render_icon( $settings['avo_info_icons'], [ 'aria-hidden' => 'true' ] );
		} else {
			?>
			<i class="<?php echo esc_attr($settings['avo_info_icon']); ?>" aria-hidden="true"></i>
			<?php
		}
	*/ 

?>
<div class="info-box style-5 <?php echo 'mode-'.$settings['info_box_bg'];?>">
    <div class="item-box">
    	<?php if ($settings['box_image_icon']=='image'){
    		echo '<img src="'.esc_url ($settings['image']['url']).'"">';
    	}
    	elseif($settings['box_image_icon']=='icon'){
    		echo '<div class="icon info-box-icon">';
    		Icons_Manager::render_icon( $settings['avo_info_icons'], [ 'aria-hidden' => 'true' ] );
    		echo '</div>';
    	}
    	 ?>
        <h6 class="info-box-title"><?php echo $settings['title']; ?></h6>
        <p class="info-box-text" ><?php echo wp_kses_post ( $settings['text']); ?></p>
    </div>
</div>
