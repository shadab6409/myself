<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>

	<?php if(! empty ($filter) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?>.filter-tab {display: <?php echo $filter ?>;}
    <?php }
    if(! empty ($filter_align) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?>.filter-tab {text-align: <?php echo $filter_align ?>;}
    <?php }
    if(! empty ($page_align) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagi-box {text-align: <?php echo $page_align ?>;}
    <?php }
    if(! empty ($portfolio_margin) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-inner {margin: <?php echo $portfolio_margin ?>;}
        #avo-portfolio-<?php echo $myuid; ?> .portfolio-body {margin: -<?php echo $portfolio_margin ?>;}
    <?php }
    if(! empty ($portfolio_height) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-box {padding: <?php echo $portfolio_height ?> 0;}
    <?php }
    if(! empty ($port_content_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {margin-top: <?php echo $port_content_top ?>;}
    <?php }
    if(! empty ($port_content_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {margin-right: <?php echo $port_content_right ?>;}
    <?php }
    if(! empty ($port_content_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {margin-bottom: <?php echo $port_content_bottom ?>;}
    <?php }
    if(! empty ($port_content_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {margin-left: <?php echo $port_content_left ?>;}
    <?php }
    if(! empty ($port_padding_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {padding-top: <?php echo $port_padding_top ?>;}
    <?php }
    if(! empty ($port_padding_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {padding-right: <?php echo $port_padding_right ?>;}
    <?php }
    if(! empty ($port_padding_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {padding-bottom: <?php echo $port_padding_bottom ?>;}
    <?php }
    if(! empty ($port_padding_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {padding-left: <?php echo $port_padding_left ?>;}
    <?php }
    if(! empty ($bg_content) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {background-color: <?php echo $bg_content ?>;}
    <?php }
    if(! empty ($content_align) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative {text-align: <?php echo $content_align ?>;}
    <?php }
    if(! empty ($img_filter_normal) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .portfolio .port-inner img {filter: <?php echo $img_filter_normal ?>;}
    <?php }
    if(! empty ($img_filter_hover) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .portfolio .port-inner:hover img {filter: <?php echo $img_filter_hover ?>;}
    <?php }
    if(! empty ($title_type) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {display: <?php echo $title_type ?>;}
    <?php }
    if(! empty ($title_cl) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 a {color: <?php echo $title_cl ?>;}
    <?php }
    if(! empty ($title_clh) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 a:hover {color: <?php echo $title_clh ?>;}
    <?php }
    if(! empty ($title_bgl) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {background-color: <?php echo $title_bgl ?>;}
    <?php }
    if(! empty ($title_bgl) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {background-color: <?php echo $title_bgl ?>;}
    <?php }
    if(! empty ($titlep_padding_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {padding-top: <?php echo $titlep_padding_top ?>;}
    <?php }
    if(! empty ($titlep_padding_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {padding-right: <?php echo $titlep_padding_right ?>;}
    <?php }
    if(! empty ($titlep_padding_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {padding-bottom: <?php echo $titlep_padding_bottom ?>;}
    <?php }
    if(! empty ($titlep_padding_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {padding-left: <?php echo $titlep_padding_left ?>;}
    <?php }
    if(! empty ($titlep_margin_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {margin-top: <?php echo $titlep_margin_top ?>;}
    <?php }
    if(! empty ($titlep_margin_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {margin-right: <?php echo $titlep_margin_right ?>;}
    <?php }
    if(! empty ($titlep_margin_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {margin-bottom: <?php echo $titlep_margin_bottom ?>;}
    <?php }
    if(! empty ($titlep_margin_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative h3 {margin-left: <?php echo $titlep_margin_left ?>;}
    <?php }
    if(! empty ($text_type) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {display: <?php echo $text_type ?>;}
    <?php }
    if(! empty ($txt_cl) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {color: <?php echo $txt_cl ?>;}
    <?php }
    if(! empty ($txt_bg) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {background-color: <?php echo $txt_bg ?>;}
    <?php }
    if(! empty ($tx_padding_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {padding-top: <?php echo $tx_padding_top ?>;}
    <?php }
    if(! empty ($tx_padding_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {padding-right: <?php echo $tx_padding_right ?>;}
    <?php }
    if(! empty ($tx_padding_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {padding-bottom: <?php echo $tx_padding_bottom ?>;}
    <?php }
    if(! empty ($tx_padding_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {padding-left: <?php echo $tx_padding_left ?>;}
    <?php }
    if(! empty ($tx_margin_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {margin-top: <?php echo $tx_margin_top ?>;}
    <?php }
    if(! empty ($tx_margin_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {margin-right: <?php echo $tx_margin_right ?>;}
    <?php }
    if(! empty ($tx_margin_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {margin-bottom: <?php echo $tx_margin_bottom ?>;}
    <?php }
    if(! empty ($tx_margin_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .dbox-relative p {margin-left: <?php echo $tx_margin_left ?>;}
    <?php }
    if(! empty ($filter_margin_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter {margin-top: <?php echo $filter_margin_top ?>;}
    <?php }
    if(! empty ($filter_margin_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter {margin-right: <?php echo $filter_margin_right ?>;}
    <?php }
    if(! empty ($filter_margin_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter {margin-bottom: <?php echo $filter_margin_bottom ?>;}
    <?php }
    if(! empty ($filter_margin_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter {margin-left: <?php echo $filter_margin_left ?>;}
    <?php }
    if(! empty ($filter_padding_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {padding-top: <?php echo $filter_padding_top ?>;}
    <?php }
    if(! empty ($filter_padding_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {padding-right: <?php echo $filter_padding_right ?>;}
    <?php }
    if(! empty ($filter_padding_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {padding-bottom: <?php echo $filter_padding_bottom ?>;}
    <?php }
    if(! empty ($filter_padding_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {padding-left: <?php echo $filter_padding_left ?>;}
    <?php }
    if(! empty ($filter_linkmargin_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {margin-top: <?php echo $filter_linkmargin_top ?>;}
    <?php }
    if(! empty ($filter_linkmargin_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {margin-right: <?php echo $filter_linkmargin_right ?>;}
    <?php }
    if(! empty ($filter_linkmargin_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {margin-bottom: <?php echo $filter_linkmargin_bottom ?>;}
    <?php }
    if(! empty ($filter_linkmargin_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {margin-left: <?php echo $filter_linkmargin_left ?>;}
    <?php }
    if(! empty ($filter_border_radius_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-top-left-radius: <?php echo $filter_border_radius_top ?>;}
    <?php }
    if(! empty ($filter_border_radius_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-top-right-radius: <?php echo $filter_border_radius_right ?>;}
    <?php }
    if(! empty ($filter_border_radius_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-bottom-right-radius: <?php echo $filter_border_radius_bottom ?>;}
    <?php }
    if(! empty ($filter_border_radius_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-bottom-left-radius: <?php echo $filter_border_radius_left ?>;}
    <?php }
    if(! empty ($color_def) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {color: <?php echo $color_def ?>;}
    <?php }
    if(! empty ($color_bgdef) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {background: <?php echo $color_bgdef ?>;}
    <?php }
    if(! empty ($color_hov) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a.active {color: <?php echo $color_hov ?>;}
        #avo-portfolio-<?php echo $myuid; ?> .port-filter a:hover {color: <?php echo $color_hov ?>;}
    <?php }
    if(! empty ($color_bgdefhover) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a.active {background: <?php echo $color_bgdefhover ?>;}
        #avo-portfolio-<?php echo $myuid; ?> .port-filter a::before {background: <?php echo $color_bgdefhover ?>;}
        #avo-portfolio-<?php echo $myuid; ?> .port-filter a::after {background: <?php echo $color_bgdefhover ?>;}
        #avo-portfolio-<?php echo $myuid; ?> .port-filter a:hover {background: <?php echo $color_bgdefhover ?>;}
    <?php }
    if(! empty ($border_type) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-style: <?php echo $border_type ?>;}
    <?php }
    if(! empty ($border_width_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-top-width: <?php echo $border_width_top ?>;}
    <?php }
    if(! empty ($border_width_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-right-width: <?php echo $border_width_right ?>;}
    <?php }
    if(! empty ($border_width_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-bottom-width: <?php echo $border_width_bottom ?>;}
    <?php }
    if(! empty ($border_width_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-left-width: <?php echo $border_width_left ?>;}
    <?php }
    if(! empty ($color_border) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a {border-color: <?php echo $color_border ?>;}
    <?php }
    if(! empty ($color_borderhover) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-filter a:hover {border-color: <?php echo $color_borderhover ?>;}
        #avo-portfolio-<?php echo $myuid; ?> .port-filter a.active {border-color: <?php echo $color_borderhover ?>;}
    <?php }
    if(! empty ($mask_color) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-inner:hover .port-box {background-color: <?php echo $mask_color ?>;}
    <?php }
    if(! empty ($mask_color2) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-inner:hover .port-box::after {background-color: <?php echo $mask_color2 ?>;}
    <?php }
    if(! empty ($mask_color_opacity) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .port-inner:hover .port-box {opacity: <?php echo $mask_color_opacity ?>;}
    <?php }
    if(! empty ($page_color) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination > li > a {color: <?php echo $page_color ?>;}
    <?php }
    if(! empty ($page_color_hover) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination > li > a:hover {color: <?php echo $page_color_hover ?>;}
    <?php }
    if(! empty ($page_color_bg) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination > li > a {background-color: <?php echo $page_color_bg ?>;border-color: <?php echo $page_color_bg ?>;}
    <?php }
    if(! empty ($page_color_hover_bg) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination > li > a:hover {background-color: <?php echo $page_color_hover_bg ?>;border-color: <?php echo $page_color_hover_bg ?>;}
    <?php }
    if(! empty ($page_color_active) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination > .active > a {color: <?php echo $page_color_active ?>;}
    <?php }
    if(! empty ($page_color_hover_bg_active) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination > .active > a {background-color: <?php echo $page_color_hover_bg_active ?>;border-color: <?php echo $page_color_hover_bg_active ?>;}
    <?php }
    if(! empty ($pagi_margin_top) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination {margin-top: <?php echo $pagi_margin_top ?>;}
    <?php }
    if(! empty ($pagi_margin_right) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination {margin-right: <?php echo $pagi_margin_right ?>;}
    <?php }
    if(! empty ($pagi_margin_bottom) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination {margin-bottom: <?php echo $pagi_margin_bottom ?>;}
    <?php }
    if(! empty ($pagi_margin_left) ){ ?>
		#avo-portfolio-<?php echo $myuid; ?> .pagination {margin-left: <?php echo $pagi_margin_left ?>;}
    <?php }

    ?>
</style>

<?php if ($port_style == 'style-1') { ?>
<div id="avo-portfolio-<?php echo $myuid; ?>" class="filter-tab">
    <ul class="port-filter center-port-filter animated fadeInUp slow" data-animation="fadeInUp" data-delay="0.8s" >
                        
        <?php

        $destudio_terms = get_terms(array(
            'taxonomy' => 'portfolio_category',
            'hide_empty' => false,
            'include' => $blog_cat,
        )); // Get all terms of a taxonomy
        if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : ?>
        <li>
            <a class="active" href="#" data-filter="*">
                <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_portfolio_all') ) { 
                echo esc_attr( avo_option( 'avo_portfolio_all'));} else { esc_html_e('Show All','avo_plg'); } ?>
            </a>
        </li>
        <?php foreach ( $destudio_terms as $destudio_term ) { ?>
            <li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>" href="#">
            <?php echo esc_attr( $destudio_term->name); ?></a></li>
        <?php } 
        endif;?> 
    </ul>
</div>



<div id="avo-portfolio-<?php echo $myuid; ?>" class="portfolio-body clearfix standard-port <?php echo esc_attr("portfolio-1"); ?>">
    <?php 
    $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    if ($port_order != 'rand') {
        $order = 'order';
        $ord_val = $port_order;
    } else {
        $order = 'orderby';
        $ord_val = 'rand';
    }
    
    if ( $sort_cat  == 'yes' ) {
        $destudio_work = new \WP_Query(array(
            'posts_per_page'   => $portfolio_item,
            'post_type' =>  'portfolio', 'avo_plg',
            $order       =>  $ord_val,
            'tax_query' => array(
                array(
                    'taxonomy' => 'portfolio_category',   // taxonomy name
                    'field' => 'term_id',
                    'terms' => $blog_cat,           // term_id, slug or name                // term id, term slug or term name
                )
            )
        )); 
    } else {
        $destudio_work = new \WP_Query(array(
            'paged' => $avo_paged,
            'posts_per_page'   => $portfolio_item,
            'post_type' =>  'portfolio', 'avo_plg',
            $order       =>  $ord_val
        )); 
    }
    
    if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
    global $post ;
    
    ?>
    
    <div class="<?php if  ($port_column == '3') {echo "col-md-4"; } else if  ($port_column == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>
        port-item <?php $destudio_terms = get_the_terms( get_the_ID(), 'portfolio_category' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
    echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
    $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
    echo esc_attr( $destudio_class . " "); } ?><?php if  ($port_style != 'style-3') {echo "pb-30"; }?>" id="post-<?php the_ID(); ?>" >
        
        <div class="port-inner"> 

            <?php if  ($port_masonry  == 'yes' ) {  ?>
                <a class="port-link" href="<?php the_permalink(); ?>" ></a>
                <img alt="<?php the_title();?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
                <?php }else{ ?>

                <div class="port-box"></div> 
                <div class="port-img width-img img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                <?php if  ($port_style == 'style-1') {?>
                <div class="port-img width-img img-bg hid" style="background-image:url(<?php echo esc_url(get_post_meta($post->ID,'avo_gallery_port_img', true)); ?>);"></div>
                <?php }?>
            <?php }?>


            <div class="img-mask"></div>
            <div class="port-dbox">
                <div class="dbox-relative">
                    <?php if  ($port_style == 'style-3') {?>
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-img port-icon"> 
                        <span class="icon"><i class="fa fa-search"></i></span>
                        </a>
                        <?php }?>
                    <h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                    <div class="cleaboth clearfix"></div>
                    <?php $destudio_taxonomy = 'portfolio_category'; 
                        $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  ?> 
                    <p><?php $destudio_cats = array();  foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;   } 
                    echo implode(' / ', $destudio_cats);?></p>
                </div><!--/.dbox-relative-->
                <?php if  ($port_style == 'style-2') {?>
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-img port-icon"> 
                    <span class="icon">
                    <svg version="1.1" class="hover-svg-portfolio" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                    <path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M22,22l-3-3"/>
                    <path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M10,7v6"/>
                    <path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M13,10H7"/>
                    <path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M16.419,16.309
                        C14.786,17.97,12.514,19,10,19c-4.971,0-9-4.029-9-9s4.029-9,9-9s9,4.029,9,9c0,2.39-0.931,4.562-2.451,6.174"/>
                    </svg>
                    </span>
                <?php }?>
                    </a>
            </div><!--/.port-dbox--> 
        </div><!--/.port-inner-->                
        
    </div><!--.port-item-->
    
    <?php endwhile;  ?>
    
            <!--pagination--> 
            <?php  
            if  ($page_show == 'yes' && $sort_cat  != 'yes' ) {  ?>
            <div class="pagi-box clearfix
            <?php
                    $destudio_taxonomy = 'portfolio_category';
                    $destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
                    if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) :
                        foreach ( $destudio_terms as $destudio_term ) { ?>
                                <?php echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)); ?>
                            <?php } 
                    endif;?>">
                <?php avo_pagination($destudio_work->max_num_pages);  ?>
            </div>
                
            <?php };
            
    else: ?>
    
    <div class="alert alert-warning"><?php _e('There is no Portfolio Post Found. You need to  choose the portfolio category to show or create at least 1 portfolio post first.','avo-plg'); ?></div>
    <?php endif;  wp_reset_postdata();  ?>
                    
                    
</div><!--/.portfolio-body-->
<?php }; ?>

<?php if ($port_style == 'style-2') { ?>
<div id="avo-portfolio-<?php echo $myuid; ?>" class="filter-tab">
    <ul class="port-filter center-port-filter animated fadeInUp slow" data-animation="fadeInUp" data-delay="0.8s" >
                        
        <?php

        $destudio_terms = get_terms(array(
            'taxonomy' => 'portfolio_category',
            'hide_empty' => false,
            'include' => $blog_cat,
        )); // Get all terms of a taxonomy
        if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : ?>
        <li>
            <a class="active" href="#" data-filter="*">
                <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_portfolio_all') ) { 
                echo esc_attr( avo_option( 'avo_portfolio_all'));} else { esc_html_e('Show All','avo_plg'); } ?>
            </a>
        </li>
        <?php foreach ( $destudio_terms as $destudio_term ) { ?>
            <li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>" href="#">
            <?php echo esc_attr( $destudio_term->name); ?></a></li>
        <?php } 
        endif;?> 
    </ul>
</div>



<div id="avo-portfolio-<?php echo $myuid; ?>" class="portfolio-body clearfix standard-port <?php echo esc_attr("portfolio-2"); ?>">
    <?php 
    $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    if ($port_order != 'rand') {
        $order = 'order';
        $ord_val = $port_order;
    } else {
        $order = 'orderby';
        $ord_val = 'rand';
    }
    
    if ( $sort_cat  == 'yes' ) {
        $destudio_work = new \WP_Query(array(
            'posts_per_page'   => $portfolio_item,
            'post_type' =>  'portfolio', 'avo_plg',
            $order       =>  $ord_val,
            'tax_query' => array(
                array(
                    'taxonomy' => 'portfolio_category',   // taxonomy name
                    'field' => 'term_id',
                    'terms' => $blog_cat,           // term_id, slug or name                // term id, term slug or term name
                )
            )
        )); 
    } else {
        $destudio_work = new \WP_Query(array(
            'paged' => $avo_paged,
            'posts_per_page'   => $portfolio_item,
            'post_type' =>  'portfolio', 'avo_plg',
            $order       =>  $ord_val
        )); 
    }
    
    if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
    global $post ;
    
    ?>
    
    <div class="<?php if  ($port_column == '3') {echo "col-md-4"; } else if  ($port_column == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>
        port-item <?php $destudio_terms = get_the_terms( get_the_ID(), 'portfolio_category' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
    echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
    $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
    echo esc_attr( $destudio_class . " "); } ?><?php if  ($port_style != 'style-3') {echo "pb-30"; }?>" id="post-<?php the_ID(); ?>" >
        
        <div class="port-inner"> 

            <?php if  ($port_masonry  == 'yes' ) {  ?>
                <a class="port-link" href="<?php the_permalink(); ?>" ></a>
                <img alt="<?php the_title();?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
                <?php }else{ ?>

                <div class="port-box"></div> 
                <div class="port-img width-img img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                <?php if  ($port_style == 'style-1') {?>
                <div class="port-img width-img img-bg hid" style="background-image:url(<?php echo esc_url(get_post_meta($post->ID,'avo_gallery_port_img', true)); ?>);"></div>
                <?php }?>
            <?php }?>


            <div class="img-mask"></div>
            <div class="port-dbox">
                <div class="dbox-relative">
                    <?php if  ($port_style == 'style-3') {?>
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-img port-icon"> 
                        <span class="icon"><i class="fa fa-search"></i></span>
                        </a>
                        <?php }?>
                    <h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                    <div class="cleaboth clearfix"></div>
                    <?php $destudio_taxonomy = 'portfolio_category'; 
                        $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  ?> 
                    <p><?php $destudio_cats = array();  foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;   } 
                    echo implode(' / ', $destudio_cats);?></p>
                </div><!--/.dbox-relative-->
                <?php if  ($port_style == 'style-2') {?>
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-img port-icon"> 
                    <span class="icon">
<svg version="1.1" class="hover-svg-portfolio" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M22,22l-3-3"/>
<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M10,7v6"/>
<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M13,10H7"/>
<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M16.419,16.309
    C14.786,17.97,12.514,19,10,19c-4.971,0-9-4.029-9-9s4.029-9,9-9s9,4.029,9,9c0,2.39-0.931,4.562-2.451,6.174"/>
</svg>
</span>
                <?php }?>
                    </a>
            </div><!--/.port-dbox--> 
        </div><!--/.port-inner-->                
        
    </div><!--.port-item-->
    
    <?php endwhile;  ?>
    
            <!--pagination--> 
            <?php  
            if  ($page_show == 'yes' && $sort_cat  != 'yes' ) {  ?>
            <div class="pagi-box clearfix
            <?php
                    $destudio_taxonomy = 'portfolio_category';
                    $destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
                    if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) :
                        foreach ( $destudio_terms as $destudio_term ) { ?>
                                <?php echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)); ?>
                            <?php } 
                    endif;?>">
                <?php avo_pagination($destudio_work->max_num_pages);  ?>
            </div>
                
            <?php };
            
    else: ?>
    
    <div class="alert alert-warning"><?php _e('There is no Portfolio Post Found. You need to  choose the portfolio category to show or create at least 1 portfolio post first.','avo-plg'); ?></div>
    <?php endif;  wp_reset_postdata();  ?>
                    
                    
</div><!--/.portfolio-body-->
<?php }; ?>


<?php if ($port_style == 'style-3') { ?>
<div id="avo-portfolio-<?php echo $myuid; ?>" class="filter-tab">
    <ul class="port-filter center-port-filter animated fadeInUp slow" data-animation="fadeInUp" data-delay="0.8s" >
                        
        <?php

        $destudio_terms = get_terms(array(
            'taxonomy' => 'portfolio_category',
            'hide_empty' => false,
            'include' => $blog_cat,
        )); // Get all terms of a taxonomy 
        if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : ?>
        <li>
            <a class="active" href="#" data-filter="*">
                <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_portfolio_all') ) { 
                echo esc_attr( avo_option( 'avo_portfolio_all'));} else { esc_html_e('Show All','avo_plg'); } ?>
            </a>
        </li>
        <?php foreach ( $destudio_terms as $destudio_term ) { ?>
            <li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>" href="#">
            <?php echo esc_attr( $destudio_term->name); ?></a></li>
        <?php } 
        endif;?> 
    </ul>
</div>



<div id="avo-portfolio-<?php echo $myuid; ?>" class="portfolio-body clearfix standard-port <?php echo esc_attr("portfolio-3"); ?>">
    <?php 
    $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    if ($port_order != 'rand') {
        $order = 'order';
        $ord_val = $port_order;
    } else {
        $order = 'orderby';
        $ord_val = 'rand';
    }
    
    if ( $sort_cat  == 'yes' ) {
        $destudio_work = new \WP_Query(array(
            'posts_per_page'   => $portfolio_item,
            'post_type' =>  'portfolio', 'avo_plg',
            $order       =>  $ord_val,
            'tax_query' => array(
                array(
                    'taxonomy' => 'portfolio_category',   // taxonomy name
                    'field' => 'term_id',
                    'terms' => $blog_cat,           // term_id, slug or name                // term id, term slug or term name
                )
            )
        )); 
    } else {
        $destudio_work = new \WP_Query(array(
            'paged' => $avo_paged,
            'posts_per_page'   => $portfolio_item,
            'post_type' =>  'portfolio', 'avo_plg',
            $order       =>  $ord_val
        )); 
    }
    
    if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
    global $post ;
    
    ?>
    
    <div class="<?php if  ($port_column == '3') {echo "col-md-4"; } else if  ($port_column == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>
        port-item <?php $destudio_terms = get_the_terms( get_the_ID(), 'portfolio_category' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
    echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
    $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
    echo esc_attr( $destudio_class . " "); } ?><?php if  ($port_style != 'style-3') {echo "pb-30"; }?>" id="post-<?php the_ID(); ?>" >
        
        <div class="port-inner"> 

            <?php if  ($port_masonry  == 'yes' ) {  ?>
                <a class="port-link" href="<?php the_permalink(); ?>" ></a>
                <img alt="<?php the_title();?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
                <?php }else{ ?>

                <div class="port-box"></div> 
                <div class="port-img width-img img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                <?php if  ($port_style == 'style-1') {?>
                <div class="port-img width-img img-bg hid" style="background-image:url(<?php echo esc_url(get_post_meta($post->ID,'avo_gallery_port_img', true)); ?>);"></div>
                <?php }?>
            <?php }?>


            <div class="img-mask"></div>
            <div class="port-dbox">
                <div class="dbox-relative">
                    <?php if  ($port_style == 'style-3') {?>
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-img port-icon"> 
                        <span class="icon"><i class="fa fa-search"></i></span>
                        </a>
                        <?php }?>
                    <h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                    <div class="cleaboth clearfix"></div>
                    <?php $destudio_taxonomy = 'portfolio_category'; 
                        $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  ?> 
                    <p><?php $destudio_cats = array();  foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;   } 
                    echo implode(' / ', $destudio_cats);?></p>
                </div><!--/.dbox-relative-->
                <?php if  ($port_style == 'style-2') {?>
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-img port-icon"> 
                    <span class="icon">
<svg version="1.1" class="hover-svg-portfolio" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M22,22l-3-3"/>
<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M10,7v6"/>
<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M13,10H7"/>
<path fill="none" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M16.419,16.309
    C14.786,17.97,12.514,19,10,19c-4.971,0-9-4.029-9-9s4.029-9,9-9s9,4.029,9,9c0,2.39-0.931,4.562-2.451,6.174"/>
</svg>
</span>
                <?php }?>
                    </a>
            </div><!--/.port-dbox--> 
        </div><!--/.port-inner-->                
        
    </div><!--.port-item-->
    
    <?php endwhile;  ?>
    
            <!--pagination--> 
            <?php  
            if  ($page_show == 'yes' && $sort_cat  != 'yes' ) {  ?>
            <div class="pagi-box clearfix
            <?php
                    $destudio_taxonomy = 'portfolio_category';
                    $destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
                    if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) :
                        foreach ( $destudio_terms as $destudio_term ) { ?>
                                <?php echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)); ?>
                            <?php } 
                    endif;?>">
                <?php avo_pagination($destudio_work->max_num_pages);  ?>
            </div>
                
            <?php };
            
    else: ?>
    
    <div class="alert alert-warning"><?php _e('There is no Portfolio Post Found. You need to  choose the portfolio category to show or create at least 1 portfolio post first.','avo-plg'); ?></div>
    <?php endif;  wp_reset_postdata();  ?>
                    
                    
</div><!--/.portfolio-body-->
<?php }; ?>

<?php if ($port_style == 'style-4') { ?>
<div id="avo-portfolio-<?php echo $myuid; ?>" class="portfolio style-4 imago wow <?php echo 'mode-'. $avo_mode ?>">
    <div class="swiper-container">
        <div class="swiper-wrapper ">


            <?php 
            $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if ($port_order != 'rand') {
                $order = 'order';
                $ord_val = $port_order;
            } else {
                $order = 'orderby';
                $ord_val = 'rand';
            }
            
            if ( $sort_cat  == 'yes' ) {
                $destudio_work = new \WP_Query(array(
                    'posts_per_page'   => $portfolio_item,
                    'post_type' =>  'portfolio', 'avo_plg',
                    $order       =>  $ord_val,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'portfolio_category',   // taxonomy name
                            'field' => 'term_id',
                            'terms' => $blog_cat,           // term_id, slug or name                // term id, term slug or term name
                        )
                    )
                )); 
            } else {
                $destudio_work = new \WP_Query(array(
                    'paged' => $avo_paged,
                    'posts_per_page'   => $portfolio_item,
                    'post_type' =>  'portfolio', 'avo_plg',
                    $order       =>  $ord_val
                )); 
            }
            
            if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
            global $post ;
            
            ?>

            <div class="swiper-slide ">
                <div class="content  noraidus fadeInUp" data-wow-delay=".3s">
                    <div class="item-img bg-img "
                        style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    </div>
                    <div class="cont">
                        <h6>
                        <?php 
                            $destudio_taxonomy = 'portfolio_category'; 
                            $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  
                            $destudio_cats = array();
                            foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;} 
                            echo implode(' / ', $destudio_cats);
                        ?>                                            </h6>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>
                </div>
            </div>


            <?php endwhile;  ?>
            <?php endif;  wp_reset_postdata();  ?>

        </div> 
                <!-- slider setting -->
        <div class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer">
            <span class="simple-btn right"><?php echo esc_attr( $nav_next); ?></span>
        </div>
        <div class="swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer">
            <span class="simple-btn"><?php echo esc_attr( $nav_prev); ?></span>
        </div> 
    </div>
</div>
<?php }; ?>

<?php if ($port_style == 'style-5') { ?>
<div id="avo-portfolio-<?php echo $myuid; ?>" class="portfolio style-5 <?php echo 'mode-'. $avo_mode ?>"> 
    <div class="filtering text-center col-12">
        <div class="filter">

            <?php
                $destudio_terms = get_terms(array(
                    'taxonomy' => 'portfolio_category',
                    'hide_empty' => false,
                    'include' => $blog_cat,
                )); // Get all terms of a taxonomy 
                if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : 
            ?>

                <span data-filter='*' class="active">
                    <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_portfolio_all') ) { 
                            echo esc_attr( avo_option( 'avo_portfolio_all'));} else { esc_html_e('Show All','avo_plg'); 
                        }
                    ?>  
                </span>

            <?php foreach ( $destudio_terms as $destudio_term ) { ?>
                <span data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>">
                    <?php echo esc_attr( $destudio_term->name); ?> 
                </span>
            <?php } 
                endif;?>

        </div>
    </div>

    
    <div class="avo-gallery">  
        <?php 
            $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if ($port_order != 'rand') {
                $order = 'order';
                $ord_val = $port_order;
            } else {
                $order = 'orderby';
                $ord_val = 'rand';
            }
            
            if ( $sort_cat  == 'yes' ) {
                $destudio_work = new \WP_Query(array(
                    'posts_per_page'   => $portfolio_item,
                    'post_type' =>  'portfolio', 'avo_plg',
                    $order       =>  $ord_val,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'portfolio_category',   // taxonomy name
                            'field' => 'term_id',
                            'terms' => $blog_cat,           // term_id, slug or name                // term id, term slug or term name
                        )
                    )
                )); 
            } else {
                $destudio_work = new \WP_Query(array(
                    'paged' => $avo_paged,
                    'posts_per_page'   => $portfolio_item,
                    'post_type' =>  'portfolio', 'avo_plg',
                    $order       =>  $ord_val
                )); 
            }
            
            if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
            global $post ;
            
        ?>

                     <div class="<?php if  ($port_column == '3') {echo "col-md-4"; } else if  ($port_column == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?> items  <?php $destudio_terms = get_the_terms( get_the_ID(), 'portfolio_category' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
            echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
            $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
            echo esc_attr( $destudio_class . " "); } ?> ">
                        <div class="item-img">
                            <a href="<?php the_permalink(); ?>" class="">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="cont">
                            <h6><?php the_title(); ?></h6>
                            <span>
                                <?php 
                                    $destudio_taxonomy = 'portfolio_category'; 
                                    $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  
                                    $destudio_cats = array();
                                    foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;} 
                                    echo implode(' / ', $destudio_cats);
                                ?>
                            </span>
                        </div>
                    </div>

        <?php endwhile;  ?>
        <?php endif;  wp_reset_postdata();  ?>
    </div>
</div>
<?php }; ?>

<?php if ($port_style == 'style-6') { ?>
<div id="avo-portfolio-<?php echo $myuid; ?>" class="portfolio style-6 imago wow <?php echo 'mode-'. $avo_mode ?>">
	<div class="work-carousel caroul sub-bg">
	    <div class="swiper-container">
	        <div class="swiper-wrapper ">  


	            <?php 
	            $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	            if ($port_order != 'rand') {
	                $order = 'order';
	                $ord_val = $port_order;
	            } else {
	                $order = 'orderby';
	                $ord_val = 'rand';
	            }
	            
	            if ( $sort_cat  == 'yes' ) {
	                $destudio_work = new \WP_Query(array(
	                    'posts_per_page'   => $portfolio_item,
	                    'post_type' =>  'portfolio', 'avo_plg',
	                    $order       =>  $ord_val,
	                    'tax_query' => array(
	                        array(
	                            'taxonomy' => 'portfolio_category',   // taxonomy name
	                            'field' => 'term_id',
	                            'terms' => $blog_cat,           // term_id, slug or name                // term id, term slug or term name
	                        )
	                    )
	                )); 
	            } else {
	                $destudio_work = new \WP_Query(array(
	                    'paged' => $avo_paged,
	                    'posts_per_page'   => $portfolio_item,
	                    'post_type' =>  'portfolio', 'avo_plg',
	                    $order       =>  $ord_val
	                )); 
	            }
	            
	            if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
	            global $post ;
	            
	            ?>


	                                <div class="swiper-slide ">
	                                    <div class="content fadeInUp animate" data-wow-delay=".3s">
	                                        <div class="item-img bg-img "
	                                            style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
	                                        </div>
	                                        <div class="cont bgbox">
	                                            <h6>
	                                            <?php 
	                                                $destudio_taxonomy = 'portfolio_category'; 
	                                                $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  
	                                                $destudio_cats = array();
	                                                foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;} 
	                                                echo implode(' / ', $destudio_cats);
	                                            ?>                                            </h6>
	                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	                                            <a href="<?php the_permalink(); ?>">
                                            		<span class="icon"><i class="fa fa-plus"></i></span>
                                        		</a>
	                                        </div>
	                                    </div>
	                                </div>


	            <?php endwhile;  ?>
	            <?php endif;  wp_reset_postdata();  ?>

	        </div> 
	                <!-- slider setting -->
	        <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
	            <i class="ion-ios-arrow-right"></i>
	        </div>
	        <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
	            <i class="ion-ios-arrow-left"></i>
	        </div> 
	    </div>
	</div>
</div>
<?php }; ?>

<?php if ($port_style == 'style-7') { ?>
<div id="avo-portfolio-<?php echo $myuid; ?>" class="portfolio style-7 avo-tooltip">
	<div class="works">
            <div class="container">
                <div class="row lg-space">


	            <?php 
	            $avo_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	            if ($port_order != 'rand') {
	                $order = 'order';
	                $ord_val = $port_order;
	            } else {
	                $order = 'orderby'; 
	                $ord_val = 'rand';
	            }
	            
	            if ( $sort_cat  == 'yes' ) {
	                $destudio_work = new \WP_Query(array(
	                    'posts_per_page'   => $portfolio_item,
	                    'post_type' =>  'portfolio', 'avo_plg',
	                    $order       =>  $ord_val,
	                    'tax_query' => array(
	                        array(
	                            'taxonomy' => 'portfolio_category',   // taxonomy name
	                            'field' => 'term_id',
	                            'terms' => $blog_cat,           // term_id, slug or name                // term id, term slug or term name
	                        )
	                    )
	                )); 
	            } else {
	                $destudio_work = new \WP_Query(array(
	                    'paged' => $avo_paged,
	                    'posts_per_page'   => $portfolio_item,
	                    'post_type' =>  'portfolio', 'avo_plg',
	                    $order       =>  $ord_val
	                )); 
	            }
	            
	            if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
	            global $post ;
	            
	            ?>

                    <div class="col-lg-4 col-md-6 valign">
                        <div class="item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="img" data-tooltip-tit="<?php the_title(); ?>" data-tooltip-sub="
                                <?php 
                                    $destudio_taxonomy = 'portfolio_category'; 
                                    $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  
                                    $destudio_cats = array();
                                    foreach ( $destudio_taxs as $destudio_tax ) { $destudio_cats[] =   $destudio_tax->name ;} 
                                    echo implode(' / ', $destudio_cats);
                                ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </a>
                        </div>
                    </div>

	            <?php endwhile;  ?>
	            <?php endif;  wp_reset_postdata();  ?>

	        </div> 
	    </div>
	</div>
</div>
<?php }; ?>