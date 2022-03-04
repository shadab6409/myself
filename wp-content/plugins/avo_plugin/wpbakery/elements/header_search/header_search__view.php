<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>
    <?php
    
    if(! empty ($color_icon) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a i {color: <?php echo $color_icon ?>;}
    <?php }
    if(! empty ($icon_size) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a.search {font-size: <?php echo $icon_size ?>px;}
    <?php }
    if(! empty ($avo_header_border_radius_top) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a.search {border-top-left-radius: <?php echo $avo_header_border_radius_top ?>;}
    <?php }
    if(! empty ($avo_header_border_radius_right) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a.search {border-top-right-radius: <?php echo $avo_header_border_radius_right ?>;}
    <?php }
    if(! empty ($avo_header_border_radius_bottom) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a.search {border-bottom-right-radius: <?php echo $avo_header_border_radius_bottom ?>;}
    <?php }
    if(! empty ($avo_header_border_radius_left) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a.search {border-bottom-left-radius: <?php echo $avo_header_border_radius_left ?>;}
    <?php }
    if(! empty ($avo_search_margin_top) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {margin-top: <?php echo $avo_search_margin_top ?>;}
    <?php }
    if(! empty ($avo_search_margin_right) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {margin-right: <?php echo $avo_search_margin_right ?>;}
    <?php }
    if(! empty ($avo_search_margin_bottom) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {margin-bottom: <?php echo $avo_search_margin_bottom ?>;}
    <?php }
    if(! empty ($avo_search_margin_left) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {margin-left: <?php echo $avo_search_margin_left ?>;}
    <?php }
    if(! empty ($avo_search_padding_top) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {padding-top: <?php echo $avo_search_padding_top ?>;}
    <?php }
    if(! empty ($avo_search_padding_right) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {padding-right: <?php echo $avo_search_padding_right ?>;}
    <?php }
    if(! empty ($avo_search_padding_bottom) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {padding-bottom: <?php echo $avo_search_padding_bottom ?>;}
    <?php }
    if(! empty ($avo_search_padding_left) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {padding-left: <?php echo $avo_search_padding_left ?>;}
    <?php }
    if(! empty ($avo_search_width) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a.search {width: <?php echo $avo_search_width ?>;}
    <?php }
    if(! empty ($avo_search_height) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a.search {height: <?php echo $avo_search_height ?>;}
    <?php }
    if(! empty ($avo_search_line_height) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon a.search {line-height: <?php echo $avo_search_line_height ?>;}
    <?php }
    if(! empty ($avo_search_icon_text_align) ){ ?>
		#avo-header-search-<?php echo $myuid; ?>.header-search-icon {text-align: <?php echo $avo_search_icon_text_align ?>;}
    <?php }

    ?>
</style>

<div id="avo-header-search-<?php echo $myuid; ?>" class="header-search-icon hidden-xs hidden-sm">
    <a class="search"  href="#">
        <i class="<?php echo $avo_search_icons ?>"></i>
    </a>
    <div class="black-search-block">
        <div class="black-search-table">
            <div class="black-search-table-cell">
                <div>
                    <?php $avo_unique_id = avo_unique_id( 'search-form-' ); ?>
                    <form role="search" method="get" id="<?php echo esc_attr( $avo_unique_id ); ?>" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="search" class="focus-input" placeholder="<?php echo esc_attr__('Type search keyword...','avo'); ?>" value="<?php get_search_query()?>" name="s">
                        <input type="submit" class="searchsubmit" value="">
                    </form>
                </div>
            </div>
        </div>
        <div class="close-black-block"><a href="#"><i class="fa fa-times"></i></a></div>
    </div>
</div>