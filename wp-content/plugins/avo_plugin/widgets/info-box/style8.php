
<?php
/**
 * TCF info-box Style-3
 *
 * @since 1.0.3 
 */
?>
<div class="tcf-info-box style-8">
	<div class="item-box bg-img" data-background="<?php echo esc_url ($settings['image']['url']); ?>">
	    <h4 class="custom-font"><?php echo $settings['title']; ?></h4>
	    <?php if ( ! empty( $settings['link']['url'] ) ) : ?>
	    <a href="<?php echo esc_url( $settings['link']['url']); ?>" style="text-align: <?php echo $settings['button_alignment']; ?>; width: 100%;" class="btn-curve btn-bord btn-lit mt-40"><span><?php echo $settings['btn_text']; ?></span></a>
	    <?php endif; ?>
	</div>
</div>
