
<?php 
use Elementor\Icons_Manager;
?>

<div class="avo-counter style-1">
    <div class="item <?php echo $settings['border_left'].'-bord';?>">
        <span class="icon">
            <?php
                Icons_Manager::render_icon( $settings['icon_class'], [ 'aria-hidden' => 'true' ] );
             ?>
        </span>
        <h3 class="custom-font"><span class="count counter" data-num="<?php echo esc_attr( $settings['number'] );?>" data-avospeed="<?php echo esc_attr( $settings['speed'] );?>" data-avosteps="<?php echo esc_attr( $settings['steps'] );?>"> <?php echo esc_html( $settings['number'] );?></span><span class="suffix"><?php echo $settings['suffix']; ?></span></h3>
        <p class="wow txt" data-splitting><?php echo esc_html( $settings['title'] );?></p>
    </div>
</div>