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

?>

<div class="info-box style-6">
	<div>
    	<?php if ($settings['box_image_icon']=='image'){
    		echo '<img src="'.esc_url ($settings['image']['url']).'"">';
    	}
    	elseif($settings['box_image_icon']=='icon'){
    		echo '<div class="icon">';
    		Icons_Manager::render_icon( $settings['avo_info_icons'], [ 'aria-hidden' => 'true' ] );
    		echo '</div>';
    	}
    	 ?>
	</div>
	<h6 class="custom-font"><?php echo $settings['title']; ?></h6>
	<div class="dots">
		<span></span>
		<span></span>
		<span></span>
	</div> 
</div>
