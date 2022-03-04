	
    <div class="avo-menu style-3 <?php if ($settings['menu_sticky']=='yes'){echo 'custom-sticky';} ?> no-bg">
        <div class="side-menu menu-wrapper <?php if ($settings['menu_type']=='right'){echo 'avo-right-menu';} ?> ">
            <div class="hamenu open" id="hamenu">
                <div class="menu-links">
                    <ul class="main-menu">
                    
                        <?php 
                            wp_nav_menu(
                                array(
                                    'menu' => $settings['avo_menu'],
                                    'theme_location' => 'primary_menu',
                                    'container' => '',
                                    'container_class' => '',
                                    'container_id' => '',
                                    'menu_class' => '',
                                    'menu_id' => '',
                                    'items_wrap' => '%3$s',
                                    'before' => '',
                                    'after' => '',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'depth' => 3,
                                    'echo' => true,
                                    'fallback_cb' => 'Wavo_Menu_Navwalker::fallback',
                                    'walker' => new Avo_Menu_Navwalker()
                                )
                            ); 
                        ?>
                    </ul>
                </div>
            </div>
        </div><!--/.menu-box-->
    </div>