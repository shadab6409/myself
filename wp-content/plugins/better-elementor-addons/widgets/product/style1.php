<?php

//pagination
function better_pagination($pages = '', $range = 2){  
	$showitems = ($range * 2)+1;  

	global $paged;
	if(empty($paged)) { $paging = 1; } else { $paging = $paged; };

	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){$pages = 1;}
	}   

	if(1 != $pages){
		echo "<ul class='pagination'>";
		if($paging > 2 && $paging > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
		if($paging > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paging - 1)."'>&lsaquo;</a>";

		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paging+$range+1 || $i <= $paging-$range-1) || $pages <= $showitems )){
			  echo wp_kses_post($paging == $i)? "<li class='active'><a href='#' >".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
			} 
		}

		if ($paging < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paging + 1)."'>&rsaquo;</a></li>";  
		if ($paging < $pages-1 &&  $paging+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
		echo "</ul>\n";
	}
}

?>

<div class="better-product style-1">
    <?php if ( class_exists( 'WooCommerce' ) ) { ?>
        <div class="products-shop">
            <div class="topline">
                <div class="pagesviews better-valign">
                    <p>Showing all <?php echo $settings['product_item']; ?> results</p>
                </div>
                <?php
                $show_default_orderby    = 'menu_order' === apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
                $catalog_orderby_options = apply_filters( 'woocommerce_catalog_orderby', array(
                    'menu_order' => __( 'Default sorting', 'woocommerce' ),
                    'popularity' => __( 'Sort by popularity', 'woocommerce' ),
                    'rating'     => __( 'Sort by average rating', 'woocommerce' ),
                    'date'       => __( 'Sort by newness', 'woocommerce' ),
                    'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
                    'price-desc' => __( 'Sort by price: high to low', 'woocommerce' ),
                ) );
        
                $default_orderby = wc_get_loop_prop( 'is_search' ) ? 'relevance' : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
                $orderby         = isset( $_GET['orderby'] ) ? wc_clean( wp_unslash( $_GET['orderby'] ) ) : $default_orderby; // WPCS: sanitization ok, input var ok, CSRF ok.
        
                if ( 'no' === get_option( 'woocommerce_enable_review_rating' ) ) {
                    unset( $catalog_orderby_options['rating'] );
                }
        
                if ( ! array_key_exists( $orderby, $catalog_orderby_options ) ) {
                    $orderby = current( array_keys( $catalog_orderby_options ) );
                }
        
                ?>
                <form class="woocommerce-ordering" method="get">
                    <select name="orderby" class="orderby" aria-label="<?php esc_attr_e( 'Shop order', 'woocommerce' ); ?>">
                        <?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
                            <option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" name="paged" value="1" />
                    <?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
                </form>
            </div>

            <?php 
            $better_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            if ( $orderby == 'popularity') {
                $meta_key = 'total_sales';
                $order = 'DESC';
                $orderby_val = 'meta_value_num';
            }
            if ( $orderby == 'price') {
                $meta_key = '_price';
                $order = 'ASC';
                $orderby_val = 'meta_value_num';
            }
            if ( $orderby == 'price-desc') {
                $meta_key = '_price';
                $order = 'DESC';
                $orderby_val = 'meta_value_num';
            }
            if ( $orderby == 'date') {
                $meta_key = '';
                $order = 'DESC';
                $orderby_val = 'date';
            }
            if ( $orderby == 'rating') {
                $meta_key = '_wc_average_rating';
                $order = 'DESC';
                $orderby_val = 'meta_value_num';
            }else {
                $meta_key = '';
                $order = 'DESC';
                $orderby_val = 'date';
            }
            
            $loop = new \WP_Query(array(
                'posts_per_page'   => $settings['product_item'],
                'post_type' =>  'product', 'better-el-addons',
                'show_catalog_ordering' => 'yes',
                'orderby'                 => $orderby_val,
                'meta_key' => $meta_key,
                'order'       =>  $order
            )); 
            
            if ($loop->have_posts()) : while  ($loop->have_posts()) : $loop->the_post();
            global $post ;
            ?>

                <div class="float-left <?php if  ($settings['port_column'] == '3') {echo "col-md-4"; } else if  ($settings['port_column'] == '2') {echo "col-md-6"; } else  {echo "col-md-3"; } ?>">
                    <div class="item">
                        <div class="img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <?php
                            global $product;
                            $pid = $product->get_id();
                            ?>
                            <a href="<?php echo do_shortcode( '[add_to_cart_url id=' . $pid . ']' ) ?>" class="addcart">Add To Cart <span class="pe-7s-cart"></span></a>
                        </div>
                        <div class="cont">
                            <h6><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h6>
                            <div class="info">
                                <p>
                                    <?php $excerpt = get_the_excerpt();
                                    echo $excerpt; ?>
                                </p>
                            </div>
                            <div class="botm">
                                <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                                <h5 class="price"><?php echo wc_price( $price ); ?></h5>
                                <div class="tags">
                                    <?php
                                        foreach( wp_get_post_terms( get_the_id(), 'product_tag' ) as $term ){
                                            if( $term ){
                                                $term_link = get_term_link( $term );
                                                echo '<a href="' . esc_url( $term_link ) . '"> '. $term->name .'</a>'; // product category name
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;  ?>
                    
            <!--pagination--> 
            <?php  
            if  ($settings['page_show'] == 'yes' && $settings['sort_cat']  != 'yes' ) {  ?>

                <div class="pagi-box clearfix
                <?php
                    $destudio_taxonomy = 'product_cat';
                    $destudio_terms = get_terms($destudio_taxonomy); // Get all terms of a taxonomy
                    if ( $destudio_terms && !is_wp_error( $destudio_terms ) ) :
                        foreach ( $destudio_terms as $destudio_term ) { ?>
                                <?php echo  strtolower(preg_replace('/[^a-zA-Z]+/', '-', $destudio_term->name)); ?>
                            <?php } 
                    endif;?>">
                    <?php better_pagination($destudio_work->max_num_pages);  ?>
                </div>
                    
                <?php };
                    
            else: ?>
            
            <div class="alert alert-warning"><?php _e('There is no Product Post Found. You need to  choose the product category to show or create at least 1 product post first.','better-el-addons'); ?></div>
            <?php endif;  wp_reset_postdata();  ?>

        </div>
    <?php }; ?>

</div>