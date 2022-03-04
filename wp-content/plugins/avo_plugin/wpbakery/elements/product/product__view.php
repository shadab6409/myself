<?php 

// generating unique id with pefix gfg 
$myuid = uniqid('avo');

?>
<style>

	<?php if(! empty ($filter) ){ ?>
		#avo-product-<?php echo $myuid; ?> .filter-tab {display: <?php echo $filter ?>;}
    <?php }
    if(! empty ($filter_align) ){ ?>
		#avo-product-<?php echo $myuid; ?> .filter-tab {text-align: <?php echo $filter_align ?>;}
    <?php }
    if(! empty ($page_align) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagi-box {text-align: <?php echo $page_align ?>;}
    <?php }
    if(! empty ($product_margin) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-inner {margin: <?php echo $product_margin ?>;}
        #avo-product-<?php echo $myuid; ?> .portfolio-body {margin: -<?php echo $product_margin ?>;}
    <?php }
    if(! empty ($product_height) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-box {padding: <?php echo $product_height ?> 0;}
    <?php }
    if(! empty ($port_content_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {margin-top: <?php echo $port_content_top ?>;}
    <?php }
    if(! empty ($port_content_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {margin-right: <?php echo $port_content_right ?>;}
    <?php }
    if(! empty ($port_content_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {margin-bottom: <?php echo $port_content_bottom ?>;}
    <?php }
    if(! empty ($port_content_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {margin-left: <?php echo $port_content_left ?>;}
    <?php }
    if(! empty ($port_padding_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {padding-top: <?php echo $port_padding_top ?>;}
    <?php }
    if(! empty ($port_padding_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {padding-right: <?php echo $port_padding_right ?>;}
    <?php }
    if(! empty ($port_padding_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {padding-bottom: <?php echo $port_padding_bottom ?>;}
    <?php }
    if(! empty ($port_padding_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {padding-left: <?php echo $port_padding_left ?>;}
    <?php }
    if(! empty ($bg_content) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {background-color: <?php echo $bg_content ?>;}
    <?php }
    if(! empty ($content_align) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative {text-align: <?php echo $content_align ?>;}
    <?php }
    if(! empty ($title_type) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {display: <?php echo $title_type ?>;}
    <?php }
    if(! empty ($title_cl) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 a {color: <?php echo $title_cl ?>;}
    <?php }
    if(! empty ($title_clh) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 a:hover {color: <?php echo $title_clh ?>;}
    <?php }
    if(! empty ($title_bgl) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {background-color: <?php echo $title_bgl ?>;}
    <?php }
    if(! empty ($title_bgl) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {background-color: <?php echo $title_bgl ?>;}
    <?php }
    if(! empty ($titlep_padding_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {padding-top: <?php echo $titlep_padding_top ?>;}
    <?php }
    if(! empty ($titlep_padding_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {padding-right: <?php echo $titlep_padding_right ?>;}
    <?php }
    if(! empty ($titlep_padding_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {padding-bottom: <?php echo $titlep_padding_bottom ?>;}
    <?php }
    if(! empty ($titlep_padding_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {padding-left: <?php echo $titlep_padding_left ?>;}
    <?php }
    if(! empty ($titlep_margin_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {margin-top: <?php echo $titlep_margin_top ?>;}
    <?php }
    if(! empty ($titlep_margin_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {margin-right: <?php echo $titlep_margin_right ?>;}
    <?php }
    if(! empty ($titlep_margin_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {margin-bottom: <?php echo $titlep_margin_bottom ?>;}
    <?php }
    if(! empty ($titlep_margin_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative h3 {margin-left: <?php echo $titlep_margin_left ?>;}
    <?php }
    if(! empty ($text_type) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {display: <?php echo $text_type ?>;}
    <?php }
    if(! empty ($txt_cl) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {color: <?php echo $txt_cl ?>;}
    <?php }
    if(! empty ($txt_bg) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {background-color: <?php echo $txt_bg ?>;}
    <?php }
    if(! empty ($tx_padding_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {padding-top: <?php echo $tx_padding_top ?>;}
    <?php }
    if(! empty ($tx_padding_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {padding-right: <?php echo $tx_padding_right ?>;}
    <?php }
    if(! empty ($tx_padding_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {padding-bottom: <?php echo $tx_padding_bottom ?>;}
    <?php }
    if(! empty ($tx_padding_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {padding-left: <?php echo $tx_padding_left ?>;}
    <?php }
    if(! empty ($tx_margin_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {margin-top: <?php echo $tx_margin_top ?>;}
    <?php }
    if(! empty ($tx_margin_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {margin-right: <?php echo $tx_margin_right ?>;}
    <?php }
    if(! empty ($tx_margin_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {margin-bottom: <?php echo $tx_margin_bottom ?>;}
    <?php }
    if(! empty ($tx_margin_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .dbox-relative p {margin-left: <?php echo $tx_margin_left ?>;}
    <?php }
    if(! empty ($filter_margin_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter {margin-top: <?php echo $filter_margin_top ?>;}
    <?php }
    if(! empty ($filter_margin_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter {margin-right: <?php echo $filter_margin_right ?>;}
    <?php }
    if(! empty ($filter_margin_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter {margin-bottom: <?php echo $filter_margin_bottom ?>;}
    <?php }
    if(! empty ($filter_margin_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter {margin-left: <?php echo $filter_margin_left ?>;}
    <?php }
    if(! empty ($filter_padding_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {padding-top: <?php echo $filter_padding_top ?>;}
    <?php }
    if(! empty ($filter_padding_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {padding-right: <?php echo $filter_padding_right ?>;}
    <?php }
    if(! empty ($filter_padding_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {padding-bottom: <?php echo $filter_padding_bottom ?>;}
    <?php }
    if(! empty ($filter_padding_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {padding-left: <?php echo $filter_padding_left ?>;}
    <?php }
    if(! empty ($filter_linkmargin_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {margin-top: <?php echo $filter_linkmargin_top ?>;}
    <?php }
    if(! empty ($filter_linkmargin_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {margin-right: <?php echo $filter_linkmargin_right ?>;}
    <?php }
    if(! empty ($filter_linkmargin_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {margin-bottom: <?php echo $filter_linkmargin_bottom ?>;}
    <?php }
    if(! empty ($filter_linkmargin_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {margin-left: <?php echo $filter_linkmargin_left ?>;}
    <?php }
    if(! empty ($filter_border_radius_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-top-left-radius: <?php echo $filter_border_radius_top ?>;}
    <?php }
    if(! empty ($filter_border_radius_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-top-right-radius: <?php echo $filter_border_radius_right ?>;}
    <?php }
    if(! empty ($filter_border_radius_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-bottom-right-radius: <?php echo $filter_border_radius_bottom ?>;}
    <?php }
    if(! empty ($filter_border_radius_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-bottom-left-radius: <?php echo $filter_border_radius_left ?>;}
    <?php }
    if(! empty ($color_def) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {color: <?php echo $color_def ?>;}
    <?php }
    if(! empty ($color_bgdef) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {background: <?php echo $color_bgdef ?>;}
    <?php }
    if(! empty ($color_hov) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a.active {color: <?php echo $color_hov ?>;}
        #avo-product-<?php echo $myuid; ?> .port-filter a:hover {color: <?php echo $color_hov ?>;}
    <?php }
    if(! empty ($color_bgdefhover) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a.active {background: <?php echo $color_bgdefhover ?>;}
        #avo-product-<?php echo $myuid; ?> .port-filter a::before {background: <?php echo $color_bgdefhover ?>;}
        #avo-product-<?php echo $myuid; ?> .port-filter a::after {background: <?php echo $color_bgdefhover ?>;}
        #avo-product-<?php echo $myuid; ?> .port-filter a:hover {background: <?php echo $color_bgdefhover ?>;}
    <?php }
    if(! empty ($border_type) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-style: <?php echo $border_type ?>;}
    <?php }
    if(! empty ($border_width_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-top-width: <?php echo $border_width_top ?>;}
    <?php }
    if(! empty ($border_width_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-right-width: <?php echo $border_width_right ?>;}
    <?php }
    if(! empty ($border_width_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-bottom-width: <?php echo $border_width_bottom ?>;}
    <?php }
    if(! empty ($border_width_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-left-width: <?php echo $border_width_left ?>;}
    <?php }
    if(! empty ($color_border) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a {border-color: <?php echo $color_border ?>;}
    <?php }
    if(! empty ($color_borderhover) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-filter a:hover {border-color: <?php echo $color_borderhover ?>;}
        #avo-product-<?php echo $myuid; ?> .port-filter a.active {border-color: <?php echo $color_borderhover ?>;}
    <?php }
    if(! empty ($mask_color) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-inner:hover .port-box {background-color: <?php echo $mask_color ?>;}
    <?php }
    if(! empty ($mask_color2) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-inner:hover .port-box::after {background-color: <?php echo $mask_color2 ?>;}
    <?php }
    if(! empty ($mask_color_opacity) ){ ?>
		#avo-product-<?php echo $myuid; ?> .port-inner:hover .port-box {opacity: <?php echo $mask_color_opacity ?>;}
    <?php }
    if(! empty ($page_color) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination > li > a {color: <?php echo $page_color ?>;}
    <?php }
    if(! empty ($page_color_hover) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination > li > a:hover {color: <?php echo $page_color_hover ?>;}
    <?php }
    if(! empty ($page_color_bg) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination > li > a {background-color: <?php echo $page_color_bg ?>;border-color: <?php echo $page_color_bg ?>;}
    <?php }
    if(! empty ($page_color_hover_bg) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination > li > a:hover {background-color: <?php echo $page_color_hover_bg ?>;border-color: <?php echo $page_color_hover_bg ?>;}
    <?php }
    if(! empty ($page_color_active) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination > .active > a {color: <?php echo $page_color_active ?>;}
    <?php }
    if(! empty ($page_color_hover_bg_active) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination > .active > a {background-color: <?php echo $page_color_hover_bg_active ?>;border-color: <?php echo $page_color_hover_bg_active ?>;}
    <?php }
    if(! empty ($pagi_margin_top) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination {margin-top: <?php echo $pagi_margin_top ?>;}
    <?php }
    if(! empty ($pagi_margin_right) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination {margin-right: <?php echo $pagi_margin_right ?>;}
    <?php }
    if(! empty ($pagi_margin_bottom) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination {margin-bottom: <?php echo $pagi_margin_bottom ?>;}
    <?php }
    if(! empty ($pagi_margin_left) ){ ?>
		#avo-product-<?php echo $myuid; ?> .pagination {margin-left: <?php echo $pagi_margin_left ?>;}
    <?php }

    ?>
</style>

<?php if ($port_style == 'style-1') { ?>
<div id="avo-product-<?php echo $myuid; ?>" class="avo-product style-1">
    <div class="filter-tab">
        <ul class="port-filter center-port-filter">
                            
            <?php
            $destudio_taxonomy = 'product_cat';
            $destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
            if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : ?>
            <li>
                <a class="active" href="#" data-filter="*">
                    <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_product_all') ) { 
                    echo esc_attr( avo_option( 'avo_product_all'));} else { esc_html_e('Show All','avo_plg'); } ?>
                </a>
            </li>
            <?php foreach ( $destudio_terms as $destudio_term ) { ?>
                <li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>" href="#">
                <?php echo esc_attr( $destudio_term->name); ?></a></li>
            <?php } 
            endif;?> 
        </ul>
    </div>
    
    

    <div class="portfolio-body clearfix standard-port">
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
                'posts_per_page'   => $product_item,
                'post_type' =>  'product', 'avo_plg',
                $order       =>  $ord_val,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',   // taxonomy name
                        'field' => 'term_id',
                        'terms' => $product_cat,           // term_id, slug or name                // term id, term slug or term name
                    )
                )
            )); 
        } else {
            $destudio_work = new \WP_Query(array(
                'paged' => $avo_paged,
                'posts_per_page'   => $product_item,
                'post_type' =>  'product', 'avo_plg',
                $order       =>  $ord_val
            )); 
        }
        
        if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
        global $post ;
        ?>

        <div class="<?php if  ($port_column == '3') {echo "col-md-4"; } else if  ($port_column == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>
            port-item <?php $destudio_terms = get_the_terms( get_the_ID(), 'product_cat' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
        echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
        $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
        echo esc_attr( $destudio_class . " "); } ?><?php if  ($port_style == 'style-2') {echo "pb-30"; }?>" id="post-<?php the_ID(); ?>">
            
            <div class="port-inner">
                <div class="port-box"></div>
                <div class="port-img width-img img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
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
                        <?php $destudio_taxonomy = 'product_cat'; 
                            $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  ?> 
                        <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                        <p><?php echo wc_price( $price ); ?></p>
                    </div><!--/.dbox-relative-->
                    <?php if  ($port_style == 'style-2') {?>
                        
                    <?php
                    global $product;

                    echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                        sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button product_type_%s add_to_cart_button ajax_add_to_cart %s">
                            <span class="button__cart">%s</span>
                            <span class="button__loader h-rotatingNeuron">%s</span>
                            <span class="button__added">%s</span></a>',
                            esc_url( $product->add_to_cart_url() ),
                            esc_attr( $product->get_id() ),
                            esc_attr( $product->get_sku() ),
                            $product->is_purchasable() && $product->is_in_stock() ? 'd-flex align-items-center justify-content-center' : 'h-display-none',
                            esc_attr( $product->get_type() ),
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fa fa-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>',
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>',
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>'
                        ),
                    $product );

                    }?>
                    
                        
                </div><!--/.port-dbox-->
            </div><!--/.port-inner-->                
            
        </div><!--.port-item-->
        
        <?php endwhile;  ?>
        
                <!--pagination--> 
                <?php  
                if  ($page_show == 'yes' && $sort_cat  != 'yes' ) {  ?>
                <div class="pagi-box clearfix
                <?php
                        $destudio_taxonomy = 'product_cat';
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
        
        <div class="alert alert-warning"><?php _e('There is no Product Post Found. You need to  choose the product category to show or create at least 1 product post first.','avo-plg'); ?></div>
        <?php endif;  wp_reset_postdata();  ?>
                        
                        
    </div><!--/.product-body-->
</div>
<?php }; ?>

<?php if ($port_style == 'style-2') { ?>
<div id="avo-product-<?php echo $myuid; ?>" class="avo-product style-2">
    <div class="filter-tab">
        <ul class="port-filter center-port-filter">
                            
            <?php
            $destudio_taxonomy = 'product_cat';
            $destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
            if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : ?>
            <li>
                <a class="active" href="#" data-filter="*">
                    <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_product_all') ) { 
                    echo esc_attr( avo_option( 'avo_product_all'));} else { esc_html_e('Show All','avo_plg'); } ?>
                </a>
            </li>
            <?php foreach ( $destudio_terms as $destudio_term ) { ?>
                <li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>" href="#">
                <?php echo esc_attr( $destudio_term->name); ?></a></li>
            <?php } 
            endif;?> 
        </ul>
    </div>
    
    

    <div class="portfolio-body clearfix standard-port portfolio-2">
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
                'posts_per_page'   => $product_item,
                'post_type' =>  'product', 'avo_plg',
                $order       =>  $ord_val,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',   // taxonomy name
                        'field' => 'term_id',
                        'terms' => $product_cat,           // term_id, slug or name                // term id, term slug or term name
                    )
                )
            )); 
        } else {
            $destudio_work = new \WP_Query(array(
                'paged' => $avo_paged,
                'posts_per_page'   => $product_item,
                'post_type' =>  'product', 'avo_plg',
                $order       =>  $ord_val
            )); 
        }
        
        if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
        global $post ;
        ?>

        <div class="<?php if  ($port_column == '3') {echo "col-md-4"; } else if  ($port_column == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>
            port-item <?php $destudio_terms = get_the_terms( get_the_ID(), 'product_cat' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
        echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
        $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
        echo esc_attr( $destudio_class . " "); } ?> pb-30" id="post-<?php the_ID(); ?>">
            
            <div class="port-inner">
                <div class="port-box"></div>
                <div class="port-img width-img img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
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
                        <?php $destudio_taxonomy = 'product_cat'; 
                            $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  ?> 
                        <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                        <p><?php echo wc_price( $price ); ?></p>
                    </div><!--/.dbox-relative-->
                    <?php if  ($port_style == 'style-2') {?>
                        
                    <?php
                    global $product;

                    echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                        sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button product_type_%s add_to_cart_button ajax_add_to_cart %s">
                            <span class="button__cart">%s</span>
                            <span class="button__loader h-rotatingNeuron">%s</span>
                            <span class="button__added">%s</span></a>',
                            esc_url( $product->add_to_cart_url() ),
                            esc_attr( $product->get_id() ),
                            esc_attr( $product->get_sku() ),
                            $product->is_purchasable() && $product->is_in_stock() ? 'd-flex align-items-center justify-content-center' : 'h-display-none',
                            esc_attr( $product->get_type() ),
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fa fa-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>',
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>',
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>'
                        ),
                    $product );

                    }?>
                    
                        
                </div><!--/.port-dbox-->
            </div><!--/.port-inner-->                
            
        </div><!--.port-item-->
        
        <?php endwhile;  ?>
        
                <!--pagination--> 
                <?php  
                if  ($page_show == 'yes' && $sort_cat  != 'yes' ) {  ?>
                <div class="pagi-box clearfix
                <?php
                        $destudio_taxonomy = 'product_cat';
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
        
        <div class="alert alert-warning"><?php _e('There is no Product Post Found. You need to  choose the product category to show or create at least 1 product post first.','avo-plg'); ?></div>
        <?php endif;  wp_reset_postdata();  ?>
                        
                        
    </div><!--/.product-body-->
</div>
<?php }; ?>

<?php if ($port_style == 'style-3') { ?>
<div class="avo-product style-3">
    <div class="filter-tab">
        <ul class="port-filter center-port-filter">
                            
            <?php
            $destudio_taxonomy = 'product_cat';
            $destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
            if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) : ?>
            <li>
                <a class="active" href="#" data-filter="*">
                    <?php if ( class_exists('ReduxFrameworkPlugin')&& avo_option( 'avo_product_all') ) { 
                    echo esc_attr( avo_option( 'avo_product_all'));} else { esc_html_e('Show All','avo_plg'); } ?>
                </a>
            </li>
            <?php foreach ( $destudio_terms as $destudio_term ) { ?>
                <li><a data-filter=".<?php echo  strtolower(preg_replace('/[^a-zA-Z]+/','-', $destudio_term->name)); ?>" href="#">
                <?php echo esc_attr( $destudio_term->name); ?></a></li>
            <?php } 
            endif;?> 
        </ul>
    </div>
    
    

    <div class="portfolio-body clearfix standard-port portfolio-type-three>
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
                'posts_per_page'   => $product_item,
                'post_type' =>  'product', 'avo_plg',
                $order       =>  $ord_val,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',   // taxonomy name
                        'field' => 'term_id',
                        'terms' => $product_cat,           // term_id, slug or name                // term id, term slug or term name
                    )
                )
            )); 
        } else {
            $destudio_work = new \WP_Query(array(
                'paged' => $avo_paged,
                'posts_per_page'   => $product_item,
                'post_type' =>  'product', 'avo_plg',
                $order       =>  $ord_val
            )); 
        }
        
        if ($destudio_work->have_posts()) : while  ($destudio_work->have_posts()) : $destudio_work->the_post();
        global $post ;
        ?>

        <div class="<?php if  ($port_column == '3') {echo "col-md-4"; } else if  ($port_column == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>
            port-item <?php $destudio_terms = get_the_terms( get_the_ID(), 'product_cat' ); if(is_array($destudio_terms) && count($destudio_terms) > 0) { foreach ($destudio_terms as $destudio_term) { 
        echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)). ' '; } }
        $destudio_allClasses = get_post_class(); foreach ($destudio_allClasses as $destudio_class) { 
        echo esc_attr( $destudio_class . " "); } ?><?php if  ($port_style == 'style-2') {echo "pb-30"; }?>" id="post-<?php the_ID(); ?>">
            
            <div class="port-inner">
                <div class="port-box"></div>
                <div class="port-img width-img img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
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
                        <?php $destudio_taxonomy = 'product_cat'; 
                            $destudio_taxs = wp_get_post_terms($post->ID,$destudio_taxonomy);  ?> 
                        <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                        <p><?php echo wc_price( $price ); ?></p>
                    </div><!--/.dbox-relative-->
                    <?php if  ($port_style == 'style-2') {?>
                        
                    <?php
                    global $product;

                    echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                        sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button product_type_%s add_to_cart_button ajax_add_to_cart %s">
                            <span class="button__cart">%s</span>
                            <span class="button__loader h-rotatingNeuron">%s</span>
                            <span class="button__added">%s</span></a>',
                            esc_url( $product->add_to_cart_url() ),
                            esc_attr( $product->get_id() ),
                            esc_attr( $product->get_sku() ),
                            $product->is_purchasable() && $product->is_in_stock() ? 'd-flex align-items-center justify-content-center' : 'h-display-none',
                            esc_attr( $product->get_type() ),
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fa fa-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>',
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>',
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>'
                        ),
                    $product );

                    }?>
                    
                        
                </div><!--/.port-dbox-->
            </div><!--/.port-inner-->                
            
        </div><!--.port-item-->
        
        <?php endwhile;  ?>
        
                <!--pagination--> 
                <?php  
                if  ($page_show == 'yes' && $sort_cat  != 'yes' ) {  ?>
                <div class="pagi-box clearfix
                <?php
                        $destudio_taxonomy = 'product_cat';
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
        
        <div class="alert alert-warning"><?php _e('There is no Product Post Found. You need to  choose the product category to show or create at least 1 product post first.','avo-plg'); ?></div>
        <?php endif;  wp_reset_postdata();  ?>
                        
                        
    </div><!--/.product-body-->
</div>
<?php }; ?>