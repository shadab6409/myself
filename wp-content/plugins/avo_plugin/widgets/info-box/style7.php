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

<div class="info-box style-7 info-box">
	<div class="mas-item">
    	<?php if ($settings['box_image_icon']=='image'){echo '<img src="'.esc_url ($settings['image']['url']).'"">';}
    	elseif($settings['box_image_icon']=='icon'){
    		echo '<div class="icon">';
    		Icons_Manager::render_icon( $settings['avo_info_icons'], [ 'aria-hidden' => 'true' ] );
    		echo '</div>';
    	}
    	 ?>
		<h6><?php echo $settings['title']; ?></h6>

		<?php if ( ! empty( $settings['link']['url'] ) ) : ?>
		<div class="text-right">
			<a href="<?php echo esc_url( $settings['link']['url']); ?>" <?php if ( $settings['link']['is_external'] ) {echo'target="_blank"';} ?> class="more"> 
		    	<?php
		    		
		    		Icons_Manager::render_icon( $settings['icon_btn'], [ 'aria-hidden' => 'true' ] );
		    		
		    	 ?>
			</a>
		</div>
		<?php endif; ?> 
		<div class="bg-color"></div>
	</div> 
</div>
