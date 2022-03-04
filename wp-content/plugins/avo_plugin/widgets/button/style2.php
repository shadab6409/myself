<?php 

use Elementor\Icons_Manager;

?>
    <div class="button style-2"> 
        <div class="vid-icon">
            <a class="vid" href="<?php echo esc_url( $settings['link']['url']); ?>">
                <div class="vid-butn">
                    <span class="icon">
                        <?php
                            Icons_Manager::render_icon( $settings['avo_info_icons'], [ 'aria-hidden' => 'true' ] );
                         ?>
                    </span>
                </div>
            </a>
        </div>
    </div>