<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>
    <?php
    if(! empty ($align) ){ ?>
		#avo-menu-<?php echo $myuid; ?> .white-header, #avo-menu-<?php echo $myuid; ?>.custom-sticky {text-align: <?php echo $align ?>;}
    <?php }
    if(! empty ($align_child) ){ ?>
		#avo-menu-<?php echo $myuid; ?> .menu-box ul li ul {text-align: <?php echo $align_child ?>;}
    <?php }
    if(! empty ($desktop_menu) ){ ?>
		#avo-menu-<?php echo $myuid; ?> .menu-box  {display: <?php echo $desktop_menu ?>;}
    <?php }
    if(! empty ($mobile_menu) ){ ?>
		#avo-menu-<?php echo $myuid; ?> .box-mobile  {display: <?php echo $mobile_menu ?>;}
    <?php }
    if(! empty ($menu_sticky_bg) ){ ?>
		#avo-menu-<?php echo $myuid; ?> .is-sticky .stuck-nav  {background-color: <?php echo $menu_sticky_bg ?>;}
    <?php }
    ?>
</style>

<?php if ($menu_style == 'style-1') { ?>
<div id="avo-menu-<?php echo $myuid; ?>" class="avo-nav style-1 <?php if ($menu_sticky=='yes'){echo 'custom-sticky';} ?> no-bg">
    <div class="main-menu menu-wrapper hidden-xs hidden-sm <?php if ($menu_type=='right'){echo 'avo-right-menu';} ?> ">
        <?php wp_nav_menu( array( 'menu' => $avo_menu,'echo' => true,'menu_id' => '','items_wrap' => '<ul id="%1$s" class="home-nav navigation %2$s">%3$s</ul>' ) ); ?>
    </div><!--/.menu-box-->
    <div class="mobile-wrapper hidden-lg hidden-md">
        <a href="#" class="hamburger"><div class="hamburger__icon"></div></a>
        <div class="fat-nav">
            <div class="fat-nav__wrapper">
                <?php 
                $menuParameters = array(
                    'menu' => $avo_menu,
                    'container'       => true,
                    'items_wrap'      => '<ul id="%1$s" class="mob-nav  %2$s">%3$s</ul>',
                    'depth'           => 0,
                ); ?>
                
                <div class="fat-list"> <?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?></div>
            </div>
        </div>
    </div><!--/.box-mobile-->
</div>
<?php } ?>

<?php if ($menu_style == 'style-2') { ?>
<div id="avo-menu-<?php echo $myuid; ?>" class="avo-nav style-2 <?php if ($menu_sticky=='yes'){echo 'custom-sticky';} ?> no-bg">
    <div class="main-menu menu-wrapper hidden-xs hidden-sm <?php if ($menu_type=='right'){echo 'avo-right-menu';} ?> ">
        <?php wp_nav_menu( array( 'menu' => $avo_menu,'echo' => true,'menu_id' => '','items_wrap' => '<ul id="%1$s" class="home-nav navigation %2$s">%3$s</ul>' ) ); ?>
    </div><!--/.menu-box-->
    <div class="mobile-wrapper hidden-lg hidden-md">
        <a href="#" class="hamburger"><div class="hamburger__icon"></div></a>
        <div class="fat-nav">
            <div class="fat-nav__wrapper">
                <?php 
                $menuParameters = array(
                    'menu' => $avo_menu,
                    'container'       => true,
                    'items_wrap'      => '<ul id="%1$s" class="mob-nav  %2$s">%3$s</ul>',
                    'depth'           => 0,
                ); ?>
                
                <div class="fat-list"> <?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?></div>
            </div>
        </div>
    </div><!--/.box-mobile-->
</div>
<?php } ?>

<?php if ($menu_style == 'style-3') { ?>
<div id="avo-menu-<?php echo $myuid; ?>" class="avo-menu style-3 <?php if ($menu_sticky=='yes'){echo 'custom-sticky';} ?> no-bg">
    <div class="side-menu menu-wrapper <?php if ($menu_type=='right'){echo 'avo-right-menu';} ?> ">
        <div class="hamenu open" id="hamenu">
            <div class="menu-links">
                <ul class="main-menu">
                
                    <?php 
                        wp_nav_menu(
                            array(
                                'menu' => $avo_menu,
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
<?php } ?>