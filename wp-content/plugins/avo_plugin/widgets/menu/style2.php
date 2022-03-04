							
                            <div class="avo-nav style-2 <?php if ($settings['menu_sticky']=='yes'){echo 'custom-sticky';} ?> no-bg">
                                <div class="main-menu menu-wrapper hidden-xs hidden-sm <?php if ($settings['menu_type']=='right'){echo 'avo-right-menu';} ?> ">
                                    <?php wp_nav_menu( array( 'menu' => $settings['avo_menu'],'echo' => true,'menu_id' => '','items_wrap' => '<ul id="%1$s" class="home-nav navigation %2$s">%3$s</ul>' ) ); ?>
                                </div><!--/.menu-box-->
                                <div class="mobile-wrapper hidden-lg hidden-md">
                                	<a href="#" class="hamburger"><div class="hamburger__icon"></div></a>
                                    <div class="fat-nav">
                                        <div class="fat-nav__wrapper">
                                            <?php 
											$menuParameters = array(
											  'menu' => $settings['avo_menu'],
											  'container'       => true,
											  'items_wrap'      => '<ul id="%1$s" class="mob-nav  %2$s">%3$s</ul>',
											  'depth'           => 0,
											); ?>
											
											<div class="fat-list"> <?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?></div>
                                        </div>
                                    </div>
                                </div><!--/.box-mobile-->
                            </div>